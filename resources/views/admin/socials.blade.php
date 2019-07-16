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
                    <div class="card-header"><i class="fa fa-table"></i> All Socials</div>
                    <button data-toggle="modal" data-target="#primarymodal" type="button" style="width:200px;" class="btn btn-outline-primary shadow-primary waves-effect waves-light m-3">Add New</button>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="default-datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Icon</th>
                                    <th>Link</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                  @foreach($socials as $social)
                                  <tr>
                                      <td>{{ $social->id }}</td>
                                      <td>{{ $social->icon }}</td>
                                      <td>{{ $social->link }}</td>
                                      <td>
                                        <a href="{{ url('edit-social',[$social->id]) }}"><button type="button" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="fa fa-cog"></i></button></a>
                                        <button type="button" id="confirm-btn-alert{{ $social->id }}" class="btn btn-outline-danger waves-effect waves-light m-1"> <i class="fa fa-trash-o"></i> </button>
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
@foreach ($socials as $social)
<script type="text/javascript">
    $("#confirm-btn-alert{{ $social->id }}").click(function(){
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this order!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Poof! This Social has been Succesfully Deleted!", {
                        icon: "success",
                    }).then(function() {
                        window.location.href = "{{ url('/delete-social',[$social->id]) }}";
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
              <h5 class="modal-title text-white"><i class="fa fa-star"></i> Create New Socials</h5>
              <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">

              <div class="form-group row">
                <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                <div class="col-sm-10">
                  <input type="text" name="icon" class="form-control" id="icon" required>
                </div>
              </div>

              <div class="form-group row">
                    <label for="link" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-10">
                      <input type="text" name="link" class="form-control" id="link" required>
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