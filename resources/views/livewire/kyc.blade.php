<div>
    <!-- Horizontal Form -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title h3 text-primary">KYC Verification</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="form-horizontal">
            <div class="card-body">
                @if(auth()->user()->kyc->id_status === 'Submitted')
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Success!</h5>
                        You have Already Submitted Your Document. It will be verified by our team.
                    </div>

                @elseif(auth()->user()->kyc->id_status === 'approved')

                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Success!</h5>
                        Your Kyc Verification Has been Approved.
                    </div>
                @else
                    @if (session()->has('errors'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                        {{ session('errors') }}
                    </div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
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
                                <label for="first_name" class="col-sm-4 col-form-label">First Name</label>
                                <div class="col-sm-8">
                                    <input id="first_name" type="text" wire:model="first_name" style="height: 35px;font-size: 16px" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="last_name" class="col-sm-4 col-form-label">Last Name</label>
                                <div class="col-sm-8">
                                    <input id="last_name" type="text" wire:model="last_name" style="height: 35px;font-size: 16px" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-4 col-form-label">Phone</label>
                                <div class="col-sm-8">
                                    <input id="phone" type="text" wire:model="phone" style="height: 35px;font-size: 16px" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address_1" class="col-sm-4 col-form-label">Primary Address</label>
                                <div class="col-sm-8">
                                    <textarea id="address_1" type="text" wire:model="address_1" style="font-size: 16px" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address_2" class="col-sm-4 col-form-label">Secondary Address</label>
                                <div class="col-sm-8">
                                    <textarea id="address_2" type="text" wire:model="address_2" style="font-size: 16px" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-sm-4 col-form-label">City</label>
                                <div class="col-sm-8">
                                    <input id="city" type="text" wire:model="city" style="height: 35px;font-size: 16px" class="form-control" placeholder="City">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="post_code" class="col-sm-4 col-form-label">Post Code</label>
                                <div class="col-sm-8">
                                    <input id="post_code" type="text" wire:model="post_code" style="height: 35px;font-size: 16px" class="form-control" placeholder="Post Code">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="state" class="col-sm-4 col-form-label">State</label>
                                <div class="col-sm-8">
                                    <input id="state" type="text" wire:model="state" style="height: 35px;font-size: 16px" class="form-control" placeholder="State">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="country" class="col-sm-4 col-form-label">Country</label>
                                <div class="col-sm-8">
                                    <input id="country" type="text" wire:model="country" style="height: 35px;font-size: 16px" class="form-control" placeholder="Country">
                                </div>
                            </div>


                        <div class="form-group row">
                            <label for="id_no" class="col-sm-4 col-form-label">ID NO (NID/ Passport / Driving License)</label>
                            <div class="col-sm-8">
                                    <input id="id_no" type="text" wire:model="id_no" style="height: 35px;font-size: 16px" class="form-control" placeholder="Enter Your ID NO">
                            </div>
                        </div>


                            <div class="row">
                                <div class="col-lg-4 col-md-8 col-sm-12 mx-auto">
                                    @if ($id_image_front)
                                        @if($id_image_front->getMimeType() == 'application/pdf')
                                            <img class="img-responsive img-fluid img-profile img-thumbnail"  src="{{asset('pdf.png')}}">
                                        @else
                                            <img class="img-responsive img-fluid img-profile img-thumbnail"  src="{{ $id_image_front->temporaryUrl() }}">
                                        @endif
                                    @endif
                                </div>
                                <div class="col-lg-4 col-md-8 col-sm-12 mx-auto">
                                    @if ($id_image_back)
                                        @if($id_image_back->getMimeType() == 'application/pdf')
                                            <img class="img-responsive img-fluid img-profile img-thumbnail"  src="{{asset('pdf.png')}}">
                                        @else
                                            <img class="img-responsive img-fluid img-profile img-thumbnail"  src="{{ $id_image_back->temporaryUrl() }}">
                                        @endif
                                    @endif
                                </div>
                                <div class="col-lg-4 col-md-8 col-sm-12 mx-auto">
                                    @if ($address_image)
                                        @if($address_image->getMimeType() == 'application/pdf')

                                            <img class="img-responsive img-fluid img-profile img-thumbnail" src="{{asset('pdf.png')}}">
                                        @else
                                            <img class="img-responsive img-fluid img-profile img-thumbnail" src="{{ $address_image->temporaryUrl() }}">
                                        @endif
                                    @endif
                                </div>

                            </div>

                            <form wire:submit.prevent="save" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="id_image_front" class="col-sm-4 col-form-label">ID image (front)</label>
                                <div class="col-sm-8">
                                    <input id="id_image_front" type="file" wire:model="id_image_front" style="height: 35px;font-size: 16px" class="form-control" placeholder="Frontside image of your ID">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="id_image_back" class="col-sm-4 col-form-label">ID image (Back)</label>
                                <div class="col-sm-8">
                                    <input id="id_image_back" type="file" wire:model="id_image_back" style="height: 35px;font-size: 16px" class="form-control" placeholder="Backside image of your ID">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address_image" class="col-sm-4 col-form-label">Address Verification Document</label>
                                <div class="col-sm-8">
                                    <input id="address_image" type="file" wire:model="address_image" style="height: 35px;font-size: 16px" class="form-control" placeholder="Address Verification Document">
                                </div>
                            </div>
                            <div wire:loading> Uploading....... </div>
                            <button  wire:loading.remove style="height: 35px;font-size: 16px" class="btn btn-info mr-5">Submit</button>
                            </form>
                    @endif
                    @endif
            </div>
            <!-- /.card-body -->
            <!-- /.card-footer -->
        </div>
    </div>
    <!-- /.card -->
</div>
