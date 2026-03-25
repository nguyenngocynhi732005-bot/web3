<x-book-layout>
    <x-slot name="title">
        Sách
    </x-slot>
    
    <div class="category-menu" style="margin-bottom: 20px; padding: 10px; background: #f8f9fa;">
        <strong>Danh mục: </strong>
        <a href="{{ url('/sach') }}" style="margin-right: 15px; text-decoration: none;">Tất cả sách</a>
        
        @foreach($theloai as $tl)
            <a href="{{ url('/sach/theloai/' . $tl->id) }}" style="margin-right: 15px; text-decoration: none;">
                {{ $tl->ten_the_loai }}
            </a>
        @endforeach
    </div>
    <div class='list-book'>
        @foreach($data as $row)
        <div class='book'>
            
            <img src="{{$row->link_anh_bia }}" width='200px' height='200px'>
            <br>
            <a href="{{ url('sach/chitiet/' . $row->id) }}">
            <b>{{ $row->tieu_de }}</b>
        </a>
            <br/>
            <i>{{ number_format($row->gia_ban, 0, ",", ".") }}đ</i>
        </div>
        @endforeach
    </div>
</x-book-layout>