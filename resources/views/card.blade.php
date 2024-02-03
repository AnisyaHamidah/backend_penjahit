@extends('template')
@section('content')
    <div class="content">
        <div class="row">
            {{-- CARD PERTAMA --}}
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                                        <div class="logo-image-small">
                                            <img src="../assets/img/GAMIS.PNG">
                                        </div>
                                        <!-- <p>CT</p> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-9 col-md-8">
                                <div class="numbers">
                                    <p class="card-title">Gamis</p>
                                    <p class="card-category">Capacity</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <a href="{{ url('dataproduk') }}">
                                <i class="fa fa-refresh"></i>
                                Masukan pesanan
                        </div>
                    </div>
                </div>
            </div>
            {{-- CARD KEDUA --}}
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                                        <div class="logo-image-small">
                                            <img src="../assets/img/Baju.PNG">
                                        </div>
                                        <!-- <p>CT</p> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-title">Baju</p>
                                    <p class="card-category">Revenue</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <a href="{{ url('dataproduk') }}">
                                <i class="fa fa-refresh"></i>
                                Masukan pesanan
                        </div>
                    </div>
                </div>
            </div>

            {{-- CARD KETIGA --}}
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                                        <div class="logo-image-small">
                                            <img src="../assets/img/Rok.PNG">
                                        </div>
                                        <!-- <p>CT</p> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-title">Rok</p>
                                    <p class="card-category">Errors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <a href="{{ url('dataproduk') }}">
                                <i class="fa fa-refresh"></i>
                                Masukan pesanan
                        </div>
                    </div>
                </div>
            </div>

            {{-- CARD KEEMPAT --}}
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                                        <div class="logo-image-small">
                                            <img src="../assets/img/Kebaya.PNG">
                                        </div>
                                        <!-- <p>CT</p> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-title">Kebaya</p>
                                    <p class="card-category">Followers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <a href="{{ url('dataproduk') }}">
                                <i class="fa fa-refresh"></i>
                                Masukan pesanan
                        </div>
                    </div>
                </div>
            </div>
            {{-- CARD KELIMA --}}
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                                        <div class="logo-image-small">
                                            <img src="../assets/img/Blouse.PNG">
                                        </div>
                                        <!-- <p>CT</p> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-title">Blouse Wanita</p>
                                    <p class="card-category">Followers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <a href="{{ url('dataproduk') }}">
                                <i class="fa fa-refresh"></i>
                                Masukan pesanan
                        </div>
                    </div>
                </div>
            </div>
            {{-- CARD KEENAM --}}
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                                        <div class="logo-image-small">
                                            <img src="../assets/img/Couple.PNG">
                                        </div>
                                        <!-- <p>CT</p> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-title">Couple</p>
                                    <p class="card-category">Followers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <a href="{{ url('dataproduk') }}">
                                <i class="fa fa-refresh"></i>
                                Masukan pesanan
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
