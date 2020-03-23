<?php

namespace App\Http\Controllers\Admin\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UserAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $accounts = User::with('roles')->get();
        // dd($accounts);
        return view('admin.accounts.index')->with(['accounts'=>$accounts,'roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userRole = Role::where('code','USR')->first();
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'user_id' => $request['user_id']
        ]);

        $user->roles()->sync($userRole);

        return redirect()->route('admin.users.show',$request['user_id'])->with('status_account','User login account added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roles = Role::all();
        $account = User::with('roles')->where('id',$id)->get();
        return view('admin.accounts.show')->with(['account'=>$account,'roles'=>$roles]);
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
        
        $account = User::find($id);
        $account->name = $request['name'];
        $account->email = $request['email'];
        $account->update();
        if(!empty($request->roles))
        {
            $account->roles()->sync($request->roles);
            return redirect()->route('admin.account.index')->with('status','User account updated successfully');
        }
        return redirect()->route('admin.users.show',$request['user_id'])->with('status_account','User account updated successfully');
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
    }
}
