<div class="col-lg-12 col-ml-12">
	<div class="row">
		 <div class="col-12 mt-2">
            <div class="card">
    	        <div class="card-body">
                    <h1 class="text-center">Jadwal Kebersihan Hari Ini, Tanggal <?php echo date("d-M-Y"); ?></h1><br/>
<p class="text-danger text-center">=====================================================================================================</p>
                    <?php foreach ($jadwal as $row) : ?>
                        <h2 class="text-center">Jenis Kebersihan <b><?= ucfirst($row['jenis'])?></b> Untuk <b>Asrama <?= $row['asrama'];?></b></h2>
                        <h2 class="text-center">Pada Jam <b><?= $row['jam']?></b> WIB</h2>
                        <h2 class="text-center text-success">Status <?= ucfirst($row['status'])?></h2>
                        
                    <p class="text-danger text-center">------------------------------------------------------------------------------------------------------------------------</p>
                    <?php endforeach; ?>
    	        </div>
    	    </div>
    	 </div>
	</div>
</div>