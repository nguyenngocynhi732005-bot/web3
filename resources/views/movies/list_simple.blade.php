@extends('layouts.app')

@section('content')
<h2>{{ $title }}</h2>

<table class="main-table">
    <thead>
        <tr>
            <th style="width: 8%;">STT</th>
            <th>Tên bộ phim</th>
            <th>Ngày phát hành</th>
            <th class="text-right">
                @if($type == 'budget')
                Doanh thu (USD)
                @elseif($type == 'vote')
                Điểm bình chọn
                @else
                Thời lượng (phút)
                @endif
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($movies as $index => $movie)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td><strong>{{ $movie->movie_name }}</strong></td>
            <td>{{ $movie->release_date }}</td>
            <td class="text-right">
                <span class="badge">
                    @if($type == 'budget')
                    {{ number_format($movie->budget) }} $
                    @elseif($type == 'vote')
                    {{ $movie->vote_average }} / 10
                    @else
                    {{ $movie->runtime }} phút
                    @endif
                </span>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div style="margin-top: 25px;">
    <a href="{{ url('/') }}" style="text-decoration: none; color: #007bff;">← Quay lại danh sách chính</a>
</div>

@endsection }}