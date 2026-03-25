<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'Trang sách' }}</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        body{
            background:#f5f5f5;
        }

        /* MENU */
        .menu{
            background:#ff5850;
            padding:15px;
        }

        .menu ul{
            list-style:none;
            padding:0;
            margin:0;
        }

        .menu li{
            margin:10px 0;
        }

        .menu a{
            color:white;
            text-decoration:none;
            font-weight:bold;
        }

        /* GRID SÁCH */
        .list-book{
            display:grid;
            grid-template-columns:repeat(4, 1fr);
            gap:20px;
        }

        .book{
            text-align:center;
        }

        .book img{
            width:150px;
            height:220px;
            object-fit:cover;
        }

        .book a{
            text-decoration:none;
            color:black;
            font-weight:bold;
            display:block;
            margin-top:5px;
        }

        .book a:hover{
            color:#007bff;
        }

        .book i{
            display:block;
            margin-top:5px;
        }
    </style>
</head>

<body>

<!-- BANNER -->
<header style="text-align:center">
    <img src="{{ asset('anh/banner_sach.jpg') }}" width="1000px">
</header>
<<<<<<< HEAD
<main style="width:1000px; margin:2px auto;">
    <div class='row'>
        <div class='col-3 pr-0'>
            <x-menu>
                <x-slot name='item'>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('sach')}}">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('sach/theloai/1')}}">Tiểu thuyết</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('sach/theloai/2')}}">Truyện ngắn - tản văn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('sach/theloai/3')}}">Tác phẩm kinh điển</a>
                    </li>
                </x-slot>
            </x-menu>
            <img src="{{ asset('anh/sidebar_1.jpg') }}" width="100%" class="mt-1">
            <img src="{{ asset('anh/sidebar_2.jpg') }}" width="100%" class="mt-1">
=======

<!-- MAIN -->
<main style="width:1000px; margin:auto;">

    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-3 pr-0">

            <div class="menu">
                <ul>
                    <li><a href="/sach">Trang chủ</a></li>
                    <li><a href="#">Tiểu thuyết</a></li>
                    <li><a href="#">Truyện ngắn - tản văn</a></li>
                    <li><a href="#">Tác phẩm kinh điển</a></li>
                </ul>
            </div>

            <img src="{{ asset('anh/sidebar_1.jpg') }}" width="100%" class="mt-2">
            <img src="{{ asset('anh/sidebar_2.jpg') }}" width="100%" class="mt-2">

        </div>

        <!-- CONTENT -->
        <div class="col-9 pl-3">
            {{ $slot }}
        </div>

>>>>>>> remotes/origin/QuynhAnh
    </div>

</main>

</body>
</html>