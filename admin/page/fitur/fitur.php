
<?php
define('inc_access', TRUE);
$koneksi=new mysqli("localhost","root","","cms2");
    $pageMsg="";
    //update table on submit
    if (!empty($_POST)) {
        
        $fiturUpdate = "UPDATE fitur SET heading='".$_POST["heading"]."',main_title='".$_POST["main_title"]."', subtitle='".$_POST["subtitle"]."'";
        mysqli_query($db_conn, $fiturUpdate);
        $pageMsg="<div class='alert alert-success'>The setup section has been updated.<button type='button' class='close' data-dismiss='alert' onclick=\"window.location.href='fitur.php'\">×</button></div>";
    }

    $sqlFitur = mysqli_query($db_conn, "SELECT heading,main_title ,subtitle FROM fitur");
    $row  = mysqli_fetch_array($sqlFitur);
$koneksi=new mysqli("localhost","root","","cms2");


?>
   <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
            Fitur
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


            <form role="setupForm" method="post" action="fitur.php">
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
                                       
                                        <th>Mainitle</th>
                                        <th>Subtitle </th>
                                        <th>Action</th>
                                       
                                    </tr>

            
                                </thead>
                                <tbody>


                                    <tr>
                            
                                            <?php 
                                            $sql= $koneksi ->query("select *from fitur where id='1'");
                                            while($pecah = $sql->fetch_assoc()){ ?>


                                            <tr>
                                            <td><?php echo $pecah['main_title'] ?></td>
                                            <td><?php echo $pecah['subtitle'] ?></td>
                                          
                              <td><a href="?page=fitur&aksi=ubahfit&id==<?php echo $pecah['id']?> "class="btn btn-success">Ubah</a></td>
                    
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
                            <a href="?page=fitur&aksi=tambahfitur"class="btn btn-primary">Tambah  </a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Fitur </th>
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

                                   

                                    $sql= $koneksi ->query("select *from sub_fitur");
                                    while($rowSub_fitur = $sql->fetch_assoc()){

                                    

                                    ?>


                                        <tr>
                                            
                                            <td><?php echo $rowSub_fitur['idfitur'] ?></td>
                                            <td><?php echo $rowSub_fitur['title'] ?></td>
                                            <td><?php echo $rowSub_fitur['icon'] ?></td>
                                            <td><?php echo $rowSub_fitur['teks'] ?></td>


                                              <td>
                                              <a href="?page=fitur&aksi=ubah2&id=<?php echo $rowSub_fitur['idfitur']?> "class="btn btn-success">Ubah



                                              </a>  
                                               
</td>                                           


                                              <td>
                                              <a onclick="return confirm('apakah anda yakin untuk menghapus data ini...???')" href="?page=fitur&aksi=hapusfit&id=<?php echo $rowSub_fitur['idfitur']?> "class="btn btn-warning">Hapus



                                              </a>  
                                               
</td>
                                        </tr> 
                                  <?php } ?>
                                    </tbody>
                                         
                                    
                                        <tr>




