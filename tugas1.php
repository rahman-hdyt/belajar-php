<html>
<style>
table {
  border-collapse: collapse;
}

table, td, th {
  border: 2px solid black;
  padding: 10px;
  
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
    <td>Program Studi</td>
    <td><?php echo $_POST["prodi"]; ?></td>
     </tr>
</table>
</body>
</html>