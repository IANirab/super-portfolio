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
                   Portfolio Info
                </h4>

                <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="name" required>
                  </div>
                </div>

              <div class="form-group row">
                  <label for="category" class="col-sm-2 col-form-label">Category </label>
                  <div class="col-sm-10">
                      <select class="form-control" name="category" id="category">
                        @foreach ($categorys as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                  </div>
              </div>

                <div class="form-group row">
                    <label for="input-8" class="col-sm-2 col-form-label">Image </label>
                    <div class="col-sm-10">
                        <input type="file" name="photo" class="form-control" id="input-8">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="link" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-10">
                      <input type="text" name="link" class="form-control" id="link" required>
                    </div>
                </div>

                <div class="form-footer">
                    <button type="reset" class="btn btn-danger shadow-danger m-1"><i class="fa fa-times"></i> RESET</button>
                    <button type="submit" class="btn btn-success shadow-success m-1"><i class="fa fa-check-square-o"></i> CREATE </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->
    </div>
</div>
@include('inc.panel-footer')