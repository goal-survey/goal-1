<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;
use Illuminate\Support\Facades\Auth;
use Psy\CodeCleaner\UseStatementPass;

class infoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all user table data
        $user = Auth::user();

        // get all info table data
        $info = info::where('user_id', $user->id)->get();

        return view('profile', ['user' => $user, 'info' => $info[0]]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info = new Info;
        $request->validate([
            'age' => ['required', 'string', 'max:255'],
            'edu_level' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
        ]);
        $info->age = $request->age;
        $info->edu_level = $request->edu_level;
        $info->city = $request->city;
        $info->user_id = Auth::user()->id;
        $info->save();
        return redirect('/');
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\info  $info
     * @return \Illuminate\Http\Response
     */
    public function show(info $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($info);
        // get all user table data
        $user = User::find($id);
        // get all info table data
        $info = info::where('user_id', $user->id)->get();

        return view('editprofile', ['user' => $user, 'info' => $info[0]]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        User::where('id', $id)->update([
            "name" => $request->name,
            "email" => $request->email,
        ]);

        info::where('user_id', $id)->update([
            "age" => $request->age,
            "edu_level" => $request->edu_level,
            "city" => $request->city
        ]);

        return redirect('/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\info  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy(info $info)
    {
        //
    }
}
