<?php
define('inc_access', TRUE);


    $pageMsg="";
    //update table on submit
    if (!empty($_POST)) {
        
        $produkUpdate = "UPDATE produk SET heading='".$_POST["heading"]."', slogan='".$_POST["slogan"]."',produk1='".$_POST["produk1"]."',produk2='".$_POST["produk2"]."',produk3='".$_POST["produk3"]."',content1='".$_POST["content1"]."',content2='".$_POST["content2"]."', content3='".$_POST["content3"]."', banner='".$_POST["banner"]."' ";
        mysqli_query($db_conn, $produkUpdate);
        $pageMsg="<div class='alert alert-success'>The setup section has been updated.<button type='button' class='close' data-dismiss='alert' onclick=\"window.location.href='produk.php'\">×</button></div>";
    }

        $sqlProduk = mysqli_query($db_conn, "SELECT heading, slogan, produk,content,icon  banner FROM produk");
        $rowProduk = mysqli_fetch_array($sqlProduk);


$koneksi=new mysqli("localhost","root","","cms2");

?>
   

   <div class="row">
        <div class="col-lg-100">
        <?php
        if ($pageMsg !="") {
            echo $pageMsg;
        }
        ?><?php 

                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $uploadMsg = "<div class='alert alert-success'>The file ". basename( $_FILES["fileToUpload"]["name"]) ." has been uploaded.<button type='button' class='close' data-dismiss='alert'>×</button></div>";
        } else {
            $uploadMsg = "";
        }
         

        $sqlProduk = mysqli_query($db_conn, "SELECT heading, slogan, produk,content,icon , banner FROM produk");
        $rowProduk = mysqli_fetch_array($sqlProduk);
         ?>




            <form role="setupForm" method="post" action="?page=produk">




    <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              
                                <small></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table id="mainTable" class="table table-striped">
                                <thead>
                                    <tr>
                                       <th>Title</th>
                                        <th>Main Title</th>
                                     
                                        <th>Action</th>
                                       
                                    </tr>

            
                                </thead>
                                <tbody>


                                    <tr>
                            
                                            <?php 
                                            $sql= $koneksi ->query("select *from produk where idproduk='1'");
                                            while($pecah = $sql->fetch_assoc()){ ?>


                                            <tr>
                                                <td><?php echo $pecah['heading'] ?></td>
                                            <td><?php echo $pecah['slogan'] ?></td>
                                          
                              <td><a href="?page=site&aksi=ubahmain&id==<?php echo $pecah['id']?> "class="btn btn-success">Ubah</a></td>
                    
                                        </tr>
                                   <?php } ?>
                                </tbody>
                              
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



                 <div class="col-lg-100">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="?page=produk&aksi=tambahproduk"class="btn btn-primary">Tambah  </a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Produk </th>
                                            <th>Icon</th>
                                            <th>Content</th>
                                            <th>Action</th>

                                        </tr>

                                    </thead>
                   
                                        <tr>
                                            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
                                            <style>
                                                select{
                                                    font-family: fontAwesome
                                                }
                                            </style>


                                    <?php

                                   

                                    $sql= $koneksi ->query("select *from produk");
                                    while($rowProduk = $sql->fetch_assoc()){

                                    

                                    ?>


                                        <tr>
                                            
                                            <td><?php echo $rowProduk['idproduk'] ?></td>
                                            <td><?php echo $rowProduk['produk'] ?></td>
                                            <td><?php echo $rowProduk['icon'] ?></td>
                                            <td><?php echo $rowProduk['content'] ?></td>


                                              <td>
                                              <a href="?page=produk&aksi=ubah&id=<?php echo $rowProduk['idproduk']?> "class="btn btn-success">Ubah  </a>  
                                               
</td>

                                            <td>
                                              <a onclick="return confirm('apakah anda yakin untuk menghapus data ini...???')" href="?page=produk&aksi=hapus&id=<?php echo $rowProduk['idproduk']?> "class="btn btn-warning">Hapus
                                              </a>  
                                               </td>
                                        </tr> 
                                  <?php } ?>
                                    </tbody>
                                         
                                    
                                        <tr>


                </div>


                </div>
        


               
        



           
                         
                            </tbody>
                        </table>

                            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Image
                               
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                      
                                        <th>Banner</th>
                                        <th>Action</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>



                                    <tr>
                                        
                                          <?php 
                                            $sql= $koneksi ->query("SELECT *from produk where idproduk='1'");
                                            while($ambil = $sql->fetch_assoc()){ ?>

                                          <td><img src="./images/<?php echo $ambil['banner']; ?>"width="200"></td>
                                        <td><a href="?page=produk&aksi=ubahimage&id=<?php echo $ambil['idproduk']?> "class="btn btn-success">Ubah</a></td>
                                         
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>







                                         
            
