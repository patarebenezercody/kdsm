
	
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">
							Daftar Ibu Hamil Kelurahan Darat Kecamatan Medan Baru Tahun 2017
						</h3>
						<a onclick="addIbuHamil()" class="btn btn-primary pull-right" style="margin-right: 50px">Add</a>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					
					<div class="box-body">
					<table id="ibu-table" class="table table-striped">
                		<thead>
		                  <tr>
		                    <th>Id</th>
		                    <th>NO KK</th>
		                    <th>Nama Ibu Hamil</th>
		                    <th>Nama Suami</th>
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
                @include('formAdmin.formibuhamil');


	</div>
