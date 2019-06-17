   <?php $koneksi=new mysqli("localhost","root","","cms2"); ?>



    <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Navbar
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
                                        <th>Button</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                       
                                    </tr>

            
                                </thead>
                                <tbody>


                                    <tr>
                            
                                            <?php 
                                            $sql= $koneksi ->query("select *from setup");
                                            while($pecah = $sql->fetch_assoc()){ ?>


                                            <tr>
                                            <td><?php echo $pecah['title'] ?></td>
                                            <td><?php echo $pecah['author'] ?></td>
                                            <td><?php echo $pecah['keywords'] ?></td>
                                            <td><?php echo $pecah['description'] ?></td>
                              <td><a href="?page=site&aksi=ubaha&id==<?php echo $pecah['id']?> "class="btn btn-success">Ubah</a></td>
                    
                                        </tr>
                                   <?php } ?>
                                </tbody>
                              
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>





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
                                      
                                        <th>Logo</th>
                                        <th>Action</th>
                                        <th>Jumbotron</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>



                                    <tr>
                                        
                                          <?php 
                                            $sql= $koneksi ->query("select *from setup");
                                            while($ambil = $sql->fetch_assoc()){ ?>

                                          <td><img src="./images/<?php echo $ambil['logo']; ?>"width="200"></td>
                                       <td><a href="?page=site&aksi=ubahlogo&id=<?php echo $ambil['id']?> "class="btn btn-success">Ubah</a>


                                          <td><img src="./images/<?php echo $ambil['jumbotron']; ?>"width="200"></td>
                                        <td><a href="?page=site&aksi=ubahjumbotron&id=<?php echo $ambil['id']?> "class="btn btn-success">Ubah</a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>





