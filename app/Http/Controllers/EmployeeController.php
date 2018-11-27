<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\employees;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $employees = DB::table('employees')->get();
        $employees = employees::all();
        // foreach($employees as $emp) {
        //   echo $emp->fname;
        // }
        return view('crud.index', compact('employees'))
        ->with([
          'title' => 'CRUD Training',
          'subtitle' => 'Introduction CRUD'
        ]);

        /*return view('crud.index', ['employees' => $employees])
        ->with([
          'title' => 'CRUD Training',
          'subtitle' => 'Introduction CRUD'
        ]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.create')
        ->with([
          'title' => 'CRUD Training',
          'subtitle' => 'Introduction CRUD'
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
        $employees = new employees([
          'fname' => $request->fname,
          'lname' => $request->lname,
          'email' => $request->email
        ]);
        $employees->save();
        return redirect('/crud');
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
        $employees = employees::find($id);
        // DB::select('select * from employees where id = ?', [$id]);
        return view('crud.edit',compact('employees','id'))
        ->with([
          'title' => 'CRUD Training',
          'subtitle' => 'Introduction CRUD'
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
        // DB::update('update employees set fname=?, lname=?, email=? where id = ?',
        // array($request->fname, $request->lname, $request->email, $id));
        // return redirect('/crud');

        $employees = employees::find($id);
        $employees->fname = $request->fname;
        $employees->lname = $request->lname;
        $employees->email = $request->email;
        $employees->save();
        return redirect('/crud');
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
        $employees = employees::find($id);
        $employees->delete();
        return redirect('/crud');
    }

}
