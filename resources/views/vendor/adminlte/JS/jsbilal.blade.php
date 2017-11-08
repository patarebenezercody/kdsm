<script type="text/javascript">
			
			var bilal = $('#bilal-table').DataTable({
		                        processing: true,
		                        serverSide: true,
		                        ajax: "{{ route('api/bilal') }}",
		                        columns: [
		                            {data: 'id', name:'id'},
		                            {data: 'namabilal', name:'namabilal'},
		                            {data: 'nik', name:'nik'},
		                            {data: 'jkelamin', name:'jkelamin'},
		                            {data: 'ttl', name:'ttl'},
		                            {data: 'alamatbilal', name:'alamatbilal'},
		                            {data: 'lokasitugas', name:'lokasitugas'},
		                            {data: 'norekbanksumut', name:'norekbanksumut'},
		                            {data: 'kantorcbgbanksumut', name:'kantorcbgbanksumut'},
		                            {data: 'nohp', name:'nohp'},
		                            {data: 'action', name:'action', orderable: false, searchable:false},
		                        ]
		                    });
		function addbilal(){
		            save_method = "add5";
		            $('input[name=_method]').val('POST');
		            $('#bilal-form').modal('show');
		            $('#bilal-form form')[0].reset();
		            $('#modal-title').text('Add Nama Bilal Jenazah');
		        }
		function deletebilal(id){
		          var popup = confirm('Anda yakin ?');
		          var csrf_token = $('meta[name="csrf-token"]').attr('content');
		          if(popup == true){
		            $.ajax({
		              url: "{{ url('bilal') }}" + '/' + id,
		              type: "POST",
		              data: {'_method' : 'DELETE', '_token':csrf_token},
		              success: function(data){
		                bilal.ajax.reload();
		                console.log(data);
		              },

		              error: function(){
		                alert("Ops! Something wrong!");
		              }
		            });
		          }
		        }


		function editbilal(id){
				            save_method = 'edit';
				            $('input[name=_method]').val('PATCH');
				            $('#bilal-form form')[0].reset();
				            $.ajax({
				                url: "{{ url('bilal') }}" + '/' + id + "/edit",
				                type: "GET",
				                dataType: "JSON",
				                success: function(data){
				                    $('#bilal-form').modal('show');
				                    $('.modal-title').text('Edit Nama Bilal Jenazah');

				                    $('#id').val(data.id);
				                    $('#namabilal').val(data.namabilal);
				                    $('#nik').val(data.nik);
				                    $('#jkelamin').val(data.jkelamin);
				                    $('#ttl').val(data.ttl);
				                    $('#alamatbilal').val(data.alamatbilal);
				                    $('#lokasitugas').val(data.lokasitugas);
				                    $('#norekbanksumut').val(data.norekbanksumut);
				                    $('#kantorcbgbanksumut').val(data.kantorcbgbanksumut);
				                    $('#nohp').val(data.nohp);
				                },

				                error : function(){
				                    alert("Tidak ada Data");
				                }
				            });
				        }


		$(function(){
		            $('#bilal-form form').validator().on('submit', function (e) {
		                if (!e.isDefaultPrevented()){
		                    var id = $('#id').val();
		                    if (save_method == 'add5') url ="{{ url('bilal') }}";
		                    else
		                        url = "{{ url('bilal') . '/' }}" + id;
		                    
		                    $.ajax({
		                        url : url,
		                        type : "POST",
		                        data : $('#bilal-form form').serialize(),
		                        success : function($data){
		                            $('#bilal-form').modal('hide');
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