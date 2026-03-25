@extends('layouts.app')

@section('content')

<h2>Danh sách các thể loại phim</h2>

<table class="main-table">
    <tr>
        <th style="width: 10%;">STT</th>
        <th>Tên thể loại (Tiếng Anh)</th>
        <th>Tên thể loại (Tiếng Việt)</th>
    </tr>
    </thead>
    <tbody>
        @foreach($genres as $index => $genre)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td><strong>{{ $genre->genre_name }}</strong></td>
            <td>{{ $genre->genre_name_vn }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<div style="margin-top: 20px;">
    <a href="{{ url('/') }}" style="text-decoration: none; color: #007bff;">← Quay lại trang chủ</a>
</div>

@endsection