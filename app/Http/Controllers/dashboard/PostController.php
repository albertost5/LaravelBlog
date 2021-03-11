<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        // $posts = Post::orderBy('created_at', 'desc')->get();
        // dd($posts);

        return view('dashboard.post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('prueba');
        return view('dashboard.post.create', ['p' => new Post(), 'categories' => Category::pluck('id', 'title')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        // DOS FORMAS DE UTILIZAR EL REQUEST:
        //  $request->input('name');
        // $request->name;

        // $title = $request->title;
        // $url = $request->input('url');
        // $content = $request->input('contet');

        // echo dd($request->all());

        // $request->validate([
        // para evitar esta forma de validación existe la validación del formulario mediante un php artisan make:request StoreClassNameRequest
        // ]);
        Post::create($request->validated());

        return back()->with('status', 'Post creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // El método findOrFail muestra un error 404 en caso de que no exista el parámetro pasado mediante la ruta.
        // $post = Post::findOrFail($id);
        // dd($post);

        return view('dashboard.post.show', ['p' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id', 'title');
        return view('dashboard.post.edit', ['p' => $post, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, Post $post)
    {
        $post->update($request->validated());

        return back()->with('status', 'Post actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('status', 'Post eliminado con éxito');
    }
}
