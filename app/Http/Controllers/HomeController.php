<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

//         $user = $request->user();
// dd($user->hasRole('developer')); //will return true, if user has role
// dd($user->givePermissionsTo('create-tasks'));// will return permission, if not null
// dd($user->can('create-tasks')); // will return true, if user has permission

        // @role('developer')

        //  Hello developer

        // @endrole

       // dd(Auth::user()->can('create-tasks'));
        return view('home');
    }
}
/*
public function __construct()
{
   $this->middleware('auth'); 
}


public function store(Request $request)
{
    if ($request->user()->can('create-tasks')) {
        //Code goes here
    }
}

public function destroy(Request $request, $id)
{   
    if ($request->user()->can('delete-tasks')) {
      //Code goes here
    }

}
*/
