<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Career;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{


    public function index()
    {
        $blogs = Blog::all();
        $services = Service::all();
        $products = Product::all();
        $projects = Project::all();
        $careers = Career::all();

        $user = Auth::user();
        if (!$user) {
            return redirect('login')->with('error', 'You must be logged in!');
        }
        return view('welcome', compact('blogs','services', 'products', 'projects', 'careers', 'user'));
    }

    public function web_home(){
        return view('web_home');
    }

    public function contact(){
        return view('web_contacts');
    }

     public function web_pruducts(){
        $products = Product::all();
        // dd($products);
        return view('web_products', compact('products'));
    }
    public function show_product($id) {
        $product = Product::findOrFail($id);
        // dd($blog);
        return view('view_product', compact('product'));
    }
    public function web_blog(){
        $blogs = Blog::all();
//
        return view('web_blog', compact('blogs'));
    }
     public function web_career(){
        $careers = Career::all();
        // dd($careers);
        return view('web_careers', compact( 'careers'));
     }
     public function career_show($id) {
        $career = Career::findOrFail($id);
        // dd($career);
        return view('career_show', compact('career'));
    }
    public function show_blog($id) {
        $blog = Blog::findOrFail($id);
        // dd($blog);
        return view('blog_show', compact('blog'));
    }
    public function services(){
        $blogs = Blog::all();
        $services = Service::all();
        $products = Product::all();
        $projects = Project::all();
        $careers = Career::all();
        return view('index', compact('blogs','services', 'products', 'projects', 'careers', 'user'));
    }

    public function about(){
        $blogs = Blog::all();
        $services = Service::all();
        $products = Product::all();
        $projects = Project::all();
        $careers = Career::all();
        return view('index', compact('blogs','services', 'products', 'projects', 'careers', 'user'));
    }



    public function faq(){
        $blogs = Blog::all();
        $services = Service::all();
        $products = Product::all();
        $projects = Project::all();
        $careers = Career::all();
        return view('index');
    }


}


