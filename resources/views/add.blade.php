<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Rebuilding Project</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/headerfooter/logo.png">
    <link rel="apple-touch-icon" type="image/png" href="assets/headerfooter/logo.png">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg fixed-top" id="navbarUtama">
            <img src="{{asset('assets/headerfooter/logo.png')}}" class="logoutama my-1">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" style="color: #0a0a0a;"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="z-index: 99;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a id="home" class="nav-link mx-lg-3 mx-xl-5 my-2" href="/">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a id="about" class="nav-link mx-lg-3 mx-xl-5 my-2" href="about">About Us<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a id="story" class="nav-link mx-lg-3 mx-xl-5 my-2" href="story">Our Story<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <img src="assets/headerfooter/logo.png" width="200px" class="logonav mx-1 my-1">
                    </li>
                    <li class="nav-item">
                        <a id="contact" class="nav-link mx-lg-3 mx-xl-5 my-2" href="contact">Contact Us<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a id="getinvolved" class="nav-link mx-lg-3 mx-xl-5 my-2" href="getinvolved">Get Involved<span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link mx-lg-3 mx-xl-5 my-2 px-3" href="add" id="login">Add<span class="sr-only">(current)</span></a>
                    </li> -->
                </ul>
            </div>
        </nav>
    </section>

    <section id="01">
        <div class="container">
            <div class="row jeda"></div>
            <div class="row justify-content-center">
                <div class="col-lg-11 col-10 mt-5">
                    <div class="row" style="margin-right: 0px; margin-left: 0px">
                        <a class="col mt-5 mx-1 px-3 py-2 text-center" href="#buttonpostarticle" id="buttonpostarticle"><b>
                                Post an Article</b></a>
                        <a class="col mt-5 mx-1 px-3 py-2 text-center" href="#buttonpostmember" id="buttonpostmember"><b>Post a New Member</b></a>
                        <a class="col mt-5 mx-1 px-3 py-2 text-center" href="#buttonpostmerch" id="buttonpostmerch"><b>Post a New Merch</b></a>
                    </div>
                </div>
                <div class="col-lg-11 col-10" id="back">

                    <div class="section" id="postarticle">
                        <h1 class="judulForm pt-5 px-4 pb-4  animate__animated animate__fadeIn">Post an Article</h1>
                        <form method="POST" action="stories">
                            @csrf
                            <div class="row justify-content-center  animate__animated animate__fadeIn">
                                <div class="col-lg-6 col-12 px-5 pb-4">
                                    <label for="namawriter" id="subJudulForm">Nama
                                        Lengkap</label>
                                    <input id="namawriter" style="border-radius:10px;border: 0px" type="name" class="form-control col-lg-12 col-12" name="writer" required autofocus>
                                    <div class="row">
                                        {{-- <div class="col-lg-6 col-sm-6 col-12 mt-3">--}}
                                        {{-- <label for="emailwriter" style="font-size: 14px; font-weight: bold;">Email</label>--}}
                                        {{-- <input id="emailwriter" style="border-radius:10px;" type="email" class="form-control" name="emailwriter" required autofocus>--}}
                                        {{-- </div>--}}
                                        {{-- <div class="col-lg-6 col-sm-6 col-12 mt-3">--}}
                                        {{-- <label for="date" style="font-size: 14px; font-weight: bold;">Tanggal Publikasi</label>--}}
                                        {{-- <input id="date" style="border-radius:10px;" type="date" class="form-control" name="datepublikasi" required autofocus>--}}
                                        {{-- </div>--}}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 px-5">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-12">
                                            <label for="titlearticle" id="subJudulForm">Judul
                                                Artikel</label>
                                            <input id="titlearticle" style="border-radius:10px;border: 0px" type="name" class="form-control col-lg-12 col-12" name="title" required autofocus>
                                        </div>
                                        {{-- <div class="col-lg-6 col-sm-6 col-12 mt-3">--}}
                                        {{-- <label for="location" id="subJudulForm">Lokasi Kegiatan</label>--}}
                                        {{-- <input id="location" style="border-radius:10px;" type="location" class="form-control" name="location" required autofocus>--}}
                                        {{-- </div>--}}
                                        <div class="col-lg-6 col-sm-6 col-12">
                                            <label for="category" id="subJudulForm">Kategori Artikel</label>
                                            <input id="category" style="border-radius:10px;border: 0px" type="category" class="form-control col-lg-12 col-12" name="category_id" required autofocus>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content  animate__animated animate__fadeIn">
                                <div class="col-lg-12 col-12 px-5">
                                    <label for="article" id="subJudulForm">Konten
                                        Artikel</label>
                                    <textarea id="article" style="border-radius:10px;border: 0px" type="text" class="form-control col-lg-12 col-12" rows="8" name="content" required autofocus></textarea>
                                </div>

                                <div class="col-lg-6 col-12 px-5 pb-4 pt-2">
                                    <label for="fotobarang" class="col-md-8 px-0 col-form-label" id="subJudulForm">Attachments</label>
                                    <input type="file" class="form-control-file-center" name="image" id="txtChooseFile" hidden />
                                    <label class="buttonUpload" for="txtChooseFile">+ Add Media</label>
                                </div>
                            </div>
                            <div class="row  animate__animated animate__fadeIn">
                                <div class="col-lg-12 mt-4 mb-5 px-5" style="text-align: end;">
                                    <button type="submit" class="mt-3 px-5 py-2 text-center" id="login">
                                        Post
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="section" id="postmember">
                        <h1 class="judulForm pt-5 px-4 pb-4 animate__animated animate__fadeIn">Add a New Team Member</h1>
                        <form method="POST" action="insertMember">
                            @csrf
                            <div class="row justify-content-center animate__animated animate__fadeIn">
                                <div class="col-lg-6 col-12 px-5 pb-4">
                                    <label for="namawriter" id="subJudulForm">Nama
                                        Lengkap</label>
                                    <input id="namawriter" style="border-radius:10px;border: 0px" type="name" class="form-control col-lg-12 col-12" name="namewriter" required autofocus>
                                </div>
                                <div class="col-lg-6 col-12 px-5 pb-4">
                                    <label for="posisi" id="subJudulForm">Posisi</label>
                                    <input id="posisi" style="border-radius:10px;border: 0px" type="name" class="form-control" name="posisi" required autofocus>
                                </div>
                                <!-- <div class="col-lg-6 col-sm-6 col-12 mt-3">
                                        <label for="tanggalGabung" style="font-size: 14px; font-weight: bold;">Tanggal
                                            Gabung</label>
                                        <input id="tanggalGabung" style="border-radius:10px;" type="date" class="form-control" name="tanggalGabung" required autofocus>
                                    </div> -->
                            </div>

                            <div class="row justify-content  animate__animated animate__fadeIn">
                                <div class="col-lg-12 col-12 px-5 pb-3">
                                    <label for="cerita" id="subJudulForm">Cerita</label>
                                    <textarea id="cerita" style="border-radius:10px;border: 0px" type="text" class="form-control col-lg-12 col-12" rows="8" name="cerita" required autofocus></textarea>
                                </div>

                                <div class="col-lg-6 col-12 px-5 pb-4 pt-2">
                                    <label for="fotobarang" class="col-md-8 px-0 col-form-label" id="subJudulForm">Photo Attachment</label>
                                    <input type="file" class="form-control-file-center" name="image" id="txtChooseFile" hidden />
                                    <label class="buttonUpload" for="txtChooseFile">+ Add Media</label>
                                </div>
                            </div>

                            <div class="row  animate__animated animate__fadeIn">
                                <div class="col-lg-12 mt-4 mb-5 px-5" style="text-align: end;">
                                    <button type="submit" class="mt-3 px-5 py-2 text-center" id="login">
                                        Post
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="section" id="postmerch">
                        <h1 class="judulForm pt-5 px-4 pb-4 animate__animated animate__fadeIn">Add a Merch Item</h1>
                        <form method="POST" action="insertMerch">
                            @csrf
                            <div class="row justify-content-center animate__animated animate__fadeIn">
                                <div class="col-lg-6 col-12 px-5 pb-4">
                                    <label for="namaBarang" id="subJudulForm">Nama
                                        Barang</label>
                                    <input id="namaBarang" style="border-radius:10px;border: 0px" type="name" class="form-control col-lg-12 col-12" name="namaBarang" required autofocus>
                                </div>

                                <div class="col-lg-6 col-12 px-5 pb-4">
                                    <label for="harga" id="subJudulForm">Harga</label>
                                    <input id="harga" style="border-radius:10px;border: 0px" type="number" class="form-control" name="harga" required autofocus>
                                </div>
                                <!-- <div class="col-lg-6 col-sm-6 col-12 mt-3">
                                        <label for="kategori" style="font-size: 14px; font-weight: bold;">Kategori</label>
                                        <input id="kategori" style="border-radius:10px;" type="name" class="form-control" name="kategori" required autofocus>
                                    </div> -->
                            </div>
                            <div class="row justify-content  animate__animated animate__fadeIn">
                                <div class="col-lg-12 col-12 px-5 pb-3">
                                    <label for="deskripsi" id="subJudulForm">Cerita</label>
                                    <textarea id="deskripsi" style="border-radius:10px;border: 0px" type="text" class="form-control col-lg-12 col-12" rows="8" name="deskripsi" required autofocus></textarea>

                                </div>
                                <div class="col-lg-6 col-12 px-5 pb-4 pt-2">
                                    <label for="fotobarang" class="col-md-8 px-0 col-form-label" id="subJudulForm">Photo Attachment</label>
                                    <input type="file" class="form-control-file-center" name="image" id="txtChooseFile" hidden />
                                    <label class="buttonUpload" for="txtChooseFile">+ Add Media</label>
                                </div>
                            </div>

                            <div class="row  animate__animated animate__fadeIn">
                                <div class="col-lg-12 mt-4 mb-5 px-5" id="subJudulForm" style="text-align: end;">
                                    <button type="submit" class="mt-3 px-5 py-2 text-center" id="login">
                                        Post
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
        let article = document.getElementById('postarticle');
        let member = document.getElementById('postmember');
        let merch = document.getElementById('postmerch');
        let buttonarticle = document.getElementById('buttonpostarticle');
        let buttonmember = document.getElementById('buttonpostmember');
        let buttonmerch = document.getElementById('buttonpostmerch');

        member.style.display = "none";
        merch.style.display = "none";
        buttonarticle.onclick = function(event) {
            article.style.display = "block";
            member.style.display = "none";
            merch.style.display = "none";
        }
        buttonmember.onclick = function(event) {
            merch.style.display = "none";
            member.style.display = "block";
            article.style.display = "none";
        }
        buttonmerch.onclick = function(event) {
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
    <footer class="footer mt-5" style="bottom: 0px;">
        <div class="container">
            <div class="row justify-content-center">
                <img src="{{asset('assets/headerfooter/footerModal.png')}}" style="width: inherit">
            </div>
        </div>
    </footer>
</body>

</html>
