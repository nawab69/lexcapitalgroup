<div>

    @if($ques !='')
    <!-- Horizontal Form -->
    <div class="card card-teal">
        <div class="card-header">
            <h3 class="card-title">Update Faq</h3>
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

                    @if (session()->has('successa'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i> Success!</h5>
                            {{ session('successa') }}
                        </div>
                    @endif

                @if($errors->any())
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                    </div>
                @endif

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Question</label>
                    <div class="col-sm-8">
                        <input type="text" wire:model.lazy="ques" style="height: 35px;font-size: 16px" class="form-control"  placeholder="Question">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Answer</label>
                    <div class="col-sm-8">
                        <input type="text" wire:model.lazy="ans" style="height: 35px;font-size: 16px" class="form-control"  placeholder="Answer">
                    </div>
                </div>

                <button wire:click="edit" style="height: 35px;font-size: 16px" class="btn btn-info">Update</button>
                <button wire:click="delete" style="height: 35px;font-size: 16px" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
        @else
            @if (session()->has('successa'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Success!</h5>
                    {{ session('successa') }}
                </div>
            @endif
        @endif

</div>
