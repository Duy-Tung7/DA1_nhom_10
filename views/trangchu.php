<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - Travel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- <style>
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
  </style> -->
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
        <a href="#">Quản lý Tour</a>
        <a href="#">Quản lý Danh mục</a>
        <a href="#">Quản lý Đặt Tour</a>
        <a href="#">Quản lý Người dùng</a>
        <a href="#">Cài đặt</a>
      </div>

      <!-- MAIN CONTENT -->
      <div class="col-md-10 content">
        <h2 class="mb-4">Chào mừng Admin!</h2>

        <div class="row">
          <div class="col-md-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title">Tổng số Tour</h5>
                <p class="card-text fs-4">0</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title">Tổng số Đặt Tour</h5>
                <p class="card-text fs-4">0</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title">Người dùng đăng ký</h5>
                <p class="card-text fs-4">0</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Example Table -->
        <div class="card shadow-sm mt-4">
          <div class="card-header">
            Danh sách Tour
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Tên Tour</th>
                  <th>Ngày khởi hành</th>
                  <th>Giá</th>
                  <th>Hành động</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Tour Hà Giang</td>
                  <td>01/12/2025</td>
                  <td>4.000.000đ</td>
                  <td>
                    <button class="btn btn-sm btn-primary">Sửa</button>
                    <button class="btn btn-sm btn-danger">Xóa</button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Tour Sapa</td>
                  <td>05/12/2025</td>
                  <td>5.500.000đ</td>
                  <td>
                    <button class="btn btn-sm btn-primary">Sửa</button>
                    <button class="btn btn-sm btn-danger">Xóa</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>