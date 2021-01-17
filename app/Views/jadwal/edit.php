<div class="col-12 mt-2">
	<div class="card">
        <div class="card-body">
            <h4 class="header-title">Edit Jadwal</h4>
            <form action="/jadwal/update" method="post">
            	<input type="hidden" name="id" value="<?= $jadwal->idjadwal; ?>">
                    <div class="form-group">
                        <label for="waktu">Waktu</label>
                        <input type="date" class="form-control" id="waktu" aria-describedby="waktuHelp" placeholder="Waktu" name="tanggal" value="<?= date('Y-m-d', strtotime($jadwal->tanggal)); ?>">
                        <small id="waktuHelp" class="form-text text-muted">Tentukan tanggal dan jam jadwal kebersihan.</small>
                    </div>
                    <div class="form-group">
                        <label for="waktu">Jam</label>
                        <input type="time" class="form-control" placeholder="Jam" name="jam" value="<?= date('h:i', strtotime($jadwal->jam)); ?>">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Asrama</label>
                            <select class="form-control" name="asrama">
                            <?php $range = range('A', 'Z');
                            
								foreach ($range as $char) {
                                    $selected = $jadwal->asrama == $char ? 'selected="selected"' : '';
                          
								 	echo "<option value=".$char." ".$selected.">".$char."</option>";
								 } ?>                    
                            </select>
                    </div> 
                    <div class="form-group">
                        <label class="col-form-label">Jenis Kebersihan</label>
                            <select class="form-control" name="jenis">
                            	<option value="leket" <?php if($jadwal->jenis == 'leket') echo 'selected="selected"' ?>>Leket</option>
                            	<option value="massal" <?php if($jadwal->jenis == 'massal') echo 'selected="selected"' ?>>Massal</option>
                            </select>
                    </div>                                           
                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Simpan</button>
                </form>
	
</div></div></div>