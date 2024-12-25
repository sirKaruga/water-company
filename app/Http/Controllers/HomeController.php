<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Career;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $blogs = Blog::all();
        $services = Service::all();
        $products = Project::all();
        $projects = Project::all();
        $careers = Career::all();

        $user = Auth::user();
        if (!$user) {
            return redirect('login')->with('error', 'You must be logged in!');
        }
        return view('welcome', compact('blogs','services', 'products', 'projects', 'careers', 'user'));
    }
}


