@extends('header')

@section('content')
    <section id="01">
        <div class="container-fluid my-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-sm-6 col-12 p-5" id="everyone">
                    <div class="row space my-5"></div>
                    <a style="color:white; font-weight:bold; font-size:48px;">
                        <span style="color:#FFA216">"</span>Everyone can contribute<br>
                        &nbsp;&nbsp;to something <span style="color:#FFA216">GOOD.</span><br>
                        &nbsp;&nbsp;Your support <span style="color:#FFA216">MATTERS."</span></a>
                </div>
                <div class="col-lg-5 col-sm-6 col-12 p-5 text-center" style="background-color:#FBEFE4">
                    <h2 class="grid-2 my-3">Donate Now</h2>
                    <img src="{{asset('assets/get-involved/qr.png')}}" width="40%" class="mx-1 my-1">
                    <h3 class="grid-2 mt-3">John Smith</h3>
                    <h3 class="grid-2">12345678</h3>
                </div>
            </div>
        </div>
    </section>

{{--    <section id="02">--}}
{{--        <div class="container my-5">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-12 mt-5 text-center">--}}
{{--                    <h1 class="grid-1 my-2">Merchandise</h1>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-sm-4 col-10 my-4">--}}
{{--                    <img src="{{asset('assets/get-involved/tshirt.png')}}" class="card-picture">--}}
{{--                    <div class="card p-3">--}}
{{--                        <div class="box p-xl-3 p-lg-3 p-2">--}}
{{--                            <h3 class="grid-1">Rebuilding <br> T-shirt</h3>--}}
{{--                            <a style="color:#f5c150"><b>IDR 150.000</b></a>--}}
{{--                            <div class="row mt-3">--}}
{{--                                <div class="col-lg-12 text-right">--}}
{{--                                    <a class="btn px-3 py-1 my-4" id="login" href="{{url('more')}}"><b>Buy Now</b></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-sm-4 col-10 my-4">--}}
{{--                    <img src="{{asset('assets/get-involved/bottle.png')}}" class="card-picture">--}}
{{--                    <div class="card p-3">--}}
{{--                        <div class="box p-xl-3 p-lg-3 p-2">--}}
{{--                            <h3 class="grid-1">Rebuilding <br> Bottle</h3>--}}
{{--                            <a style="color:#f5c150"><b>IDR 150.000</b></a>--}}
{{--                            <div class="row mt-3">--}}
{{--                                <div class="col-lg-12 text-right">--}}
{{--                                    <a class="btn px-3 py-1 my-4" id="login" href="{{url('more')}}"><b>Buy Now</b></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-sm-4 col-10 my-4">--}}
{{--                    <img src="{{asset('assets/get-involved/watch.png')}}" class="card-picture">--}}
{{--                    <div class="card p-3">--}}
{{--                        <div class="box p-xl-3 p-lg-3 p-2">--}}
{{--                            <h3 class="grid-1">Rebuilding <br> Watch</h3>--}}
{{--                            <a style="color:#f5c150"><b>IDR 150.000</b></a>--}}
{{--                            <div class="row mt-3">--}}
{{--                                <div class="col-lg-12 text-right">--}}
{{--                                    <a class="btn px-3 py-1 my-4" id="login" href="{{url('more')}}"><b>Buy Now</b></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <section id="03">--}}
{{--        <div class="container">--}}
{{--            <div class="row p-3 my-2 justify-content-center">--}}
{{--                <div class="col-lg-12 mt-5 text-center">--}}
{{--                    <h1 class="grid-2 my-2">Volunteer Programs</h1>--}}
{{--                </div>--}}
{{--                <div class="col-lg-5 col-sm-5 col-10 m-3">--}}
{{--                    <div class="volunteer-panel p-3">--}}
{{--                        <img class="mt-5" src="{{asset('assets/home/image2.png')}}" alt="Avatar"--}}
{{--                             style="width:40%"><br><br>--}}
{{--                        <div class="box">--}}
{{--                            <h4><b>Field Worker</b></h4>--}}
{{--                            <p>Matematika, Bahasa Inggris, dsb.</p>--}}
{{--                            <div class="row mt-3">--}}
{{--                                <div class="col-lg-12 text-center">--}}
{{--                                    <a class="btn px-3 py-1 my-4" id="login" href="{{url('/more')}}"><b>Register Now</b></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-5 col-sm-5 col-10 m-3">--}}
{{--                    <div class="volunteer-panel p-3">--}}
{{--                        <img class="mt-5" src="{{asset('assets/home/image3.png')}}" alt="Avatar"--}}
{{--                             style="width:40%"><br><br>--}}
{{--                        <div class="box">--}}
{{--                            <h4><b>Committee</b></h4>--}}
{{--                            <p>Toleransi, Kerjasama, Saling Menghargai, Kejujuran, dsb.</p>--}}
{{--                            <div class="row mt-3">--}}
{{--                                <div class="col-lg-12 text-center">--}}
{{--                                    <a class="btn px-3 py-1 my-4" id="login" href="{{url('/more')}}"><b>Register Now</b></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
@endsection
