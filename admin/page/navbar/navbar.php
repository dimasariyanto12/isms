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




            <form role="setupForm" method="post" action="produk.php">





                 <div class="col-lg-100">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Produk
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Navbar </th>
                                           
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

                                   

                                    $sql= $koneksi ->query("select *from navbar");
                                    while($tampil = $sql->fetch_assoc()){

                                    

                                    ?>


                                        <tr>
                                            
                                            <td><?php echo $tampil['id'] ?></td>
                                            <td><?php echo $tampil['navbar'] ?></td>


                                              <td>
                                              
                                                 <a href="?page=navbar&aksi=ubahs&id=<?php echo $tampil['id']?> "class="btn btn-success">Ubah



                                              </a>  


                                              </a>  
                                               
</td>
                                        </tr> 
                                  <?php } ?>
                                    </tbody>
                                         
                                    
                                        <tr>


                </div>


                </div>
        

