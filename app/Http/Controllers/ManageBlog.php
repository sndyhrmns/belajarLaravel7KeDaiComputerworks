<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Str;
use Auth;

class ManageBlog extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Blog::orderBy('created_at', 'desc')->paginate(4);
        return view('admin.index', ['data' => $data]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    { 
        $data = new Blog;
        $data->judul    = $request->judul;
        $data->isi      = $request->isi;
        $data->slug     = Str::slug($request->judul, '-');
        $data->user_id  = Auth::user()->id; 

        $gambar = $request->file('foto');
        if ($gambar){
            $gambar_path = $gambar->store('gambar', 'public');
            $data->foto = $gambar_path;
        }
        $data->save();

        return redirect('manage-blog');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
