
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">
<?php
define('inc_access', TRUE);


    $pageMsg="";
    //update table on submit
    if (!empty($_POST)) {
        
        $hargaUpdate = "UPDATE harga SET heading='".$_POST["heading"]."',nama_produk1='".$_POST["nama_produk1"]."', harga_produk1='".$_POST["harga_produk1"]."'
        ,nama_produk2='".$_POST["nama_produk2"]."', harga_produk2='".$_POST["harga_produk2"]."',
        nama_produk3='".$_POST["nama_produk3"]."', harga_produk3='".$_POST["harga_produk3"]."' ";
        mysqli_query($db_conn, $hargaUpdate);
        $pageMsg="<div class='alert alert-success'>The setup section has been updated.<button type='button' class='close' data-dismiss='alert' onclick=\"window.location.href='Harga.php'\">×</button></div>";
    }

    $sqlHarga= mysqli_query($db_conn, "SELECT idharga,heading,nama_produk,harga_produk,satuan FROM harga");
    $rowHarga  = mysqli_fetch_array($sqlHarga);
    $koneksi=new mysqli("localhost","root","","cms2");
?>
   <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
            Harga
                <small></small>
            </h1>
        </div>
    </div>


   <div class="row">
        <div class="col-lg-100">
        <?php
        if ($pageMsg !="") {
            echo $pageMsg;
        }
        ?>
            <form role="setupForm" method="post" action="tabelfitur.php">



   <div class="col-lg-100">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="?page=harga&aksi=tambahharga"class="btn btn-primary">Tambah  </a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Produk </th>
                                            <th>Harga</th>
                                            <th>Satuan</th>
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

                                   

                                    $sql= $koneksi ->query("select *from harga");
                                    while($rowHarga = $sql->fetch_assoc()){

                                    

                                    ?>


                                        <tr>
                                            
                                            <td><?php echo $rowHarga['idharga'] ?></td>
                                            <td><?php echo $rowHarga['nama_produk'] ?></td>
                                            <td><?php echo $rowHarga['harga_produk'] ?></td>
                                            <td><?php echo $rowHarga['satuan'] ?></td>


                                              <td>
                                              <a href="?page=harga&aksi=ubahhar&id=<?php echo $rowHarga['idharga']?>  "class="btn btn-success">Ubah
                                              </a>  
                                               


                                              <a onclick="return confirm('apakah anda yakin untuk menghapus data ini...???')" href="?page=harga&aksi=hapusharga&id=<?php echo $rowHarga['idharga']?> "class="btn btn-warning">Hapus
                                              </a>  
                                               </td>
                                        </tr> 
                                  <?php } ?>
                                    </tbody>
                                         
                                    
                                        <tr>



