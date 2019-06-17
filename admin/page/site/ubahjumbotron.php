 <?php

define('inc_access', TRUE);
include 'includes/header.php';

                       
$koneksi=new mysqli("localhost","root","","cms2");

                      
                        $sql=$koneksi->query("SELECT *from setup where id='$_GET[id]'");
                        $tampil=$sql->fetch_assoc();
                      


                        ?>


                        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                        <div class="header">
                        <h2>
                            Ubah Jumbotron
                        </h2>
                        </div>



                        <div class="body">
                        <form method="POST">
                              <div class="form-group">
                  
            <label> </label>

          
        </div>



   <div class="form-group">
            <label> Ubah Logo</label>
            <input type="file" name="jumbotron" value="<?php echo $rowSetup ['jumbotron']; ?>" >
       
        </div>



              


<br>
<br>

                        <input type="submit" name="simpan"value="Simpan"class="btn btn-primary">
                           <a href="?page=site"> <input href="?page/site" type="danger" name="batal"value="Batal"class="btn btn-danger"></a>



                        </form>

                        <?php

                        if(isset($_POST['simpan'])){

                        $jumbotron =$_POST['jumbotron'];
                      
                     

                        $sql = $koneksi->query ("UPDATE setup SET jumbotron='$jumbotron'where id='$_GET[id]'");

                        if($sql){
                        ?>

                        <script type="text/javascript">
                        alert("Data berhasil Diubah");
                        window.location.href="?page=site";
                        </script>

                        <?php


                        }
                        }
                        ?> 



                                            <?php
include 'includes/footer.php';
?>
