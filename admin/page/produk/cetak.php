<?php 



$koneksi=new mysqli("localhost","root","","db_pos");



?>

<style>
	
	@media print{
		input.noPrint{
			display: none;
		}
	}

</style>



<table border="1"width="100%"style="border-collapse;">
<caption>Laporan Data Barang</caption>

<thead>
<tr>
<th>No</th>
<th>Kode Barcode</th>
<th>Nama Barang</th>
<th>Satuan</th>
<th>Stok</th>
<th>Harga Beli</th>
<th>Harga Jual</th>
<th>Profit</th>
</tr>
</thead>
<?php

        $no=1;

        $sql= $koneksi ->query("select *from tb_barang");
        while($data = $sql->fetch_assoc()){

        

        ?>


            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['kode_barcode'] ?></td>
                <td><?php echo $data['nama_barang'] ?></td>
                <td><?php echo $data['satuan'] ?></td>
                 <td><?php echo $data['harga_beli'] ?></td>
                      <td><?php echo $data['stok'] ?></td>
              
                <td><?php echo $data['harga_jual'] ?></td>

                <td><?php echo $data['profit'] ?></td>


          


             
            </tr>
           <?php  }?>
        

            </tbody>
</table>

<br>

<input type="button" class ="noPrint"value="Print" onclick="window.print()">