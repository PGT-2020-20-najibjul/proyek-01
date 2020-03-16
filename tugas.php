<html>
<h1>PENJUMLAHAN</h1>
<?php $koneksi = mysqli_connect("localhost","root","","tugas"); ?>
<?php $konek = mysqli_connect("localhost","root","","tugas"); ?>
<?php $kon = mysqli_connect("localhost","root","","tugas"); ?>

<?php
if(isset($_POST['submit'])){
$a = $_POST['a'];
$b = $_POST['b'];
$c = $a+$b;


if($c>=90){echo  $ket ="A";}
elseif($c>=85){ echo   $ket ="B";}
elseif($c>=80){ echo  $ket ="C";}
elseif($c>=75){ echo  $ket ="D";}
elseif($c<=75){ echo  $ket ="E";}

$sql = mysqli_query($koneksi, "INSERT INTO penjumlahan(a,
b, c, ket) VALUES('$a', '$b', '$c', '$ket'  )" ) or
die(mysqli_error($koneksi));
if($sql){
echo 

'<script> document.location="tugas.php"; </script>';}
}?>



<?php
if(isset($_POST['tekan'])){
$a = $_POST['a'];
$b = $_POST['b'];
for ($i=1; $i <=10 ; $i++) {
$c = $a+$b;


if($c>=90){echo  $ket ="A";}
elseif($c>=85){ echo   $ket ="B";}
elseif($c>=80){ echo  $ket ="C";}
elseif($c>=75){ echo  $ket ="D";}
elseif($c<=75){ echo  $ket ="E";}

$sql = mysqli_query($koneksi, "INSERT INTO hitungruntun(a,
b, c, ket) VALUES('$a', '$b', '$c', '$ket'  )" ) or
die(mysqli_error($koneksi));
$a = $b ;
	$b = $c ;

if($sql){
echo 

'<script> document.location="tugas.php"; </script>';}
}}?>










<form  method="post" >


<label >A</label>
<input type="text" name="a" required>
</br>

<label>B</label>
<input type="text" name="b" required>
</br>


</br>
</br>

<input type="submit" name="submit" value="Tambah">
</br>
<input type="submit" name="tekan" value="Tambah Runtun">

</br>
</br>
</br>
<hr>
</form>
	
<table border="1">
	
	<tr>
	<th>ID</th>
	<th>A</th>
	<th>B</th>
	<th>C</th>
	<th>Keterangan</th>
	</tr>

	<?php
$sqli = mysqli_query($konek, "SELECT * from penjumlahan ");
while($d = mysqli_fetch_array($sqli)){
	$p  = $d['id'];  // dr tabel
    $l  = $d['a'];
    $o  = $d['b'];
    $i  = $d['c'];
    $k  = $d['ket'];

    echo "

        <tr>
            	<td> $p </td>
				<td> $l</td>
				<td> $o </td>
				<td> $i </td>
				<td> $k </td>
        </tr>

        ";}?>
</table>
</br></br></br>

<table border="1">
	
	<tr>
	<th>ID</th>
	<th>A</th>
	<th>B</th>
	<th>C</th>
	<th>Keterangan</th>
	</tr>

	<?php
$sqli = mysqli_query($konek, "SELECT * from hitungruntun ");
while($d = mysqli_fetch_array($sqli)){
	$pp  = $d['id'];  // dr tabel
    $ll  = $d['a'];
    $oo  = $d['b'];
    $ii  = $d['c'];
    $kk  = $d['ket'];

    echo "

        <tr>
            	<td> $pp </td>
				<td> $ll</td>
				<td> $oo </td>
				<td> $ii </td>
				<td> $kk </td>
        </tr>

        ";}?>
</table>