<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ViduLayoutController extends Controller
{
    function sach()
    {
        $data = DB::select("select * from sach order by gia_ban asc limit 0,8");
        return view("vidusach.index", compact("data"));
    }

    public function chitiet($id)
    {
        $book = DB::select("select * from sach where id = ?", [$id]);

        if (empty($book)) {
            abort(404);
        }

        $book = $book[0];

        return view('vidusach.chitiet', compact('book'));
    }
}