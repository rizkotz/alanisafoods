<?php
include 'G:\installan\TUGAS TYO\. SEMESTER 6\PROYEK SISTEM INFORMASI\PROJECT_SI\alanisafoods\routes\koneksi.php';
?>

@extends('layout.master')
@section('title', 'barangKeluar')
@section('menuBarangKeluar', 'active')

@section('content')

    <div class="container-2">
        <h1 class="tittle-1">
            <span class="span0">History</span>
            <span class="span1">Barang Keluar</span>
        </h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Tanggal Keluar</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            $tampil = mysqli_query($mysqli, "select * from posts");
                            $no = 1;
                            while($hasil = mysqli_fetch_array($tampil)){
                        ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $hasil['nama']; ?></td>
                        <td><?php echo $hasil['created_at']; ?></td>
                        <td><?php echo $hasil['jumlah']; ?></td>
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
</div>
@endsection
