<script type="text/javascript">
			
			var partisipasi = $('#partisipasi-table').DataTable({
		                        processing: true,
		                        serverSide: true,
		                        ajax: "{{ route('api/partisipasi') }}",
		                        columns: [
		                            {data: 'id', name:'id'},
		                            {data: 'namakegiatan', name:'namakegiatan'},
		                            {data: 'waktukegiatan', name:'waktukegiatan'},
		                            {data: 'alamatkegiatan', name:'alamatkegiatan'},
		                            {data: 'keterangan', name:'keterangan'},
		                            {data: 'action', name:'action', orderable: false, searchable:false},
		                        ]
		                    });
		function addpartisipasi(){
		            save_method = "add6";
		            $('input[name=_method]').val('POST');
		            $('#partisipasi-form').modal('show');
		            $('#partisipasi-form form')[0].reset();
		            $('#modal-title').text('Add  Partisipasi');
		        }
		function deletepartisipasi(id){
		          var popup = confirm('Anda yakin ?');
		          var csrf_token = $('meta[name="csrf-token"]').attr('content');
		          if(popup == true){
		            $.ajax({
		              url: "{{ url('partisipasi') }}" + '/' + id,
		              type: "POST",
		              data: {'_method' : 'DELETE', '_token':csrf_token},
		              success: function(data){
		                partisipasi.ajax.reload();
		                console.log(data);
		              },

		              error: function(){
		                alert("Ops! Something wrong!");
		              }
		            });
		          }
		        }


		function editpartisipasi(id){
				            save_method = 'edit';
				            $('input[name=_method]').val('PATCH');
				            $('#partisipasi-form form')[0].reset();
				            $.ajax({
				                url: "{{ url('partisipasi') }}" + '/' + id + "/edit",
				                type: "GET",
				                dataType: "JSON",
				                success: function(data){
				                    $('#partisipasi-form').modal('show');
				                    $('.modal-title').text('Edit Nama partisipasi Jenazah');

				                    $('#id').val(data.id);
				                    $('#nama').val(data.nama);
				                    $('#instansi').val(data.instansi);
				                    $('#alamat').val(data.alamat);
				                    $('#nohp').val(data.nohp);
				                    $('#satuan').val(data.satuan);
				                    $('#perkiraannilai').val(data.perkiraannilai);
				                },

				                error : function(){
				                    alert("Tidak ada Data");
				                }
				            });
				        }


		$(function(){
		            $('#partisipasi-form form').validator().on('submit', function (e) {
		                if (!e.isDefaultPrevented()){
		                    var id = $('#id').val();
		                    if (save_method == 'add6') url ="{{ url('partisipasi') }}";
		                    else
		                        url = "{{ url('partisipasi') . '/' }}" + id;
		                    
		                    $.ajax({
		                        url : url,
		                        type : "POST",
		                        data : $('#partisipasi-form form').serialize(),
		                        success : function($data){
		                            $('#partisipasi-form').modal('hide');
		                        },
		                        error : function(){
		                            alert('Opps! Error!');
		                        }
		                    });
		                    return false;
		                }
		            });

		        });

</script>