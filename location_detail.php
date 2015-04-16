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
										<li>Detail Data Location</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Detail Data Location</h3>
										
										<!-- DATE RANGE PICKER -->
										<span class="date-range pull-right">
											<div class="btn-group">
												<a class="js_update btn btn-default" href="location_create.php">Create Location</a>
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
									<div class="box-body">
									 <?php
			                            error_reporting(0);
	                                	include "config/connection_db.php";
	                                    $title=$_GET['title'];
	                                    $query="SELECT * FROM ws_location";
	                                    $hasil=mysql_query($query) or die(mysql_error());
	                                    if ($dataku=mysql_fetch_array($hasil)) {
			                        ?>
										<table class="table">											
											<tbody>
											  <tr>
												<td><h4>Title</h4></td>
												<td><h4><?php echo $dataku['title'];?><h4></td>
											  </tr>
											  <tr>
												<td><h4>Addresss</td>
												<td><h4><?php echo $dataku['address'];?></td>
											  </tr>
											  <tr>
												<td><h4>Photo</td>
													<?php
														$dataku['gambar']="<img src='photo/".$dataku['id_location'].".jpg' style='max-width:400px;max-height:400px;'/>";
														echo $dataku['gambar']
													?>
												</td>												
											  </tr>
											  <tr>
												<td><h4>Longtitude</td>
												<td><h4><?php echo $dataku['longtitude'];?></td>
											  </tr>
											  <tr>
												<td><h4>Latitude</td>
												<td><h4><?php echo $dataku['latitude'];?></td>
											  </tr>
											  <tr>
												<td><h4>Category</td>
												<td><h4><?php echo $dataku['category'];?></td>
											  </tr>
											  <tr>
												<td><h4>Description</td>
												<td><h4><?php echo $dataku['description'];?></td>
											  </tr>											  
											</tbody>
										  </table>
									<?php
										}
									?>
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
	<!-- BLOCK UI -->
	<script type="text/javascript" src="js/jQuery-BlockUI/jquery.blockUI.min.js"></script>
	<!-- DATA TABLES -->
	<script type="text/javascript" src="asset/js/datatables/media/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="asset/js/datatables/media/assets/js/datatables.min.js"></script>
	<script type="text/javascript" src="asset/js/datatables/extras/TableTools/media/js/TableTools.min.js"></script>
	<script type="text/javascript" src="asset/js/datatables/extras/TableTools/media/js/ZeroClipboard.min.js"></script>
	<!-- COOKIE -->
	<script type="text/javascript" src="asset/js/jQuery-Cookie/jquery.cookie.min.js"></script>
	<!-- CUSTOM SCRIPT -->
	<script src="asset/js/script.js"></script>
	<script>
		jQuery(document).ready(function() {		
			App.setPage("dynamic_table");  //Set current page
			App.init(); //Initialise plugins and elements
		});
	</script>
	<!-- /JAVASCRIPTS -->
</body>
</html>