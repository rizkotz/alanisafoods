@extends('layout.master')
@section('title','totalBarang')
@section('menuTotalBarang','active')

@section('content')

            <div class="table">
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
@endsection
