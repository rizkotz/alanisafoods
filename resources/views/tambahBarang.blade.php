<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link rel="shortcut icon" href="{{ asset('img/logotoko2.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('style/styleTambahBarang.css') }}">
    <link rel="stylesheet" href="{{ asset('style/styleguide.css') }}">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

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

            <div class="formulir">
                <form action="proses.php" method="POST">
                    <div class="control-group after-add-more">
                      <label>Nama Barang</label>
                      <input type="text" name="nama[]" class="form-control">
                      <label>Merek</label>
                      <input type="text" name="mrk[]" class="form-control">
                      <label>Jumlah Barang</label>
                      <input type="text" name="jml[]" class="form-control">
                      <label>Jenis Barang</label>
                      <input type="text" name="jenis[]" class="form-control">
                      <label>Keterangan</label>
                      <select class="form-control" name="keterangan[]">
                          <option>Baru</option>
                          <option>Bekas</option>
                        </select>
                      <br>
                      <button class="btn btn-success add-more" type="button">
                        <i class="glyphicon glyphicon-plus"></i> Add
                      </button>
                      <hr>
                    </div>
                    <button class="btn btn-success" type="submit">Submit</button>
                  </form>

                  <div class="copy hide">
                    <div class="control-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama[]" class="form-control">
                        <label>Merek</label>
                        <input type="text" name="mrk[]" class="form-control">
                        <label>Jumlah Barang</label>
                        <input type="text" name="jml[]" class="form-control">
                        <label>Jenis Barang</label>
                        <input type="text" name="jenis[]" class="form-control">
                        <label>Keterangan</label>
                        <select class="form-control" name="keterangan[]">
                            <option>Baru</option>
                            <option>Bekas</option>
                      </select>
                      <br>
                      <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                      <hr>
                    </div>
                  </div>

                  <script type="text/javascript">
                    $(document).ready(function() {
                      $(".add-more").click(function(){
                          var html = $(".copy").html();
                          $(".after-add-more").after(html);
                      });

                      // saat tombol remove dklik control group akan dihapus
                      $("body").on("click",".remove",function(){
                          $(this).parents(".control-group").remove();
                      });
                    });
                </script>

            </div>
        </div>

    </div>
</body>

</html>
