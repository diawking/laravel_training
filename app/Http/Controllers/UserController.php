<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::paginate(5);
        // foreach($employees as $emp) {
        //   echo $emp->fname;
        // }
        return view('users.index', compact('users'))
        ->with([
          'title' => 'Users List',
          'subtitle' => 'Introduction Laravel'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create')
        ->with([
          'title' => 'Create New User',
          'subtitle' => 'Introduction Laravel'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $users = new User([
          'name' => $request->name,
          'email' => $request->email,
          'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'
        ]);
        $users->save();
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $users = User::find($id);
        if (empty($users))
          abort(404);
        // foreach($employees as $emp) {
        //   echo $emp->fname;
        // }
        return view('users.show', compact('users'))
        ->with([
          'title' => 'User Detail',
          'subtitle' => 'Introduction Laravel'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $users = User::find($id);
        if (empty($users))
          abort(404);
        // DB::select('select * from employees where id = ?', [$id]);
        return view('users.edit',compact('users','id'))
        ->with([
          'title' => 'Update User Detail',
          'subtitle' => 'Introduction Laravel'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->save();
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $users = User::find($id);
        $users->delete();
        return redirect('/users');
    }
}
