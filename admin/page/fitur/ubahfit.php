                    
                        <?php

                        $koneksi=new mysqli("localhost","root","","cms2");
                          $sql=$koneksi->query("SELECT *from fitur where id='1'");
                        $tampil=$sql->fetch_assoc();
                      

                        ?>


                        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                        <div class="header">
                        <h2>
                      Teks
                        </h2>
                        </div>



                        <div class="body">
                        <form method="POST">



                        <label for="">Main Title </label>
                        <div class="form-group">
                        <div class="form-line">
                        <textarea type="text"name="main_title" value="<?php echo $tampil['main_title'];?>"class="form-control"  ><?php echo $tampil['main_title'];?></textarea>
                        </div>
                        </div>

                        <label for="">Subtitle </label>
                        <div class="form-group">
                        <div class="form-line">
                        <textarea type="text"name="subtitle" value="<?php echo $tampil['subtitle'];?>"class="form-control"  ><?php echo $tampil['subtitle'];?></textarea>
                        </div>
                        </div>

                        <input type="submit" name="simpan"value="Simpan"class="btn btn-primary">
                         

                        </form>

                        <?php

                        if(isset($_POST['simpan'])){

                        $main_title =$_POST['main_title'];
                        $subtitle =$_POST['subtitle'];
                        

                        $sql = $koneksi->query ("UPDATE fitur SET main_title='$main_title',subtitle='$subtitle' where id='1'");

                        if($sql){
                        ?>

                        <script type="text/javascript">
                        alert("Data berhasil Diubah");
                        window.location.href="?page=fitur";
                        </script>

                        <?php


                        }
                        }
                        ?> 

