<?php 


namespace App\Http\Controllers; // Khai báo vị trí của file này

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Dòng này để sửa lỗi "Undefined type DB"

use App\Http\Controllers\Controller; // "Nhập" lớp Controller gốc vào để sử dụng

class ViduLayoutController extends Controller
{
function sach()
{
$data = DB::select("select * from sach order by gia_ban asc limit 0,8");
return view("vidusach.index", compact("data"));
}
}
?>

