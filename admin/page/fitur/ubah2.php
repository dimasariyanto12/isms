 <?php


                       
$koneksi=new mysqli("localhost","root","","cms2");

                      
                        $sql=$koneksi->query("SELECT *from sub_fitur  where idfitur='$_GET[id]' ");
                        $tampil=$sql->fetch_assoc();
                      


                        ?>


                        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                        <div class="header">
                        <h2>
                            Ubah Fitur
                        </h2>
                        </div>



                        <div class="body">
                        <form method="POST">



                        <label for="">Nama Fitur</label>
                        <div class="form-group">
                        <div class="form-line">
                        <input type="text"name="title"value="<?php echo $tampil['title'];?>"class="form-control" placeholder="<?php echo $tampil['title']; ?>"  ></input>
                        </div>
                        </div>



                        <label for="">Icon</label>
                        <div class="form-group">
                        <div class="form-line">
                      <textarea class="form-control " name="icon" rows="5"  ><?php echo $tampil['icon']; ?></textarea>

                        </div>
                        </div>


                        <label for="">Content </label>
                        <div class="form-group">
                        <div class="form-line">
                       <textarea class="form-control " name="teks" rows="5"  ><?php echo $tampil['teks']; ?></textarea>

                        </div>
                        </div>

            


<br>
<br>

                        <input type="submit" name="simpan"value="Simpan"class="btn btn-primary">



                        </form>

                        <?php

                        if(isset($_POST['simpan'])){

                        $title =$_POST['title'];
                        $icon =$_POST['icon'];
                        $teks =$_POST['teks'];
                     

                        $sql = $koneksi->query ("UPDATE sub_fitur SET title='$title',icon='$icon',teks='$teks' where idfitur='$_GET[id]'");

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



                                            <?php
include 'includes/footer.php';
?>
