@extends('header')

@section('content')
<section id="01">
    <div class="container">
        <div class="row jeda"></div>
        <div class="row justify-content-center">
            <div class="col-lg-11 col-10 mt-5" id="back">
            <h1 class="grid1 pt-5 px-4 pb-4">Post an Article</h1>
            <form method="POST" action="insertArticle">
                @csrf
                <div class="row justify-content-center" >
                    <div class="col-lg-6 col-12 px-5 pb-4">
                        <label for="namawriter" style="font-size: 14px; font-weight: bold;">Nama Lengkap</label>
                        <input id="namawriter" style="border-radius:10px;" type="name" class="form-control col-lg-12 col-12" name="namewriter" required autofocus>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-12 mt-3">
                                <label for="emailwriter" style="font-size: 14px; font-weight: bold;">Email</label>
                                <input id="emailwriter" style="border-radius:10px;" type="email" class="form-control" name="emailwriter" required autofocus>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12 mt-3">
                                <label for="date" style="font-size: 14px; font-weight: bold;">Tanggal Publikasi</label>
                                <input id="date" style="border-radius:10px;" type="date" class="form-control" name="datepublikasi" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 px-5 pb-4">
                        <label for="titlearticle" style="font-size: 14px; font-weight: bold;">Judul Artikel</label>
                        <input id="titlearticle" style="border-radius:10px;" type="name" class="form-control col-lg-12 col-12" name="titlearticle" required autofocus>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-12 mt-3">
                                <label for="location" style="font-size: 14px; font-weight: bold;">Lokasi Kegiatan</label>
                                <input id="location" style="border-radius:10px;" type="location" class="form-control" name="location" required autofocus>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12 mt-3">
                                <label for="category" style="font-size: 14px; font-weight: bold;">Kategori</label>
                                <input id="category" style="border-radius:10px;" type="category" class="form-control" name="category" required autofocus>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center" >
                    <div class="col-lg-12 col-12 px-5">
                        <label for="article" style="font-size: 14px; font-weight: bold;">Konten Artikel</label>
                        <textarea id="article" style="border-radius:10px;" type="text" class="form-control col-lg-12 col-12" rows="8" name="article" required autofocus>
                            </textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-4 mb-5 text-center">
                        <button type="submit" class="mt-3 px-5 py-2 text-center" id="login">
                            Post Article
                        </button>
                    </div>
                </div>      
            </form>
            </div>
        </div>  
    </div>
</section>

@if(\Session::has('successArticle'))
    <script>
        swal({
            title: "Success",
            text: "Your Post Has Been Saved!",
            icon: "success",
            confirmButtonText: 'OK',
            closeOnConfirm: true, 
            allowOutsideClick: false
        });
    </script>
@endif

@endsection 