
<x-book-layout>

<x-slot name="title">Chi tiết sách</x-slot>

<div style="display:flex; gap:40px; margin:20px">

    <!-- ẢNH (FIX KHÔNG BỊ MÉO) -->
    <img src="{{ $book->link_anh_bia }}" 
         style="width:250px; height:350px; object-fit:cover; border-radius:10px;">

    <!-- THÔNG TIN -->
    <div>

        <h2>{{ $book->tieu_de }}</h2>

        <p><b>Tác giả:</b> {{ $book->tac_gia }}</p>

        <p><b>Nhà xuất bản:</b> {{ $book->nha_xuat_ban }}</p>

        <p><b>Giá:</b> {{ number_format($book->gia_ban, 0, ",", ".") }}đ</p>

        <p style="margin-top:15px;">
            {{ $book->mo_ta }}
        </p>

        <br>

        <a href="/sach" style="text-decoration:none; color:blue;">
            ← Quay lại
        </a>

    </div>

</div>

</x-book-layout>