<!DOCTYPE html>
<html lang="en">
@include('head')
<body>
    <div style="margin-top: 20px;">
        <!-- bungkus About -->
        <div class="container story">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-8">
                    <h1>Our Story</h1>
                    <hr>
                    <p>Perkenalkan kami dari kelompok The Hardworkers IF300-E Universitas Multimedia Nusantara</p>
                    <p>Kami beranggotakan tiga orang yang dengan nama anggota kelompok yaitu Matthew Marcellino, Ryan Hertanto, dan Gerardo Jason Herman</p>
                    <p>Kelompok kami membuat website bertemakan Restoran. Seperti yang kita tahu, Digitalisasi sangat berkembang pesat sekarang ini. 
                        hampir segala aspek menyangkut mengenai digitalisasi.
                    </p>
                    <p>Kelompok kami berinisiatif untuk memilih topik ini karena peluang pengenalan produk menggunakan media website sangat menarik perhatian customer. </p>
                    <h4 style = "font-size: 22px;">Selamat Datang di Website The Hardworkers IF430-F</h4>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 text-center">
                    <img src="{{url('/images/uas_logo_final.png')}}" width="100%">
                    <div class="container text-center">
                        <h4><b>The Hardworkers</b></h4> 
                        <p>IF430-F</p> 
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <!-- akhir bungkus About -->  
        <!-- Pengenalan Kelompok pop-up-->
        <div class="container">
            <div class="row no-gutters person">
                <div class="col-sm-12 col-lg-4">
                    <img src="{{url('/images/matthew_m.jpg')}}" width="100%" height="auto" alt="Avatar" class="image" style="object-fit: cover;">
                </div>
                <div class="col-sm-12 col-lg-8">
                    <div class="card-body">
                        <h5 class="card-title">Matthew Marcellino (00000036291)</h5>
                        <p class="card-text">Perkenalkan nama saya Matthew Marcellino, dan berasal dari Bandung, Jawa Barat.
                        Saya berumur hampir 20 tahun dan menempuh pendidikan di Universitas Multimedia Nusantara.
                        Cita-cita saya adalah menjadi seorang blockchain developer yang handal.
                        Hobi saya adalah bermain futsal, main game, trading, dan investasi cryptocurrency.</p>
                        <p class="card-text"><small class="text-muted">15 March 2021</small></p>
                    </div>
                </div>
            </div>
            <div class="row no-gutters person">
                <div class="col-sm-12 col-lg-4">
                    <img src="{{url('/images/ryan_h.jpg')}}" width="100%" height="auto" alt="Avatar" class="image" style="object-fit: cover;">
                </div>
                <div class="col-sm-12 col-lg-8">
                    <div class="card-body">
                        <h5 class="card-title">Ryan Hertanto (00000036526)</h5>
                        <p class="card-text">Perkenalkan nama saya Ryan Hertanto, dan berasal dari Pontianak, Kalimantan Barat.
                        Saya berumur 19 tahun dan menempuh pendidikan di Universitas Multimedia Nusantara.
                        Cita-cita saya adalah menjadi seorang yang handal dalam menangani big data.
                        Hobi saya adalah berolahraga, menonton, tidur dan berinvestasi.</p>
                        <p class="card-text"><small class="text-muted">15 March 2021</small></p>
                    </div>
                </div>
            </div><div class="row no-gutters person">
                <div class="col-sm-12 col-lg-4">
                    <img src="{{url('/images/jason.jpg')}}" width="100%" height="auto" alt="Avatar" class="image" style="object-fit: cover;">
                </div>
                <div class="col-sm-12 col-lg-8">
                    <div class="card-body">
                        <h5 class="card-title">Gerardo Jason Herman (00000036356)</h5>
                        <p class="card-text">Perkenalkan nama saya Gerardo Jason Herman, dan berasal dari Tangerang, Banten.
                        Saya berumur hampir 20 tahun dan menempuh pendidikan di Universitas Multimedia Nusantara.
                        Saya biasanya dipanggil jason. Cita-cita saya adalah membahagiakan orang tua saya.
                        Hobi saya adalah bermain futsal dan bermain game.</p>
                        <p class="card-text"><small class="text-muted">15 March 2021</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="home"><button class="btn-home" type="button"><i class="fa fa-arrow-circle-left"></i><b>  Back to Homepage</b></button></a>
    </div>
</body>
</html>

