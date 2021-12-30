<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $data = User::where("name", $username)->where("password", hash("md5", $password))->get();
        return count($data) == 1 ? $data[0]->token : "ユーザーまたはパスワードが正しくありません";
    }
}
