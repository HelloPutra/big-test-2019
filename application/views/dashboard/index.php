		<!-- BEGIN CONTEN -->
		<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
			<div class="ui container grid">
				<div class="row">
					<div class="fifteen wide computer sixteen wide phone centered column">
						<h2><i class="home icon"></i> DASHBOARD</h2>
						<div class="ui divider"></div>
						<div class="ui grid">
							<!-- BEGIN STATISTIC ITEM -->
							<!-- Begin Palindrome No. 1 -->
							<div class="sixteen wide computer sixteen wide phone centered column">
								<h4>PALINDROME NO. 1</h4>
								<div class="ui tall stacked segment">
									<form action="" method="post">
										<div class="ui form">
									        <div class="field">
									            <label>JUMLAH INPUT</label>
									            <input name="jumlah" type="number">
									        </div>
									    </div>	
									    <br>
									    <button name="tambah" style="width: 100%;" class="ui primary button">
								            PROSES
								        </button>
									</form>
									<?php if(isset($_POST["tambah"])){ ?>
									<br><br>
								    <form action="<?= base_url('Dashboard/do_palindrome'); ?>" method="post">
										<div class="ui form">
									        <?php
												$jumlah = $_POST['jumlah'];
												for($a=1;$a<=$jumlah;$a++){ ?>
													<div class="field">
													    <label>INPUT KE <?= $a?></label>
													    <input name="huruf<?php echo $a; ?>" type="text" maxlength="1" required>
													</div>
									        <?php } ?>
									        <input type="hidden" name="juminp" value="<?php echo $jumlah?>">
											<tr>
												<td><input type="submit" name="go" style="width: 100%;" class="ui primary button" value="GO"></td>
											</tr>
										</div>
									</form>

								    <?php } ?>	
								</div>
							</div>
							<!-- End Palindrome No. 1 -->
							<!-- END STATISTIC ITEM -->
							<div class="eight wide computer sixteen wide phone column justifed">
								<h4>SOAL BINTANG NO. 2 A</h4>
								<div class="ui divider"></div>
								<div class="ui tall stacked segment">
									<a class="ui blue ribbon label">SOAL BINTANG NO. 2 A</a>
									<br><br>
									<?php  
									$jumlah = 5;

									for($a=1; $a<=$jumlah; $a++){
									    for($b=1; $b<=$a; $b++){
									        echo "&nbsp;";
									    }
									    for($c=$jumlah; $c>=$a; $c-=1){
									        echo '*';
									    }
									    echo "<br>";
									}
									for($c=$jumlah; $c>=$a; $c-=1){
									    echo '* ';
									}
									for($a=1+1; $a<=$jumlah; $a++){
									    for($b=$jumlah; $b>=$a; $b-=1){
									        echo "&nbsp;";
									    }
									    for($c=1; $c<=$a; $c++){
									        echo '*';
									    }
									    echo "<br>";
									}
									?>
								</div>
							</div>
							<div class="eight wide computer sixteen wide phone column justifed">
								<h4>SOAL BINTANG NO. 2 B</h4>
								<div class="ui divider"></div>
								<div class="ui tall stacked segment">
									<a class="ui blue ribbon label">SOAL BINTANG NO. 2 B</a>
									<br><br>
									<?php  
									$jumlah = 3;

									for($a=1; $a<=$jumlah; $a++){
									    for($b=1; $b<=$a; $b++){
									        echo "&nbsp;";
									    }
									    for($c=$jumlah; $c>=$a; $c-=1){
									        echo '*';
									    }
									    echo "<br>";
									}
									for($c=$jumlah; $c>=$a; $c-=1){
									    echo '* ';
									}
									for($a=1+1; $a<=$jumlah; $a++){
									    for($b=$jumlah; $b>=$a; $b-=1){
									        echo "&nbsp;";
									    }
									    for($c=1; $c<=$a; $c++){
									        echo '*';
									    }
									    echo "<br>";
									}
									?>
								</div>
							</div>
							<!-- Begin Palindrome No. 1 -->
							<div class="sixteen wide computer column">
							    <a href="<?= base_url('soal/no3.php') ?>" style="width: 100%;" class="ui primary button">
						            SOAL ANGKA NO. 3
						        </a>
							</div>
							<div class="sixteen wide computer column">
							    <a href="<?= base_url('assets/images/erd.png') ?>" style="width: 100%;" class="ui primary button">
						            SOAL ERD NO. 5
						        </a>
							</div>
							<!-- End Palindrome No. 1 -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END CONTENT -->