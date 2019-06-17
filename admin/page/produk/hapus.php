<?php 
$koneksi=new mysqli("localhost","root","","cms2");
  $kode2=$_GET['id'];
    $sql=$koneksi->query("delete from produk where idproduk='$kode2'");

    if ($sql) {
    
    
 ?>
 


	<script type="text/javascript">
                                		alert("Data berhasil Dihapus");
                                		window.location.href="?page=produk";
                                	</script>


  <?php


}

?>