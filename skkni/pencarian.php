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
            <li role="presentation" ><a href="registrasi.php">Registrasi</a></li>
            <li role="presentation" class="active"><a href="pencarian.php">Jumlah Peserta</a></li>
            <li role="presentation"><a href="file.php">Backup</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Jumlah Peserta Pertanggal Lahir</h3>
      </div>

      <div class="row marketing">
        <div class="col-md-12">
           <form name="myForm" method="Post" action="" onsubmit="return validateForm()">
                 <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgl_lhr" >
                </div>
                <button type="submit" name="cari" class='form-control' class="btn btn-default">Cari</button>
          </form>
        </div>
      </div>
                <?php 
                     include"include/koneksi.php";
                        if(isset($_POST['cari'])) {
                            $tgl_lhr = $_POST['tgl_lhr'];
                            $sql=mysqli_query($koneksi,"SELECT COUNT(tgl_lhr) AS tgl FROM tbl_peserta WHERE tgl_lhr='$tgl_lhr'");
                            $row=mysqli_fetch_array($sql);
                            $tgl=$row['tgl'];
                            echo "Jumlah Peserta Dengan Tanggal Lahir $tgl_lhr = $tgl";
                }?>
      <footer class="footer">
        <p>&copy; 2018 SKKNI</p>
      </footer>
      </div> <!-- /container -->
  </body>
</html>
