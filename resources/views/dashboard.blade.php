<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('img/logotoko2.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/styleguide.css') }}">
</head>

<body>
    <div class="macbook-pro-14-1 screen">
        <div class="rectangle-1 rectangle">
        </div>
        <div class="rectangle-3 rectangle">
        </div>
        <a href="/">
            <div class="alanisafoods">Alanisafoods</div>
        </a>
        <img class="menu-rounded" src="{{ asset('img/Menu Rounded.png') }}" alt="Menu Rounded" />
        <img class="male-user" src="img/Male User (1).png" alt="Male User" />
        <div class="user-admin poppins-normal-black-16px">User Admin</div>
        <a href="/index">
            <img class="logout" src="img/Logout.png" alt="Logout" />
            <div class="logout-atas poppins-normal-black-16px">LOG OUT</div>
        </a>
        <div class="container">
            <div class="rectangle-2 rectangle">
                <img class="male-user-1" src="img/Male User.png" alt="Male User" />
                <div class="user-admin-1">User Admin </div>
                <a href="/totalBarang">
                    <div class="total-barang">
                        <img class="file" src="img/File.png" alt="File" />
                        <div class="total-barang-1 poppins-normal-white-18px">Total Barang</div>
                    </div>
                </a>
                <a href="/barangMasuk">
                    <div class="barang-masuk barang">
                        <img class="reply-arrow" src="img/Reply Arrow.png" alt="Reply Arrow" />
                        <div class="barang-masuk-1 poppins-normal-white-18px">Barang Masuk</div>
                    </div>
                </a>
                <a href="/barangKeluar">
                    <div class="barang-keluar barang">
                        <img class="right-2" src="img/Right 2.png" alt="Right 2" />
                        <div class="barang-keluar-1 poppins-normal-white-18px">Barang Keluar</div>
                    </div>
                </a>
                <a href="/dataTransaksi">
                    <div class="data-transaksi">
                        <img class="online-payment" src="img/Online Payment.png" alt="Online Payment" />
                        <div class="data-transaksi-1 poppins-normal-white-18px">Data Transaksi</div>
                    </div>
                </a>
                <a href="/tambahBarang">
                    <div class="tambah-barang">
                        <img class="add-file" src="img/Add File.png" alt="Add File" />
                        <div class="tambah-barang-1 poppins-normal-white-18px">Tambah Barang</div>
                    </div>
                </a>
                <a href="/index">
                    <div class="log-out-1">
                        <img class="logout-1" src="img/Logout (1).png" alt="Logout" />
                        <div class="logout-2 poppins-normal-white-18px">LOGOUT</div>
                    </div>
                </a>
            </div>

            <div class="typemetric-stylestyle-container">
                <a href="/totalBarang">
                    <img class="type-metric-style-style" src="img/Type=Metric. Style=Style 11.png"
                        alt="Type=Metric. Style=Style 11" />
                </a>
                <a href="/barangMasuk">
                    <img class="type-metric-style-style" src="img/Type=Metric. Style=Style 10.png"
                        alt="Type=Metric. Style=Style 10" />
                </a>
                <a href="/barangKeluar">
                    <img class="type-metric-style-style" src="img/Type=Metric. Style=Style 9.png"
                        alt="Type=Metric. Style=Style 9" />
                </a>
            </div>
            <div class="typemetric-stylestyle-1-container">
                <a href="/tambahBarang">
                    <img class="type-metric-style-style" src="img/Type=Metric. Style=Style 12.png"
                        alt="Type=Metric. Style=Style 12" />
                </a>
            </div>
        </div>
        <div class="detail-login">
            <div class="overlap-group">
                <div class="detail-login-1">Detail Loginnnnnnnnnnnnn</div>
                <div class="flex-row">
                    <p class="nama-username-level-hak-akses">
                        Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <br />Username<br />Level Hak Akses
                    </p>
                    <p class="rizqi-fauzan-adm">
                        : Rizqi
                        Fauzan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <br />: admin<br />: administrator/owner
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
