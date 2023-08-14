<?php

namespace App\Http\Controllers\Admin\categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\CategoryRequest;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.categorie.index', [
            'categories' => Category::orderBy('created_at', 'asc')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $category = new Category();
        return view('admin.categorie.form', [
            'category' => $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        //
        $category = Category::created($request->validated());
        return to_route('admin.categorie.index')->with('success', 'Categorie a bien étet ajouté');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
            return view('admin.categorie.form', [
                'category' => $category

            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
