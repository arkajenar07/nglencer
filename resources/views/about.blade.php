<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>About Us</title>
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="assets/css/about.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    </head>
<body>
    <nav class="flex items-center w-full" >
        <a href="{{ url("../dashboard") }}" class="flex" ><--- <p>Back</p></a>
        <h1>Places</h1>
    </nav>
    <div class="title-wrap">
        <h1>Ngelenc<span>.er</span></h1>
        <h2>About Us & Service</h2>
    </div>
    <div class="about-con flex">
        <img src="assets/img/about1.png" alt="">
        <div class="about-con-text">
            <div class="relative title-group">
                <h2 class="absolute" >A B O U T</h2>
                <h1 class="absolute" >About Us</h1>
            </div>
            <p>
                Ngelen.cer is your gateway to guided adventures led by passionate locals. Our community-driven platform connects travelers with knowledgeable guides, ensuring authentic experiences and unforgettable memories.</p>
            <p>Our handpicked guides at Ngelen.cer not only have expertise in local history and attractions but also a genuine passion for showcasing the beauty of their homeland. Join us for a celebration of diversity, fostering connections between travelers and guides, transcending language barriers, and creating memories that last a lifetime.</p>
        </div>
    </div>
    <img class="alone" src="assets/img/about2.png" alt="">
    <div class="quote-img flex">
        <div class="quote">
            <img src="assets/quote.png" alt="" class="q-1">
            <h1>Tembus Keindahan Dunia, Jelajahi Destinasi, Kumpulkan Memori Bahagia.</h1>
            <img src="assets/quote.png" alt="" class="q-2">
        </div>
        <img class="abt3" src="assets/img/about3.png" alt="">
    </div>
    <div class="about-con2 flex" id="about-us">
        <img src="assets/img/grpabout.png" alt="">
        <div class="about-con-text">
            <div class="relative title-group">
                <h2 class="absolute" >S E R V I C E</h2>
                <h1 class="absolute" >Service</h1>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla risus urna, pellentesque sit amet laoreet a, porttitor vel metus. Sed hendrerit nunc non liber</p>
            <p>Ut facilisis nulla eu felis dapibus semper. Cras id dolor dictum, auctor magna et, condimentum neque. Vestibulum mollis massa egestas, feugiat purus consequat, euismod mauris. Pellentesque quis consectetur turpis, id tincidunt diam. Cras ut auctor lorem. Ut consequat nibh dui, non congue eros ultricies eu. Nunc placerat at nisl eu auctor. Sed eget aliquet.</p>
        </div>
    </div>
    <div class="info" style="">
        <div class="info-item">
            <h2><span data-count="150">0</span>+</h2>
            <p>Culture</p>
        </div>
        <div class="info-item">
            <h2><span data-count="300">0</span>+</h2>
            <p>Destination</p>
        </div>
        <div class="info-item">
            <h2><span data-count="100">0</span>+</h2>
            <p>Culinary</p>
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
    <script>
        const counters = document.querySelectorAll(".info-item span");
         const page = document.querySelector("#about-us");

         let active = false;

         window.addEventListener("scroll", () => {
            if(pageYOffset > page.offsetTop - page.offsetHeight && active === false){
                counters.forEach(counter =>{
                    counter.innerText = 0;

                    let count = 0;

                    function updateCount(){
                        const target = parseInt(counter.dataset.count);
                        if(count < target){
                            count++;

                            counter.innerText = count;

                            setTimeout(updateCount, 10);
                        }else{
                            counter.innerText = target;
                        }
                    }

                    updateCount();

                    active = true;
                });
            } else if(pageYOffset < page.offsetTop - page.offsetHeight - 500 && active === true){
                counters.forEach(counter =>{
                    counter.innerText = 0;
                });
                active = false;
            }
         });
    </script>
</body>
</html>
