<script type="text/javascript">
			
			var uraian = $('#uraian-table').DataTable({
		                        processing: true,
		                        serverSide: true,
		                        ajax: "{{ route('api/uraian') }}",
		                        columns: [
		                            {data: 'id', name:'id'},
		                            {data: 'nama', name:'nama'},
		                            {data: 'instansi', name:'instansi'},
		                            {data: 'alamat', name:'alamat'},
		                            {data: 'nohp', name:'nohp'},
		                            {data: 'satuan', name:'satuan'},
		                            {data: 'jenisdonasi', name:'jenisdonasi'},
		                            {data: 'perkiraannilai', name:'perkiraannilai'},
		                            {data: 'action', name:'action', orderable: false, searchable:false},
		                        ]
		                    });
		function adduraian(){
		            save_method = "add7";
		            $('input[name=_method]').val('POST');
		            $('#uraian-form').modal('show');
		            $('#uraian-form form')[0].reset();
		            $('#modal-title').text('Add Uraian Pribadi');
		        }
		function deleteuraian(id){
		          var popup = confirm('Anda yakin ?');
		          var csrf_token = $('meta[name="csrf-token"]').attr('content');
		          if(popup == true){
		            $.ajax({
		              url: "{{ url('uraian') }}" + '/' + id,
		              type: "POST",
		              data: {'_method' : 'DELETE', '_token':csrf_token},
		              success: function(data){
		                uraian.ajax.reload();
		                console.log(data);
		              },

		              error: function(){
		                alert("Ops! Something wrong!");
		              }
		            });
		          }
		        }


		function edituraian(id){
				            save_method = 'edit';
				            $('input[name=_method]').val('PATCH');
				            $('#uraian-form form')[0].reset();
				            $.ajax({
				                url: "{{ url('uraian') }}" + '/' + id + "/edit",
				                type: "GET",
				                dataType: "JSON",
				                success: function(data){
				                    $('#uraian-form').modal('show');
				                    $('.modal-title').text('Edit Nama uraian Jenazah');

				                    $('#id').val(data.id);
				                    $('#nama').val(data.nama);
				                    $('#instansi').val(data.instansi);
				                    $('#alamat').val(data.alamat);
				                    $('#nohp').val(data.nohp);
				                    $('#satuan').val(data.satuan);
				                    $('#jenisdonasi').val(data.jenisdonasi);
				                    $('#perkiraannilai').val(data.perkiraannilai);
				                },

				                error : function(){
				                    alert("Tidak ada Data");
				                }
				            });
				        }


		$(function(){
		            $('#uraian-form form').validator().on('submit', function (e) {
		                if (!e.isDefaultPrevented()){
		                    var id = $('#id').val();
		                    if (save_method == 'add7') url ="{{ url('uraian') }}";
		                    else
		                        url = "{{ url('uraian') . '/' }}" + id;
		                    
		                    $.ajax({
		                        url : url,
		                        type : "POST",
		                        data : $('#uraian-form form').serialize(),
		                        success : function($data){
		                            $('#uraian-form').modal('hide');
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