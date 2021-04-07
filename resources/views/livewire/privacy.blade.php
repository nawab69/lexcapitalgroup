<div>
    <!-- Horizontal Form -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Privacy Page Content</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="form-horizontal">
            <div class="card-body">
                @if (session()->has('errors'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                        {{ session('errors') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                    </div>
                @endif

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Success!</h5>
                        {{ session('success') }}
                    </div>
                @endif

                <div class="form-group row">
                    <label for="about_text" class="col-sm-4 col-form-label">Privacy Policy</label>
                    <div class="col-sm-8">
                        <textarea id="privacy" type="text" wire:model="privacy" style="font-size: 16px" class="form-control" rows="6" placeholder="Privacy Policy">
                        </textarea>
                    </div>
                </div>


                <button wire:click="save" style="height: 35px;font-size: 16px" class="btn btn-info">Update</button>

            </div>
            <!-- /.card-body -->
            <!-- /.card-footer -->
        </div>
    </div>
    <!-- /.card -->

</div>

