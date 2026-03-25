<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'Trang sách' }}</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        .navbar {
    background-color: #ff5850;
    font-weight:bold;
    }
    .nav-item a {
    color: #fff!important;
    }
    .navbar-nav {
    margin:0 auto;
    }
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
            grid-template-columns:repeat(4, 24%);
            gap:20px;
        }

        .book{
            margin:10px;
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
        </div>

        <!-- CONTENT -->
        <div class="col-9 pl-3">
            {{ $slot }}
        </div>
    </div>

</main>

</body>
</html>