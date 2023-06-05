@extends('layout.master')
@section('title','dataTransaksi')
@section('menuDataTransaksi','active')

@section('content')

        <div class="container-2">
            <div class="table">
                <div class="head">
                    <div class="tittle-2">
                        <span class="span2">Data Transaksi</span>
                    </div>
                </div>
                <table class="table1">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Merek</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Jenis Barang</th>
                            <th scope="col">Keterangan Barang</th>
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
@endsection
