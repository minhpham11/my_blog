<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// function SX () {
//     $array1 = [ 3, 2, 1, 4, 8, 6, 5, 13, 16 ];
//     for ($i = 0 ; $i < count($array1); $i ++) {
//         for ($j = $i + 1; $j < count($array1); $j ++) {
//             $tmp = 0;
//             if($array1[$i] < $array1[$j]) {
//                 $tmp = $array1[$i];
//                 $array1[$i] = $array1[$j];
//                 $array1[$j] = $tmp;
//             }
//         }
//     }

//     return $array1;
// }

Route::get('/', function () {
    // var_dump(SX());die;
    return view('welcome');
});
