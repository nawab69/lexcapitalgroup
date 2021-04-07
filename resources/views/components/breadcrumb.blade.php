<div>
    <!-- page title area start -->
    <section class="page__title p-relative d-flex align-items-center fix" data-background="{{url('/')}}/frontend/img/page-title/page-title-1.jpg">
        <div class="slider__shape">
            <img class="shape triangle" src="{{url('/')}}/frontend/img/icon/slider/triangle.png" alt="triangle">
            <img class="shape dotted-square" src="{{url('/')}}/frontend/img/icon/slider/dotted-square.png" alt="dotted-square">
            <img class="shape solid-square" src="{{url('/')}}/frontend/img/icon/slider/solid-square.png" alt="solid-square">
            <img class="shape circle-2" src="{{url('/')}}/frontend/img/icon/slider/circle.png" alt="circle">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-content mt-100">
                        <h2>{{$title}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$name}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->
</div>
