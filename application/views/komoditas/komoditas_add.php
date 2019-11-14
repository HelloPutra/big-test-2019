<!-- BEGIN CONTEN -->
		<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
			<div class="ui container grid">
				<div class="row">
					<div class="fifteen wide computer sixteen wide phone centered column">
						<h2><i class="database icon"></i> TAMBAH DATA KOMODITAS</h2>
						<div class="ui divider"></div>
						<div class="ui grid">
							<div class="sixteen wide computer sixteen wide phone centered column">
								<!-- BEGIN DATATABLE -->
								<div class="ui stacked segment">
									<div class="ui blue ribbon icon label">TAMBAH DATA KOMODITAS</div>
									<br><br>
									<form action="<?= base_url('komoditas/do_add');  ?>" method="post">
										<div class="ui form">
									        <div class="field">
									            <label>NAMA KOMODITAS</label>
									            <input name="nama" placeholder="" type="text">
									        </div>
									        <div class="field">
									            <label>SATUAN KOMODITAS</label>
									            <input name="satuan" placeholder="" type="text">
									        </div>
									        <div class="field">
									            <label>HARGA KOMODITAS</label>
									            <input name="harga" placeholder="" type="number">
									        </div>
									    </div>	
									    <br>
									    <button style="width: 100%;" class="ui primary button">
								            SIMPAN
								        </button>
									</form>
								</div>
								<!-- END DATATABLE -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END CONTENT -->