<?php

<<<<<<< HEAD
namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Http\Controllers\Controller; 
=======
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
>>>>>>> remotes/origin/QuynhAnh

class ViduLayoutController extends Controller
{
    function sach()
    {
<<<<<<< HEAD
        // Lấy 8 cuốn sách rẻ nhất
        $data = DB::select("select * from sach order by gia_ban asc limit 0,8");
        
        $theloai = DB::select("select * from dm_the_loai"); 

        return view("vidusach.index", compact("data", "theloai"));
    }

    function theloai($id)
    {
        $data = DB::select("select * from sach where the_loai = ?", [$id]);
        
        $theloai = DB::select("select * from dm_the_loai");

        return view("vidusach.index", compact("data", "theloai"));
    }
}
?>
=======
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
>>>>>>> remotes/origin/QuynhAnh
