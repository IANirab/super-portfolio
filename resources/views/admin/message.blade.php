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
                   View Message ( #ID : {{ $message->id }} )
                </h4>
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="input-1" value="{{ $message->name }}" disabled>
                  </div>
                </div>
                <div class="form-group row">
                    <label for="input-8" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="icon" class="form-control" value="{{ $message->email }}" id="input-8" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="message" class="col-sm-2 col-form-label">Message </label>
                    <div class="col-sm-10">
                       <textarea class="form-control" name="message" id="message" disabled>{{ $message->message }}</textarea>
                    </div>
                </div>
              </form>
              <div class="form-footer">
                    <a href="{{ url('inbox') }}"><button class="btn btn-danger shadow-danger m-1">BACK</button></a>
             </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->
    </div>
</div>
@include('inc.panel-footer')