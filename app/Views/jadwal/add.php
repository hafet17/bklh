<div class="col-12 mt-2">
	<div class="card">
        <div class="card-body">
            <h4 class="header-title">Tambah Jadwal</h4>
                <form action="/jadwal/save" method="post">
                    <div class="form-group">
                        <label for="waktu">Tanggal</label>
                        <input type="date" class="form-control" id="waktu" aria-describedby="waktuHelp" placeholder="Waktu" name="tanggal">
                        <small id="waktuHelp" class="form-text text-muted">Tentukan tanggal dan jam jadwal kebersihan.</small>
                    </div>
                    <div class="form-group">
                        <label for="waktu">Jam</label>
                        <input type="time" class="form-control" placeholder="Jam" name="jam">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Asrama</label>
                            <select class="form-control" name="asrama">
                            <?php $range = range('A', 'Z');
								foreach ($range as $char) {
								 	echo "<option value=".$char.">".$char."</option>";
								 } ?>                    
                            </select>
                    </div> 
                    <div class="form-group">
                        <label class="col-form-label">Jenis Keberhisan</label>
                            <select class="form-control" name="jenis">
                            	<option value="leket">Leket</option>
                            	<option value="massal">Massal</option>
                            </select>
                    </div>                                           
                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Simpan</button>
                </form>
        </div>
    </div>
</div>
