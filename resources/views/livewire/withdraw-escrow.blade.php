<div>
    <!-- Horizontal Form -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Withdraw from Escrow</h3>
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
                @else

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Amount in BTC</label>
                        <div class="col-sm-8">
                            @if($btc_total <= 0)
                                <input type="text" wire:model.lazy="btc_amount" style="height: 35px;font-size: 16px" class="form-control"  placeholder="BTC Amount">
                            @else
                                {{$btc_amount}}
                            @endif
                        </div>
                    </div>
                    @if($fee == 0)
                        <button wire:click="calculateFee" style="height: 35px;font-size: 16px" class="btn btn-info">Calculate Fee</button>
                            <button wire:click="max" style="height: 35px;font-size: 16px" class="btn btn-success">Max</button>
                    @endif
                    @if($fee != 0)

                        <div class="form-group row">
                            <div class="col-sm-4">Fee</div>
                            <div class="col-sm-8">
                                {{$fee}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">Total</div>
                            <div class="col-sm-8">
                                {{$btc_total}}
                            </div>
                        </div>

                        <button wire:click="submit" style="height: 35px;font-size: 16px" class="btn btn-info">Send BTC</button>
                        <button wire:click="clear" style="height: 35px;font-size: 16px" class="btn btn-danger">Clear</button>

                    @endif
                @endif
            </div>
            <!-- /.card-body -->
            <!-- /.card-footer -->
        </div>
    </div>
    <!-- /.card -->

</div>
