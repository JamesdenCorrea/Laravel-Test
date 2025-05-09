<?php

namespace App\Http\Controllers;

use App\Models\Post; // Import the Post model
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // For regular users
    public function index()
    {
        $posts = Post::where('user_id', auth()->id())->get(); // Get posts of the logged-in user
        return view('dashboard', compact('posts'));
    }
    
    // For admins
    public function admin()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('dashboard');
        }

        return view('admin.dashboard');
    }
}
