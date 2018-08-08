<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SKKNI</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->


    <!-- Custom styles for this template -->
    <link href="assets/css/jumbotron-narrow.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
   
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="registrasi.php">Registrasi</a></li>
            <li role="presentation"><a href="pencarian.php">Jumlah Peserta</a></li>
            <li role="presentation"><a href="file.php">Backup</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Registrasi Peserta SKKNI</h3>
      </div>

      <div class="row marketing">
        <div class="col-md-12">
           <form name="myForm" method="Post" action="" onsubmit="return validateForm()">
                <div class="form-group">
                  <label>NIK</label>
                  <input type="number" name="nik" class="form-control" placeholder="Masukan NIK KTP" onkeypress="return hanyaAngka(event)" autofocus>
                </div>
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control"  placeholder="Masukan Nama Lengkap" required="">
                </div>
                <div class="form-group">
                  <label>Nomor Handphone</label>
                  <input type="number" name="hp" class="form-control" onkeypress="return hanyaAngka(event)"  placeholder="Masukan Nama Handphone">
                </div>
                 <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control"  placeholder="Masukan Email" required="">
                </div>
                <div class="form-group">
                  <label>Skema Sertifikasi</label>
                  <select name="skema" class="form-control">
                    <option selected=0>--PILIH SKEMA SERTIFIKASI--</option>
                    <option value="Networking Administrator Madya">Networking Administrator Madya</option>
                    <option value="Programing Madya">Programing Madya</option>
                    <option value="Multimedia Madya">Multimedia Madya</option>
                  </select>
                </div>
                 <div class="form-group">
                  <label>Tempat Uji Kompetensi</label>
                  <select name="tempat" class="form-control">
                    <option selected=0>--PILIH TEMPAT UJI KOMPETENSI--</option>
                    <option value="Kominfo jambi 7 Agustus 2018">Kominfo jambi 7 Agustus 2018</option>
                    <option value="Kominfo jambi 8 Agustus 2018">Kominfo jambi 8 Agustus 2018</option>
                    <option value="Kominfo jambi 9 Agustus 2018">Kominfo jambi 9 Agustus 2018</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Rekomendasi</label>
                  <input type="text" class="form-control" name="rekomendasi" placeholder="Masukan Rekomendasi" required>
                </div>
                <div class="form-group">
                  <label>Tanggal Terbit Sertifikasi</label>
                  <input type="date" class="form-control"  name="tgl_sertifikat">
                </div>
                 <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgl_lhr" >
                </div>
                <div class="form-group">
                  <label>Organisasi</label>
                  <input type="text" name="organisasi" class="form-control"  placeholder="Masukan Organisasi">
                </div>
                <button type="submit" name="registrasi" class='form-control' class="btn btn-default">Registrasi</button>
          </form>
        </div>
      </div>
                <?php 
                     include"include/koneksi.php";
                        if(isset($_POST['registrasi'])) {
                            $nik  = $_POST['nik'];
                            $nama  = $_POST['nama'];
                            $hp  = $_POST['hp'];
                            $email = $_POST['email'];
                            $skema  = $_POST['skema'];
                            $tempat = $_POST['tempat'];
                            $rekomendasi = $_POST['rekomendasi'];
                            $tgl_sertifikat = $_POST['tgl_sertifikat'];
                            $tgl_lhr = $_POST['tgl_lhr'];
                            $organisasi= $_POST['organisasi'];
                            mysqli_query($koneksi,"INSERT INTO tbl_peserta VALUES ('$nama','$nik','$hp','$email','$skema','$tempat','$rekomendasi','$tgl_sertifikat','$tgl_lhr','$organisasi')");
                            echo "<script>alert('Registrasi Anda Telah berhasil');
                                  </script>";
                            echo "<script>location.href=('registrasi.php')
                                  </script>";
                }?>
      <footer class="footer">
        <p>&copy; 2018 SKKNI</p>
      </footer>
      <script>
        function hanyaAngka(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
     
            return false;
          return true;
        }
        function validateForm() {
          var x = document.forms["myForm"]["nik"].value;
          if (x == "" ) {
              alert("NIK Tidak Boleh Kosong");
              return false;
          }
      }
      </script>
    </div> <!-- /container -->
  </body>
</html>
