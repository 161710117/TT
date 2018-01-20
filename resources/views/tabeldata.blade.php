@extends('layouts.master3')
@extends('layouts.app')
@section('tabeldata')
<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">

<body background="gambar/junika.png">

      <div class="page-header">
        <center><h1>Data Table</h1></center>
      </div>
      <div class="row">
        <div class="col-md-6">
          <table class="table table-bordered">
            <thead>
<tr>
              <tr>
              <center>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tempat lahir</th>
                <th>Tanggal lahir</th>
                <th>Alamat</th>
                <th>cita-cita</th>
                <th>Hobi</th>
                <th>Photo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1233</td>
                <td>Kiki Laila</td>
                <td>Bandung</td>
                <td>2000-11-02</td>
                <td>Bandung</td>
                <td>Polwan</td>
                <td>Menggambar</td>
                <td><?php
$image=glob("gambar/j.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="100" heigth="100"/?>
<?php
}
	?>
	</td>
              </tr>
              <tr>
                <td>4532</td>
                <td>Agung</td>
                <td>Bandung</td>
                <td>2001-05-17</td>
                <td>Bandung</td>
                <td>Dokter</td>
                <td>bulu tangkis</td>
                <td><?php
$image=glob("gambar/i.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="100" heigth="100"/?>
<?php
}
	?>
	</center>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      </div>
      </div>
</div>
</div>
</body>
</html>
@endsection