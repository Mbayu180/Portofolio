<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::paginate(5);
        return view('contents.dashboard.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        return view('contents.dashboard.portfolios.create');
    }

    public function store(Request $request)
    {
        $portfolio= new Portfolio();
        if (!empty($request)) {
            $portfolio->name = $request->name;
            $portfolio->description = $request->description;

            if (!empty($request->hasFile('image'))) {
                $file = $request->file('image');
                $imgExtension = $file->getClientOriginalExtension();
                $imgName = $request->name . "-" . Carbon::now()->format('d-m-Y');
                // Asd-28012022
                $imgFullName = $imgName . '.' . $imgExtension;
                // Asd-28012022.png
                $imgPath = 'img/portfolios/';
                $file->move(public_path($imgPath), $imgFullName);
                $portfolio->image = $imgFullName;
            }

            $portfolio->save();
        }

        return redirect()->route('portfolios.index');
    }

    public function show(Portfolio $portfolio)
    {
        return view('contents.dashboard.portfolios.show', compact('portfolio'));
    }

    public function edit(Portfolio $portfolio)
    {
        return view('contents.dashboard.portfolios.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        if (!empty($request->file('image'))) {
            // Delete Old File
            $oldImgPath = public_path() . '/img/portfolios/' . $portfolio->image;

            unlink($oldImgPath);

            // Update New File
            $file = $request->file('image');
            $imgExtension = $file->getClientOriginalExtension();
            $imgName = $request->name . "-" . Carbon::now()->format('d-m-Y');
            $imgFullName = $imgName . '.' . $imgExtension;
            $imgPath = 'img/portfolios/';
            $file->move(public_path($imgPath), $imgFullName);
            $portfolio->image = $imgFullName;

            // Merge Request Data
            $portfolio->update([
                'name' => $request->name,
                'image' => $imgFullName,
                'description' => $request->description,
            ]);
        } else {
            $portfolio->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);
        }

        return redirect()->route('portfolios.index');
    }

    public function destroy(Portfolio $portfolio)
    {
        // Delete File
        $imgPath = public_path() . '/img/portfolios/' . $portfolio->image;
        unlink($imgPath);

        // Delete Data
        $portfolio->delete();

        return redirect()->route('portfolios.index');
    }
}
