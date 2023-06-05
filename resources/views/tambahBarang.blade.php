@extends('layout.master')
@section('title','tambahBarang')
@section('menuTambahBarang','active')

@section('content')

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
@endsection
