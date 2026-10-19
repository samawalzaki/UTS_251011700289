<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Handmade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HandmadeAdminController extends Controller
{
    public function index()
    {
        $handmades = Handmade::latest()->get();

        $totalProduk = Handmade::count();

        $totalKategori = Handmade::distinct('category')
            ->count('category');

        $totalPengrajin = Handmade::distinct('artisan')
            ->count('artisan');

        return view('admin.handmade.index', compact(
            'handmades',
            'totalProduk',
            'totalKategori',
            'totalPengrajin'
        ));
    }

    public function create()
    {
        return view('admin.handmade.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'artisan' => 'required',
            'price' => 'required|numeric',
            'material' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'required',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(
            public_path('assets/images'),
            $imageName
        );

        Handmade::create([
            'name' => $request->name,
            'artisan' => $request->artisan,
            'price' => $request->price,
            'material' => $request->material,
            'category' => $request->category,
            'image' => $imageName,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.handmade.index')
            ->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit(Handmade $handmade)
    {
        return view('admin.handmade.edit', compact('handmade'));
    }

    public function update(Request $request, Handmade $handmade)
    {
        $request->validate([
            'name' => 'required',
            'artisan' => 'required',
            'price' => 'required|numeric',
            'material' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'required',
        ]);

        $imageName = $handmade->image;

        if ($request->hasFile('image')) {
            $oldImage = public_path('assets/images/' . $handmade->image);

            if (File::exists($oldImage)) {
                File::delete($oldImage);
            }

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(
                public_path('assets/images'),
                $imageName
            );
        }

        $handmade->update([
            'name' => $request->name,
            'artisan' => $request->artisan,
            'price' => $request->price,
            'material' => $request->material,
            'category' => $request->category,
            'image' => $imageName,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.handmade.index')
            ->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy(Handmade $handmade)
    {
        $image = public_path('assets/images/' . $handmade->image);

        if (File::exists($image)) {
            File::delete($image);
        }

        $handmade->delete();

        return redirect()->route('admin.handmade.index')
            ->with('success', 'Produk berhasil dihapus!');
    }
}
