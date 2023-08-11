<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contents.users',[
            "title" => "users",
            "users" => User::all(),
            "posts" => Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contents.create',[
            "title" => "users create",]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "email" => 'unique:users,email|required',
            "name" => 'required|max:100|min:5',
            "password" => 'required|max:255|min:5'
        ]);
        
        User::create($validatedData);

        return redirect('/users')->with('success', 'berhasil tambah data');
    } 

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('contents.show',[
            "title" => "users show",
            "user" => User::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('contents.edit',[
            "title" => "users edit",
            "user" => User::find($id)]);

            
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $user = User::find($id);
        
        $validatedData = $request->validate([
            "email" => 'unique:users,email|required',
            "name" => 'required|max:100|min:5'
        ]);

        $user->update($validatedData);
        return redirect('users/' . $id . '/edit')->with('success', 'berhasil ubah data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
