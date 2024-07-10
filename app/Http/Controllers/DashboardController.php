<?php
// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $user = auth()->user();
        $totalPosts = Post::where('user_id', $user->id)->count();

        return view('dashboard.index', compact('totalPosts'));
    }
}
