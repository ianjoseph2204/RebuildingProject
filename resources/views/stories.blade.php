@extends('header')

@section('content')
    <section id="01">
        <div class="container">
            <div class="row space"></div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 mt-5 text-center">
                    <h1 class="grid-1 my-2" style="font-size: 60px;height: 18%;><span class=" grid-2">Our</span>
                    Story</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="04">
        <div id="back-story">
            <div class="container my-5">
                <div class="row justify-content-center">
                    @foreach($stories as $story)
                        <div class="col-xl-3 col-lg-5 col-sm-5 col-10 my-3 mx-3">
                            <div class="card-story">
                                <img src="{{asset('assets/story/storypic.png')}}" class="card-picture">
                                <div class="card" style="border-radius: 0 0 17px 17px">
                                    <div class="box pt-3 px-4">
                                        <a style="color:#f5c150">
                                            <b>{{date('d M Y', strtotime($story->created_at))}}</b>
                                        </a>
                                        <br>
                                        <h3 class="grid-1" style="margin: 0">{{$story->title}}</h3>
                                        <a style="font-family: Poppins">
                                            <i class="fas fa-user" style="color:#f5c150; margin-right: 3px"></i>
                                            {{$story->writer}}
                                        </a>

                                        <div class="row mt-3">
                                            <div class="col-xl-12 col-lg-12 text-right" style="padding: 0">
                                                <form action="stories/{{$story->id}}">
                                                    <button class="btn px-3 py-2 my-3" id="login"><b>Read More</b></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 my-5 text-center" style="color: #FFA216">
                        {{$stories->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let stories = document.getElementById('story').id = 'this';
    </script>
@endsection
