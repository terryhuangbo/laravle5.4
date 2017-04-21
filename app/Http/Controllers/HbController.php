<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psr\Http\Message\ServerRequestInterface;
use Illuminate\Support\Facades\DB;

class HbController extends Controller
{
    public function info(Request $request, $id = 123)
    {
        $users = DB::select('select * from users where active = ?', [1]);
        $results = DB::select('select * from users where id = :id', ['id' => 1]);
        dd($users);
        return response('Hello World')->cookie(
            'name1', 'value', 600
        );
    }

    public function json(Request $request)
    {
        return json_encode([
            'code' => 200,
            'msg' => 'success',
        ]);
    }
}
