<!DOCTYPE html>
<html>
<head>
  <title>Tambah Donasi</title>
  <style>
    .container {
  max-width: 400px;
  margin: 0 auto;
  padding: 50px;
  background-color: #f5f5f5;
  border: 1px solid #ddd;
}

h2 {
  text-align: center;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  margin-top: 10px;
}

input[type="text"],
input[type="date"],
input[type="file"],
input[type="number"],
select {
  width: 100%;
  padding: 8px;
  margin-top: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type="submit"] {
  background-color: #26A8B9;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-top: 10px;
}

input[type="submit"]:hover {
  background-color: #26A8B9;
}

/* Home */

        body {
            margin: 0;
            padding: 0;
        }
        .main-container {
            display: flex;
        }

        .main-sidebar {
            background-color: #333;
            color: #fff;
        }

        .dark-bg {
            background-color: #333;
        }

        .sidebar {
            padding: 15px;
        }

        .user-panel {
            padding: 15px;
        }

        .user-panel .pull-left.image img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .user-panel .pull-left.info {
            margin-left: 15px;
        }

        .user-panel p {
            margin: 0;
            font-weight: bold;
        }

        .user-panel a {
            color: #999;
            text-decoration: none;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-menu li {
            margin-bottom: 10px;
        }

        .sidebar-menu li.header {
            padding: 10px 15px;
        }

        .sidebar-menu li a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
        }

        .sidebar-menu li a:hover {
            background-color: #555;
        }

        .treeview-menu {
            display: none;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .treeview-menu li a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
        }

        .treeview-menu li a:hover {
            background-color: #555;
        }

        .treeview-menu.active {
            display: block;
        }

        .pull-right-container {
            float: right;
        }

        .pull-right {
            float: right;
        }

        header {
            background-color: #333;
            color: white;
            padding: 0.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        h1 {
            margin: 0;
        }

        .logo {
            width: 60px;
            height: auto;
            margin-right: 10px;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        nav li {
            margin-right: 1rem;
        }

        nav li:last-child {
            margin-right: 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 0.5rem;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        footer {
            background-color: #555;
            color: white;
            text-align: center;
            padding: 1rem;
        }

        @media screen and (min-width: 768px) {
            .main-container {
                flex-direction: row;
            }

            .main-sidebar {
                width: 250px;
                height: 650px;
            }
        }
        .content-header {
            background-color: #f5f5f5;
            padding: 10px;
        }

        .content-header h1 {
            margin: 0;
        }

        .content-header ol {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .content-header ol li {
            display: inline;
        }

        .content-header ol li a {
            color: #333;
            text-decoration: none;
        }

        .content {
            padding: 20px;
        }

        .alert {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            margin-bottom: 20px;
        }

        .row {
            margin-left: -15px;
            margin-right: -15px;
        }

        .col-lg-12,
        .col-lg-3,
        .col-xs-6 {
            float: left;
            position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px;
        }

        .col-lg-12 {
            width: 100%;
        }

        .col-lg-3,
        .col-xs-6 {
            width: 25%;
        }

        .chart-box {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
        }

        .chart-box h4 {
            margin: 0;
        }

        .chart {
            height: 10px;
        }

        .media-box {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
        }

        .media-icon {
            float: left;
            margin-right: 10px;
        }

        .media-info {
            overflow: hidden;
        }

        .media-info h5 {
            margin: 0;
        }

        .media-info h3 {
            margin: 0;
        }

        .bg-sea {
            background-color: #69c;
            color: #fff;
        }

        .pull-left2 {
            float: left;
        }

        .pull-right2 {
            float: right;
        }

        .icon-bargraph:before {
            content: "\f080";
        }

        .icon-wallet:before {
            content: "\f07b";
        }

        .icon-globe:before {
            content: "\f0ac";
        }
        footer {
            background-color: #555;
            color: white;
            text-align: center;
            padding: 1rem;
        }
  </style>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Donasi" class="logo">
            <h1>Donasi untuk Masyarakat</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="main-container">
      
        <aside class="main-sidebar dark-bg">
            <section class="sidebar">
                <div class="user-panel black-bg">
                    <div class="pull-left image"><img src="/images/hero.jpg" class="img-circle" alt="User Image" /></div>
                    <div class="pull-left info">
                        <p>Administrator</p>
                        <a href="#"><i class="fa fa-circle"></i> Online</a>
                    </div>
                </div>

                <ul class="sidebar-menu" data-widget="tree">
                    
                    <li><a href="/admin/dashboard"><i class="fa fa-home"></i> Beranda</a></li>
                    <li class="treeview">
                        <a href="/admin/tambahdonasi">
                            <i class="fa fa-file"></i> <span>Tambah Donasi</span>
                            <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="/admin/addData">
                            <i class="fa fa-file"></i> <span>Data Donasi</span>
                            <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-credit-card"></i> <span>Transaksi</span>
                            <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="admin-transaksi.html"><i class="fa fa-angle-right"></i> Data Transaksi</a></li>
                        </ul>
                    </li>

                    <li><a href="admin-laporan.html"><i class="fa fa-file"></i> Laporan</a></li>
                </ul>
            </section>
        </aside>
        <div class="container">
            <h2>Tambah Donasi</h2>
            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf
              <label for="judul">Judul:</label>
              <input type="text" id="judul" name="judul" required>
        
              <label for="target">Target:</label>
              <input type="number" id="target" name="target" placeholder="Rp" required>
        
              <label for="awal">Batas Waktu:</label>
              <input type="date" id="awal" name="awal" required>
        
              <label for="akhir">Sampai:</label>
              <input type="date" id="akhir" name="akhir" required>
        
              <label for="gambar">Gambar:</label>
              <input type="file" name="gambar" id="gambar" class="form-control-file" required>
        
              <label for="metode">Metode Pembayaran:</label>
              <select id="metode" name="metode" required>
                <option value="" disabled selected>Pilih Metode Pembayaran</option>
                <option value="transfer">Cash</option>
                <option value="barang">Barang</option>
              </select>
        
              <input type="submit" value="Tambah Sekarang">
            </form>
          </div>
    </div>
    <footer>
        <p>&copy; 2021 Halaman Donasi</p>
    </footer>
</body>
</html>
