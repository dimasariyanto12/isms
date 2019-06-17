                 
                        <?php

                        $koneksi=new mysqli("localhost","root","","cms2");
                          $sql=$koneksi->query("SELECT *from contactus where id='$_GET[id]'");
                        $tampil=$sql->fetch_assoc();
                      

                        ?>


                        <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                        <div class="header">
                        <h2>
                       Ubah Contact
                        </h2>
                        </div>



                        <div class="body">
                        <form method="POST">



                        <label for="">Main Title </label>
                        <div class="form-group">
                        <div class="form-line">
                        <input type="text"name="main_title" value="<?php echo $tampil['main_title'];?>"class="form-control"  />
                        </div>
                        </div>



                        <label for="">Alamat </label>
                        <div class="form-group">
                        <div class="form-line">
                        <input type="text"name="address" value="<?php echo $tampil['address'];?>"class="form-control"  />
                        </div>
                        </div>




                        <label for="">Call Us </label>
                        <div class="form-group">
                        <div class="form-line">
                        <input type="text"name="phone" value="<?php echo $tampil['phone'];?>"class="form-control"  />
                        </div>
                        </div>




                        <label for="">Whatsapp  </label>
                        <div class="form-group">
                        <div class="form-line">
                        <input type="text"name="state" value="<?php echo $tampil['state'];?>"class="form-control"  />
                        </div>
                        </div>



                        <label for="">Email  </label>
                        <div class="form-group">
                        <div class="form-line">
                        <input type="text"name="email" value="<?php echo $tampil['email'];?>"class="form-control"  />
                        </div>
                        </div>




                        <label for="">Send To Email  </label>
                        <div class="form-group">
                        <div class="form-line">
                        <input type="text"name="sendtoemail" value="<?php echo $tampil['sendtoemail'];?>"class="form-control"  />
                        </div>
                        </div>


                        <input type="submit" name="simpan"value="Simpan"class="btn btn-primary">
                         

                        </form>

                        <?php

                        if(isset($_POST['simpan'])){

                        $main_title =$_POST['main_title'];
                        $address =$_POST['address'];
                        $phone =$_POST['phone'];
                        $state =$_POST['state'];
                        $email =$_POST['email'];

                        $sendtoemail =$_POST['sendtoemail'];
                        

                        $sql = $koneksi->query ("UPDATE contactus SET main_title='$main_title',address='$address' ,phone='$phone' ,state='$state',email='$email',sendtoemail='$sendtoemail'   where id='$_GET[id]'");

                        if($sql){
                        ?>

                        <script type="text/javascript">
                        alert("Data berhasil Diubah");
                        window.location.href="?page=contact";
                        </script>

                        <?php


                        }
                        }
                        ?> 

