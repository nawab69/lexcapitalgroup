<div>
    <!-- Horizontal Form -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Create a New Faq</h3>
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

                <button wire:click="create" style="height: 35px;font-size: 16px" class="btn btn-info">Create</button>
                    <hr>
                    <hr>
                    <hr>
                    <div class="row">
                        @foreach($faqs as $faq)
                            <div class="col-md-6 col-12">
                                <livewire:faqs :id="$faq->id" :key="$faq->id"/>
                            </div>

                        @endforeach
                    </div>

            </div>
        </div>
    </div>

</div>
