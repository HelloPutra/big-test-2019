<!-- BEGIN CONTEN -->
		<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
			<div class="ui container grid">
				<div class="row">
					<div class="fifteen wide computer sixteen wide phone centered column">
						<h2><i class="database icon"></i> DATA PENGUNJUNG</h2>
						<div class="ui divider"></div>
						<div class="ui grid">
							<div class="sixteen wide computer sixteen wide phone centered column">
								<!-- BEGIN DATATABLE -->
								<div class="ui stacked segment">
									<div class="ui blue ribbon icon label">DATA PENGUNJUNG</div>
									<br><br>
									<table id="example" class="ui celled table responsive nowrap unstackable" style="width:100%">
									    <thead>
									        <tr>
									        	<th>No.</th>
									            <th>Nama Pengunjung</th>
									            <th>Keterangan</th>
									            <th>Username</th>
									            <th>Allowed</th>
									        </tr>
									    </thead>
									    <tbody>
									    	<?php $no=1; foreach ($data as $pengunjung) { ?>
									    		<tr>
													<td><?= $no ?></td>
									    		    <td><?= $pengunjung->nama ?></td>
									    		    <td><?= $pengunjung->keterangan ?></td>
									    		    <td><?= $pengunjung->username ?></td>
									    		    <td><?= $pengunjung->allowed ?></td>
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