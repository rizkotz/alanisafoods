<?php
include 'G:\installan\TUGAS TYO\. SEMESTER 6\PROYEK SISTEM INFORMASI\PROJECT_SI\alanisafoods\routes\koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang Masuk</title>
    <link rel="shortcut icon" href="{{ asset('img/logotoko2.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('style/styleBarang.css') }}">
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
            <div class="container-1">
                <h1 class="tittle-1">
                    <span class="span0">History</span>
                    <span class="span1">Barang Masuk</span>
                </h1>
            </div>
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
            <div class="container-2">
                <div class="table">
                    <div class="head">
                        <div class="tittle-2">
                            <span class="span2">Barang Masuk</span>
                        </div>
                        <a href="/tambahBarang" button type="button" class="btn">Tambah Barang</button></a>
                    </div>
                    <table class="table1">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Merek</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Jenis Barang</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $tampil = mysqli_query($mysqli, "select * from product");
                            $no = 1;
                            while($hasil = mysqli_fetch_array($tampil)){
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $hasil['nama_product']; ?></td>
                                <td><?php echo $hasil['merek']; ?></td>
                                <td><?php echo $hasil['jumlah_barang']; ?></td>
                                <td><?php echo $hasil['jenis_barang']; ?></td>
                                <td><?php echo $hasil['keterangan']; ?></td>
                            </tr>
                            <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
