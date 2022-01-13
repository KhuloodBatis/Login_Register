<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;


class UserController extends Controller
 {
    public function showUserName(){
    return 'koolfzr';
    }

    public function getIndex(){
//       $data=[];
//          $data['id']=5;
//          $data['name']='kool batis';

//         $obj = new \stdClass();
//
//         $obj -> name = 'kool Batis ';
//         $obj -> id = 5;
//         $obj -> gender = 'female';
      //  return view('welcome')-> with( 'name','omer Batis');
  $data =['kool', 'noor'];

  return view('welcome',compact('data'));

    }
}
