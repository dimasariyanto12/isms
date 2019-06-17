                    
                        <?php

                        $koneksi=new mysqli("localhost","root","","cms2");
                          $sql=$koneksi->query("SELECT *from footer where id='1'");
                        $tampil=$sql->fetch_assoc();
                      

                        ?>


                        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                        <div class="header">
                        <h2>
                       Ubah Footer
                        </h2>
                        </div>



                        <div class="body">
                        <form method="POST">



                        <label for="">Footer </label>
                        <div class="form-group">
                        <div class="form-line">
                        <input type="text"name="content" value="<?php echo $tampil['content'];?>"class="form-control"  />
                        </div>
                        </div>

                        <input type="submit" name="simpan"value="Simpan"class="btn btn-primary">
                         

                        </form>

                        <?php

                        if(isset($_POST['simpan'])){

                        $content =$_POST['content'];
                        

                        $sql = $koneksi->query ("UPDATE footer SET content='$content' where id='1'");

                        if($sql){
                        ?>

                        <script type="text/javascript">
                        alert("Data berhasil Diubah");
                        window.location.href="?page=footer";
                        </script>

                        <?php


                        }
                        }
                        ?> 

