                    
                        <?php

                        $koneksi=new mysqli("localhost","root","","cms2");
                          $sql=$koneksi->query("SELECT *from navbar where id='$_GET[id]'");
                        $tampil=$sql->fetch_assoc();
                      

                        ?>


                        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                        <div class="header">
                        <h2>
                       Ubah Navbar
                        </h2>
                        </div>



                        <div class="body">
                        <form method="POST">



                        <label for="">Nama Navbar </label>
                        <div class="form-group">
                        <div class="form-line">
                        <input type="text"name="navbar" value="<?php echo $tampil['navbar'];?>"class="form-control"  />
                        </div>
                        </div>

                        <input type="submit" name="simpan"value="Simpan"class="btn btn-primary">
                         

                        </form>

                        <?php

                        if(isset($_POST['simpan'])){

                        $navbar =$_POST['navbar'];
                        

                        $sql = $koneksi->query ("UPDATE navbar SET navbar='$navbar' where id='$_GET[id]'");

                        if($sql){
                        ?>

                        <script type="text/javascript">
                        alert("Data berhasil Diubah");
                        window.location.href="?page=navbar";
                        </script>

                        <?php


                        }
                        }
                        ?> 

