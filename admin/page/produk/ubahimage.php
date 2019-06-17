 <?php

define('inc_access', TRUE);
include 'includes/header.php';

                       
$koneksi=new mysqli("localhost","root","","cms2");

                      
                        $sql=$koneksi->query("SELECT *from produk where idproduk='$_GET[id]'");
                        $tampil=$sql->fetch_assoc();
                      


                        ?>


                        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                        <div class="header">
                        <h2>
                            Ubah Banner
                        </h2>
                        </div>



                        <div class="body">
                        <form method="POST">
                              <div class="form-group">
                  
            <label> </label>

        </div>



   <div class="form-group">
            
            <input type="file" name="banner" value="<?php echo $rowProduk ['banner']; ?>" >
       
        </div>



              


<br>
<br>

                        <input type="submit" name="simpan"value="Simpan"class="btn btn-primary">
                           <a href="?page=produk"> <input href="?page=produk" type="danger" name="batal"value="Batal"class="btn btn-danger"></a>



                        </form>

                        <?php

                        if(isset($_POST['simpan'])){

                        $banner =$_POST['banner'];
                      
                     

                        $sql = $koneksi->query ("UPDATE produk SET banner='$banner'where idproduk='$_GET[id]'");

                        if($sql){
                        ?>

                        <script type="text/javascript">
                        alert("Data berhasil Diubah");
                        window.location.href="?page=produk";
                        </script>

                        <?php


                        }
                        }
                        ?> 



                                            <?php
include 'includes/footer.php';
?>
