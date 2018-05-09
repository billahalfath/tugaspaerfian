<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistem Informasi Karyawan</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Memorize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="css/style3.css" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link href="css/mislider.css" rel="stylesheet" type="text/css" />
<link href="css/mislider-custom.css" rel="stylesheet" type="text/css" />
<link href="css/view.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>
<div id="home" class="banner w3l">
        <div class="header-nav">
        <div class="container">
            <nav class="navbar navbar-default">
                    <div class="navbar-header logo">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <h1>
                                    <a class="navbar-brand" href="dashboard_admin.php">Sistem Informasi Karyawan</a>
                                </h1>
</div>
                    
                    <!-- navbar-header -->
                    <div class="header-right-agileits">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="home.php" class=" active">Kembali</a></li>
                            </ul>
                            </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
  <form action="proses_input.php" method="post" enctype="multipart/form-data" name="form_data_karyawan">
  <table width="452" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#fd9207">
    <tr>
      <td height="60" align="center" bgcolor="#090909"><strong></strong>
        <h2><strong><font color="#2005ee">Input Data Karyawan </font></strong></h2>
        <strong></strong></td>
    </tr>
    <tr>
      <td bgcolor="#cbf00f"><table width="452" border="0" align="center" cellpadding="5" cellspacing="0">
          <tr>
            <td width="113"></td>
            <td width="11"></td>
            <td width="237">
            </td>
  
  <form action="/action_page.php"> 
    <table border="0">
    <tr>
<td>nik </td>
<td><input name="nik" type="Text"> </td>
</tr>
<tr>
<td>Nama Lengkap</td>
<td><input name="nama_lengkap" type="text"> </td>
</tr>
<tr>
<td>jenis kelamin</td>
<td><input type="radio" name="jenis_kelamin" value="P">P
    <input type="radio" name="jenis_kelamin" value="L">L
</td>
</tr>
<tr>
<td>alamat</td>
<td><input name="alamat" type="text"></td>
</tr>
<tr>
<td>golongan darah</td>
<td><input type="radio" name="golongan_darah" value="A">A
     <input type="radio" name="golongan_darah" value="AB">AB
     <input type="radio" name="golongan_darah" value="B">B
     <input type="radio" name="golongan_darah" value="O">O
</td>
</tr>
<tr>
<td>nomor hp</td>
<td><input name="nomor_hp" type="text"></td>
</tr>
<tr>
<td>emai</td>
<td><input name="email" type="email"></td>
</tr>
<tr>
<td>status</td>
<td><input type="radio" name="status" value="belum_menikah">belum menikah
    <input type="radio" name="status" value="menikah">menikah
</td>
</tr>
<td>agama</td>
<td><select name="agama">
                        <option value="0"> Silahkan Pilih Agama </option>
                        <option value="Islam"> Islam </option>
                        <option value="Hindu"> Hindu </option>
                        <option value="Budha"> Budha </option>
                        <option value="Protestan"> Protestan </option>
                        <option value="Katholik"> Katholik </option>
                        <option value="Konghucu"> Konghucu </option>
                        </select>
</td>
<tr>    
<td>divisi</td>
<td><input name="divisi" type="text">
</td>
<tr>
<td>foto
<td><div class="w3layouts_file_upload">
                            <div class="w3_agileinfo_file">
                                <input type="file" id="fileselect" name="fileselect[]" multiple="multiple" required="" />
</div>
</div>
</td>
</tr>
</table>
<input type="submit">
  </div>
  </form>

</body>
</html>
