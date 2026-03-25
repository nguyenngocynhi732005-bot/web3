<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Phim - Nhóm Web3</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
            background-color: #f4f7f6;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        /* Định dạng bảng chung cho cả nhóm */
        .main-table {
            width: 100%;
            border-collapse: collapse;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
        }

        .main-table th {
            background-color: #007bff;
            color: white;
            padding: 12px;
            text-align: left;
        }

        .main-table td {
            border-bottom: 1px solid #ddd;
            padding: 10px;
            color: #555;
        }

        .main-table tr:hover {
            background-color: #f1f1f1;
            transition: 0.3s;
        }

        .main-table tr:nth-child(even) {
            background-color: #fafafa;
        }

        /* Định dạng số và ngày tháng */
        .text-right {
            text-align: right;
        }

        .badge {
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.9em;
            background: #e9ecef;
        }
    </style>
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>

<!DOCTYPE html>
<html>
<head>
    <title>Book App</title>
</head>
<body>

    <div style="background:red; color:white; padding:10px;">
        HEADER
    </div>

    <div style="padding:20px;">
        @yield('content')
    </div>

    <div style="background:black; color:white; padding:10px;">
        FOOTER
    </div>

</body>
</html>