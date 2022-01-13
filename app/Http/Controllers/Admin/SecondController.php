<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{

   public function __construct(){

    $this -> middleware( 'auth');
   }
   public function showString(){

   return ' second Controller';
   }
   public function showString1(){

      return ' second Controller1';
      }
      public function showString2(){

         return ' second Controller2';
         }
         public function showString3(){

            return ' second Controller4';
            }
}
