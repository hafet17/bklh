<div class="col-lg-12 col-ml-12">
	<div class="row">
		
    <!-- Textual inputs start -->
        <div class="col-12 mt-2">
            <div class="card">
    	        <div class="card-body">
    	        	<h1 class="header-title">Jadwal Kebersihan</h1> 
    	        	<ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="now-tab" data-toggle="tab" href="#now" role="tab" aria-controls="now" aria-selected="true">Hari Ini</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Belum Selesai</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="belum-tab" data-toggle="tab" href="#belum" role="tab" aria-controls="belum" aria-selected="false">Sudah Selesai</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/jadwal/add" aria-selected="false">Tambah Jadwal</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-3" id="myTabContent">
                                	 <div class="tab-pane fade show active" id="now" role="tabpanel" aria-labelledby="now-tab">
                                       <div class="table-responsive">
									<table class="table text-center table-striped">
										<thead class="text-uppercase">
											<tr>
												<th>No</th>
												<th>Tanggal</th>
												<th>Jam</th>
												<th>Asrama</th>
												<th>Jenis</th>
												<th>Status</th>
												<th>action</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$no = 1;
											foreach ($now as $row):?>
													<tr>
													<td><?= $no; ?></td>
													<td><?= date('d-m-Y', strtotime($row['tanggal'])); ?></td>
													<td><?= $row['jam']; ?></td>
													<td><?= $row['asrama']; ?></td>
													<td><?= strtoupper($row['jenis']); ?></td>	
													<?php 
														if ($row['status'] == 'success') {
															$badge = 'success';
														}elseif ($row['status'] == 'prosess') {
															$badge = 'warning';
														}else{
															$badge = 'primary';
														}
													 ?>			
													<td><span class="badge badge-<?= $badge; ?>"><?= strtoupper($row['status']); ?></span>

													</td>	
													<td>
														<?php 
														if ($row['status'] == 'pending') {
														 	$btn = "prosess";
														 }
														 elseif ($row['status'] == 'prosess') {
														 	$btn = "verify";
														}?>
														<div class="btn-group" role="group">
                                            <button id="btnGroupDrop11" type="button" class="btn btn-flat btn-info btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Option
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="/jadwal/<?= $btn?>/<?= $row['idjadwal']?>"><?= ucfirst($btn)?></a>
                                            </div>
                                        </div>
													</td>
												</tr>
											<?php
											$no++; 
											endforeach; ?>
										</tbody></table></div>
                                    </div>
                                    <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                                       <div class="table-responsive">
									<table class="table text-center table-striped">
										<thead class="text-uppercase">
											<tr>
												<th>No</th>
												<th>Tanggal</th>
												<th>Jam</th>
												<th>Asrama</th>
												<th>Jenis</th>
												<th>Status</th>
												<th>action</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$no = 1;
											foreach ($jadwal as $row):?>
													<tr>
													<td><?= $no; ?></td>
													<td><?= date('d-m-Y', strtotime($row['tanggal'])); ?></td>
													<td><?= $row['jam']; ?></td>
													<td><?= $row['asrama']; ?></td>
													<td><?= strtoupper($row['jenis']); ?></td>	
													<?php 
														if ($row['status'] == 'success') {
															$badge = 'success';
														}elseif ($row['status'] == 'prosess') {
															$badge = 'warning';
														}else{
															$badge = 'primary';
														}
													 ?>			
													<td><span class="badge badge-<?= $badge; ?>"><?= strtoupper($row['status']); ?></span>

													</td>	
													<td>
														<ul class="d-flex justify-content-center">
								                            <li class="mr-3"><a href="/jadwal/edit/<?= $row['idjadwal']; ?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
								                            <li><a href="/jadwal/delete/<?= $row['idjadwal']; ?>" class="text-danger"><i class="ti-trash"></i></a></li>
								                        </ul>
													</td>
												</tr>
											<?php
											$no++; 
											endforeach; ?>
										</tbody></table></div>
                                    </div>
                                    
                                    <div class="tab-pane fade" id="belum" role="tabpanel" aria-labelledby="belum-tab">
                                    	<div class="table-responsive">
									<table class="table text-center table-striped">
										<thead class="text-uppercase">
											<tr>
												<th>No</th>
												<th>Tanggal</th>
												<th>Jam</th>
												<th>Asrama</th>
												<th>Jenis</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$no = 1;
											foreach ($success as $row):?>
													<tr>
													<td><?= $no; ?></td>
													<td><?= date('d-m-Y', strtotime($row['tanggal'])); ?></td>
													<td><?= $row['jam']; ?></td>
													<td><?= $row['asrama']; ?></td>
													<td><?= strtoupper($row['jenis']); ?></td>			
													<td><span class="badge badge-success"><?= strtoupper($row['status']); ?></span></td>	
													
												</tr>
											<?php
											$no++; 
											endforeach; ?>
										</tbody></table></div>
                                    </div>
                                    
                                </div>    	        		
				</div>
			</div>
		</div>
		
	</div>
</div>

