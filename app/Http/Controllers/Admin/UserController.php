<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function index()
    {
        $userList = DB::table('minfo')->paginate(10);
        /*foreach ($userList as $k=>$v){
            $name = str_random(6);
            $mid = $v['mid'];
            DB::table('minfo')->update("update minfo set name = $name where mid = $mid");
        }
        $user = DB::table('minfo')->paginate(10);*/
        return view('admin.index',['users'=>$userList]);
    }
}
