<?php

namespace App\Http\Controllers;

use App\ChatUser;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('forusers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $firstname=$request->firstname;
        //dd($request->all());
        $lastname=$request->lastname;
        $username=$request->username;
        $email=$request->email;
        $password=$request->password;
        $password=md5($password);
        $newuser = ChatUser::create(['firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email,  'username'=>$username,'pw'=>$password]);
    
        return "hello";
    }
    public function login(Request $request){
        $username=$request->username;
        $password=$request->password;
        $password=md5($password);

        $chatter = ChatUser::where('username',$username)->where('pw', $password)->first();
        dd($chatter);

        return "blah";



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
