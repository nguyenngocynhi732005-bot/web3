<!DOCTYPE hml>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* 1. Đổ màu đỏ cho thanh Menu */
        .navbar {
            background-color: #ff5850;
            /* Màu đỏ cam giống ảnh mẫu */
            font-weight: bold;
            padding: 0;
            /* Loại bỏ khoảng cách thừa */
        }

        /* 2. Màu chữ trắng cho các mục trong Menu */
        .nav-item a {
            color: #fff !important;
            padding: 10px 15px !important;
        }

        /* Đổi màu khi di chuột qua menu (Hover) */
        .nav-item a:hover {
            background-color: #d44942;
        }

        /* 3. Chia lưới 4 cột cho danh sách sách */
        .list-book {
            display: grid;
            grid-template-columns: repeat(4, 24%);
            /* Chia làm 4 cột, mỗi cột chiếm ~24% */
            gap: 10px;
            /* Khoảng cách giữa các cuốn sách */
            margin-top: 20px;
        }

        /* 4. Định dạng khung cho từng cuốn sách */
        .book {
            margin: 10px;
            text-align: center;
            /* Căn giữa hình và chữ */
            transition: transform 0.2s;
        }

        .book:hover {
            transform: scale(1.05);
            /* Hiệu ứng phóng to nhẹ khi di chuột vào */
        }

        .book img {
            border: 1px solid #ddd;
            /* Thêm viền nhẹ cho ảnh bìa */
            border-radius: 5px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <header style='text-align:center'>
        <img src="{{asset('hinh/banner_sach.jpg')}}" width="1000px">
    </header>

    <main style="width: 1000px; margin: 2px auto;">
        <div class='row'>
            <div class='col-3 pr-0'>
                <nav class="navbar navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('sach') }}">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('sach/theloai/1') }}">Tiểu thuyết</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('sach/theloai/2') }}">Truyện ngắn tản văn</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('sach/theloai/3') }}">Tác phẩm kinh điển</a>
                        </li>
                    </ul>
                </nav>
                <img src="{{asset('hinh/sidebar_1.jpg')}}" width="100%" class='mt-1'>
                <img src="{{asset('hinh/sidebar_2.jpg')}}" width="100%" class='mt-1'>
            </div>
            <div class='col-9'>
                @yield('content')
            </div>
        </div>
    </main>
</body>

</html>