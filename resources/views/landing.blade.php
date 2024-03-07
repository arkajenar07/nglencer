<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="mainhead">
    <nav class="flex" >
    <h2>Ngelenc<span>.er</span></h2>
    <div class="desk flex" style="margin-left: 495px">


    <ul class="flex">
        <li><a href="#" class="links">Home</a></li>
        <li><a href="#des" class="links">Destionation</a></li>
        <li><a href="{{ url('/about') }}" class="links">About Us & Service</a></li>
    </ul>
    <button style="margin-left: 403px" ><a href="{{ url('/login') }}">Login</a></button>
    </div>

    <div class="mob flex" style="">
        <button class="menu" onclick="navToggle()" style="" ><img src="assets/icons/menu.png" alt=""></button>
        <ul class="mob-ul" id="nav">
            <li><a href="#" class="links">Home</a></li>
            <li><a href="#des" class="links">Destionation</a></li>
            <li><a href="{{ url('/about') }}" class="links">About Us & Service</a></li>
            <button style="margin-top: 32px"><a href="{{ route('login') }}">Login</a></button>
        </ul>

    </div>
    </nav>
    <div class="content flex flex-col items-center" >
        <h1>Discover Various Interesting Places<br>Around You</h1>
        <button class="view" >View More</button>
    </div>
    </div>
    <div class="searchcontainer" id="des">
        <h1>Choose Your HoIiday</h1>
        <div class="search-box flex justify-center items-center">
            <div class="search-location">
                <h3>Select Your Location</h3>
                <div class="input-location flex items-center">
                    <input type="text" name="src-location" id="" value="Pandaan" >
                    <img src="assets/icons/carbon_location.png" alt="icon">
                </div>
            </div>
            <div class="search-category">
                <h3>Select Your Category</h3>
                <div class="input-category">
                    <input type="text" name="src-category" id="" value="Nature">
                </div>
            </div>
            <div class="search-destination">
                <h3>Select Your Destination</h3>
                <div class="input-destination">
                    <input type="text" name="src-destination" id="" placeholder="Enter Keyword" >
                </div>
            </div>
        </div>
        <button>Search</button>
    </div>
    <div class="content-container">
        <div class="head">
            <h3>Search Result</h3>
            <div class="head-ttl relative">
                <h1 class="absolute" >E X P L O R E</h1>
                <h2 class="absolute">Our Recommendation</h2>
            </div>
            <p>Below are tourist recommendations based on the filters you entered, we hope you can find a tour according to your wishes.</p>
        </div>
        <div class="grid card-contain" style="" >
            @foreach($destinasi as $key => $data)
            <div class="card">
                <div class="card-image" style=" background-image:linear-gradient(rgba(0, 0, 0, 0.25),rgba(0, 0, 0, 0.25)), url(assets/img/{{$data->gambar_destinasi}}); background-size: cover;"></div>
                <div class="badge-destination rounded-full" style="">
                    <img src="assets/icons/{{$data->kategori_destinasi}}.png" alt="">
                </div>
                <div class="card-txt-content relative">
                    <h1>{{$data->nama_destinasi}}</h1>
                    <div class="loc-des flex" style="">
                        <img src="assets/icons/carbon_location.png" style="" alt="">
                        <h3>{{$data->kota_destinasi}}, {{$data->provinsi_destinasi}}</h3>
                    </div>
                    <h2>{{$data->kategori_destinasi}}</h2>
                    <h4>{{$data->harga_destinasi}}</h4>
                    <p>{{$data->deskripsi_destinasi}}</p>
                    <button><a href="{{ route('maps.look', $data->id)}}">View More</a></button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="promo flex flex-col items-center">
        <h2>Travel and See Around You</h2>
        <h1>Get 30% of Your Next Advanture</h1>

        <p>Search and explore more interesting places around your tourist destination. and determine the most comfortable and best place for you to visit.</p>
        <button><a href="https://instagram.com/ngelenc.er?igshid=NGVhN2U2NjQ0Yg==">Learn More</a></button>
    </div>
    <div class="footer flex flex-col items-center">
        <h1>Ngelenc<span>.er</span></h1>
        <ul class="flex menu-foot" >
            <li><a href="#">Home</a></li>
            <li><a href="#des">Destination</a></li>
            <li><a href="{{ url('/about') }}">About Us & Service</a></li>
        </ul>
        <hr>
        <h2>Copyright © 2023.Ngelenc.er. All right reserved</h2>
    </div>
    <script>
        const navlist = document.getElementById('nav');
         function navToggle(){
            navlist.classList.toggle("active");
         }
    </script>
</body>
</html>
