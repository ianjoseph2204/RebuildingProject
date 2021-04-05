@extends('header')

@section('content')
<section id="01">
    <div id="back-story">
        <div class="container">

            <div class="row space"></div>
            <div class="row justify-content-center pt-5">
                <div class="col-lg-4 mx-4 my-5" style="vertical-align: middle;">
                    <h1 class="judulForm" style="font-size: 45px;line-height: 55px;">Contact Us </h1>
                    <a id="quote">Let's Get in Touch!</a>
                    <div class="row my-2" style="margin-left: -3px;">
                        <a href=""><i class="contact-icon mx-1 fab fa-whatsapp"></i></a>
                        <a href=""><i class="contact-icon mx-1 far fa-envelope"></i></a>
                        <a href=""><i class="contact-icon mx-1 fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form method="POST" action="/inquiries">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-lg-9 col-10 p-4" id="back">
                                <label for="nama" style="font-size: 14px; font-weight: bold;">Nama / Nama
                                    Perusahaan</label>

                                <div class="input-icons mb-3">
                                    <i class="far fa-user icon"></i>
                                    <input id="nama" style="border-radius:10px; border-color:transparent" class="form-control input-field" name="name" required autofocus>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="email" style="font-size: 14px; font-weight: bold;">Email</label>
                                        <div class="input-icons mb-3">
                                            <i class="far fa-envelope-open icon"></i>
                                            <input id="email" style="border-radius:10px; border-color:transparent" type="email" class="form-control" name="email" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="phone" style="font-size: 14px; font-weight: bold;">Nomor
                                            Telephone</label>
                                        <div class="input-icons mb-3">
                                            <img src="{{asset('assets/phone-call.png')}}" class="icon" style="width: 37px;position: absolute;min-width: 0px;">
                                            <input id="phone" style="border-radius:10px; border-color:transparent" class="form-control" name="phone" required autofocus>
                                        </div>
                                    </div>
                                </div>

                                <label for="judul" style="font-size: 14px; font-weight: bold;">Judul</label>
                                <input id="judul" style="border-radius:10px; border-color:transparent" class="form-control" name="title" required autofocus>
                                <br>
                                <label for="Pesan" style="font-size: 14px; font-weight: bold;">Pesan</label>
                                <input id="Pesan" style="border-radius:10px; border-color:transparent; height:135px" class="form-control" name="message" required autofocus></textarea>
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
    const contact = document.getElementById('contact').id = 'this';
</script>
@endsection