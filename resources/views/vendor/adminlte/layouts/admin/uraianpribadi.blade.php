
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-lg-13">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">
							DAFTAR URAIAN PRIBADI PARTISIPASI MASYARAKAT KOTA MEDAN KELURAHAN DARAT KECAMATAN MEDAN BARU
						</h3>
						<a onclick="adduraian()" class="btn btn-warning pull-right pull-right glyphicon glyphicon-plus"></a>
						
					</div>
					
					<div class="box-body">
					<div class="table-responsive">
					<table id="uraian-table" class="table table-striped">
                		<thead>
		                  <tr>
		                    <th>Id</th>
		                    <th>NAMA</th>
		                    <th>INSTANSI/PERUSAHAAN</th>
		                    <th>ALAMAT</th>
		                    <th>TLP/NO HP</th>
		                    <th>SATUAN</th>
		                    <th>JENIS DONASI</th>
		                    <th>PERKIRAAN NILAI (Rp)</th>
		                    <th>Action</th>
		                  </tr>
		                </thead>
			        </table>
			    </div>
					</div>
				</div>
			</div>
		</div>
                @include('formAdmin.formuraianpribadi')

	</div>
