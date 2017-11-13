	
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-lg-13">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">
						
							Daftar Balita 0-59 Bulan Yang Ada Di Wilayah Kerja PUSKESMAS Padang Bulan -<br> Kelurahan Darat Kecamatan Medan Baru Tahun 2017<br>	
							
						</h3>
						<a onclick="addBalita()" class="btn btn-warning pull-right glyphicon glyphicon-plus" ></a>
						
					</div>

					<div class="box-body">
					<div class="table-responsive">
					<table id="balita-table" class="table table-striped">
                		<thead>
		                  <tr>
		                    <th>Id</th>
		                    <th>Nama Anak</th>
		                    <th>Tempat/Tgl Lahir</th>
		                    <th>Umur</th>
		                    <th>Jenis Kelamin</th>
		                    <th>Nama Orang Tua</th>
		                    <th>No KK</th>
		                    <th>Action</th>
		                  </tr>
		                </thead>
			        </table>
					</div>
				</div>
			</div>
			</div>
		</div>
                @include('formAdmin.formbalita')

	
	</div>
	
