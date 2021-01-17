<div class="col-lg-12 col-ml-12">
	<div class="row">
    <!-- Textual inputs start -->
        <div class="col-8 mt-2">
            <div class="card">
    	        <div class="card-body">
    	        	<h1 class="header-title">Daftar Alat</h1> 
    	        		<div class="table-responsive">
						<table class="table text-center table-striped">
							<thead class="text-uppercase">
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Jumlah</th>
									<th>action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($alat as $row):?>
									<tr>
										<td><?= $row['idalat']; ?></td>
										<td><?= $row['nama']; ?></td>
										<td><?= $row['qty']; ?></td>
										<td>
											<ul class="d-flex justify-content-center">
					                            <li class="mr-3"><a href="/alat/edit/<?= $row['idalat']; ?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
					                            <li><a href="/alat/delete/<?= $row['idalat']; ?>" class="text-danger"><i class="ti-trash"></i></a></li>
					                        </ul></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						</div>
				</div>
			</div>
		</div>
		<!-- Textual inputs start -->
        <div class="col-4 mt-2">
            <div class="card">
    	        <div class="card-body">
    	        	<h1 class="header-title">Tambah Alat</h1>
    	        	<?= view('alat/add');?>
    	        </div>
    	    </div>
    	</div>
	</div>
</div>	

    
 