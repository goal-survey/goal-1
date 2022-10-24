<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function getUsers()
    {
        $usersArr =   User::where('role', 'user')->get();

        $infoArr = info::all();

        return view('admin.dashboard', ['usersArr' => $usersArr, 'infoArr' => $infoArr]);
    }


    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();
        return redirect('admin/dashboard');
    }



    public function getOwners()
    {
        // $user = Auth::user();
        $ownersArr =  User::where('role', 'owner')->get();        
        
        // $infoArr = info::where('user_id')->get();

        return view('admin.owners', ['ownersArr' => $ownersArr]);
    }

}
