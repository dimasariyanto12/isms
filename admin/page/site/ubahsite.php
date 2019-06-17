                    
                        <?php

                        $koneksi=new mysqli("localhost","root","","cms2");
                          $sql=$koneksi->query("SELECT *from setup");
                        $tampil=$sql->fetch_assoc();
                      

                        ?>


                        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                        <div class="header">
                        <h2>
                       Ubah Site
                        </h2>
                        </div>



                        <div class="body">
                        <form method="POST">



                        <label for="">Site Title </label>
                        <div class="form-group">
                        <div class="form-line">
                        <input type="text"name="title" value="<?php echo $tampil['title'];?>"class="form-control"  />
                        </div>
                        </div>


                        <label for="">Main Title </label>
                         <div class="form-group">
                        <div class="form-line">
                        <input type="text"name="author" value="<?php echo $tampil['author'];?>"class="form-control"  />
                        </div>
                        </div>


                                     <label for="">Button </label>

                                <div class="form-group">
                        <div class="form-line">
                        <input type="text"name="keywords" value="<?php echo $tampil['keywords'];?>"class="form-control"  />
                        </div>
                        </div>

                              <label for="">Description </label>

                          <div class="form-group">
                        <div class="form-line">
                        <textarea type="text"name="description" value="<?php echo $tampil['description'];?>"class="form-control"  ><?php echo $tampil['description'];?></textarea>
                        </div>
                        </div>



                        <input type="submit" name="simpan"value="Simpan"class="btn btn-primary">
                         

                        </form>

                        <?php

                        if(isset($_POST['simpan'])){

                        $title =$_POST['title'];
                         $author =$_POST['author'];
                          $keywords =$_POST['keywords'];
                           $description =$_POST['description'];
                        

                        $sql = $koneksi->query ("UPDATE setup SET title='$title', author='$author', keywords='$keywords', description='$description' ");

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

