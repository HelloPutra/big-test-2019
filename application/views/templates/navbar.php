			<!-- BEGIN NAVBAR -->
				<!-- computer only navbar -->
				<div class="computer only row">
					<div class="column">
						<div class="ui top fixed menu navcolor">
							<div class="item">
								<img src="<?= base_url('assets/images/logo.png'); ?>" alt="SimpleIU">
							</div>
							<div class="left menu">
								<div class="nav item">
									<strong class="navtext">SIMPLE-UI</strong>
								</div>
							</div>
							<div class="ui top pointing dropdown admindropdown link item right">
								<img class="imgrad" src="<?= base_url('assets/images/user.png'); ?>" alt="">
								<span style="text-transform: uppercase;" class="clear navtext"><strong><?= $this->session->userdata('nama'); ?></strong></span>
								<i class="dropdown icon navtext"></i>
								<div class="menu">
									<a href="<?= base_url('auth/do_logout'); ?>" class="item"><p><i class="sign out alternate icon"></i>Logout</p></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end computer only navbar -->
				<!-- mobile and tablet only navbar -->
				<div class="tablet mobile only row">
					<div class="column">
				    <div class="ui top fixed menu navcolor">
						<a id="showmobiletabletsidebar" class="item navtext"><i class="content icon"></i></a>
						<div class="right menu">
							<div class="item">
								<strong class="navtext">SIMPLE-UI</strong>
							</div>
							<div class="item">
								<img src="<?= base_url('assets/images/logo.png'); ?>">
							</div>
						</div>
					</div>
					</div>
				</div>
				<!-- end mobile and tablet only navbar -->
			<!-- END NAVBAR -->