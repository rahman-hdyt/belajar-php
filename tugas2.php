<html>
<style>
table {
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 15px;
  
}
</style>
<body><table style="width:50%">

	<tr>
    <td>NIM</td>
    <td><?php echo $_POST["nim"]; ?></td> 
     </tr>
  <tr>
    <td>Nama</td>
    <td><?php echo $_POST["nama"]; ?></td>
    </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td><?php echo $_POST["kelamin"]; ?></td>
    </tr>
	<tr>
    <td>Alamat</td>
    <td><?php echo $_POST["alamat"]; ?></td>
     </tr>
	 <tr>
  <tr>
    <td>Program Studi</td>
    <td><?php echo $_POST["prodi"]; ?></td>
     </tr>
	 <tr>
    <td>Bahasa Pemrograman yang dikuasai        </td>
    <td><?php if (isset($_POST['cek'])) {

        $cek=$_POST['cek'];
		echo "";
        for ($i=0; $i < count($cek) ; $i++){
            echo $cek[$i]."<br>";
        }
    }
	?></td>
     </tr>
</table>
</body>
</html>