<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="{{ asset ('style/styleTambahBarang.css') }}">
    <link rel="stylesheet" href="{{ asset ('style/styleguide.css') }}">
</head>

<body>
    <div class="macbook-pro-14-1 screen">
        <div class="rectangle-1 rectangle">
        </div>
        <div class="rectangle-3 rectangle">
        </div>
        <div class="alanisafoods">Alanisafoods</div>
        <img class="menu-rounded" src="{{ asset ('img/Menu Rounded.png') }}" alt="Menu Rounded" />
        <div class="logout-atas poppins-normal-black-16px" href="index.html">LOG OUT</div>
        <div class="user-admin poppins-normal-black-16px">User Admin</div>
        <img class="logout" src="img/Logout.png" alt="Logout" /><img class="male-user" src="img/Male User (1).png"
            alt="Male User" />
        <div class="container">
            <div class="rectangle-2 rectangle">
                <img class="male-user-1" src="img/Male User.png" alt="Male User" />
                <div class="user-admin-1">User Admin </div>
                <div class="total-barang">
                    <img class="file" src="img/File.png" alt="File" />
                    <div class="total-barang-1 poppins-normal-white-18px">Total Barang</div>
                </div>
                <div class="barang-masuk barang">
                    <img class="reply-arrow" src="img/Reply Arrow.png" alt="Reply Arrow" />
                    <div class="barang-masuk-1 poppins-normal-white-18px">Barang Masuk</div>
                </div>
                <div class="barang-keluar barang">
                    <img class="right-2" src="img/Right 2.png" alt="Right 2" />
                    <div class="barang-keluar-1 poppins-normal-white-18px">Barang Keluar</div>
                </div>
                <div class="data-transaksi">
                    <img class="online-payment" src="img/Online Payment.png" alt="Online Payment" />
                    <div class="data-transaksi-1 poppins-normal-white-18px">Data Transaksi</div>
                </div>

                <div class="tambah-barang">
                    <img class="add-file" src="img/Add File.png" alt="Add File" />
                    <div class="tambah-barang-1 poppins-normal-white-18px">Tambah Barang</div>
                </div>
                <div class="log-out-1">
                    <img class="logout-1" src="img/Logout (1).png" alt="Logout" />
                    <div class="logout-2 poppins-normal-white-18px">LOGOUT</div>
                </div>
            </div>

            <div class="formulir">
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>

        </div>
        <div class="detail-login">
            <div class="overlap-group">
                <div class="detail-login-1">Detailllllllllll Login</div>
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
