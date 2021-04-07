<div>
    <!-- Horizontal Form -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Homepage</h3>
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
                        <label class="col-sm-4 col-form-label">Welcome text</label>
                        <div class="col-sm-8">
                            <input type="text" wire:model.lazy="welcome" style="height: 35px;font-size: 16px" class="form-control"  placeholder="welcome">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Welcome Sub</label>
                        <div class="col-sm-8">
                            <input type="text" wire:model.lazy="welcome_sub" style="height: 35px;font-size: 16px" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Welcome Small</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="welcome_small" style="font-size: 16px" class="form-control"></textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Feature 1</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="f_1" style="font-size: 16px" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Feature 1 Heading</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="fh_1" style="font-size: 16px" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Feature 1 Text</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="fp_1" style="font-size: 16px" class="form-control"></textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Feature 2</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="f_2" style="font-size: 16px" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Feature 2 Heading</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="fh_2" style="font-size: 16px" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Feature 2 Text</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="fp_2" style="font-size: 16px" class="form-control"></textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Feature 3</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="f_3" style="font-size: 16px" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Feature 3 Heading</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="fh_3" style="font-size: 16px" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Feature 3 Text</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="fp_3" style="font-size: 16px" class="form-control"></textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Feature 4</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="f_4" style="font-size: 16px" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Feature 4 Heading</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="fh_4" style="font-size: 16px" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Feature 4 Text</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="fp_4" style="font-size: 16px" class="form-control"></textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">About Section</label>
                        <div class="col-sm-8">
                            <input type="text" wire:model.lazy="x_h" style="font-size: 16px" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">About Section Subheading</label>
                        <div class="col-sm-8">
                            <input type="text" wire:model.lazy="x_s" style="font-size: 16px" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">About Section 1</label>
                        <div class="col-sm-8">
                            <input type="text" wire:model.lazy="x1_h" style="font-size: 16px" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">About Section 1 Text</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="x1_d" style="font-size: 16px" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">About Section 2</label>
                        <div class="col-sm-8">
                            <input type="text" wire:model.lazy="x2_h" style="font-size: 16px" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">About Section 2 Text</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="x2_d" style="font-size: 16px" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">About Section 3</label>
                        <div class="col-sm-8">
                            <input type="text" wire:model.lazy="x3_h" style="font-size: 16px" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">About Section 3 Text</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="x3_d" style="font-size: 16px" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">About Section 4</label>
                        <div class="col-sm-8">
                            <input type="text" wire:model.lazy="x4_h" style="font-size: 16px" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">About Section 4 Text</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="x4_d" style="font-size: 16px" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">About Section Quote</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="xq" style="font-size: 16px" class="form-control"></textarea>
                        </div>
                    </div>

                    <hr>
                    Testimonial
                    <hr>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Testimonial 1 User Name</label>
                        <div class="col-sm-8">
                            <input type="text" wire:model.lazy="t1_n" style="font-size: 16px" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Testimonial 1  Text</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="t1_t" style="font-size: 16px" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Testimonial 2 User Name</label>
                        <div class="col-sm-8">
                            <input type="text" wire:model.lazy="t2_n" style="font-size: 16px" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Testimonial 2  Text</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="t2_t" style="font-size: 16px" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Testimonial 3 User Name</label>
                        <div class="col-sm-8">
                            <input type="text" wire:model.lazy="t3_n" style="font-size: 16px" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Testimonial 3  Text</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="t3_t" style="font-size: 16px" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Testimonial 4 User Name</label>
                        <div class="col-sm-8">
                            <input type="text" wire:model.lazy="t4_n" style="font-size: 16px" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Testimonial 4  Text</label>
                        <div class="col-sm-8">
                            <textarea type="text" wire:model.lazy="t4_t" style="font-size: 16px" class="form-control"></textarea>
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

