<div class="col-lg-12 col-ml-12">
	<div class="row">
		<!-- Textual inputs start -->
		<div class="col-8 mt-5">
			<div class="card">
				<div class="card-body">
					<h1 class="header-title">Daftar Pengguna</h1>
					<div class="table-responsive">
						<table class="table text-center">
							<thead class="text-uppercase">
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Asrama</th>
									<th>Jenis</th>
									<th>action</th>
								</tr>
							</thead>
							<tbody>

								<?php foreach ($user as $row) : ?>
									<tr>
										<td><?= $row['iduser']; ?></td>
										<td><?= $row['username']; ?></td>
										<td><?= $row['asrama']; ?></td>
										<th><?= $row['jenis']; ?></th>
										<td>
											<ul class="d-flex justify-content-center">
												<li class="mr-3"><a href="/user/edit/<?= $row['id']; ?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
												<li><a href="/user/delete/<?= $row['id']; ?>" class="text-danger"><i class="ti-trash"></i></a></li>
											</ul>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- Textual inputs start -->
		<div class="col-4 mt-5">
			<div class="card">
				<div class="card-body">
					<h1 class="header-title">Tambah Pengguna</h1>
					<?= view('user/add'); ?>
				</div>
			</div>
		</div>
	</div>
</div>