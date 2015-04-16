<?php
// $error='';
// //proses simpan
// include 'config/connection_db.php';
// if(isset($_POST['title'])){
// 	if(empty($_POST['title']) or empty($_POST['address'])  or empty($_POST['longtitude'])  or empty($_POST['latitude']) or empty($_POST['category'])  or empty($_POST['description'] or empty($_POST['photo']) )){
// 		$error='Semua harus diisi';
// 	}else{
// 		$query="INSERT INTO ws_location VALUES ('','".$_POST['title']."','".$_POST['address']."','".$_POST['longtitude']."','".$_POST['latitude']."','".$_POST['category']."','".$_POST['description']."','".$_POST['photo']."')";

// 		mysql_query($query);
// 		if(!$error=mysql_error()){
// 			$query="SELECT * FROM ws_location ORDER BY id_location DESC";
// 			$hasil=mysql_query($query);
// 			if(mysql_num_rows($hasil)>0){
// 				$barisdata=mysql_fetch_assoc($hasil);
// 				$id_terakhir=$barisdata['id_location'];
// 				$gambar='';
// 				if(isset($_FILES['gambar']['name']) and !$_FILES['gambar']['error']){
// 					$dot=strrpos($_FILES['gambar']['name'],'.');
// 					$ext=substr($_FILES['gambar']['name'],$dot+1);
// 					$file=substr($_FILES['gambar']['name'],0,$dot);
// 					$tujuan="photo/".$id_terakhir.".jpg";
// 					if(copy($_FILES['gambar']['tmp_name'], $tujuan)){
// 						$gambar="berhasil";
// 					}
// 				}
// 			}
// 			echo "<script>document.location.href='location.php'</script>";
// 		}
// 	}
// }
?>
<?php include "header.php";?>
	<!-- PAGE -->
	<section id="page">
				<!-- SIDEBAR -->
				<div id="sidebar" class="sidebar">
					<div class="sidebar-menu nav-collapse">
						<div class="divide-20"></div>
						<!-- SEARCH BAR -->
						<div id="search-bar">
							<input class="search" type="text" placeholder="Search"><i class="fa fa-search search-icon"></i>
						</div>
						<!-- /SEARCH BAR -->
						
						<!-- SIDEBAR QUICK-LAUNCH -->
						<!-- <div id="quicklaunch">
						<!-- /SIDEBAR QUICK-LAUNCH -->
						
						<!-- SIDEBAR MENU -->
						<ul>
							<li>
								<a href="index.html">
								<i class="fa fa-tachometer fa-fw"></i> <span class="menu-text">Dashboard</span>
								<span class="selected"></span>
								</a>					
							</li>
							<li><a class="" href="location.php"><i class="fa fa-desktop fa-fw"></i> <span class="menu-text">Data Location</span></a></li>				
						</ul>
						<!-- /SIDEBAR MENU -->
					</div>
				</div>
				<!-- /SIDEBAR -->
		<div id="main-content">
			<div class="container">
				<div class="row">
					<div id="content" class="col-lg-12">
						<!-- PAGE HEADER-->
						<div class="row">
							<div class="col-sm-12">
								<div class="page-header">
									<!-- STYLER -->
									
									<!-- /STYLER -->
									<!-- BREADCRUMBS -->
									<ul class="breadcrumb">
										<li>
											<i class="fa fa-home"></i>
											<a href="index.html">Home</a>
										</li>
										<li>
											<a href="#">Data Location</a>
										</li>
										<li>Table Data Location</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Form Create Location</h3>
										
										<!-- DATE RANGE PICKER -->
										<span class="date-range pull-right">
											<div class="btn-group">
												<a class="js_update btn btn-default" href="data_pendukuhan.html">Data Location</a>
											</div>
										</span>
										<!-- /DATE RANGE PICKER -->
									</div>
									<div class="description"></div>
								</div>
							</div>
						</div>
						<!-- /PAGE HEADER -->
						<!-- EXPORT TABLES -->
						<div class="row">
							<div class="col-md-12">
								<!-- BOX -->
										<div class="box border primary">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i>Form</h4>												
											</div>
											<div class="box-body big">
											<?php 
												// if($error!=''){
											?>
												<!-- <div class="alert alert-error">
													<button type="button" class="close" data-dismiss="alert">×</button>
													<strong>Error!</strong>  -->
															<?php 
																// echo $error
															?>
												<!-- </div> -->
											<?php 
												// }
											?>
												<form class="form-horizontal" method="post" action="location_create_process.php" enctype="multipart/form-data">
												  <div class="form-group">
													<label class="col-sm-3 control-label">Title</label>
													<div class="col-sm-7">
													  <input type="text" class="form-control" name="title" required>
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-3 control-label">Address</label>
													<div class="col-sm-7">
													 <textarea class="form-control" rows="3" name="address" required></textarea>
													</div>
												  </div>											 
												  <!-- <div class="form-group">
													<label class="col-sm-3 control-label">Photo</label>
													<div class="col-sm-7">
													  <input type="tes" class="form-control" name="photo" required>
													</div>
												  </div> -->
												  <div class="form-group">
													<label class="col-sm-3 control-label" for="inputGambar">Upload Photo</label>
													<div class="col-sm-7">
													  <input type="file" id="inputGambar" class="form-control" name="photo">
													</div>
												  </div>												 
												  <div class="form-group">
													<label class="col-sm-3 control-label">longtitude</label>
													<div class="col-sm-7">
													  <input type="text" class="form-control" name="longtitude" required>
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-3 control-label">latitude</label>
													<div class="col-sm-7">
													  <input type="text" class="form-control" name="latitude" required>
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-3 control-label">Category</label>
													<div class="col-sm-7">
													  <input type="text" class="form-control" name="category" required>
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">Description</label>
													<div class="col-sm-7">
													 <textarea class="form-control" rows="3" name="description" required></textarea>
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-3 control-label"></label>
													<div class="col-sm-7">
													 <button type="submit" class="btn btn-success">Submit</button>
													</div>
												  </div>
												 </form>
											</div>
										</div>
								<!-- /BOX -->
							</div>
						</div>
						<!-- /EXPORT TABLES -->
					</div><!-- /CONTENT-->
				</div>
			</div>
		</div>
	</section>
	<!--/PAGE -->
	<!-- JAVASCRIPTS -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- JQUERY -->
	<script src="asset/js/jquery/jquery-2.0.3.min.js"></script>
	<!-- JQUERY UI-->
	<script src="asset/js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
	<!-- BOOTSTRAP -->
	<script src="asset/bootstrap-dist/js/bootstrap.min.js"></script>	
	<!-- DATE RANGE PICKER -->
	<script src="asset/js/bootstrap-daterangepicker/moment.min.js"></script>
	
	<script src="asset/js/bootstrap-daterangepicker/daterangepicker.min.js"></script>
	<!-- SLIMSCROLL -->
	<script type="text/javascript" src="asset/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js"></script><script type="text/javascript" src="asset/js/jQuery-slimScroll-1.3.0/slimScrollHorizontal.min.js"></script>
	<!-- COOKIE -->
	<script type="text/javascript" src="asset/js/jQuery-Cookie/jquery.cookie.min.js"></script>
	<!-- CUSTOM SCRIPT -->
	<script src="asset/js/script.js"></script>
	<script>
		jQuery(document).ready(function() {		
			App.setPage("widgets_box");  //Set current page
			App.init(); //Initialise plugins and elements
		});
	</script>
	<!-- /JAVASCRIPTS -->
</body>
</html>