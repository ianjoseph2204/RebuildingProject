@extends('header')

@section('content')
    <section id="01">
        <div class="container">
            <div class="row space"></div>
            <div class="row justify-content-center">
                <div class="col-lg-11 col-10 mt-5">
                    <div class="row" style="margin-right: 0; margin-left: 0">
                        <a class="col mt-5 mx-1 px-3 py-2 text-center" href="#buttonpostarticle"
                           id="post-article-button"><b>
                                Post an Article</b></a>
                        <a class="col mt-5 mx-1 px-3 py-2 text-center" href="#buttonpostmember" id="post-member-button"><b>Post
                                a New Member</b></a>
                        <a class="col mt-5 mx-1 px-3 py-2 text-center" href="#buttonpostmerch"
                           id="post-merch-button"><b>Post
                                a New Merch</b></a>
                    </div>
                </div>
                <div class="col-lg-11 col-10" id="back">

                    {{--Create new story section--}}
                    <div class="section" id="post-article">
                        <h1 class="judulForm pt-5 px-4 pb-4  animate__animated animate__fadeIn">Post an Article</h1>
                        <form method="POST" action="{{url('/stories')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row justify-content-center  animate__animated animate__fadeIn">
                                <div class="col-lg-6 col-12 px-5 pb-4">
                                    <label for="user-name" id="subJudulForm">Nama Lengkap</label>
                                    <input id="user-name" style="border-radius:10px;border: 0"
                                           class="form-control col-lg-12 col-12" name="writer" required autofocus>
                                    <div class="row">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12 px-5">
                                    <div class="row">
                                        {{--Article title--}}
                                        <div class="col-lg-6 col-sm-6 col-12">
                                            <label for="titlearticle" id="subJudulForm">Judul Artikel</label>
                                            <input id="titlearticle" style="border-radius:10px;border: 0"
                                                   class="form-control col-lg-12 col-12" name="title" required
                                                   autofocus>
                                        </div>

                                        {{--Drop down story categories--}}
                                        <div class="col-lg-6 col-sm-6 col-12">
                                            <label for="category" id="subJudulForm">Kategori Artikel</label>

                                            <select placeholder="Pilih kategori" class="form-control" name="category_id"
                                                    id="story-category" style="border-radius:10px; border: 0" required
                                                    autofocus>
                                                <option value="0">Pilih kategori</option>

                                                @foreach($story_categories as $story_category)
                                                    <option
                                                        value="{{$story_category->id}}">{{$story_category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content  animate__animated animate__fadeIn">
                                <div class="col-lg-12 col-12 px-5">
                                    <label for="article" id="subJudulForm">Konten Artikel</label>
                                    <textarea id="article" style="border-radius:10px;border: 0" type="text"
                                              class="form-control col-lg-12 col-12" rows="8" name="content" required
                                              autofocus></textarea>
                                </div>

                                <div class="col-lg-6 col-12 px-5 pb-4 pt-2">
                                    <label for="fotobarang" class="col-md-8 px-0 col-form-label" id="subJudulForm">Attachments</label>
                                    <input type="file" class="form-control-file-center" name="story_pictures[]"
                                           id="story-photos-input" multiple hidden/>
                                    <label class="upload-button" for="story-photos-input">+ Add Media</label>
                                </div>
                            </div>

                            {{--Display the uploaded pictures using Javascript--}}
                            <div id="display-pictures"></div>

                            <div class="row  animate__animated animate__fadeIn">
                                <div class="mt-4 mb-5 px-5" style="text-align: end;position: relative;flex: auto;">
                                    <button type="submit" class="mt-3 px-5 py-2 text-center" id="login">
                                        Post
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    {{--Create new member section--}}
                    <div class="section" id="post-member">
                        <h1 class="judulForm pt-5 px-4 pb-4 animate__animated animate__fadeIn">Add a New Team
                            Member</h1>
                        <form method="POST" action="{{url('/users')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row justify-content-center animate__animated animate__fadeIn">
                                <div class="col-lg-6 col-12 px-5 pb-4">
                                    <label for="user-name" id="subJudulForm">Nama Lengkap</label>
                                    <input id="user-name" style="border-radius:10px;border: 0"
                                           class="form-control col-lg-12 col-12" name="user_name" required autofocus>
                                </div>

                                <div class="col-lg-6 col-12 px-5 pb-4 form-group">
                                    <label for="user-position" id="subJudulForm">Jabatan</label>

                                    <select placeholder="Pilih Jabatan" class="form-control" name="user_position_id"
                                            id="user-position" style="border-radius:10px; border: 0" required autofocus>
                                        <option value="0">Pilih Jabatan</option>
                                        @foreach($user_positions as $user_position)
                                            <option value="{{$user_position->id}}">{{$user_position->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row justify-content  animate__animated animate__fadeIn">
                                <div class="col-lg-12 col-12 px-5 pb-3">
                                    <label for="user-story" id="subJudulForm">Cerita</label>
                                    <textarea id="user-story" style="border-radius:10px;border: 0" type="text"
                                              class="form-control col-lg-12 col-12" rows="8" name="user_story" required
                                              autofocus></textarea>
                                </div>

                                <div class="col-lg-6 col-12 px-5 pb-4 pt-2">
                                    <label class="col-md-8 px-0 col-form-label" id="subJudulForm">Photo
                                        Attachment</label>
                                    <input type="file" class="form-control-file-center" name="user_photo"
                                           id="user-photo"
                                           hidden/>
                                    <label id="user-photo-button" class="upload-button" for="user-photo">+ Add
                                        Media</label>
                                </div>
                            </div>

                            {{--Display Input section--}}
                            <div id="user-photo-display" class="row  animate__animated animate__fadeIn" hidden>
                                <div class="col-lg-5 col-10 mx-5 mb-4"
                                     style="border-radius: 20px;background-color: white;">
                                    <div style="float: left; margin-top: 5px;">
                                        <div id="close-user-photo-display" class="btn" style="padding:0; margin:2px"
                                             onclick="removePicture('user-photo')">
                                            <i class="fa fa-close"></i>
                                        </div>
                                    </div>

                                    <div class="column">
                                        <img style="width: 100%;" src="{{asset('assets/image.png')}}" alt="Avatar">
                                    </div>

                                    <div class="column"
                                         style="display:flex; height: 100%;justify-content: center;align-items: center;">
                                        <h5 class="card-title"><b id="user-photo-name"></b></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="row  animate__animated animate__fadeIn">
                                <div class="mt-4 mb-5 px-5" style="text-align: end;position: relative;flex: auto;">
                                    <button type="submit" class="mt-3 px-5 py-2 text-center" id="login">
                                        Post
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    {{--Create new merch item section--}}
                    <div class="section" id="post-merch">
                        <h1 class="judulForm pt-5 px-4 pb-4 animate__animated animate__fadeIn">Add a Merch Item</h1>
                        <form method="POST" action="insertMerch">
                            @csrf
                            <div class="row justify-content-center animate__animated animate__fadeIn">
                                <div class="col-lg-6 col-12 px-5 pb-4">
                                    <label for="namaBarang" id="subJudulForm">Nama
                                        Barang</label>
                                    <input id="namaBarang" style="border-radius:10px;border: 0" type="name"
                                           class="form-control col-lg-12 col-12" name="namaBarang" required autofocus>
                                </div>

                                <div class="col-lg-6 col-12 px-5 pb-4">
                                    <label for="harga" id="subJudulForm">Harga</label>
                                    <input id="harga" style="border-radius:10px;border: 0" type="number"
                                           class="form-control" name="harga" required autofocus>
                                </div>
                            </div>

                            <div class="row justify-content  animate__animated animate__fadeIn">
                                <div class="col-lg-12 col-12 px-5 pb-3">
                                    <label for="deskripsi" id="subJudulForm">Cerita</label>
                                    <textarea id="deskripsi" style="border-radius:10px;border: 0" type="text"
                                              class="form-control col-lg-12 col-12" rows="8" name="deskripsi" required
                                              autofocus></textarea>
                                </div>
                                <div class="col-lg-6 col-12 px-5 pb-4 pt-2">
                                    <label for="fotobarang" class="col-md-8 px-0 col-form-label" id="subJudulForm">Photo
                                        Attachment</label>
                                    <input type="file" class="form-control-file-center upload-button" name="image"
                                           id="txtChooseFile" hidden/>
                                    <label class="upload-button" for="txtChooseFile">+ Add Media</label>
                                </div>
                            </div>

                            <div class="row  animate__animated animate__fadeIn">
                                <div class="col-lg-5 col-10 mx-5 mb-4"
                                     style="border-radius: 20px;background-color: white;">
                                    <div style="float: left; margin-top: 5px;">
                                        <button class="btn" style="padding:0; margin:2px"><i class="fa fa-close"></i>
                                        </button>
                                    </div>
                                    <div class="column">
                                        <img style="width: 100%;" src="{{asset('assets/image.png')}}" alt="Avatar">
                                    </div>

                                    <div class="column"
                                         style="display:flex; height: 100%;justify-content: center;align-items: center;">
                                        <h5 class="card-title"><b>IMG_00001</b></h5>
                                    </div>
                                </div>
                            </div>


                            <div class="row  animate__animated animate__fadeIn">
                                <div class="mt-4 mb-5 px-5" style="text-align: end;position: relative;flex: auto;">
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

    @if(Session::has('successArticle'))
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

    <script src="{{asset('js/add.js')}}"></script>
@endsection
