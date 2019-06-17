 <?php


                       
$koneksi=new mysqli("localhost","root","","cms2");

                      
                        $sql=$koneksi->query("SELECT *from harga  where idharga='$_GET[id]' ");
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



                        <label for="">Nama Produk</label>
                        <div class="form-group">
                        <div class="form-line">
                        <input type="text"name="nama_produk"value="<?php echo $tampil['nama_produk'];?>"class="form-control" placeholder="<?php echo $tampil['nama_produk']; ?>"  ></input>
                        </div>
                        </div>



                        <label for="">Harga</label>
                        <div class="form-group">
                        <div class="form-line">
                     <input type="text"name="harga_produk"value="<?php echo $tampil['harga_produk'];?>"class="form-control" placeholder="<?php echo $tampil['harga_produk']; ?>"  ></input>
                        </div>
                        </div>

<label for="">Satuan</label>

                            <div class="form-group">
                            <div class="form-line">
                            <select NAME="satuan" class="form-control show-tick" >
                                  <option value=""><?php echo $tampil['satuan'];?></option>
                            <option value="">---Pilih Satuan---</option>
                            <option value="SMS">SMS</option>
                            <option value="Bulan">Bulan</option>
                            <option value="Tahun">Tahun</option>

                            </select>
                            </div>



                        </div>
                         <input type="submit" name="simpan"value="Simpan"class="btn btn-primary">


                        </div>

            



                       

                        </form>

                        <?php

                        if(isset($_POST['simpan'])){

                        $nama_produk =$_POST['nama_produk'];
                        $harga_produk =$_POST['harga_produk'];
                        $satuan =$_POST['satuan'];
                     

                        $sql = $koneksi->query ("UPDATE harga SET nama_produk='$nama_produk',harga_produk='$harga_produk',satuan='$satuan' where idharga='$_GET[id]'");

                        if($sql){
                        ?>

                        <script type="text/javascript">
                        alert("Data berhasil Diubah");
                        window.location.href="?page=harga";
                        </script>

                        <?php


                        }
                        }
                        ?> 

