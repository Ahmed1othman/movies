<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Rules\ChechOldPassword;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function edit()
    {
        return view('admin.profile.password.edit');

    }// end of getChangePassword

    public function update(Request $request)
    {
        $request->validate([
            'old_password' => ['required', new ChechOldPassword],
            'password' => 'required|confirmed'
        ]);

        $request->merge(['password' =>$request->password]);

        auth()->user()->update($request->all());

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('admin.home');

    }// end of postChangePassword

}//end of controller
