<?php



include "../include/config.php";
//cek apakah user sudah login


//cek level user
// if($_SESSION['sebagai']!="mahasiswa"){ die("Anda bukan mahasiswa");}//jika bukan admin jangan lanjut

?>

<html>
<head>
<title><?php  echo $site ['judul'];?></title>
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"><!--font awesome-->
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"><!--bootstrap-->
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		<!--<link rel="stylesheet" type="text/css" href="css/cerulean-bootstrap.min.css">bootstrap tema -->
<!-- 		// <script src="../js/jquery.min.js"></script> -->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery-1.11.1.min.js"></script>

        <style>
        	.navbar-right {
  				margin-top: 5px;
			}

			.panel-red {
  				border-color: #d9534f;
			}

			.panel-yellow {
  				border-color: #f0ad4e;
			}

			.panel-yellow .panel-heading {
  				border-color: #f0ad4e;
  				color: #fff;
  				background-color: #f0ad4e;
			}

			.panel-red .panel-heading {
			  border-color: #d9534f;
			  color: #fff;
			  background-color: #d9534f;
			}

			.panel-green {
			  border-color: #5cb85c;
			}

			.panel-green .panel-heading {
			  border-color: #5cb85c;
			  color: #fff;
			  background-color: #5cb85c;
			}

			/*tweet*/
			.chat li {
			  margin-bottom: 10px;
			  padding-bottom: 5px;
			  border-bottom: 1px dotted #999;
			}

			.chat {
			  margin: 0;
			  padding: 0;
			  list-style: none;
			}

			.chat li .chat-body p {
			  margin: 0;
			}

			.chat-panel .panel-body {
			  height: 500px;
			  overflow-y: scroll;
			}

			.panel-body {
			  padding: 15px;
			}

			.chat li.left .chat-body {
			  margin-left: 60px;
			}

			.btn-outline {
			  color: inherit;
			  background-color: transparent;
			  transition: all .5s;
			}

			.btn-primary.btn-outline {
			  color: #5bc0de;
			}
        </style>
</head>
<body>
<div class="container">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="navbar-header">
	<a class="navbar-brand" href="index.php">sistem informasi harga</a>

	</div>

	<nav class="navbar navbar-deault navbar-fixed-top">
	<div class="container">
		<ul>
			<li class="navbar-btn navbar-right"><a href="www.youtube.com"><button type="button" class="btn btn-default ">Visit website</button></a></li>
		</ul>
	</div>
	</nav>

</nav>

	<div class="row" style="margin-top:100px";>
	    <div class="col-md-12">
		    	<div class="col-md-4">
		        <div class="panel panel-red">
		            <div class="panel-heading">
		                <h3 class="panel-title">tipe rumah</h3>
		            </div>
		            <div class="panel-body">
		                 <?php	
							$sql="SELECT SUM(harga_kpok) AS total FROM tb_kpok WHERE uname_userkpok = '$_SESSION[username]'"; 
							$hasil = mysql_query($sql); 
							$r1=mysql_fetch_assoc($hasil); 
							echo $r1['total'];
						?>
		            </div>
		        </div>
		        </div>
		        <div class="col-md-4">
		        <div class="panel panel-green">
		            <div class="panel-heading">
		                <h3 class="panel-title">total harga</h3>
		            </div>
		            <div class="panel-body">
		                 <?php
			
							$sql="SELECT SUM(harga_ksek) AS total FROM tb_ksek WHERE uname_userksek = '$_SESSION[username]'"; 
							$hasil = mysql_query($sql); 
							$r=mysql_fetch_assoc($hasil); 
							echo $r['total'];
						?>
		            </div>
		        </div>
		        </div>
		        <div class="col-md-4">
			        <div class="panel panel-primary">
			            <div class="panel-heading">
			                <h3 class="panel-title">lanjutkan print</h3>
			            </div>
			            <div class="panel-body">
			                <?php
				
								$sql="SELECT SUM(jumlah_pend) AS total FROM tb_pend WHERE uname_userpend = '$_SESSION[username]'"; 
								$hasil = mysql_query($sql); 
								$r2=mysql_fetch_assoc($hasil); 
								echo $r2['total'];
							?>
			            </div>
			        </div>
		        </div>  
		        
		     <!-- /.col-md-3 -->

		     <!-- start accordion -->

		     <div class="col-md-12">
		     	<div class="panel-group" id="accordion">

				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion" >
				          baca ketentuan yang berlaku !
				        </a>
				      </h4>
				    </div>
				    <div id="collapseOne" class="panel-collapse collapse in">
				      <div class="panel-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				  </div>
				</div>
		     </div>
		     <!-- / start accordion -->

	    </div>
	    <!-- /.col-sm-4 -->
    </div>

	<!-- TABEL -->
	<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">kalkulasi harga</h1>
            </div>
                <!-- /.col-lg-9+3 -->

            <!-- /.row -->
            <div class="row" >
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>pilih ukuran</h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                         <th style="border: 1px solid black"; >#</th>
										 <th style="border: 1px solid black";>nama</th>
										 <th style="border: 1px solid black";>jenis</th>
										 <th style="border: 1px solid black";>jumlah</th>
										 <th style="border: 1px solid black";>harga</th>
										 <th style="border: 1px solid black";>note</th>
                                        </tr>
                                    </thead>
                                    <?php
									include "../function/fungsi_user.php";
									tampilkpok();
									?>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>Cara menambahkan dan mengurangi kebutuhan pokok</h4>
                                <p>cukup isikan data seperti biasa lalu click tombol "action" yang di inginkan.khusus untuk menambah anda tidak perlu mengisi kode kebutuhan karna terisi secara otomatis</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div>

                            <div class="col-md-12">
	                            <form action="../include/prosescruduser.php" method="POST">
								<table>
									<div class="col-md-6">
										<div class="form-group">
											<label>#kode</label>
											<input type="text" class="form-control" name="kode_kpok" placeholder="hanya untuk hapus/update">
										</div>
										<div class="form-group">
											<!-- <label>tersembunyi kode kpok</label> -->
											<input type="hidden" class="form-control" name="uname_userkpok" value="<?php echo $user->uname_user;?>">
										</div>	
										<div class="form-group">
											<label>kategori</label><a href="cat.php"><button  type="button" class="btn pull-right btn-outline btn-primary btn-xs" ><i class="fa fa-plus fa-primary"></i></button></a>
											<select class="form-control" name="jenis_kpok">
												<option>--pilih kategori--</option>
												<?php tampilkatkebopt(); ?>
											</select>
										</div>

										<div class="form-group">
											<label>nama kebutuhan</label>
											<input type="text" class="form-control" type="text" name="nama_kpok" placeholder="spp">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>jumlah</label>
											<input type="text" class="form-control" type="text" name="jumlah_kpok" placeholder="1">
										</div>
										<div class="form-group">
											<label>harga</label>
											<input type="text" class="form-control" type="text" name="harga_kpok" placeholder="Rp.10.000">
										</div>
										<div class="form-group">
											<label>note</label>
											<textarea class="form-control" rows="3" name="note_kpok" ></textarea>
										</div>
									</div>
								</table>

								<br>
								<br>
								<input type="submit" class="btn btn-sm btn-success" name="tambah" value="simpan">
								<input type="submit" class="btn btn-sm btn-success" name="update" value="ubah">
								<input type="submit" class="btn btn-sm btn-success" name="hapus" value="hapus">
								<input type="reset" class="btn btn-sm btn-success">
								
								</form>
							</div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-9 -->


            <!-- tweet isi -->



        	    <!-- /.panel -->
            </div>
            <!-- /.row -->

    </div>
    <!-- end o table -->

</div>
</body>
</html>

