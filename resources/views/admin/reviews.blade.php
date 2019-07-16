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
                    <div class="card-header"><i class="fa fa-table"></i> All Reviews</div>
                    <a href="{{ url('/add-review') }}"><button type="button" style="width:200px;" class="btn btn-outline-primary shadow-primary waves-effect waves-light m-3">Add New</button></a>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="default-datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Body</th>
                                    <th>Bio</th>
                                    <th>Img</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                  @foreach($reviews as $review)
                                  <tr>
                                      <td>{{ $review->id }}</td>
                                      <td>{{ $review->body }}</td>
                                      <td>{{ $review->bio }}</td>
                                      <td><img style="max-width:100%;" src="{{ asset('img/clients').'/'.$review->img }}" alt="{{ $review->name }}"></td>
                                      <td>{{ $review->name }}</td>
                                      <td>
                                        <a href="{{ url('edit-review',[$review->id]) }}"><button type="button" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="fa fa-cog"></i></button></a>
                                        <button type="button" id="confirm-btn-alert{{ $review->id }}" class="btn btn-outline-danger waves-effect waves-light m-1"> <i class="fa fa-trash-o"></i> </button>
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
@foreach ($reviews as $review)
<script type="text/javascript">
    $("#confirm-btn-alert{{ $review->id }}").click(function(){
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this order!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Poof! This Review has been Succesfully Deleted!", {
                        icon: "success",
                    }).then(function() {
                        window.location.href = "{{ url('/delete-review',[$review->id]) }}";
                        console.log('The Ok Button was clicked.');
                    });
                } else {
                    swal("It is safe now!");
                }
            });
    });
</script>
@endforeach