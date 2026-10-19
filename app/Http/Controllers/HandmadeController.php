<?php

namespace App\Http\Controllers;

use App\Models\Handmade;

class HandmadeController extends Controller
{
    
   
    
    public function index()
    {
        $search = request('search');
        $category = request('category');

        $handmades = Handmade::when($search, function ($query) use ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                ->orWhere('artisan', 'like', "%{$search}%")
                ->orWhere('material', 'like', "%{$search}%");
            });
        })
        ->when($category, function ($query) use ($category) {
            $query->where('category', $category);
        })
        ->latest()
        ->paginate(6)
        ->withQueryString();

        return view('handmade.index', compact(
            'handmades',
            'search',
            'category'
        ));
    }



    public function show($id)
    {
        $handmade = Handmade::findOrFail($id);

        return view('handmade.detail', compact('handmade'));
    }
}
