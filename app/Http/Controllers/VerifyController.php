<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class VerifyController extends Controller
{
    /**
		* verify the user with a given token
		*
		*@param string $token
		*@return Response

    */

    public function verify($token){
    	User::where('token',$token)->firstOrFail()

    	->update(['token'=>null]);//verify the user

    	return redirect()

    	->route('home')
    	->whith('success', 'Acount Verified!'); 
    }
}
