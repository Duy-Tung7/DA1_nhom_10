<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel - Khám phá những địa điểm mới</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero {
      background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e');
      background-size: cover;
      background-position: center;
      height: 90vh;
      color: white;
      display: flex;
      align-items: center;
      text-align: center;
    }
    .hero-overlay {
      background-color: rgba(0,0,0,0.45);
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 90vh;
    }
    .hero-content {
      position: relative;
      z-index: 2;
      width: 100%;
    }
    .tour-card img {
      height: 200px;
      object-fit: cover;
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
    }
  </style>
</head>
<body>

<!-- HEADER -->
<nav class="navbar navbar-expand-lg bg-light shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">TRAVEL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#">Trang chủ</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Tour</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Giới thiệu</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Liên hệ</a></li>
        <li class="nav-item"><a class="btn btn-warning ms-3" href="#">Đăng nhập</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero position-relative d-flex justify-content-center align-items-center mt-5">
  <div class="hero-overlay"></div>
  <div class="hero-content container">
    <h1 class="display-4 fw-bold mb-4">Khám Phá Những Địa Điểm Mới</h1>
    <form class="row g-2 justify-content-center">
      <div class="col-md-3">
        <input type="text" class="form-control" placeholder="Điểm đến">
      </div>
      <div class="col-md-3">
        <input type="date" class="form-control" placeholder="Ngày khởi hành">
      </div>
      <div class="col-md-3">
        <select class="form-select">
          <option selected>Khoảng giá</option>
          <option>Dưới 5.000.000đ</option>
          <option>5.000.000đ - 10.000.000đ</option>
          <option>Trên 10.000.000đ</option>
        </select>
      </div>
      <div class="col-md-2">
        <button type="submit" class="btn btn-warning w-100 fw-bold">Tìm kiếm</button>
      </div>
    </form>
  </div>
</section>

<!-- POPULAR TOURS -->
<section class="container my-5">
  <h2 class="text-center fw-bold mb-4">Tour nổi bật</h2>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card tour-card shadow-sm">
        <img src="https://images.unsplash.com/photo-1518684079-3c830dcef090" class="card-img-top" alt="Hà Giang">
        <div class="card-body">
          <h5 class="card-title">Tour Hà Giang</h5>
          <p class="card-text">5 ngày - Trải nghiệm miền núi phía Bắc</p>
          <p class="fw-bold text-primary">4.000.000đ / người</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card tour-card shadow-sm">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" class="card-img-top" alt="Sapa">
        <div class="card-body">
          <h5 class="card-title">Tour Sapa</h5>
          <p class="card-text">4 ngày - Chinh phục Fansipan</p>
          <p class="fw-bold text-primary">5.500.000đ / người</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card tour-card shadow-sm">
        <img src="https://images.unsplash.com/photo-1526481280691-9069436e0721" class="card-img-top" alt="Nha Trang">
        <div class="card-body">
          <h5 class="card-title">Tour Nha Trang</h5>
          <p class="card-text">3 ngày - Biển xanh cát trắng</p>
          <p class="fw-bold text-primary">3.200.000đ / người</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CLIENT TESTIMONIALS -->
<section class="bg-light py-5">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Khách hàng nói gì?</h2>
    <blockquote class="blockquote">
      <p>"Chuyến đi thật tuyệt vời, hướng dẫn viên rất thân thiện và chuyên nghiệp!"</p>
      <footer class="blockquote-footer">Nguyễn Văn A, Hà Nội</footer>
    </blockquote>
  </div>
</section>

<!-- BLOG SECTION -->
<section class="container my-5">
  <h2 class="text-center fw-bold mb-4">Bài viết mới nhất</h2>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card shadow-sm">
        <img src="https://images.unsplash.com/photo-1549887534-4b4f292d4ec0" class="card-img-top" alt="Blog 1">
        <div class="card-body">
          <h5 class="card-title">10 điểm du lịch hấp dẫn nhất Việt Nam</h5>
          <a href="#" class="btn btn-outline-primary btn-sm">Xem thêm</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" class="card-img-top" alt="Blog 2">
        <div class="card-body">
          <h5 class="card-title">Kinh nghiệm du lịch mùa cao điểm</h5>
          <a href="#" class="btn btn-outline-primary btn-sm">Xem thêm</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm">
        <img src="https://images.unsplash.com/photo-1526481280691-9069436e0721" class="card-img-top" alt="Blog 3">
        <div class="card-body">
          <h5 class="card-title">Hướng dẫn chuẩn bị hành lý du lịch</h5>
          <a href="#" class="btn btn-outline-primary btn-sm">Xem thêm</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-light text-center py-3">
  <p class="mb-0">© 2025 Travel Agency | Designed by Bạn</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
