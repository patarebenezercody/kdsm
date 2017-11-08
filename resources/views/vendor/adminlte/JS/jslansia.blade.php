<script type="text/javascript">
	var lansia = $('#lansia-table').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: "{{ route('api/lansia') }}",
                        columns: [
                            {data: 'id', name:'id'},
                            {data: 'nokk', name:'nokk'},
                            {data: 'namalansia', name:'namalansia'},
                            {data: 'ttl', name:'ttl'},
                            {data: 'umur', name:'umur'},
                            {data: 'status', name:'status'},
                            {data: 'alamat', name:'alamat'},
                            {data: 'pekerjaan', name:'pekerjaan'},
                            {data: 'keterangan', name:'keterangan'},
                            {data: 'action', name:'action', orderable: false, searchable:false}
                        ]
                    });


		function addlansia(){
	            save_method = "add3";
	            $('input[name=_method]').val('POST');
	            $('#lansia-form').modal('show');
	            $('#lansia-form form')[0].reset();
	            $('#modal-title').text('Add Nama Lansia');
	        }

       function deletelansia(id){
          var popup = confirm('Anda yakin ?');
          var csrf_token = $('meta[name="csrf-token"]').attr('content');
          if(popup == true){
            $.ajax({
              url: "{{ url('lansia') }}" + '/' + id,
              type: "POST",
              data: {'_method' : 'DELETE', '_token':csrf_token},
              success: function(data){
                lansia.ajax.reload();
                console.log(data);
              },

              error: function(){
                alert("Ops! Something wrong!");
              }
            });
          }
        }

        function editlansia(id){
            save_method = 'edit';
            $('input[name=_method]').val('PATCH');
            $('#lansia-form form')[0].reset();
            $.ajax({
                url: "{{ url('lansia') }}" + '/' + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function(data){
                    $('#lansia-form').modal('show');
                    $('.modal-title').text('Edit Lansia');

                    $('#id').val(data.id);
                    $('#nokk').val(data.nokk);
                    $('#namalansia').val(data.namalansia);
                    $('#ttl').val(data.ttl);
                    $('#umur').val(data.umur);
                    $('#status').val(data.status);
                    $('#alamat').val(data.alamat);
                    $('#pekerjaan').val(data.pekerjaan);
                    $('#keterangan').val(data.keterangan);
                },

                error : function(){
                    alert("Tidak ada Data");
                }
            });
        }

        $(function(){
            $('#lansia-form form').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()){
                    var id = $('#id').val();
                    if (save_method == 'add3') url ="{{ url('lansia') }}";
                    else
                        url = "{{ url('lansia') . '/' }}" + id;
                    
                    $.ajax({
                        url : url,
                        type : "POST",
                        data : $('#lansia-form form').serialize(),
                        success : function($data){
                            $('#lansia-form').modal('hide');
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