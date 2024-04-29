<div class="header d-flex flex-wrap justify-content-between pt-4">
    <div class="search-bar">
        <input type="text" class="search-input" placeholder="Enter a dishes">
    </div>

    <div class="right-icons">
        <button class="btn-custom btn-icon">
            <img src="/icon/shopping-basket.png">
        </button>
        <button class="btn-custom btn-icon">
            <img src="/icon/invoice.png">
        </button>
        <button class="btn-custom btn-icon red-btn" data-bs-toggle="modal" data-bs-target="#tableSelection">
            <img src="{{url('/icon/table_bar.png')}}">
            Select A Table
        </button>
    </div>

    <!-- Table -->
    <div class="modal fade" id="tableSelection" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable table-modal-select">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="text-center p-4">
                        Switch Table
                    </h4>
                    <div class="table-status">
                        <div class="table-status-wrapper">
                            <div class="circle empty"></div>
                            Empty Table
                        </div>
                        <div class="table-status-wrapper">
                            <div class="circle filled"></div>
                            There were people
                        </div>
                    </div>
                    <swiper-container class="table-slider" pagination="true" pagination-clickable="true">
                        <swiper-slide>
                            <div class="list-table m-5">
                                <button class="btn btn-custom btn-icon table-item">
                                    <img src="{{url('/icon/table_bar.png')}}" class="card-img-top" alt="...">
                                    <span class="table-title">
                                            Table 1
                                        </span>
                                </button>
                                <button class="btn btn-custom btn-icon table-item">
                                    <img src="{{url('/icon/table_bar.png')}}" class="card-img-top" alt="...">
                                    <span class="table-title">
                                            Table 1
                                        </span>
                                </button>
                                <button class="btn btn-custom btn-icon table-item">
                                    <img src="{{url('/icon/table_bar.png')}}" class="card-img-top" alt="...">
                                    <span class="table-title">
                                            Table 1
                                        </span>
                                </button>
                                <button class="btn btn-custom btn-icon table-item">
                                    <img src="{{url('/icon/table_bar.png')}}" class="card-img-top" alt="...">
                                    <span class="table-title">
                                            Table 1
                                        </span>
                                </button>
                                <button class="btn btn-custom btn-icon table-item">
                                    <img src="{{url('/icon/table_bar.png')}}" class="card-img-top" alt="...">
                                    <span class="table-title">
                                            Table 1
                                        </span>
                                </button>
                                <button class="btn btn-custom btn-icon table-item">
                                    <img src="{{url('/icon/table_bar.png')}}" class="card-img-top" alt="...">
                                    <span class="table-title">
                                            Table 1
                                        </span>
                                </button>
                                <button class="btn btn-custom btn-icon table-item">
                                    <img src="{{url('/icon/table_bar.png')}}" class="card-img-top" alt="...">
                                    <span class="table-title">
                                            Table 1
                                        </span>
                                </button>
                                <button class="btn btn-custom btn-icon table-item">
                                    <img src="{{url('/icon/table_bar.png')}}" class="card-img-top" alt="...">
                                    <span class="table-title">
                                            Table 1
                                        </span>
                                </button>
                                <button class="btn btn-custom btn-icon table-item">
                                    <img src="{{url('/icon/table_bar.png')}}" class="card-img-top" alt="...">
                                    <span class="table-title">
                                            Table 1
                                        </span>
                                </button>
                                <button class="btn btn-custom btn-icon table-item">
                                    <img src="{{url('/icon/table_bar.png')}}" class="card-img-top" alt="...">
                                    <span class="table-title">
                                            Table 1
                                        </span>
                                </button>
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div class="list-table m-5">
                                <button class="btn btn-custom btn-icon table-item">
                                    <img src="{{url('/icon/table_bar.png')}}" class="card-img-top" alt="...">
                                    <span class="table-title">
                                            Table 1
                                        </span>
                                </button>
                                <button class="btn btn-custom btn-icon table-item">
                                    <img src="{{url('/icon/table_bar.png')}}" class="card-img-top" alt="...">
                                    <span class="table-title">
                                            Table 1
                                        </span>
                                </button>
                                <button class="btn btn-custom btn-icon table-item">
                                    <img src="{{url('/icon/table_bar.png')}}" class="card-img-top" alt="...">
                                    <span class="table-title">
                                            Table 1
                                        </span>
                                </button>
                                <button class="btn btn-custom btn-icon table-item">
                                    <img src="{{url('/icon/table_bar.png')}}" class="card-img-top" alt="...">
                                    <span class="table-title">
                                            Table 1
                                        </span>
                                </button>
                                <button class="btn btn-custom btn-icon table-item">
                                    <img src="{{url('/icon/table_bar.png')}}" class="card-img-top" alt="...">
                                    <span class="table-title">
                                            Table 1
                                        </span>
                                </button>
                                <button class="btn btn-custom btn-icon table-item">
                                    <img src="{{url('/icon/table_bar.png')}}" class="card-img-top" alt="...">
                                    <span class="table-title">
                                            Table 1
                                        </span>
                                </button>
                                <button class="btn btn-custom btn-icon table-item">
                                    <img src="{{url('/icon/table_bar.png')}}" class="card-img-top" alt="...">
                                    <span class="table-title">
                                            Table 1
                                        </span>
                                </button>
                                <button class="btn btn-custom btn-icon table-item">
                                    <img src="{{url('/icon/table_bar.png')}}" class="card-img-top" alt="...">
                                    <span class="table-title">
                                            Table 1
                                        </span>
                                </button>
                                <button class="btn btn-custom btn-icon table-item">
                                    <img src="{{url('/icon/table_bar.png')}}" class="card-img-top" alt="...">
                                    <span class="table-title">
                                            Table 1
                                        </span>
                                </button>
                                <button class="btn btn-custom btn-icon table-item">
                                    <img src="{{url('/icon/table_bar.png')}}" class="card-img-top" alt="...">
                                    <span class="table-title">
                                            Table 1
                                        </span>
                                </button>
                            </div>
                        </swiper-slide>
                    </swiper-container>
                </div>
            </div>
        </div>
    </div>

</div>
