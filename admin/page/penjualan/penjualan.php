<?php

    $kode =$_GET['kodepj'];

    $kasir=$data['nama'];

$koneksi=new mysqli("localhost","root","","db_pos");


?>



                        <div class="row clearfix">
                        <div class="body">
                        <form method="POST">

                        <div class="col-md-2">
                        <input type="text"name="kode"value="<?php echo $kode;?>"class="form-control"readonly=""  />
                        </div>


                        <div class="col-md-2">
                        <input type="text"name="kode_barcode"class="form-control"autofocus=""  />
                        </div>


                        <div class="col-md-2">                 
                        <input type="submit" name="simpan"value="Tambahkan"class="btn btn-primary">
                        </div>
                        </div>

                        </form>



<?php

        if (isset($_POST['simpan'])) {
            $date = date("y-m-d");
         

            $kd_PJ = $_POST['kode'];
            $barcode = $_POST['kode_barcode'];
            $barang =$koneksi->query("select * from tb_barang where kode_barcode='$barcode'");

            $data_barang=$barang->fetch_assoc();

            $harga_jual = $data_barang['harga_jual'];

            $jumlah = 1;

            $total =$jumlah * $harga_jual;
            
            $barang2=$koneksi->query("select * from tb_barang where kode_barcode='$barcode'");


                while($data_barang2 = $barang2->fetch_assoc()){
                $sisa =$data_barang2['stok'];


                if ($sisa==0) { 
                   ?>


                   <script type="text/javascript">

                    alert("Stok barang habis....Tidak Dapat Melakukan Penjualan");
                    window.location.href="?page=penjualan&kodepj=<?php echo $kode;?>"
                    else{
                        <?php  ?>


</script>
                   <?php
                }
                else{
                    $koneksi->query("insert into tb_penjualan (kode_penjualan,kode_barcode,jumlah,total,tgl_penjualan)values('$kd_PJ','$barcode','$jumlah','$total','$date')");
                }
            }



        }



?>

            <br><br><br>

            <form method="POST">

            <div class="col-md-2">

            <label for="">Pelanggan :</label>

            <select name="pelanggan" class="form-control show-tick">

            <?php 

                $pelanggan=$koneksi->query("select * from tb_pelanggan order by kode_pelanggan");

                while ($d_pelanggan=$pelanggan->fetch_assoc()) {
                    echo "

                <Option value ='$d_pelanggan[kode_pelanggan]'>$d_pelanggan[nama]</option>

                    ";
                   
                }


             ?>




        </select>
    </div>

<br><br><br>



 
        <div class="container-fluid">
            <div class="block-header">
            </div>
              
            
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Data Belanja
                            </h2>
                        
                        </div>

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-striped ">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Barcode</th>
                                            <th>Nama Barang </th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>



                                    <?php

                                    $no=1;

                                    $sql= $koneksi ->query("select *from tb_penjualan,tb_barang where 
                                                                tb_penjualan.kode_barcode=tb_barang.kode_barcode  AND kode_penjualan='$kode'");
                                       while($data = $sql->fetch_assoc()){

                                    

                                    ?>


                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['kode_barcode'] ?></td>
                                            <td><?php echo $data['nama_barang'] ?></td>
                                            <td><?php echo $data['harga_jual'] ?></td>
                                             <td><?php echo $data['jumlah'] ?></td>
                                            <td><?php echo $data['total'] ?></td>
                                          <td>

                                              <a href="?page=penjualan&aksi=tambah3&id=<?php echo $data['id']?>&kode_pj=<?php echo $data['kode_penjualan'] ?>& harga_jual=<?php echo $data['harga_jual'] ?>& kode_b=<?php echo $data['kode_barcode']?>" title="tambah"class="btn btn-success"><I class="material-icons">add</I></a> 

                                                

                                             <a href="?page=penjualan&aksi=kurang&id=<?php echo $data['id']?>&kode_pj=<?php echo $data['kode_penjualan'] ?>& harga_jual=<?php echo $data['harga_jual'] ?>& kode_b=<?php echo $data['kode_barcode']?>" title="tambah"class="btn btn-success"><I class="material-icons">remove</I></a> 

                                                <a onclick="return confirm('apakah anda yakin untuk menghapus data ini...???')" href="?page=penjualan&aksi=hapus3&id=<?php echo $data['id']?>&kode_pj=<?php echo $data['kode_penjualan'] ?>&harga_jual=<?php echo $data['harga_jual'] ?>$kode_b=<?php echo $data ['kode_barcode']?>&jumlah=<?php echo $data['jumlah']; ?>"title="hapus"class="btn btn-danger"><I class="material-icons">clear</I></a>

                                                 </td>


                                             
                                        </tr>
                                       <?php
                                                $total_bayar=$total_bayar+$data['total'];
                                        }


                        ?>
                        </tbody>

                        <tr>

                        <th colspan="5"style="text-align: right;"
                        >Total</th>

                        <td><input type="number"readonly=""style="text-align: right;" name="total_bayar"id="total_bayar" onkeyup="hitung();"value ="<?php echo $total_bayar;?>"></td>

                        </tr>

                        <tr>

                        <th colspan="5"style="text-align: right;"
                        >Diskon</th>

                        <td><input type="number"style="text-align: right;"onkeyup="hitung();"name="diskon" id="diskon"required="Masukkan Pembayaran"></td>

                        </tr>

                        <tr>

                        <th colspan="5"style="text-align: right;"
                        >Potongan Diskon</th>

                        <td><input type="number"style="text-align: right;"name="potongan"id="potongan"readonly=""></td>

                        </tr>


                        <tr>

                        <th colspan="5"style="text-align: right;"
                        >Sub Total</th>

                        <td><input type="number"style="text-align: right;"name="s_total"id="s_total"readonly=""></td>

                        </tr>

                        <tr>

                        <th colspan="5"style="text-align: right;"
                        >Bayar</th>

                        <td><input type="number"style="text-align: right;"onkeyup="hitung();"name="bayar"id="bayar" min="0" required="Masukkan Pembayaran"></td>

                        </tr>

                        <tr>

                        <th colspan="5"style="text-align: right;"
                        >Kembali</th>



                        <td><input type="number"style="text-align: right;"name="kembali"id="kembali"readonly=""min="0">

                        </td>



                        <tr>

                        <th colspan="5"style="text-align: right;">

                        <td> <input type="submit" name="simpan_pj"value=" Simpan"class="btn btn-info"></td></th></tr>

                        
                            <tr>
                        <th colspan="5"style="text-align: right;">

                            </th></tr>

                    
                     






                                </table>
                            
                            </div></div></div>
                    </form>




                    <?php 

                    if (isset($_POST['simpan_pj'])) {

                        $pelanggan=$_POST['pelanggan'];
                        $total_bayar =$_POST['total_bayar'];
                        $diskon =$_POST['diskon'];
                        $potongan =$_POST['potongan'];
                        $s_total =$_POST['s_total'];
                        $bayar =$_POST['bayar'];
                        $kembali =$_POST['kembali'];

                        $sql = $koneksi->query("select * from tb_penjualan where total ='$total_bayar' ");
                            while ($data = $sql->fetch_assoc()){
                                $kembali = $data['total'];
                            if ($kembali <= $bayar){
                                ?>
                                <script type="text/javascript">
                                    alert("Pembayaran Sukses");
                                    window.location.href="page/penjualan/cetak.php?kode_pjl=<?php echo $kode; ?>&kasir=<?php echo $kasir; ?>'";
                                </script>
                                <?php
                            }else{
                                ?>
                                <script type="text/javascript">
                                    alert("Pembayaran Gagal");
                                    window.location.href="?page=penjualan&kodepj=<?php echo $kode;?>";
                                </script>
                                <?php
                            }
                            }

                        $sql=$koneksi->query("insert into tb_penjualan_detail(kode_penjualan,bayar,kembali,diskon,potongan,total_b)value('$kode','$bayar','$kembali','$diskon','$potongan','$s_total')");

                        $sql2=$koneksi->query("update tb_penjualan set id_pelanggan='$pelanggan' where kode penjualan='$kode'");
                       
                    }


                     ?>



                    <script type="text/javascript">

                    function hitung() {
                    var total_bayar = document.getElementById('total_bayar').value;

                    var diskon= document.getElementById('diskon').value;
                    var diskon_pot = parseInt(total_bayar)*parseInt(diskon)/parseInt(100);


                    if(!isNaN(diskon_pot)) {

                    var potongan= document.getElementById('potongan').value = diskon_pot;
                    }

                    var sub_total = parseInt(total_bayar)-parseInt(potongan);

                    if(!isNaN(sub_total)) {

                    var s_total = document.getElementById('s_total').value = sub_total;
                    }


                    var bayar= document.getElementById('bayar').value;

                    var bayar_b = parseInt(bayar)-parseInt(s_total);

                    if(!isNaN(bayar_b)) {

                    document.getElementById('kembali').value = bayar_b;
                    }
                    
                    }

                </script>
        
                             