@extends('index')

@section('home')
<div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1><em>EVENTIN</em> APPS</h1>
                        <p>Eventin merupakan website yang menyediakan berbagai event, seminar, acara </p> 
                        <a href="#about" class="main-button-slider">DOWNLOAD APPS</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
@endsection

@section('about')
<section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>01</h2>
                            <img src="assets/images/features-icon-1.png" alt="">
                            <h4>Trending Event</h4>
                            <p>Temukan berbagai event yang sedang populer dan banyak dibicarakan oleh khalayak ramai</p>
                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>02</h2>
                            <img src="assets/images/features-icon-2.png" alt="">
                            <h4>Find Near You</h4>
                            <p>Platform kami menyediakan informasi event di sekitarmu yang akan berlangsung dalam waktu dekat</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>03</h2>
                            <img src="assets/images/features-icon-3.png" alt="">
                            <h4>Always Be Informed</h4>
                            <p>Kami selalu siap menginformasikan Anda sesuai kategori event pilihan Anda</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection

@section('feature')
<section class="section" id="feature">
        <div class="container">
            <div class="row">
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="assets/images/feature.jpg" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <img src="assets/images/about-icon-01.png" alt="">
                            <div class="text">
                                <h4>Always Up-To-Date</h4>
                                <p>Platform kami memberikan Anda pengalaman terbaik dalam mencari 
                                    event dengan selalu menyediakan daftar event yang selalu up-to-date
                                </p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                            <img src="assets/images/about-icon-02.png" alt="">
                            <div class="text">
                                <h4>Vast Payment Method Choices</h4>
                                <p>Transfer bank, mobile banking, internet banking, atau pembayaran non-tunai lain.
                                    Kami menyediakan banyak metode pembayaran dan Anda hanya perlu memilih yang menjadi 
                                    favorit Anda</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                            <img src="assets/images/about-icon-03.png" alt="">
                            <div class="text">
                                <h4>Loyalty Membership</h4>
                                <p>Gunakan platform kami sebagai pencari event Anda setiap hari, dan kami akan
                                    memastikan Anda menjadi pengguna prioritas dan dapatkan banyak keuntungan
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</section>
@endsection


@section('event')
<section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>LIST <em>EVENT</em></h2>
                        <p>Suspendisse vitae laoreet mauris. Fusce a nisi dapibus, euismod purus non, convallis odio.
                            Donec vitae magna ornare, pellentesque ex vitae, aliquet urna.</p>
                    </div>
                </div>

                 <table class="table table-bordered">
        <tr>
            <th>Category</th>
            <th>Nama Event</th>
            <th>Email Organizer</th>
            <th>Place</th>
            <th>Price</th>
            <th>Slot</th>
        </tr>
        <tbody id="tbody">

        </tbody>
    </table>
                
                </div>
            </div>
        </div>
</section>
@endsection

@section('contact')
<footer id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <!-- ***** Contact Form Start ***** -->
                    <div class=" center-content  col-md-12">
                        <div class="right-content col-md-12">
                            <h2>Contact Us</em></h2>
                            <p>Untuk informasi lebih lanjut mengenai platform kami, Anda dapat menghubungi
                                kami melalui sosial media di bawah ini
                            </p>
                            <ul class="social">
                            <li><a href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                        </div>
                    </div>
                    <!-- ***** Contact Form End ***** -->
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>Copyright &copy; 2020 Lava Landing Page

                        | Designed by <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
                    </div>
                </div>
            </div>
        </div>
</footer>
@endsection


<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>

<script>
    // Initialize Firebase
    var config = {
         apiKey: "AIzaSyCKdsgMK4d98oOgJxObZcITXw7abffjBoI",
          authDomain: "eventin-56d6a.firebaseapp.com",
          databaseURL: "https://eventin-56d6a-default-rtdb.firebaseio.com/",
          projectId: "eventin-56d6a",
          storageBucket: "eventin-56d6a.appspot.com",
          messagingSenderId: "480740067809",
          appId: "1:480740067809:web:1d7dbf4f587341a0e5eaa0",
    };

    firebase.initializeApp(config);
    var database = firebase.database();
    var lastIndex = 0;
    
    firebase.database().ref('event/').on('value', function (snapshot) {
        var value = snapshot.val();
        var htmls = [];
        $.each(value, function (index, value) {
            if (value) {
                htmls.push('<tr>\
            <td>' + value.category + '</td>\
            <td>' + value.namaEvent + '</td>\
            <td>' + value.userEmail + '</td>\
            <td>' + value.place + '</td>\
            <td>' + value.price + '</td>\
            <td>' + value.slot + '</td>\
          </tr>'); 
            }
            lastIndex = index;
        });
        $('#tbody').html(htmls);
    }); 
</script>