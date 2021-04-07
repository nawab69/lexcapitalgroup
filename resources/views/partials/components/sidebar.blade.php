<!-- sidebar area start -->
<section class="sidebar__area">
    <div class="sidebar__wrapper">
        <div class="sidebar__close">
            <button class="sidebar__close-btn" id="sidebar__close-btn">
                <span><i class="fal fa-times"></i></span>
                <span>close</span>
            </button>
        </div>
        <div class="sidebar__tab">
            <ul class="nav nav-tabs" id="sidebar-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="menu-tab" data-toggle="tab" href="#menu" role="tab" aria-controls="menu" aria-selected="true">menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">info</a>
                </li>
            </ul>
        </div>
        <div class="sidebar__content">
            <div class="tab-content" id="sidebar-tab-content">
                <div class="tab-pane fade show active" id="menu" role="tabpanel" aria-labelledby="menu-tab">
                    <div class="logo mb-40">
                        <a href="{{url('/')}}">
                            <img src="{{url('/')}}/frontend/img/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
                <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
                    <div class="sidebar__info">
                        <div class="logo mb-40">
                            <a href="{{url('/')}}">
                                <img src="{{url('/')}}/frontend/img/logo/logo.png" alt="logo">
                            </a>
                        </div>
{{--                        <p>We must explain to you how all seds this mistakens idea off denouncing pleasures and praising pain was born and I will give you a completed accounts of the system and expound.</p>--}}
                        <a href="{{url('/contact-us')}}" class="z-btn z-btn-white">contact us</a>
                        <div class="sidebar__contact mt-30">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="text">
                                        <span>{{settings('address')}}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="text ">
                                        <span><a href="mailto:{{settings('admin_mail','admin@mail.com')}}">{{settings('admin_mail','admin@mail.com')}}</a></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="text">
                                        <span><a href="tel:{{settings('phone')}}">{{settings('phone')}}</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="body-overlay"></div>
<!-- sidebar area end -->
