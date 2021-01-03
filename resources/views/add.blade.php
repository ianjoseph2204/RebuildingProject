@extends('header')

@section('content')
    <section id="01">
        <div class="container">
            <div class="row jeda"></div>
            <div class="row justify-content-center">
                <div class="col-lg-11 col-10 mt-5">
                    <a class="mt-5 mx-1 px-3 py-2 text-center" href="#buttonpostarticle" id="buttonpostarticle"><b>
                            Article</b></a>
                    <a class="mt-5 mx-1 px-3 py-2 text-center" href="#buttonpostmember"
                       id="buttonpostmember"><b>Member</b></a>
                    <a class="mt-5 mx-1 px-3 py-2 text-center" href="#buttonpostmerch" id="buttonpostmerch"><b>Merch</b></a>
                </div>
                <div class="col-lg-11 col-10" id="back">
                    <div class="section" id="postarticle">
                        <h1 class="grid1 pt-5 px-4 pb-4  animate__animated animate__fadeIn">Post an Article</h1>
                        <form method="POST" action="stories">
                            @csrf
                            <div class="row justify-content-center  animate__animated animate__fadeIn">
                                <div class="col-lg-6 col-12 px-5 pb-4">
                                    <label for="namawriter" style="font-size: 14px; font-weight: bold;">Nama
                                        Lengkap</label>
                                    <input id="namawriter" style="border-radius:10px;" type="name"
                                           class="form-control col-lg-12 col-12" name="writer"
                                           required autofocus>
                                    <div class="row">
                                        {{--                                <div class="col-lg-6 col-sm-6 col-12 mt-3">--}}
                                        {{--                                    <label for="emailwriter" style="font-size: 14px; font-weight: bold;">Email</label>--}}
                                        {{--                                    <input id="emailwriter" style="border-radius:10px;" type="email" class="form-control" name="emailwriter" required autofocus>--}}
                                        {{--                                </div>--}}
                                        {{--                                <div class="col-lg-6 col-sm-6 col-12 mt-3">--}}
                                        {{--                                    <label for="date" style="font-size: 14px; font-weight: bold;">Tanggal Publikasi</label>--}}
                                        {{--                                    <input id="date" style="border-radius:10px;" type="date" class="form-control" name="datepublikasi" required autofocus>--}}
                                        {{--                                </div>--}}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 px-5 pb-4">
                                    <label for="titlearticle" style="font-size: 14px; font-weight: bold;">Judul
                                        Artikel</label>
                                    <input id="titlearticle" style="border-radius:10px;" type="name"
                                           class="form-control col-lg-12 col-12" name="title"
                                           required autofocus>
                                    <div class="row">
                                        {{--                                <div class="col-lg-6 col-sm-6 col-12 mt-3">--}}
                                        {{--                                    <label for="location" style="font-size: 14px; font-weight: bold;">Lokasi Kegiatan</label>--}}
                                        {{--                                    <input id="location" style="border-radius:10px;" type="location" class="form-control" name="location" required autofocus>--}}
                                        {{--                                </div>--}}
                                        <div class="col-lg-6 col-sm-6 col-12 mt-3">
                                            <label for="category"
                                                   style="font-size: 14px; font-weight: bold;">Kategori</label>
                                            <input id="category" style="border-radius:10px;" type="category"
                                                   class="form-control" name="category_id"
                                                   required autofocus>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center  animate__animated animate__fadeIn">
                                <div class="col-lg-12 col-12 px-5">
                                    <label for="article" style="font-size: 14px; font-weight: bold;">Konten
                                        Artikel</label>
                                    <textarea id="article" style="border-radius:10px;" type="text"
                                              class="form-control col-lg-12 col-12" rows="8" name="content"
                                              required autofocus></textarea>
                                </div>
                            </div>
                            <div class="row  animate__animated animate__fadeIn">
                                <div class="col-lg-12 mt-4 mb-5 text-center">
                                    <button type="submit" class="mt-3 px-5 py-2 text-center" id="login">
                                        Post Article
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="section" id="postmember">
                        <h1 class="grid1 pt-5 px-4 pb-4 animate__animated animate__fadeIn">Add a New Team Member</h1>
                        <form method="POST" action="insertMember">
                            @csrf
                            <div class="row justify-content-center animate__animated animate__fadeIn">
                                <div class="col-lg-6 col-12 px-5 pb-4">
                                    <label for="namawriter" style="font-size: 14px; font-weight: bold;">Nama
                                        Lengkap</label>
                                    <input id="namawriter" style="border-radius:10px;" type="name"
                                           class="form-control col-lg-12 col-12" name="namewriter" required autofocus>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-12 mt-3">
                                            <label for="posisi"
                                                   style="font-size: 14px; font-weight: bold;">Posisi</label>
                                            <input id="posisi" style="border-radius:10px;" type="name"
                                                   class="form-control" name="posisi" required autofocus>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-12 mt-3">
                                            <label for="tanggalGabung" style="font-size: 14px; font-weight: bold;">Tanggal
                                                Gabung</label>
                                            <input id="tanggalGabung" style="border-radius:10px;" type="date"
                                                   class="form-control" name="tanggalGabung" required autofocus>
                                        </div>
                                    </div>
                                    <label class="mt-3" for="foto" style="font-size: 14px; font-weight: bold;">Photo
                                        Attachment</label>
                                    <div class="drop-zone">
                                        <span class="drop-zone__prompt">Drop file here or click to Upload</span>
                                        <input class="drop-zone__input" type="file" name="files" id="file"/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 px-5 pb-4">
                                    <label for="cerita" style="font-size: 14px; font-weight: bold;">Cerita</label>
                                    <textarea id="cerita" style="border-radius:10px;" type="text"
                                              class="form-control col-lg-12 col-12" rows="15" name="cerita" required
                                              autofocus>
                                </textarea>
                                </div>
                            </div>
                            <div class="row  animate__animated animate__fadeIn">
                                <div class="col-lg-12 mt-4 mb-5 text-center">
                                    <button type="submit" class="mt-3 px-5 py-2 text-center" id="login">
                                        Add Member
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="section" id="postmerch">
                        <h1 class="grid1 pt-5 px-4 pb-4 animate__animated animate__fadeIn">Add a Merch Item</h1>
                        <form method="POST" action="insertMerch">
                            @csrf
                            <div class="row justify-content-center animate__animated animate__fadeIn">
                                <div class="col-lg-6 col-12 px-5 pb-4">
                                    <label for="namaBarang" style="font-size: 14px; font-weight: bold;">Nama
                                        Barang</label>
                                    <input id="namaBarang" style="border-radius:10px;" type="name"
                                           class="form-control col-lg-12 col-12" name="namaBarang" required autofocus>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-12 mt-3">
                                            <label for="harga" style="font-size: 14px; font-weight: bold;">Harga</label>
                                            <input id="harga" style="border-radius:10px;" type="number"
                                                   class="form-control" name="harga" required autofocus>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-12 mt-3">
                                            <label for="kategori"
                                                   style="font-size: 14px; font-weight: bold;">Kategori</label>
                                            <input id="kategori" style="border-radius:10px;" type="name"
                                                   class="form-control" name="kategori" required autofocus>
                                        </div>
                                    </div>
                                    <label class="mt-3" for="fotobarang" style="font-size: 14px; font-weight: bold;">Photo
                                        Attachment</label>
                                    <div class="drop-zone">
                                        <span class="drop-zone__prompt">Drop file here or click to Upload</span>
                                        <input class="drop-zone__input" type="file" name="files" id="file"/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 px-5 pb-4">
                                    <label for="deskripsi" style="font-size: 14px; font-weight: bold;">Deskripsi</label>
                                    <textarea id="deskripsi" style="border-radius:10px;" type="text"
                                              class="form-control col-lg-12 col-12" rows="15" name="deskripsi" required
                                              autofocus>
                                </textarea>
                                </div>
                            </div>
                            <div class="row  animate__animated animate__fadeIn">
                                <div class="col-lg-12 mt-4 mb-5 text-center">
                                    <button type="submit" class="mt-3 px-5 py-2 text-center" id="login">
                                        Add Merch
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
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

    <script>
        var article = document.getElementById('postarticle');
        var member = document.getElementById('postmember');
        var merch = document.getElementById('postmerch');
        var buttonarticle = document.getElementById('buttonpostarticle');
        var buttonmember = document.getElementById('buttonpostmember');
        var buttonmerch = document.getElementById('buttonpostmerch');
        member.style.display = "none";
        merch.style.display = "none";
        buttonarticle.onclick = function (event) {
            article.style.display = "block";
            member.style.display = "none";
            merch.style.display = "none";
        }
        buttonmember.onclick = function (event) {
            merch.style.display = "none";
            member.style.display = "block";
            article.style.display = "none";
        }
        buttonmerch.onclick = function (event) {
            merch.style.display = "block";
            member.style.display = "none";
            article.style.display = "none";
        }

        //draganddrop
        document.querySelectorAll(".drop-zone__input").forEach(inputElement => {
            const dropZoneElement = inputElement.closest('.drop-zone');

            dropZoneElement.addEventListener("click", e => {
                inputElement.click();
            });

            inputElement.addEventListener("change", e => {
                if (inputElement.files.length) {
                    updateThumbnail(dropZoneElement, inputElement.files[0]);
                }
            })

            dropZoneElement.addEventListener("dragover", e => {
                e.preventDefault();
                dropZoneElement.classList.add('drop-zone--over');
            });

            ["dragleave", "dragend"].forEach(type => {
                dropZoneElement.addEventListener(type, e => {
                    dropZoneElement.classList.remove("drop-zone--over");
                })
            })

            dropZoneElement.addEventListener("drop", e => {
                e.preventDefault();
                if (e.dataTransfer.files.length) {
                    inputElement.files = e.dataTransfer.files;
                    updateThumbnail(dropZoneElement, e.dataTransfer.files[0])
                }
                dropZoneElement.classList.remove('drop-zone--over');
            });
        });

        function updateThumbnail(dropZoneElement, file) {
            let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");
            if (dropZoneElement.querySelector(".drop-zone__prompt")) {
                dropZoneElement.querySelector(".drop-zone__prompt").remove();
            }
            if (!thumbnailElement) {
                thumbnailElement = document.createElement("div");
                thumbnailElement.classList.add("drop-zone__thumb");
                dropZoneElement.appendChild(thumbnailElement);
            }
            thumbnailElement.dataset.label = file.name;

            if (file.type.startsWith("image/")) {
                const reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = () => {
                    thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
                }
            } else {
                thumbnailElement.style.backgroundImage = null;
            }
        }
    </script>

@endsection
