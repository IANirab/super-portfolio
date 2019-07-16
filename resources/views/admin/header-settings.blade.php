@include('inc.panel-header')

<div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        @if(session()->has('message'))
           <div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert">×</button><div class="alert-icon">
               <i class="icon-check"></i></div>
               <div class="alert-message">
                   <span>
                   {{ session()->get('message') }}.</span>
                   </div>
               </div>
        @endif

        <div class="col-12">
          <div class="card">
            <div class="card-header text-uppercase">Background Images [ Header ]</div>
            <div class="card-body">
              <div class="row">
                    <div class="col-md-6">
                      <a href="{{ asset('img').'/'.$header->background }}" data-fancybox="images" data-caption="These Image use for Header BackGround">
                      <img src="{{ asset('img').'/'.$header->background }}" alt="lightbox" class="lightbox-thumb img-thumbnail">
                    </a>
                    </div>
                <div class="col-md-6">
                  <form action="" method="post">
                      @csrf
                    <div class="form-group row">
                      <input type="hidden" name="type" value="points">
                      <label for="img1" class="col-sm-2 col-form-label">Image</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" name="img" id="img1" />
                      </div>
                    </div>
                    <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Site Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="name" value="{{ $header->name }}" id="name" required>
                            </div>
                          </div>
                          <div class="form-footer">
                                <button type="submit" class="btn btn-success shadow-success m-1"><i class="fa fa-check-square-o"></i> UPDATE</button>
                            </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        
      </div>
    </div>
</div>
@include('inc.panel-footer')
