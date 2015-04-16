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
							<li><a class="" href="location.php" target="_blank"><i class="fa fa-desktop fa-fw"></i> <span class="menu-text">Data Location</span></a></li>				
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
										<h3 class="content-title pull-left">Table Data Location</h3>
										
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
								<div class="box border purple">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>Data Location</h4>										
									</div>
									<div class="box-body">
										<table id="datatable1" cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered table-hover">
											
											<thead>
												<tr>
													<th>Title</th>
													<th>Address</th>
													<th>Description</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											<?php
												include "config/connection_db.php";
												$result=mysql_query("SELECT * FROM ws_location");
												 while ($dataku=mysql_fetch_array($result)) {
                                        					$title = stripslashes ($dataku['title']);
											?>
												<tr class="gradeX">
													<td><?php echo $dataku['title'];?></td>
													<td><?php echo $dataku['address'];?></td>
													<td><?php echo $dataku['description'];?></td>
													<td>
														<a href="location_detail.php?locationdetail=<?php echo $dataku['id_location'];?>"><button class="btn btn-inverse"><i class="fa fa-list-alt"></i> Detail</button></a>
														<a href="location_edit.php?id=<?php echo $dataku['id_location']; ?>"><button class="btn btn-info"><i class="fa fa-pencil-square-o"></i> Edit</button></a>
														<a href="location_delete.php?id_location=<?php echo $dataku['id_location']; ?>"><button class="btn btn-danger"><i class="fa fa-eraser"></i> Delete</button></a>
													</td>
												</tr>
											<?php } ?>												
											</tbody>
										</table>
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