<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Illuminate\Support\Facades\Storage; 

class ProfileController extends Controller
{
    public function index(){
    $data = Post::where('user_id', Auth::id())->first();
    return view ('profilePage/index', compact('data'));
    }
}
