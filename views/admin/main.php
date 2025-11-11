<?php
// main.php: layout chung cho tất cả trang admin
// $title: tiêu đề trang
// $view: đường dẫn view con
?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($title) ? $title : 'Admin Dashboard' ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .sidebar {
      min-height: 100vh;
      background-color: #343a40;
      color: white;
      padding-top: 20px;
    }

    .sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 10px 20px;
      border-radius: 5px;
      margin-bottom: 5px;
    }

    .sidebar a:hover {
      background-color: #495057;
    }

    .content {
      flex: 1;
      padding: 20px;
    }

    .card {
      margin-bottom: 20px;
    }
  </style>
</head>

<body>

  <!-- HEADER -->
  <nav class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">Admin Dashboard</span>
      <a href="#" class="btn btn-outline-light">Đăng xuất</a>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">

      <!-- SIDEBAR -->
      <div class="col-md-2 sidebar">
        <h5 class="px-3">Menu</h5>
        <a href="?controller=tour&action=index">Quản lý Tour</a>
        <ul>
          <li><a href="?controller=category&action=index" class="ps-4">Danh mục Tour</a></li>
          <li><a href="?controller=tour&action=list" class="ps-4">Danh sách Tour</a></li>
        </ul>
        <a href="?controller=category&action=index">Quản lý Danh mục</a>
        <a href="?controller=booking&action=index">Quản lý Đặt Tour</a>
        <a href="?controller=user&action=index">Quản lý Người dùng</a>
        <a href="#">Cài đặt</a>
      </div>

      <!-- MAIN CONTENT -->
      <div class="col-md-10 content">
        <?php

        if (isset($view) && file_exists(PATH_VIEW . $view . '.php')) {
          require_once PATH_VIEW . $view . '.php';
        } else {
          echo "<h3>Chưa có nội dung để hiển thị</h3>";
        }
        ?>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>