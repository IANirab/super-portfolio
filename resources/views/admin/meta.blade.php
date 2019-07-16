@include('inc.panel-header')
<div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            @if(Session::has('message'))
            <div class="alert alert-icon-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <div class="alert-icon icon-part-success">
                        <i class="icon-check"></i>
                    </div>
                <div class="alert-message">
                <span><a href="javascript:void();" class="alert-link">{{ Session::get('message') }}</a></span>
                </div>
            </div>    
            @endif
              <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-user-circle-o"></i>
                   Edit Meta Info
                </h4>

                <div class="form-group row">
                  <label for="title" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="title" id="title" value="{{ $meta->title }}" required>
                  </div>
                </div>

                <div class="form-group row">
                    <label for="keywords" class="col-sm-2 col-form-label">Keywords</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="keywords" id="keywords">{{ $meta->keywords }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="description" id="description">{{ $meta->description }}</textarea>
                    </div>
                </div>

                <div class="form-footer">
                    <button type="reset" class="btn btn-danger shadow-danger m-1"><i class="fa fa-times"></i> RESET</button>
                    <button type="submit" class="btn btn-success shadow-success m-1"><i class="fa fa-check-square-o"></i> UPDATE </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->
    </div>
</div>
@include('inc.panel-footer')