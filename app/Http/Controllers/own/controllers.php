<?php

namespace App\Http\Controllers\own;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class controllers extends Controller
{
public function try(){
$data=[];
$data=['name'=>'mohammed','age'=>22,'university'=>'omdurman Islamic University'];

    return view('try',$data);
}
}
