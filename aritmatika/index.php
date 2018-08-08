<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
    <!-- Custom styles for this template -->
    <link href="asset/css/jumbotron-narrow.css" rel="stylesheet">
    <script src="http://code.responsivevoice.org/responsivevoice.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            
          </ul>
        </nav>
     
      </div>

     

     <form  id="form1" action="" method="Post">
      <div class="row marketing">
        <div class="col-lg-6"> 
         <div class="form-group">
            <input type="number" name="bil1" class="form-control" onkeypress="return hanyaAngka(event)" placeholder="Inputan 1" required autofocus>
         </div>
         <div class="form-group">
             <input type="number" name="bil2" onkeypress="return hanyaAngka(event)" class="form-control" placeholder="Inputan 2" required>
         </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
                <select class="form-control" name="operasi">
                    <option selected=0>--PILIH--</option>
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">x</option>
                    <option value="bagi">/</option>
               </select>
            </div>
            <div class="form-group">
               <input type="submit" name="hitung" value="Hitung"  class="form-control">   
            </div>
        </div>
        <div class="col-lg-12">
           <?php if(isset($_POST['hitung'])){ ?>
                  <?php 
                    if(isset($_POST['hitung'])){
                      $bil1 = $_POST['bil1'];
                      $bil2 = $_POST['bil2'];
                      $operasi = $_POST['operasi'];
                      switch ($operasi) {
                        case 'tambah':
                          $hasil = $bil1+$bil2;
                        break;
                        case 'kurang':
                          $hasil = $bil1-$bil2;
                        break;
                        case 'kali':
                          $hasil = $bil1*$bil2;
                        break;
                        case 'bagi':
                          $hasil = $bil1/$bil2;
                        break;      
                      }
                    }
                ?>
                <?php 
                   function penyebut($nilai) {
                      $nilai = abs($nilai);
                      $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
                      $temp = "";
                      if ($nilai < 12) {
                        $temp = " ". $huruf[$nilai];
                      } else if ($nilai <20) {
                        $temp = penyebut($nilai - 10). " belas";
                      } else if ($nilai < 100) {
                        $temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
                      } else if ($nilai < 200) {
                        $temp = " seratus" . penyebut($nilai - 100);
                      } else if ($nilai < 1000) {
                        $temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
                      } else if ($nilai < 2000) {
                        $temp = " seribu" . penyebut($nilai - 1000);
                      } else if ($nilai < 1000000) {
                        $temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
                      } else if ($nilai < 1000000000) {
                        $temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
                      } else if ($nilai < 1000000000000) {
                        $temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
                      } else if ($nilai < 1000000000000000) {
                        $temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
                      }     
                      return $temp;
                    }
                   
                  ?>
               
               <i>   
                     <?php 
                       function terbilang($nilai){
                          if($nilai<0){
                           $hasil = "minus ".trim(penyebut($nilai));
                          }else{
                           $hasil = trim(penyebut($nilai));
                          }
                          return $hasil;  
                         }
                     ?>
                      Terbilang :
                     <P class='id'>
                      <?php
                        echo ucwords(terbilang($hasil));
                      ?> 
                    </P> 
                     <input type="submit" name="play" value="Voice" id="mulai" class="form-control"> 
               </i>        
                     
                 <?php }else{ ?>
                
                 <?php } ?>
            </form>
        </div>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
   <script type="text/javascript">
          function hanyaAngka(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
     
            return false;
          return true;
          }
          $('document').ready(function(){
              var teks = $('.id').text();
       
              $('#mulai').click(function(){
                  responsiveVoice.speak(teks, 'Indonesian Female');
              });
          });
    </script>
</html>
