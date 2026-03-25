<x-book-layout>

<x-slot name="title">Danh sách sách</x-slot>



<div class="list-book">

@foreach($data as $row)

<div class="book">

    <a href="{{ url('sach/chitiet/' . $row->id) }}">
        <img src="{{ $row->link_anh_bia }}">
    </a>

    <a href="{{ url('sach/chitiet/' . $row->id) }}">
        {{ $row->tieu_de }}
    </a>

    <i>{{ number_format($row->gia_ban, 0, ",", ".") }}đ</i>

</div>

@endforeach

</div>

</x-book-layout>