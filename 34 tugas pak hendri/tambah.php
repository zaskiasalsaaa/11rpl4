<!DOCTYPE html>
<html>
<head>
	<title>tokokia</title>
</head>
<body>
 
	<h2>toko kia</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA BARANG</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Kode Barang</td>
				<td><input type="text" name="kodebarang"></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="namabarang"></td>
			</tr>
			<tr>
				<td>Satuan Barang</td>
				<td><input type="text" name="satuanbarang"></td>
			</tr>
			<tr>
                <td>Stok Barang</td>
				<td><input type="number" name="stokbarang"></td>
			</tr>
			<tr>
                <td>Harga Barang</td>
				<td><input type="number" name="hargabarang"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>