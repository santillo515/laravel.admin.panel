<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserBaseControLogout extends Controller
{
    public function getlogout()
     {
         \Auth::logout();
         return redirect('/');
     }

}
