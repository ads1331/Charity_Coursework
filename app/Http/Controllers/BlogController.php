<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Carbon\Carbon; // Подключаем Carbon

class BlogController extends Controller
{
    public function index()
    {
        // Получаем блоги из БД
        $blogs = Blog::orderBy('published_at', 'desc')->get();

        // Преобразуем дату в Carbon
        foreach ($blogs as $blog) {
            $blog->published_at = Carbon::parse($blog->published_at);
        }

        return view('blogs.index', compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);

        // Преобразуем дату в Carbon
        $blog->published_at = Carbon::parse($blog->published_at);

        return view('blogs.show', compact('blog'));
    }
}
