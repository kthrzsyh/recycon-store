<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data['categories'] = Categories::all();
        $data['title'] = 'Category';
        return view('admin.category', $data)->with('no', 1);
    }

    public function add()
    {
        $data['title'] = 'Add Category';
        return view('admin.category_add', $data);
    }

    public function store(Request $request)
    {
        $category = Categories::create([
            'category_name' => $request->category_name
        ]);

        return redirect()->route('category.index')->with('status', 'Tambah Data Berhasil');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Category';
        $data['category'] = Categories::find($id);
        return view('admin.category_edit', $data);
    }

    public function update(Request $request)
    {
        // dd($request->id);
        Categories::where('id', $request->id)->update([
            'category_name' => $request->category_name
        ]);

        return redirect()->route('category.index')->with('status', 'Edit Data Berhasil');
    }

    public function delete($id)
    {
        $category = Categories::find($id);
        $category->delete();
        return redirect()->route('category.index')->with('status', 'Hapus Data Berhasil');
    }
}
