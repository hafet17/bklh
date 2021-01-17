<div class="col-lg-12 col-ml-12">
	<div class="row">
		
    <!-- Textual inputs start -->
        <div class="col-4 mt-2">
            <div class="card">
    	        <div class="card-body">
				<h4 class="header-title">Persediaan Alat Kebersihan</h4>
						
					<!-- <input type="hidden" name="idjadwal" value="<?= $jadwal->idjadwal?>" id="idjadwal"> -->
					<form action="/jadwal/save_prosess_alat" method="post" id="form">
					<div class="form-group">
						 
						<label>Nama Peralatan / Tersedia</label>
						<input type="hidden" name="idjadwal" value="<?= $id;?>">
						<select class="form-control" name="alat" id="idalat">
							<?php foreach ($alat as $row):?>
									<option value="<?= $row['idalat']?>"><?= strtoupper($row['nama'])?> / <?= $row['qty']?> biji</option>
								
							<?php endforeach; ?>
						</select>
						<small class="form-text text-muted" >*Pilih peralatan yang akan dipakai</small>
					</div>
    	        	<div class="form-group">
						<label>Jumlah Pakai</label>
						<input type="number" name="qty" class="form-control" id="qty">
						<small class="form-text text-muted" >*Jumlah alat untuk dipakai</small>
					</div>
					<div class="btn-group mb-xl-2" role="group">
						<button type="submit" class="btn btn-primary mt-4 pr-4 pl-4" id="btn">TAMBAH</button>
						<a href="/jadwal/finish_prosess/<?= $id;?>" class="btn btn-primary mt-4 pr-4 pl-4" >SELESAI</a>	
					</div>
					
                    </form>
 				</div>
 			</div>
 		</div>
 		<div class="col-8 mt-2">
 			<div class="card">
    	        <div class="card-body">
				<h4 class="header-title">Pemakaian Alat Kebersihan</h4>
					 <div class="table-responsive">
					<table class="table text-center table-striped">
						<thead class="text-uppercase">
							<th>No</th>
							<th>Nama Alat</th>
							<th>Banyak</th>
							<th>Option</th>
						</thead>
						<tbody id="tbody">
						<?php $no=1;
						foreach ($detailalat as $row) :?>
							<tr>
								<td><?= $no?></td>
								<td><?= strtoupper($row['nama'])?></td>
								<td><?= $row['qtypakai']?></td>
								<td>
									<ul class="d-flex justify-content-center">
					                    <li><a  class="text-danger" id="delalat"  data-id="<?= $row['idalat_detail']; ?>"><i class="ti-trash"></i></a></li>
					                </ul>
								</td>
							</tr>
						<?php 
						$no++;
						endforeach; ?>
						</tbody>
					</table>
					</div>
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </div>
<script type="text/javascript">
 	$(document).ready(function(){
 		alert('test');
 		$('.ti-trash').click(function(){
 			alert("test");
 			var id = $(this).attr('data-id');
 			var obj = this;
 			$.ajax({
 				url: "<?php echo base_url('jadwal/delete _prosess_alat');?>",
 				type: "post",
 				dataType: "json",
 				data: {
 					idalat_detail : id
 				}
 				success: function(result){
 					result = $.trim(result);
 					if ( result == 'success'){
 						$(obj).parent().parent().remove();
 					}else{
 						alert("request fails");
 					}
 				}
 			});
 		});
 	});
 </script>