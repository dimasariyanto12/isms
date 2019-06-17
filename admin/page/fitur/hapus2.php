<?php 
$koneksi=new mysqli("localhost","root","","cms2");


  $id=$_GET['idfitur'];
    $sql=$koneksi->query("delete from sub_fitur where idfitur='$id'");

    if ($sql) {
    
    
 ?>
 


	<script type="text/javascript">
                                		alert("Data berhasil Dihapus");
                                		window.location.href="?page=fitur";
                                	</script>


  <?php


}

?>