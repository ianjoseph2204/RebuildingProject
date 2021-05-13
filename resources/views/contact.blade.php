@extends('header')

@section('content')
    <section id="01">
        <div id="back-story">
            <div class="container">

                <div class="row space"></div>
                <div class="row justify-content-center pt-5" style="height: 1000px">
                    <div class="col-lg-4 mx-4 my-5" style="vertical-align: middle;">
                        <h1 class="judulForm" style="font-size: 45px;line-height: 55px;">Contact Us </h1>
                        <b><a id="quote">Let's get in touch!</a></b>
                        <div class="row my-2" style="margin-left: -3px;">
                            <a href="https://wa.me/6285388114785" target="_blank"
                               style="background-image: url('{{asset('assets/contact-us/Whatsapp.png')}}');
                                   margin-right: 5px; width: 40px; height: 40px; background-size: contain"></a>
                            <a href="https://www.facebook.com/reproes/" target="_blank"
                               style="background-image: url('{{asset('assets/contact-us/Facebook.png')}}');
                                   margin-right: 5px; width: 40px; height: 40px; background-size: contain"></a>
                            <a href="https://www.instagram.com/rebuildingproject/" target="_blank"
                               style="background-image: url('{{asset('assets/contact-us/Instagram.png')}}');
                                   margin-right: 5px; width: 40px; height: 40px; background-size: contain"></a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form method="POST" action="{{url('/inquiries')}}">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-lg-9 col-10 p-4" id="back">
                                    <label for="nama" style="font-size: 14px; font-weight: bold;">Nama / Nama
                                        Perusahaan</label>

                                    <div class="input-icons mb-3">
                                        <i class="far fa-user icon"></i>
                                        <input id="nama" style="border-radius:10px; border-color:transparent"
                                               class="form-control input-field" name="name" required autofocus>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="email" style="font-size: 14px; font-weight: bold;">Alamat
                                                E-mail</label>
                                            <div class="input-icons mb-3">
                                                <i class="far fa-envelope-open icon"></i>
                                                <input id="email" style="border-radius:10px; border-color:transparent"
                                                       type="email" class="form-control input-field" name="email"
                                                       required autofocus>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="phone" style="font-size: 14px; font-weight: bold;">Nomor
                                                Telepon</label>
                                            <div class="input-icons mb-3">
                                                <img src="{{asset('assets/phone-call.png')}}" class="icon"
                                                     style="width: 37px;position: absolute;min-width: 0px;">
                                                <input id="phone" style="border-radius:10px; border-color:transparent"
                                                       class="form-control input-field" name="phone" required autofocus>
                                            </div>
                                        </div>
                                    </div>

                                    <label for="judul" style="font-size: 14px; font-weight: bold;">Judul</label>
                                    <input id="judul" style="border-radius:10px; border-color:transparent"
                                           class="form-control" name="title" required autofocus>
                                    <br>
                                    <label for="Pesan" style="font-size: 14px; font-weight: bold;">Pesan</label>
                                    <textarea id="Pesan" style="border-radius:10px;border-color:transparent;"
                                              type="text"
                                              class="form-control col-lg-12 col-12" rows="8" name="message" required
                                              autofocus></textarea>

                                    @if(\Session::has('successContact'))
                                        <script>
                                            swal({
                                                title: "Success",
                                                text: "Your Message Has Been Sent!",
                                                icon: "success",
                                                confirmButtonText: 'OK',
                                                closeOnConfirm: true,
                                                allowOutsideClick: false
                                            });
                                        </script>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="mt-3 px-5 py-2 text-center" id="login">
                                        Kirim
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const contact = document.getElementById('contact-us').id = 'this';
    </script>
@endsection
