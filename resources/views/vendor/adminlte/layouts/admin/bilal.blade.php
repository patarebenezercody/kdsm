	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">
						
							Daftar Nama BILAL JENAZAH dan PENGGALI KUBUR penerima bantuan pemerintah Kota MEDAN 
							
						</h3>
						<a onclick="addbilal()" class="btn btn-primary pull-right" style="margin-right: 50px">Add</a>
						<div class="box-tools pull-right">

							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>

					<div class="box-body">
					<table id="bilal-table" class="table table-striped">
                		<thead>
		                  <tr>
		                    <th>Id</th>
		                    <th>Nama Bilal Jenazah</th>
		                    <th>NIK</th>
		                    <th>Jenis Kelamin</th>
		                    <th>TEMPAT TANGGAL LAHIR</th>
		                    <th>ALAMAT BILAL JENAZAH</th>
		                    <th>LOKASI TUGAS</th>
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
                @include('formAdmin.formbilaljenazah')

	</div>
	
