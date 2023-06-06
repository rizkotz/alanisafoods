<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        //return view('barangMasuk');
        return view('posts.barangMasuk', compact('posts'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('posts.tambahBarang');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama'     => 'required|min:3',
            'merek'     => 'required|min:2',
            'jumlah'   => 'required|min:1',
            'jenis'    => 'required|min:3',
            'keterangan' => 'required|min:4'
        ]);

        //create post
        Post::create([
            'nama'     => $request->nama,
            'merek'     => $request->merek,
            'jumlah'   => $request->jumlah,
            'jenis'    => $request->jenis,
            'keterangan' => $request->keterangan
        ]);

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
