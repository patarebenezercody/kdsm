
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-lg-13">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">
							Usulan Pengurus Rumah Ibadah dan Imam Mesjid Penerima Bantuan Pemerintah Kota Medan Tahun 2017
						</h3>
						<a onclick="addPengurus()" class="btn btn-warning pull-right pull-right glyphicon glyphicon-plus"></a>
						
					</div>
					
					<div class="box-body">
					<div class="table-responsive">
					<table id="pengurus-table" class="table table-striped">
                		<thead>
		                  <tr>
		                    <th>Id</th>
		                    <th>NAMA NAZIR</th>
		                    <th>NIK</th>
		                    <th>JENIS KELAMIN</th>
		                    <th>TEMPAT TANGGAL LAHIR</th>
		                    <th>ALAMAT NAZIR</th>
		                    <th>NAMA MESJID</th>
		                    <th>ALAMAT MESJID</th>
		                    <th>NOMOR REKENING BANK SUMUT</th>
		                    <th>KANTOR CABANG BANK SUMUT</th>
		                    <th>NO HP</th>
		                    <th>Action</th>
		                  </tr>
		                </thead>
			        </table>
			    </div>
					</div>
				</div>
			</div>
		</div>

		@include('formAdmin.formpengurus')

	</div>
