<html>
<head>
    <link rel="stylesheet" href="news.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>News</title>
</head>
<body>
    <header>
        <section>
            <div class="logo">
                <a>Movies</a>
            </div>
            <div class="nav">
               <a href="http://localhost/ProjektiWebFinale/home.php">HOME</a>
               <a href="http://localhost/ProjektiWebFinale/movies.php">MOVIES</a>
               <a href="http://localhost/ProjektiWebFinale/aboutUs.php">ABOUT US</a>
               <a href="">NEWS</a>
               <a href="http://localhost/ProjektiWebFinale/login.php">LOG IN</a>
            </div>
        </section>
    </header>

    <main>
        <div class="section">
            <div class="slider">
                <div class="slide active">
                    <img src="news11.jpg" alt="">
                    <div class="info">
                        <h2>Spider-Man: No Way Home</h2>
                        <p>With Spider-Man's identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="news22.jpg" alt="">
                    <div class="info">
                        <h2>Nightmare Alley</h2>
                        <p>An ambitious carny with a talent for manipulating people with a few well-chosen words hooks up with a female psychiatrist who is even more dangerous than he is.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="news33.jpg" alt="">
                    <div class="info">
                        <h2>Dune</h2>
                        <p>Feature adaptation of Frank Herbert's science fiction novel about the son of a noble family entrusted with the protection of the most valuable asset and most vital element in the galaxy.</p>
                    </div>
                </div>
                <div class="navigation">
                    <i class="fas fa-chevron-left prev-btn"></i>
                    <i class="fas fa-chevron-right next-btn"></i>
                </div>
                <div class="navigation-visibility">
                    <div class="slide-icon active"></div>
                    <div class="slide-icon"></div>
                    <div class="slide-icon"></div>
                </div>
            </div>   

            <script type="text/javascript">
                const slider = document.querySelector(".slider");
                const nextBtn = document.querySelector(".next-btn");
                const prevBtn = document.querySelector(".prev-btn");
                const slides = document.querySelectorAll(".slide");
                const slideIcons = document.querySelectorAll(".slide-icon");
                const numberOfSlides = slides.length;
                var slideNumber = 0;

                //image slider next button

                nextBtn.addEventListener("click", () => {
                  slides.forEach((slide) => {
                      slide.classList.remove("active");
                  });
                  slideIcons.forEach((slideIcon) => {
                      slideIcon.classList.remove("active");
                  });



                 slideNumber++;

                 if(slideNumber > (numberOfSlides -1)){
                     slideNumber = 0;
                 }

                 slides[slideNumber].classList.add("active");
                 slideIcons[slideNumber].classList.add("active");
                });

                //image slider previous button

                prevBtn.addEventListener("click", () =>{
                    slides.forEach((slide) => {
                      slide.classList.remove("active");
                  });
                  slideIcons.forEach((slideIcon) => {
                      slideIcon.classList.remove("active");
                  });



                 slideNumber--;

                 if(slideNumber <0){
                     slideNumber = numberOfSlides -1;
                 }

                 slides[slideNumber].classList.add("active");
                 slideIcons[slideNumber].classList.add("active");
                });


                //image slider autoplay

                var repeater = () => {
                    playSlider = setInterval(function(){
                        slides.forEach((slide) => {
                      slide.classList.remove("active");
                  });
                  slideIcons.forEach((slideIcon) => {
                      slideIcon.classList.remove("active");
                  });



                 slideNumber++;

                 if(slideNumber > (numberOfSlides -1)){
                     slideNumber = 0;
                   }

                 slides[slideNumber].classList.add("active");
                 slideIcons[slideNumber].classList.add("active");
                   },1500);
                }
                repeater();

                //stop the image slider autoplay on mouseover

                  slider.addEventListener("mouseover", () =>{
                      clearInterval(playSlider);
                  });

                  //start the image slider autoplay again mouseout 

                  slider.addEventListener("mouseout", () => {
                   repeater();
                  });

                </script>
        </div>
        
    </main>

</body>
</html>