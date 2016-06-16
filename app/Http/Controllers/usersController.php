<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
Use App\Http\Controllers\DB;
class usersController extends Controller
{
    public function index()
    {

		$users = User::all();

    	return view('admin.Users.index',Compact('users'));
    }

    public function activate ($id)
    {
    	User::where('id',intval($id))->update(['isActive'=>1]);
    	//DB::update('update users set isActive = 1 where id = ?', [intval($id)]);
		return redirect('admin/users/');

    }
    public function destroy($id)
    {

		User::where('id',intval($id))->delete();

         return redirect('admin/users/');

    }
     public function edit($id)
    {
		$user = User::findOrfail($id);

		return view('admin.Users.edit',compact('user'));

    }
    public function update(Request $request,$id )
    {
        //return $id;
        //User::where
        //return $request->all();
        User::findOrfail($id)->update($request->all());
        return redirect('/admin/users/');

    }
    public function create()
    {

		return view('admin.Users.create');

    }
    public function show($id)
    {

		//return view('admin.Users.create');

    }

}
