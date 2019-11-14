<!-- BEGIN CONTEN -->
		<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
			<div class="ui container grid">
				<div class="row">
					<div class="fifteen wide computer sixteen wide phone centered column">
						<h2><i class="database icon"></i> DATA KOMODITAS</h2>
						<div class="ui divider"></div>
						<br><br>
						<a href="<?= base_url('komoditas/add'); ?>" class="ui primary button">
							<i class="plus icon"></i>
							TAMBAH DATA KOMODITAS
						</a>
						<br><br>
						<div class="ui grid">
							<div class="sixteen wide computer sixteen wide phone centered column">
								<!-- BEGIN DATATABLE -->
								<div class="ui stacked segment">
									<div class="ui blue ribbon icon label">DATA KOMODITAS</div>
									<br><br>
									<table id="example" class="ui celled table responsive nowrap unstackable" style="width:100%">
									    <thead>
									        <tr>
									        	<th>No.</th>
									            <th>Nama Komoditas</th>
									            <th>Satuan</th>
									            <th>Harga</th>
									            <th>Tanggal</th>
									            <th>Status</th>
									        </tr>
									    </thead>
									    <tbody>
									    	<?php $no=1; foreach ($data as $komoditas) { ?>
									    		<tr>
													<td><?= $no ?></td>
									    		    <td><?= $komoditas->nama_komoditas ?></td>
									    		    <td><?= $komoditas->satuan ?></td>
									    		    <td><?= $komoditas->harga ?></td>
									    		    <td><?= $komoditas->tanggal ?></td>
									    		    <td><?= $komoditas->konfirmasi ?></td>
									    		</tr>

									    	<?php $no++; } ?>
									    </tbody>
									</table>
								</div>
								<!-- END DATATABLE -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END CONTENT -->