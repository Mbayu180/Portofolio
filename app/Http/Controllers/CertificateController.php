<?php

namespace App\Http\Controllers;

use App\Certificate;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::paginate(5);
        return view('contents.dashboard.certificates.index', compact('certificates'));
    }

    public function create()
    {
        return view('contents.dashboard.certificates.create');
    }

    public function store(Request $request)
    {
        $certificate= new Certificate();
        if (!empty($request)) {
            $certificate->name = $request->name;
            $certificate->description = $request->description;

            if (!empty($request->hasFile('image'))) {
                $file = $request->file('image');
                $imgExtension = $file->getClientOriginalExtension();
                $imgName = $request->name . "-" . Carbon::now()->format('d-m-Y');
                // Asd-28012022
                $imgFullName = $imgName . '.' . $imgExtension;
                // Asd-28012022.png
                $imgPath = 'img/certificates/';
                $file->move(public_path($imgPath), $imgFullName);
                $certificate->image = $imgFullName;
            }

            $certificate->save();
        }

        return redirect()->route('certificates.index');
    }

    public function show(Certificate $certificate)
    {
        return view('contents.dashboard.certificates.show', compact('certificate'));
    }

    public function edit(Certificate $certificate)
    {
        return view('contents.dashboard.certificates.edit', compact('certificate'));
    }

    public function update(Request $request, Certificate $certificate)
    {
        if (!empty($request->file('image'))) {
            // Delete Old File
            $oldImgPath = public_path() . '/img/certificates/' . $certificate->image;

            unlink($oldImgPath);

            // Update New File
            $file = $request->file('image');
            $imgExtension = $file->getClientOriginalExtension();
            $imgName = $request->name . "-" . Carbon::now()->format('d-m-Y');
            $imgFullName = $imgName . '.' . $imgExtension;
            $imgPath = 'img/certificates/';
            $file->move(public_path($imgPath), $imgFullName);
            $certificate->image = $imgFullName;

            // Merge Request Data
            $certificate->update([
                'name' => $request->name,
                'image' => $imgFullName,
                'description' => $request->description,
            ]);
        } else {
            $certificate->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);
        }

        return redirect()->route('certificates.index');
    }

    public function destroy(Certificate $certificate)
    {
        // Delete File
        $imgPath = public_path() . '/img/certificates/' . $certificate->image;
        unlink($imgPath);

        // Delete Data
        $certificate->delete();

        return redirect()->route('certificates.index');
    }
}
