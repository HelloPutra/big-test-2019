				<!-- BEGIN SIDEBAR -->
				<!-- mobile and tablet only sidebar -->
				<div class="tablet mobile only row">
					<div id="mobiletabletsidebar" class="mobiletabletsidebar animate hidden">
						<div class="ui left fixed vertical menu scrollable">
							<div class="item">
								<table>
									<tr>
										<td>
											<img class="ui mini image" src="<?= base_url('assets/images/logo.png'); ?>">
										</td>
										<td>
											<span class="clear"><strong>SIMPLE-UI</strong></span>
										</td>
									</tr>
								</table>
							</div>
							<a class="item" href="<?= base_url('dashboard/') ?>"><i class="home icon"></i> Dashboard</a>
							<a class="item" href="<?= base_url('komoditas/') ?>"><i class="database icon"></i> Komoditas</a>
							<a class="item" href="table.html"><i class="user icon"></i> Surveyor</a>		
							<a class="item" href="table.html"><i class="user icon"></i> Pengunjung</a>
							<div class="item" id="hidemobiletabletsidebar">
								<button class="fluid ui button">
									Close
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- end mobile and tablet only sidebar -->
				<!-- computer only sidebar -->
				<div class="computer only row">
					<div class="left floated three wide computer column" id="computersidebar">
						<div class="ui vertical fluid menu scrollable" id="simplefluid">
							<div class="clearsidebar"></div>
							<div class="item">
								<img src="<?= base_url('assets/images/user.png'); ?>" id="sidebar-image">
							</div>
							<a class="item" href="<?= base_url('dashboard/') ?>"><i class="home icon"></i> Dashboard</a>
							<a class="item" href="<?= base_url('komoditas/') ?>"><i class="database icon"></i> Komoditas</a>
							<a class="item" href="table.html"><i class="user icon"></i> Surveyor</a>		
							<a class="item" href="table.html"><i class="user icon"></i> Pengunjung</a>
							<a class="item"></a>
						</div>
					</div>
				</div>
				<!-- end computer only sidebar -->
				<!-- END SIDEBAR -->
			</div>
		</div>