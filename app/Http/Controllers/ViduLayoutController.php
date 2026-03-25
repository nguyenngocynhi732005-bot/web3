<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ViduLayoutController extends Controller
{
    function trang1()
    {
        return view("vidulayout.trang1");
    }

    function sach()
    {
        // Truy vấn 8 cuốn sách có giá bán thấp nhất
        $data = DB::select("select * from sach order by gia_ban asc limit 0,8");
        // Trả về view index và truyền biến data sang
        return view("vidusach.index", compact("data"));
    }

    // Hàm hiển thị sách theo thể loại
    function theloai($id)
    {
        // Truy vấn sách dựa trên ID thể loại được truyền từ URL
        $data = DB::select("select * from sach where id_the_loai = ?", [$id]);
        return view("vidusach.index", compact("data"));
    }
    public function chitiet($id)
    {
        $book = DB::table('sach')->where('id', $id)->first();
        return view("vidusach.chitiet", compact("book"));
    }
}
