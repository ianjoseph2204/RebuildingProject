@extends('header')

@section('content')
<section id="01">
    <div class="container">
        <div class="row space"></div>
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 mt-5 text-center">
                <h1 class="grid-1 my-2"><span class="grid-2">Our</span> Story</h1>
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
                    <img src="{{asset('assets/story/storypic1.png')}}" class="card-picture">
                    <div class="card p-3">
                        <div class="box p-3">
                            <a style="color:#f5c150"><b>{{date('d M Y', strtotime($story->created_at))}}</b></a><br>
                            <h3 class="grid-1">{{$story->title}}</h3>
                            <a>
                                <i class="fas fa-user" style="color:#f5c150; margin-right: 3px"></i>
                                {{$story->writer}}
                            </a>
                            <div class="row mt-3">
                                <div class="col-xl-12 col-lg-12 text-right">
                                    <a class="btn px-3 py-2 my-4" id="login" href="stories/{{$story->id}}"><b>Read
                                            More</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 my-5 text-center" style="color: #FFA216">
                    {{-- @if($paginator->onFirstPage())--}}
                    {{-- <a href="" class="page mx-1"><i class="fas fa-chevron-left"></i></a>--}}
                    {{-- @endif--}}
                    {{-- <a href="#" class="page mx-1 px-3">1</a>--}}
                    {{-- <a href="#" class="page mx-1"><i class="fas fa-chevron-right"></i></a>--}}
                    {{$stories->links()}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection