
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-lg-13">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">
							DAFTAR PARTISIPASI MASYARAKAT KOTA MEDAN KELURAHAN DARAT KECAMATAN MEDAN BARU
						</h3>
						<a onclick="addpartisipasi()" class="btn btn-warning pull-right pull-right glyphicon glyphicon-plus"></a>
						
					</div>
					
					<div class="box-body">
					<div class="table-responsive">
					<table id="partisipasi-table" class="table table-striped">
                		<thead>
		                  <tr>
		                    <th>Id</th>
		                    <th>Nama Kegiatan</th>
		                    <th>Waktu Kegiatan</th>
		                    <th>Tempat/Alamat Kegiatan</th>
		                    <th>Keterangan</th>
		                    <th>Action</th>
		                  </tr>
		                </thead>
			        </table>
			    </div>
					</div>
				</div>
			</div>
		</div>
                @include('formAdmin.formpartisipasi')
		
	</div>
