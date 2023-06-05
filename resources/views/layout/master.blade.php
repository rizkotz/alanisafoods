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
        </div>
    </div>

    @section('content')
    <div class = "alert alert-primary text-center">Sistem Informasi Inventori</div>
    @show

     <!-- jQuery -->
     <script src="/js/jquery-2.1.0.min.js"></script>

     <!-- Bootstrap -->
     <script src="/js/popper.js"></script>
     <script src="/js/bootstrap.min.js"></script>

     <!-- Plugins -->
     <script src="/js/owl-carousel.js"></script>
     <script src="/js/accordions.js"></script>
     <script src="/js/datepicker.js"></script>
     <script src="/js/scrollreveal.min.js"></script>
     <script src="/js/waypoints.min.js"></script>
     <script src="/js/jquery.counterup.min.js"></script>
     <script src="/js/imgfix.min.js"></script>
     <script src="/js/slick.js"></script>
     <script src="/js/lightbox.js"></script>
     <script src="/js/isotope.js"></script>

     <!-- Global Init -->
     <script src="/js/custom.js"></script>

     <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);

            });
        });

    </script>

</body>
</html>

