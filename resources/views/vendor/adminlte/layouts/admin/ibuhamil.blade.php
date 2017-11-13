
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-lg-13">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">
							Daftar Ibu Hamil Kelurahan Darat Kecamatan Medan Baru Tahun 2017
						</h3>
						<a onclick="addIbuHamil()" class="btn btn-warning pull-right pull-right glyphicon glyphicon-plus"></a>
						
					</div>
					
					<div class="box-body">
					<div class="table-responsive">
					<table id="ibu-table" class="table table-striped">
                		<thead>
		                  <tr>
		                    <th>Id</th>
		                    <th>NO KK</th>
		                    <th>Nama Ibu Hamil</th>
		                    <th>Umur</th>
		                    <th>Alamat</th>
		                    <th>Nama Suami</th>
		                    <th>Jumlah Anak</th>
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
                @include('formAdmin.formibuhamil')


	</div>
