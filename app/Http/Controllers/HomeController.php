<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Cerita_alumni;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Home"; // Definisi variabel $title

        // Ambil data post
        $posts = Post::all();

        // Tambahkan cuplikan singkat ke setiap post
        foreach ($posts as $post) {
            $post->short_excerpt = $post->getShortExcerpt();
        }

        // Ambil data cerita alumni
        $ceritaAlumnis = Cerita_alumni::all();

        return view('home', compact('title', 'posts', 'ceritaAlumnis'));
    }
}
