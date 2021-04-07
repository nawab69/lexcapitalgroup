<div>
    <!-- Horizontal Form -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Update Escrow Balance</h3>
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
                        <label class="col-sm-4 col-form-label">admin_wallet (default address of blockIo)</label>
                        <div class="col-sm-8">
                            <input type="text" wire:model.lazy="admin_wallet" style="height: 35px;font-size: 16px" class="form-control"  placeholder="admin_wallet">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Address</label>
                        <div class="col-sm-8">
                            <input type="text" wire:model.lazy="address" style="height: 35px;font-size: 16px" class="form-control"  placeholder="address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Admin email</label>
                        <div class="col-sm-8">
                            <input type="text" wire:model.lazy="admin_mail" style="height: 35px;font-size: 16px" class="form-control"  placeholder="admin mail">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Phone</label>
                        <div class="col-sm-8">
                            <input type="text" wire:model.lazy="phone" style="height: 35px;font-size: 16px" class="form-control"  placeholder="phone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Working Time</label>
                        <div class="col-sm-8">
                            <input type="text" wire:model.lazy="working_time" style="height: 35px;font-size: 16px" class="form-control"  placeholder="working time">
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

