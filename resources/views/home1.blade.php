@extends('layouts.master')
@extends('layouts.app')
@section('home1')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="gambar/ee.jpg">
<center>

<?php
$image=glob("gambar/k.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="360" heigth="260"/?>
<?php
}
	?>
	</center>

<center><h1><font color="black">Assalamualaikum</font></h1></center>
<center><h1><font color="black">Selamat Datang di Web Saya</font></h1></center>
</body>
</html>
@endsection