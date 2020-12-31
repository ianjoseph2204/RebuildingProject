@extends('header')

@section('content')
<section id="01">
    <div class="container my-5">
        <div class="row jeda"></div>
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <img src="assets/landing.png" width="60%" class="mx-1 my-1"> 
            </div>
            <div class="col-lg-5 col-sm-5 col-10 mt-3">
                <a id="misikami">01 - MISI KAMI</a>
                <h1 class="grid0">Empowering</h1>
                <h1 class="grid4">Children</h1>
                <h1 class="grid0">Through</h1>
                <h1 class="grid4">Education</h1>
                <a class="btn px-5 py-2 my-1" type="submit" id="login" href="getinvolved"><b>Donate Now</b></a>
            </div>
        </div>   
    </div>     
</section>

<section id="02">
    <div class="container">
        <div class="row my-5 mx-2 justify-content-center" id="back">
            <div class="row p-3 mt-4 justify-content-center">
                <div class="col-lg-12 col-sm-10 col-12 text-center">
                    <a class="mt-3" id="misikami">02 - PROGRAM KAMI</a><br><br>
                    <h2 class="grid1 px-5">
                        "Karena pembelajaran <span class="grid2">tidak hanya di ruang kelas</span>, <br>kami memfasilitasi program edukasi yang <span class="grid2">menarik </span> dan menyenangkan untuk anak-anak”<br>
                    </h2>
                    <a class="col-10" id="quote">Seluruh program edukasi yang diberikan dikemas dengan tema Fun-Learning:</a>
                </div>
            </div>
            <div class="row p-3 my-2 justify-content-center">
                <div class="col-lg-3 col-sm-6 col-11 my-2">
                    <div class="cardlayanan p-3">
                        <img class="mt-5" src="assets/image1.png" alt="Avatar" style="width:40%"><br><br>
                        <div class="box">
                            <h4><b>Pelajaran Umum</b></h4> 
                            <p>Matematika, Bahasa Inggris, dsb</p> 
                        </div>
                    </div>  
                </div>
                <div class="col-lg-3 col-sm-6 col-11 my-2">
                    <div class="cardlayanan p-3">
                        <img class="mt-5" src="assets/image2.png" alt="Avatar" style="width:40%"><br><br>
                        <div class="box">
                            <h4><b>Skill</b></h4> 
                            <p>Bisnis, kepemimpinan, kewirausahaan, seni, public speaking, dsb.</p> 
                        </div>
                    </div>  
                </div>
                <div class="col-lg-3 col-sm-6 col-11 my-2">
                    <div class="cardlayanan p-3">
                        <img class="mt-5" src="assets/image3.png" alt="Avatar" style="width:40%"><br><br>
                        <div class="box">
                            <h4><b>Sharing Session</b></h4> 
                            <p>Khusus untuk remaja, sharing session seputar passion dan dunia kerja</p> 
                        </div>
                    </div>  
                </div>
                <div class="col-lg-3 col-sm-6 col-11 my-2">
                    <div class="cardlayanan p-3">
                        <img class="mt-5" src="assets/image4.png" alt="Avatar" style="width:40%"><br><br>
                        <div class="box">
                            <h4><b>Pendidikan Karakter</b></h4> 
                            <p>Toleransi, Kerjasama, Saling Menghargai, Kejujuran, dsb.</p> 
                        </div>
                </div>
            </div>
            </div>
            <div class="row p-3 justify-content-center">
                <a class="btn px-5 py-2 mb-4" type="submit" id="login" href="getinvolved"><b>Get Involved</b></a>
            </div>
        </div>
    </div>
</section>

<section id="03">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-10 text-center">
                <img src="assets/who.png" width="70%" class="mx-1 my-1"> 
            </div>
            <div class="col-lg-5 col-10 mt-3">
             <a id="siapakahkami">03 - SIAPAKAH KAMI</a>
                <h1 class="grid2">Who We Are</h1>
                <a id="quote">Rebuilding Project merupakan gerakan sosial dibidang edukasi yang bekerja sama dengan panti asuhan yang ada di Indonesia. Gerakan sosial ini bertujuan untuk membekali anak-anak yatim piatu yang berusia 6 hingga 18 tahun dengan pengetahuan, kemampuan, dan nilai-nilai positif sehingga mendorong anak-anak untuk berani bermimpi dan memberikan harapan untuk membangun masa depan yang lebih baik. </a>
            </div>
        </div>   
    </div>     
</section>

<section id="04">
    <div class="container my-5">
        <div class="row p-3">
            <div class="col-lg-12 text-center">
                <a class="mt-3" id="misikami">04 - APA YANG KAMI LAKUKAN</a><br>
                <h1 class="grid1 px-5"> What We Do</h1><br>
               </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6 col-10 mb-3">
                <h2 class="grid2 text-center">01</h2>
                <div class="panel p-3" id="back">
                    <br>
                    <img  src="assets/ilus1.png" alt="Avatar" style="width:100%">
                    <div class="box mt-3 text-center">
                        <p>Merancang program edukasi berkonsep Fun-Learning sesuai dengan kategori umur setiap anak</p> 
                    </div>
                </div>  
            </div>
            <div class="col-lg-3 col-sm-6 col-10 mb-3">
            <h2 class="grid2 text-center">02</h2>
                <div class="panel p-3" id="back">
                    <br>
                    <img  src="assets/ilus2.png" alt="Avatar" style="width:100%">
                    <div class="box mt-3 text-center">
                        <p>Memperluas pengetahuan anak-anak yatim piatu di luar institusi pendidikan formal</p> 
                    </div>
                </div>  
            </div>
            <div class="col-lg-3 col-sm-6 col-10 mb-3">
            <h2 class="grid2 text-center">03</h2>
                <div class="panel p-3" id="back">
                    <br>
                    <img  src="assets/ilus3.png" alt="Avatar" style="width:100%">
                    <div class="box mt-3 text-center">
                        <p>Mendorong pengembangan kemampuan serta membangun pendidikan karakter </p> 
                    </div>
                </div>  
            </div>
            <div class="col-lg-3 col-sm-6 col-10 mb-3">
            <h2 class="grid2 text-center">04</h2>
                <div class="panel p-3" id="back">
                    <br>
                    <img  src="assets/ilus4.png" alt="Avatar" style="width:100%">
                    <div class="box mt-3 text-center">
                        <p>Mendorong partisipasi anak-anak muda untuk berkontribusi dalam meningkatkan kualitas edukasi di panti asuhan di Indonesia</p> 
                    </div>
                </div>  
            </div>
        </div>
    </div>
</section>

<script> var home = document.getElementById('home').id = 'this'; </script>
@endsection