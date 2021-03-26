<?php

namespace App\Http\Controllers\api;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\api\ApiResponseController;

class PostController extends ApiResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('posts as p')
                    ->join('post_images as pi', 'pi.post_id', '=', 'p.id')
                    ->join('categories as c', 'c.id', '=', 'p.category_id')
                    ->select('p.*', 'c.title as category', 'pi.image')
                    ->orderBy('p.created_at', 'desc')->paginate(5);

        return $this->successResponse($posts);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {   
        $post->img;
        $post->category;
        return $this->successResponse($post);
    }

    public function posts_categories(Category $category)
    {
        
        return $this->successResponse([
            'posts-categories' => $category->posts()->paginate(5),
            'category' => $category
        ]);
    }

}
