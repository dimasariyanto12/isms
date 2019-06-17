                    
                        <?php

                        $koneksi=new mysqli("localhost","root","","cms2");
                          $sql=$koneksi->query("SELECT *from socialmedia where id='1'");
                        $tampil=$sql->fetch_assoc();
                      

                        ?>


                        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                        <div class="header">
                        <h2>
                       Ubah Social Media
                        </h2>
                        </div>



                        <div class="body">
                        <form method="POST">



                        <label for="">Facebook</label>
                        <div class="form-group">
                        <div class="form-line">
                        <input type="text"name="facebook" value="<?php echo $tampil['facebook'];?>"class="form-control"  />
                        </div>
                        </div>

                         <label for="">Twitter</label>
                        <div class="form-group">
                        <div class="form-line">
                        <input type="text"name="twitter" value="<?php echo $tampil['twitter'];?>"class="form-control"  />
                        </div>
                        </div>


                         <label for="">Google+</label>
                        <div class="form-group">
                        <div class="form-line">
                        <input type="text"name="google" value="<?php echo $tampil['google'];?>"class="form-control"  />
                        </div>
                        </div>

                        <label for="">Linkedin</label>
                        <div class="form-group">
                        <div class="form-line">
                        <input type="text"name="linkedin" value="<?php echo $tampil['linkedin'];?>"class="form-control"  />
                        </div>
                        </div>



                        <input type="submit" name="simpan"value="Simpan"class="btn btn-primary">
                         

                        </form>

                        <?php

                        if(isset($_POST['simpan'])){

                        $facebook =$_POST['facebook'];
                        $twitter =$_POST['twitter'];
                        $google =$_POST['google'];
                        $linkedin =$_POST['linkedin'];
                        

                        $sql = $koneksi->query ("UPDATE socialmedia SET facebook='$facebook',twitter='$twitter',google='$google',linkedin='$linkedin'  where id='1'");

                        if($sql){
                        ?>

                        <script type="text/javascript">
                        alert("Data berhasil Diubah");
                        window.location.href="?page=social";
                        </script>

                        <?php


                        }
                        }
                        ?> 

