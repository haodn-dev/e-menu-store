@extends('layouts.default')
@section('styles')
@endsection
@section('content')
    <swiper-container class="banner-slider" pagination="true" autoplay="true" speed="1000" loop="true"
                      space-between="30" pagination-clickable="true">
        <swiper-slide>
            <img class="swiper-image" src="{{(url('storage/banner/banner.png'))}}" alt="">
        </swiper-slide>
        <swiper-slide>
            <img class="swiper-image" src="{{(url('storage/banner/banner.png'))}}" alt="">
        </swiper-slide>
        <swiper-slide>
            <img class="swiper-image" src="{{(url('storage/banner/banner.png'))}}" alt="">
        </swiper-slide>
        <swiper-slide>
            <img class="swiper-image" src="{{(url('storage/banner/banner.png'))}}" alt="">
        </swiper-slide>
        <swiper-slide>
            <img class="swiper-image" src="{{(url('storage/banner/banner.png'))}}" alt="">
        </swiper-slide>
    </swiper-container>
    <div class="list-food-container">
        <div>
            <h4 class="food-title">Beefsteak</h4>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <div class="card-img-wrapper"><img class="card-img-top" src="{{(url('storage/food/image.png'))}}"
                                                       alt="Card image cap"></div>
                    <div class="card-body">
                        <h5 class="card-title">Core Steak 200g</h5>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <p class="card-text">20$</p>
                        <button class="btn btn-custom btn-icon">
                            <img src="/icon/plus.png">
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-img-wrapper"><img class="card-img-top" src="{{(url('storage/food/image.png'))}}"
                                                       alt="Card image cap"></div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <p class="card-text">20$</p>
                        <button class="btn btn-custom btn-icon">
                            <img src="/icon/plus.png">
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-img-wrapper"><img class="card-img-top" src="{{(url('storage/food/image.png'))}}"
                                                       alt="Card image cap"></div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <p class="card-text">20$</p>
                        <button class="btn btn-custom btn-icon">
                            <img src="/icon/plus.png">
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-img-wrapper"><img class="card-img-top" src="{{(url('storage/food/image.png'))}}"
                                                       alt="Card image cap"></div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <p class="card-text">20$</p>
                        <button class="btn btn-custom btn-icon">
                            <img src="/icon/plus.png">
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-img-wrapper"><img class="card-img-top" src="{{(url('storage/food/image.png'))}}"
                                                       alt="Card image cap"></div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <p class="card-text">20$</p>
                        <button class="btn btn-custom btn-icon">
                            <img src="/icon/plus.png">
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-img-wrapper"><img class="card-img-top" src="{{(url('storage/food/image.png'))}}"
                                                       alt="Card image cap"></div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <p class="card-text">20$</p>
                        <button class="btn btn-custom btn-icon">
                            <img src="/icon/plus.png">
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-img-wrapper"><img class="card-img-top" src="{{(url('storage/food/image.png'))}}"
                                                       alt="Card image cap"></div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <p class="card-text">20$</p>
                        <button class="btn btn-custom btn-icon">
                            <img src="/icon/plus.png">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
