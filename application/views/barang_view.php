<!DOCTYPE html>
<html>
    <head>
    	<title>PENSVENTORY : Home</title>

    	<!--bootstrap-->
        <link href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">

        <!--js-->
        <script src="<?php echo base_url('bootstrap/js/jquery-2.1.4.min.js'); ?>"></script>
        <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>

        <!--css ku-->
        <link href="<?php echo base_url('css/pensventory.css'); ?>" rel="stylesheet" type="text/css">

        <!--font awesome-->
        <link href="<?php echo base_url('bootstrap/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
        
        <!--icon-->
        <link href="<?php echo base_url('img/icon.ico'); ?>" rel="shortcut icon">
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    	<!--START NAVBAR FIXED TOP-->
            <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand page-scroll" href="home">
                            <i id="tblue" class="fa fa-inbox"></i> <span class="tblue">PENS</span><span class="twhite">VENTORY</span>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="home" class="page-scroll"><i id="tblue" class="fa fa-home"></i>  HOME</a></li>
                            <li><a href="barang" class="page-scroll"><i id="tblue" class="fa fa-list"></i>  BARANG</a></li>
                            <li role="presentation" class="dropdown">
                            	<a id="navlog" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i id="tblue" class="fa fa-user"></i> <?php echo $username; ?></a>
                            	<ul id="menu" class="dropdown-menu">
                                    <li><a href="cloud" class="page-scroll padding2"><i id="tblue" class="fa fa-cloud"></i>  MY CLOUD</a></li>
                            		<li><a href="barang/logout" class="page-scroll padding2"><i id="tblue" class="fa fa-sign-out"></i>  SIGN OUT</a></li>
                            	</ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        <!-- END NAVBAR -->
        <div class="bungkus1">
        	<div class="container">
                <?php echo form_open('cari'); ?>
                <div class="row">
        			<div class="col-md-3"></div>
			        <div class="col-md-6">
					    <div class="input-group">
					      <input type="text" class="form-control" id="cari" name="cari" placeholder="Search for...">
					      <span class="input-group-btn">
					        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
					      </span>
					    </div>
					</div>
        		</div>
                <?php echo form_close(); ?>
        		<div class="row">
        			<div class="col-md-12 padding">
        				<img class="box-pv" src="<?php echo base_url('img/pvhd.png'); ?>">
        			</div>
                </div>
                <div class="col-md-2"></div>
                
                <!-- Modal -->
                <?php echo form_open('proses'); ?>
                    <div id="myModal2" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Pinjam Barang</h4>
                          </div>
                          <div class="modal-body">
                            <div class="form-group">
                              <label for="usr">Tanggal Pinjam:</label>
                              <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" required>
                            </div>
                              <div class="form-group">
                              <label for="usr">Tanggal kembali:</label>
                              <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" required>
                            </div>
                            <div class="form-group">
                              <label for="usr">Jumlah:</label>
                              <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                            </div>
                            <div class="form-group">
                              <label for="usr">Pemilik:</label>
                                <div id="owner" name="owner">&nbsp;</div>
                            </div>
                            <input type="hidden" class="form-control" id="id_user" name="id_user">
                            <input type="hidden" class="form-control" id="id_barang" name="id_barang">
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-mdl">Pinjam</button>
                          </div>
                        </div>
                      </div>
                <?php echo form_close(); ?>
                <!-- End Modal -->
            </div>
        		<div class="row">
			        <div class="col-md-12">
                        <table class="table">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th colspan="2">Harga Sewa</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th>Peminjaman</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i=1;
                                foreach ($data_brg as $isi)
                                {
                                    echo "<tr >";
                                    echo "<td style='vertical-align:middle'>$i</td>";
                                    echo "<td style='vertical-align:middle'>$isi->nama</td>";
                                    echo "<td style='vertical-align:middle'>$isi->jumlah</td>";
                                    echo "<td style='vertical-align:middle'>Rp.</td>";
                                    echo "<td style='vertical-align:middle' align='right'> $isi->harga / hari</td>";
                                    ?>
                                    <td><img src='<?php echo base_url("img/barang/$isi->gambar"); ?>' width='50px' height='50px' /></td>
                                    <?php
                                    echo "<td style='vertical-align:middle'>$isi->deskripsi</td>";
                                    ?>
                                    <td><a href="#" class="pinjam" data-toggle="modal" data-target="#myModal2"
                                           data-id="<?php echo $isi->bid; ?>"
                                           data-id_user="<?php echo $isi->id_user; ?>"
                                           data-jumlah="<?php echo $isi->jumlah; ?>"
                                           data-owner="<?php echo $isi->username." - ".$isi->email; ?>"
                                           data-url="proses.php?"><i id="tblue" class="fa fa-download"> PINJAM</i>
                                    </a></td>
                                    <?php
                                    echo "</tr>";
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                        </div>
                </div>
        	</div>
        <script type="text/javascript">;
            $(function(){
            $('.pinjam').on('click', function(){
                $jumlah = $(this).attr('data-jumlah');
                $id_user = $(this).attr('data-id_user');
                $id_barang = $(this).attr('data-id');
                $owner = $(this).attr('data-owner');
                $('#jumlah').val($jumlah);
                $('#id_user').val($id_user);
                $('#id_barang').val($id_barang);
                $('#owner').html($owner);
            })
            });
        </script>
    </body>
</html>