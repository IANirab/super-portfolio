<?php echo $__env->make('inc.panel-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            <?php if(Session::has('message')): ?>
            <div class="alert alert-icon-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <div class="alert-icon icon-part-success">
                        <i class="icon-check"></i>
                    </div>
                <div class="alert-message">
                <span><a href="javascript:void();" class="alert-link"><?php echo e(Session::get('message')); ?></a></span>
                </div>
            </div>    
            <?php endif; ?>
              <form action="" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-user-circle-o"></i>
                   Edit Admin Info
                </h4>

                <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" id="name" value="<?php echo e($user->name); ?>" required>
                  </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" value="<?php echo e($user->email); ?>" id="email" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" id="password" required>
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
<?php echo $__env->make('inc.panel-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nirab\Documents\Laravel\personal\resources\views/admin/user.blade.php ENDPATH**/ ?>