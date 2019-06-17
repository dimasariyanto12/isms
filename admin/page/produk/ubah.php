 <?php


                       
$koneksi=new mysqli("localhost","root","","cms2");

                      
                        $sql=$koneksi->query("SELECT *from produk where idproduk='$_GET[id]'");
                        $tampil=$sql->fetch_assoc();
                      


                        ?>


                        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                        <div class="header">
                        <h2>
                            Ubah Produk
                        </h2>
                        </div>



                        <div class="body">
                        <form method="POST">



                        <label for="">Nama Fitur</label>
                        <div class="form-group">
                        <div class="form-line">
                        <input type="text"name="produk"value="<?php echo $tampil['produk'];?>"class="form-control" placeholder="<?php echo $tampil['produk']; ?>"  ></input>
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
                       <textarea class="form-control " name="content" rows="5"  ><?php echo $tampil['content']; ?></textarea>

                        </div>
                        </div>

            


<br>
<br>

                        <input type="submit" name="simpan"value="Simpan"class="btn btn-primary">

                   <a href="?page=produk"> <input href="?page=produk" type="danger" name="batal"value="Batal"class="btn btn-danger"></a>



                        </form>

                        <?php

                        if(isset($_POST['simpan'])){

                        $produk =$_POST['produk'];
                        $icon =$_POST['icon'];
                        $content =$_POST['content'];
                     

                        $sql = $koneksi->query ("UPDATE produk SET produk='$produk',icon='$icon',content='$content' where idproduk='$_GET[id]'");

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


