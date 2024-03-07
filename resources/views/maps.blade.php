<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
   <link rel="stylesheet" href="../assets/css/maps.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="flex items-center w-full" >
        <a href="{{ url("../dashboard") }}" class="flex" ><--- <p>Back</p></a>
        <h1>Places</h1>
    </nav>
    <div class="title-wrap">
        <h1>Ngelenc<span>.er</span></h1>
        <h2>Interesting Places Around You</h2>
    </div>
    <div class="relative title-group">
        <h2 class="absolute" >P L A C E S</h2>
        <h1 class="absolute" >Places Nearby</h1>
    </div>
    <div class="result-container">
        <div class="maps-recom flex">
            <div class="result" >
                @foreach($location as $keyloc => $dataloc)
                <div class="result-card flex" onclick="window.location.href = '{{ $dataloc->links }}'; " >
                    <div class="img" style="background-image: url('../assets/img/{{ $dataloc->gambar_tempat}}'); background-size: cover;" ></div>
                    <div class="result-card-content">
                        <h1>{{ $dataloc->nama_tempat}}</h1>
                        <h2>{{ $dataloc->kategori_tempat}}</h2>
                        <div class="location flex items-center"><img src="../assets/icons/carbon_location.png" alt=""><h3>{{ $dataloc->jarak_tempat}}</h3></div>
                    </div>
                </div>
                @endforeach
            </div>
            <div>
                @foreach($destinasi as $key => $data)
                <iframe class="maps" src="{{ $data->link_maps }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                @endforeach
            </div>
        </div>
    </div>
    <div class="footer flex flex-col items-center">
        <h1>Ngelenc<span>.er</span></h1>
        <ul class="flex menu-foot" >
            <li><a href="{{ url('/dashboard') }}">Home</a></li>
            <li><a href="{{ url('/dashboard') }}">Destination</a></li>
            <li><a href="#">About Us & Service</a></li>
        </ul>
        <hr>
        <h2>Copyright © 2023.Ngelenc.er. All right reserved</h2>
    </div>
</body>
</html>
