
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-lg-13">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">
							Daftar LANSIA Kelurahan Darat Kecamatan Medan Baru PER OKTOBER Tahun 2017
						</h3>
						<a onclick="addlansia()" class="btn btn-warning pull-right pull-right glyphicon glyphicon-plus"></a>
						
					</div>
					
					<div class="box-body">
					<div class="table-responsive">
					<table id="lansia-table" class="table table-striped">
                		<thead>
		                  <tr>
		                    <th>Id</th>
		                    <th>NO KK</th>
		                    <th>NAMA LANSIA</th>
		                    <th>Tempat/Tanggal Lahir</th>
		                    <th>Umur</th>
		                    <th>Alamat</th>
		                    <th>Status</th>
		                    <th>Pekerjaan</th>
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
                @include('formAdmin.formlansia')

	</div>
