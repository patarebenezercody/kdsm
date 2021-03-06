<div class="modal" id="ibu-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form method="POST" class="form-horizontal" data-toggle="validator">
				{{ csrf_field() }} {{ method_field('POST') }}
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times; </span> </button>
					<h3 class="modal-title"><center>Form</center></h3>
				</div>

				<div class="modal-body">

					<input type="hidden" id="id" name="id">
					<div class="form-group">
						<label for="nokk" class="col-md-3 control-label">NO KK</label>
						<div class="col-md-6">
							<input type="text" id="nokk" name="nokk" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="namaibuhamil" class="col-md-3 control-label">Nama Ibu Hamil</label>
						<div class="col-md-6">
							<input type="text" id="namaibuhamil" name="namaibuhamil" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="umur" class="col-md-3 control-label">Umur</label>
						<div class="col-md-6">
							<input type="text" id="umur" name="umur" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="alamat" class="col-md-3 control-label">Alamat</label>
						<div class="col-md-6">
							<input type="text" id="alamat" name="alamat" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="namasuami" class="col-md-3 control-label">Nama Suami</label>
						<div class="col-md-6">
							<input type="text" id="namasuami" name="namasuami" class="form-control">
							<span class="help-block with-errors"></span>
						</div>
					</div>

					
					<div class="form-group">
						<label for="jlhanak" class="col-md-3 control-label">Jumlah Anak</label>
						<div class="col-md-6">
							<input type="text" id="jlhanak" name="jlhanak" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="pekerjaan" class="col-md-3 control-label">Pekerjaan</label>
						<div class="col-md-6">
							<input type="text" id="pekerjaan" name="pekerjaan" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="keterangan" class="col-md-3 control-label">Keterangan</label>
						<div class="col-md-6">
							<input type="text" id="keterangan" name="keterangan" class="form-control" required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					
				</div>

				<div class="modal-footer">
					<button type="submit" class="btn btn-primary btn-save">Simpan</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				</div>
			</form>
		</div>
	</div>
</div>
