                    
                        <?php

                        $koneksi=new mysqli("localhost","root","","cms2");
                          $sql=$koneksi->query("SELECT *from produk where idproduk='1'");
                        $tampil=$sql->fetch_assoc();
                      

                        ?>


                        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                        <div class="header">
                        <h2>
                       Ubah Main Title
                        </h2>
                        </div>



                        <div class="body">
                        <form method="POST">
                              <label for="">Title </label>
                        <div class="form-group">
                        <div class="form-line">
                        <textarea type="text"name="heading" value="<?php echo $tampil['heading'];?>"class="form-control"  ><?php echo $tampil['heading'];?></textarea>
                        </div>
                        </div>



                        <label for="">Main Title </label>
                        <div class="form-group">
                        <div class="form-line">
                        <textarea type="text"name="slogan" value="<?php echo $tampil['slogan'];?>"class="form-control"  ><?php echo $tampil['slogan'];?></textarea>
                        </div>
                        </div>

                        <input type="submit" name="simpan"value="Simpan"class="btn btn-primary">
                         

                        </form>

                        <?php

                        if(isset($_POST['simpan'])){
                              $heading =$_POST['heading'];
                        $slogan =$_POST['slogan'];
                        
                        

                        $sql = $koneksi->query ("UPDATE produk SET slogan='$slogan',heading='$heading' where idproduk='1'");

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

