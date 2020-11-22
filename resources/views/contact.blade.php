@extends('header')

@section('content')
<section id="01">
    <div class="container">
        <div class="row jeda"></div>
        <div class="row justify-content-center">
            <div class="col-lg-4 mx-4 my-5" style="vertical-align: middle;">
                <h1 class="grid1 my-2">Contact Us </h1>
                <a>Let's Get in Touch</a>
                <div class="row ml-1 my-2">
                    <a href=""><i class="contacticon mx-1 fas fa-phone"></i></a>
                    <a href=""><i class="contacticon mx-1 fas fa-envelope"></i></a>
                    <a href=""><i class="contacticon mx-1 fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-7">
            <form method="POST" action="validasiLogin">
                    @csrf
                    <div class="row justify-content-center" >
                        <div class="col-lg-9 col-10 p-5" id="back">
                            <label for="nama" style="font-size: 14px; font-weight: bold;">Nama/Nama Perusahaan</label>
                            <input id="nama" style="border-color: #0a0a0a;" type="name" class="form-control" name="email" required autofocus>
                            <br>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="email" style="font-size: 14px; font-weight: bold;">Email</label>
                                    <input id="email" style="border-color: #0a0a0a;" type="email" class="form-control" name="email" required autofocus>
                                </div>
                                <div class="col-lg-6">
                                    <label for="phone" style="font-size: 14px; font-weight: bold;">Nomor Telephone</label>
                                    <input id="phone" style="border-color: #0a0a0a;" type="phone" class="form-control" name="email" required autofocus>
                                </div>
                            </div>
                            <br>
                            <label for="judul" style="font-size: 14px; font-weight: bold;">Judul</label>
                            <input id="judul" style="border-color: #0a0a0a;" type="name" class="form-control" name="judul" required autofocus>
                            <br>
                            <label for="Pesan" style="font-size: 14px; font-weight: bold;">Pesan</label>
                            <textarea id="Pesan" style="border-color: #0a0a0a;" type="name" class="form-control" name="Pesan" required autofocus>
                            </textarea>
                            <!-- if(\Session::has('failLoginNoAkun'))
                                <script>
                                    swal({
                                        title: "Akun tidak Terdaftar",
                                        text: "Email Anda belum terdaftar di sistem kami. Tekan tombol sign up pada bagian kanan atas untuk membuat akun",
                                        icon: "error",
                                        confirmButtonText: 'OK',
                                        closeOnConfirm: true, 
                                        allowOutsideClick: false
                                    });
                                </script>
                            endif -->
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
</section>

@endsection 