<?php 
$koneksi=new mysqli("localhost","root","","cms2");
  $kode2=$_GET['id'];
    $sql=$koneksi->query("delete from harga where idharga='$kode2'");

    if ($sql) {
    
    
 ?>
 


	<script type="text/javascript">
                                		alert("Data berhasil Dihapus");
                                		window.location.href="?page=harga";
                                	</script>


  <?php


}

?>