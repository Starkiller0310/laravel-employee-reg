<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\employee;
use App\Http\Requests\employeeformrequest;


class employeeController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
        $users = employee::all();
        if (auth()->user()->role == 'admin'){
        return view('admin.admin',compact('users'));
        }
            return view ('admin.denied');
    }
        
    }

    public function edit($user_id)
    {
        $users= employee::find($user_id);
        return view('admin.edit',compact('users'));


    }
    public function update(employeeformrequest $request,$user_id)
    {
        $data = $request->validated();
        $users = employee::where('id',$user_id)->update([
          
            'name' => $data['name'],
            'email' => $data['email'],
            'age' => $data['age'],
            'dob' => $data['dob'],
            'employee_id' => $data['employee_id'],
            'stage' => $data['stage'],
            'city' => $data['city'],
            'education' => $data['education'],
            'degree' => $data['degree'],
            'experience' => $data['experience'],

        ]);
                return redirect('/admin')->with('message','Data Updated successfully');

    }
    public function delete($user_id)
    {
        $users = employee::find($user_id)->delete();
        return redirect('/admin')->with("info","Student Deleted Successfully");
    }

}
