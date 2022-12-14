<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Illuminate\Support\Facades\Storage; 

class PhotoController extends Controller
{
    public function index()
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('profileSetting.index', compact('posts'));
    }

    public function store(Request $request){
        // $name = $request->
        // $request->file('image')->storeAs('public/images/', $name)
        // dd($request->all());
        
        $add = array(
            "displayname" => $request->frontName . $request->backName,
            "displaylocation" => $request->province . ", " . $request->country
        );
        // DB::table('profile')->select(['user_id'], '=', $uid)->get();
            
        $user = $request ->user(); //(Auth::user()->name);
        $formData =$request->all();
        $uid = Auth::id();

        $target = Post::where('user_id', Auth::id())->get();
        dd($target);




        // dd($target = Post::where('user_id', '=', Auth::id())->get());
        // DB::table('profile')->select($target)->get();
    
        // dd(DB::table('profile')->select(['user_id'], '=', $uid)->get());
        $formData = array_merge($add,$formData);
        // DB::table('profile')->select(['user_id'], '=', $uid)->delete();
       // $user->posts()->create($formData);
        // dd(count($target));
        

    }

    public function update(Request $request, Post $post)
    {
        $post = Post::where('user_id', Auth::id())->first();
        $add = array(
            "displayname" => $request->frontName . $request->backName,
            "displaylocation" => $request->province . ", " . $request->country
        );
        $formData =$request->all();
        $formData = array_merge($add,$formData);
        //validate form
        // $this->validate($request, [
        //     'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'title'     => 'required|min:5',
        //     'content'   => 'required|min:10'
        // ]);
            // dd($post);
        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/'.$post->image);

            //update post with new image
            $post->update([
                'image'     => $image->hashName(),

            ]);

        } else {
            // dd($post);
            //update post without image
            if (!is_null($post)) {
            $post->update([
                'displayname'     => ($request->frontName) . ($request->backName),
                'displayemail'   => $request->displayemail,
                'displayphone'   => $request->displayphone,
                'displaycompany'   => $request->displaycompany,
                'displaycompanypostition'   => $request->displaycompanypostition,
                'displaylocation'   => ($request->province) . ($request->coutry)
            ]);
        }
        else { 
            $post = Post::create([
                'user_id'   => auth()->id(),
                'displayname'     => ($request->frontName) . ($request->backName),
                'displayemail'   => $request->displayemail,
                'displayphone'   => $request->displayphone,
                'displaycompany'   => $request->displaycompany,
                'displaycompanypostition'   => $request->displaycompanypostition,
                'displaylocation'   => ($request->province) . ($request->coutry),
            ]);
        }
    }

}
        public function show($extradata){
            $id = Auth::id();
            $data = Post::where('user_id', Auth::id())->first();
            
            
        }
}

