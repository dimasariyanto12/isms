<?php 
error_reporting(E_ALL^(E_NOTICE | E_WARNING));

	$kasir = $_GET['kasir'];

	$kode_pj =$_GET['kode_pjl'];


$koneksi=new mysqli("localhost","root","","db_pos");

 ?>
<style>
	
	@media print{
		input.noPrint{
			display: none;
		}
	}

</style>


 <h4>Struk Belanjaan</h4>

 <table>
 	

 	<tr>
 		<td>
 			ToSerba
 		</td>
 			</tr>
 			<td><hr></td>


 			<tr>
 		<td>
 			Jalan Raya Jepara - Bangsri km 7
 		</td>
 			</tr>
 </table>





 <table>
<?php 


	$sql = $koneksi->query("select*from tb_penjualan,tb_pelanggan where tb_penjualan.id_pelanggan=tb_pelanggan.kode_pelanggan and kode_penjualan='$kode_pj'");
	$tampil = $sql->fetch_assoc();



 ?>


	<tr>
 		<td>Kode Penjualan&nbsp&nbsp </td>
 		<td>:<?php echo $tampil['kode_penjualan']; ?></td>
 			</tr>



 			<tr>
 		<td>Tanggal Penjualan &nbsp&nbsp</td>
 		<td>:<?php echo $tampil['tgl_penjualan']; ?></td>
 			</tr>

 					<tr>
 		<td>Pelanggan &nbsp&nbsp</td>
 		<td>:<?php echo $tampil['nama']; ?></td>
 			</tr>


 			<tr>
 		<td>Kasir &nbsp&nbsp</td>
 		<td>:<?php echo $kasir ?></td>
 			</tr>

 			<td><hr></td>

 			<?php 

 				$sql2=$koneksi->query("select * from tb_penjualan,tb_penjualan_detail,tb_barang where  tb_penjualan.kode_penjualan=tb_penjualan_detail.kode_penjualan and tb_penjualan.kode_barcode=tb_barang.kode_barcode and tb_penjualan.kode_penjualan='$kode_pj'");

 				while ( 
 				$tampil2 = $sql2->fetch_assoc()) {
 					
 				

 			

 			 ?>
 				




 			<tr>
 		<td><?php echo $tampil2['nama_barang'] ?></td>
 		<td>:<?php echo number_format($tampil2['harga_jual']).',-'. '&nbsp'. '&nbsp' .'x'. '&nbsp'. '&nbsp'.$tampil2['jumlah']. '&nbsp'. '&nbsp' .'&nbsp'. '&nbsp'?></td>




 		<td><?php echo number_format($tampil2['total']).',-';?></td>
 			</tr>









<?php

		$diskon = $tampil2['diskon'];
		$potongan =$tampil2['potongan'];
		$bayar = $tampil2['bayar'];
		$kembali =$tampil2['kembali'];
		$total_b =$tampil2['total_b'];
		$total_bayar=$total_bayar+$tampil2['total'];

 } 

 ?>



 		<TR>
 			<td><hr></td>
 		</TR>



 				<tr>
 		<th colspan="1">Total</th>
 		<td>:<?php echo $total_bayar; ?></td>
 			</tr>


 				<tr>
 		<th colspan="1">Diskon</th>
 		<td>:<?php echo $diskon; ?></td>
 			</tr>



 					<tr>
 		<th colspan="1">Potongan Diskon</th>
 		<td>:<?php echo $potongan; ?></td>
 					</tr>


 					<tr>
 		<th colspan="1">Sub Total</th>
 		<td>:<?php echo $total_b; ?></td>
 					</tr>


 				<tr>
 		<th colspan="1"> Bayar</th>
 		<td>:<?php echo $bayar; ?></td>
 				</tr>




 				<tr>

 		<th colspan="1"> Kembali</th>
 		<td>:<?php echo $kembali; ?></td>
 			
 			</tr><td><hr></td>

 			



		</table>


		<table>
		<tr>
		<th>Barang yg sudah dibeli tidak dapat dikembalikan </th>
		</tr>





</table>

<br>

<input type="button" class ="noPrint"value="Print" onclick="window.print()">