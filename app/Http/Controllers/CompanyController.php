<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Company;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Illuminate\Support\Facades\Storage; 

class CompanyController extends Controller
{
    // public function index()
    // {
    //     //get posts
    //     $company = Company::latest()->paginate(5);

    //     //render view with posts
    //     return view('profileSetting.index', compact('posts'));
    // }

    // public function store(Request $request){
    //     // $name = $request->
    //     // $request->file('image')->storeAs('public/images/', $name)
    //     // dd($request->all());
        
    //     $add = array(
    //         "displayname" => $request->frontName . $request->backName,
    //         "displaylocation" => $request->province . ", " . $request->country
    //     );
    //     // DB::table('profile')->select(['user_id'], '=', $uid)->get();
            
    //     $user = $request ->user(); //(Auth::user()->name);
    //     $formData =$request->all();
    //     $uid = Auth::id();

    //     $target = Post::where('user_id', Auth::id())->get();
    //     dd($target);




    //     // dd($target = Post::where('user_id', '=', Auth::id())->get());
    //     // DB::table('profile')->select($target)->get();
    
    //     // dd(DB::table('profile')->select(['user_id'], '=', $uid)->get());
    //     $formData = array_merge($add,$formData);
    //     // DB::table('profile')->select(['user_id'], '=', $uid)->delete();
    //    // $user->posts()->create($formData);
    //     // dd(count($target));
              //validate form
        // $this->validate($request, [
        //     'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'title'     => 'required|min:5',
        //     'content'   => 'required|min:10'
        // ]);
            // dd($post);
        //check if image is uploaded

    

    public function update(Request $request, Company $company)
    {
        $company = Company::where('user_id', Auth::id())->first();
        // $add = array(
        //     "displayname" => $request->frontName . $request->backName,
        //     "displaylocation" => $request->province . ", " . $request->country
        // );// $formData = array_merge($add,$formData);

            //update post without image

        // if (is_null($company)) {
        //     $company->update([
        //         'companyname'     => $request->companyname,
        //         'companyrank'   => $request->companyrank,
        //         'companyserve'   => $request->companyserve,
        //         'companydeco'   => $request->companydeco,
        //         'desc'   => $request->desc,
        //     ]);
        // }
        // else { $company =
             Company::create([
                'user_id'   => auth()->id(),
                'companyname'     => $request->companyname,
                'companyrank'   => $request->companyrank,
                'companyserve'   => $request->companyserve,
                'companydeco'   => $request->companydeco,
                'desc'   => $request->desc,
            ]);
        }
    }
    

        // public function index(){
        //     $id = Auth::id();
        //     $data = Post::where('user_id', Auth::id())->first();
             
            
        // }


