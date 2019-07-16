@include('inc.panel-header')

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                
             @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert">×</button><div class="alert-icon">
                    <i class="icon-check"></i></div>
                    <div class="alert-message">
                        <span><strong>Success!</strong> 
                        {{ session()->get('message') }}.</span>
                        </div>
                    </div>
             @endif
                <div class="card">
                    <div class="card-header"><i class="fa fa-table"></i> All Profession's</div>
                    <button data-toggle="modal" data-target="#primarymodal" type="button" style="width:200px;" class="btn btn-outline-primary shadow-primary waves-effect waves-light m-3">Add New</button>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="default-datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                  @foreach($headers as $header)
                                  <tr>
                                      <td>{{ $header->id }}</td>
                                      <td>{{ $header->text }}</td>
                                      <td>
                                        <a href="{{ url('edit-profession',[$header->id]) }}"><button type="button" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="fa fa-cog"></i></button></a>
                                        @if ($header->id != 1)
                                        <button type="button" id="confirm-btn-alert{{ $header->id }}" class="btn btn-outline-danger waves-effect waves-light m-1"> <i class="fa fa-trash-o"></i></button>    
                                        @endif
                                     </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Row-->
    </div>
</div>
@include('inc.panel-footer')
@foreach ($headers as $header)
<script type="text/javascript">
    $("#confirm-btn-alert{{ $header->id }}").click(function(){
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this order!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Poof! This Text has been Succesfully Deleted!", {
                        icon: "success",
                    }).then(function() {
                        window.location.href = "{{ url('/delete-profession',[$header->id]) }}";
                        console.log('The Ok Button was clicked.');
                    });
                } else {
                    swal("It is safe now!");
                }
            });
    });
</script>
@endforeach
<div class="modal fade" id="primarymodal">
        <div class="modal-dialog">
          <form class="" action="" method="post" enctype="multipart/form-data">
            @csrf
          <div class="modal-content border-primary">
            <div class="modal-header bg-primary">
              <h5 class="modal-title text-white"><i class="fa fa-star"></i> Create New Professions</h5>
              <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" name="text" class="form-control" id="name" required>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-inverse-primary" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
              <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save </button>
            </div>
          </div>
        </form>
        </div>
      </div>