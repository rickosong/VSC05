<html>
 <head>
 <title>calculator php</title>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 
 </head>
 <body>
 
 <div class="container" style="margin-top: 50px">
 
 <?php
 
 // jika tombol submit sudah ditekan
 if(isset($_POST['submit']))
 {
 // cek nilai nomor
 if(is_numeric($_POST['nomor1']) && is_numeric($_POST['nomor2']))
 {
 // kALKULASI TOTAL
 if($_POST['operasi'] == 'tambah')
 {
 $total = $_POST['nomor1'] + $_POST['nomorr2']; 
 }
 if($_POST['operasi'] == 'kurang')
 {
 $total = $_POST['nomor1'] - $_POST['nomor2']; 
 }
 if($_POST['operasi'] == 'kali')
 {
 $total = $_POST['nomor1'] * $_POST['nomor2']; 
 }
 if($_POST['operasi'] == 'bagi')
 {
 $total = $_POST['nomor1'] / $_POST['nomor2']; 
 }
 
 // mem-print total hasilnya di browser
 echo "<h1>{$_POST['nomor1']} {$_POST['operasi']} {$_POST['nomor2']} sama dengan {$total}</h1>";
 
 } else {
 
 // mem-print pesanerror di browser
 echo 'Nilai numerik wajib diisi ';
 
 }
 }
 ?>
     
     <form method="post" action="calculator.php">
         <input name="nomor1" type="text" class="form-control" style="width: 150px; display: inline" />
         <select name="operasi">
          <option value="tambah">+</option>
             <option value="kurang">-</option>
             <option value="kali">*</option>
             <option value="bagi">/</option>
         </select>
         <input name="nomor2" type="text" class="form-control" style="width: 150px; display: inline" />
         <input name="submit" type="submit" value="Hitung" class="btn btn-primary" />
     </form>
     
 </div>
 
 </body>
</html>