<?php 
    include('header.php')
?>
        <!-- <div class="header-content">
               
        </div> -->
     </header>
      <!-- HEADER END -->
      <div class="landscape-header">
         <div class="landscape-header-inner">
            <div class="header-content">
                <h1><span>Feel every note</span> <br>with our guitars.</h1>
                <h2>Experience music like <br>never before</h2>
                <a href="#cards" class="style1">Scroll Down</a>
            </div>
        </div>
     </div>
     <!-- LANDSCAPE END -->
     <section class="cards" id="cards">
         <div class="cards-inner">
             <h3>Newly formed company</h3>
             <div class="grid-col4" data-aos="fade-up" data-aos-duration="1000">
                 <div class="card-content">
                    <img src="img/guitars/dollars.png" alt="" srcset="">
                     <h3>Low prices - happy clients</h3>
                     <p>We understand that not everything needs to be expenssive to be good</p>
                 </div>
                 <div class="card-content">
                    <img src="img/guitars/quality.png" alt="" srcset="">
                    <h3>High quality equipment</h3>
                    <p>No breaking ups or tearings - our equipment is made to last</p>
                </div>
                <div class="card-content">
                    <img src="img/guitars/freetransport.png" alt="" srcset="">
                    <h3>Free transport</h3>
                    <p>No matter where you are, your product will come to you</p>
                </div>
                <div class="card-content">
                    <img src="img/guitars/guarantee.png" alt="" srcset="">
                    <h3>100% guarantee</h3>
                    <p>If you are not satisfied with your order, you can return it with full payback</p>
                </div>
             </div>
         </div>
     </section>
     <!-- END CARD SECTION -->
     <section class="flexslider-showcase">
        <script>
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide"
                });
                });
        </script>
        <div class="flexslider">
            <ul class="slides">
                <li><img src="img/guitars/showcase.png" alt="" srcset=""></li>
                <li><img src="img/guitars/showcase_2.png" alt="" srcset=""></li>
                <li><img src="img/guitars/showcase_3.png" alt="" srcset=""></li>
            </ul>
        </div>
     </section>
     <!-- END FLEXSLIDER-SHOWCASE -->
     <section class="videos">
        
         <div class="videos-inner">
         <h3>Meet our experts in crafting</h3>
            <a href="#">Visit our youtube channel (T.K.SanyOfficial)</a>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/OG__SwkV3wg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video-main"></iframe>
            <div class="grid-col3">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/OG__SwkV3wg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/OG__SwkV3wg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/OG__SwkV3wg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
         </div>
     </section>
     <!-- END VIDEOS SECTION -->
     <section class="community">
         <div class="community-inner">
             <h3>Join our community</h3>
             <div class="grid-col2 main">
                 <div class="news">
                     <h4 class="newshead">News</h4>
                    <div class="grid-col2">
                        <div class="news-content">
                            <img src="img/guitars/news1.png" alt="" srcset="">
                            <h4>The battle begins!</h4>
                            <p>Which one will prevail? Vote now.</p>
                            <a href="#" class="style2">Read More</a>
                        </div>
                        <div class="news-content">
                            <img src="img/guitars/guitar-hero.png" alt="">
                            <h4>Are you ready to show your skills?</h4>
                            <p>Join now and face the ultimate challenge.</p>
                            <a href="#" class="style2">Read More</a>
                        </div>
                    </div>
                 </div>
                 <div class="forum">
                    <h4>Forum</h4>
                    <h4>Whats's popular</h4>
                    <div class="question">
                        <h5>What are these questions?</h5>
                        <p>These are not questions, but answers to those questions so that you can find everything you need.</p>
                        <a href="#"><i class="fas fa-plus"></i> Read More</a>
                    </div>
                    <div class="question">
                        <h5>What are these questions?</h5>
                        <p>These are not questions, but answers to those questions so that you can find everything you need.</p>
                        <a href="#"><i class="fas fa-plus"></i> Read More</a>
                    </div>
                    <div class="question">
                        <h5>What are these questions?</h5>
                        <p>These are not questions, but answers to those questions so that you can find everything you need.</p>
                        <a href="#"><i class="fas fa-plus"></i> Read More</a>
                    </div>
                    <div class="question">
                        <h5>What are these questions?</h5>
                        <p>These are not questions, but answers to those questions so that you can find everything you need.</p>
                        <a href="#"><i class="fas fa-plus"></i> Read More</a>
                    </div>
                    <div class="question">
                        <h5>What are these questions?</h5>
                        <p>These are not questions, but answers to those questions so that you can find everything you need.</p>
                        <a href="#"><i class="fas fa-plus"></i> Read More</a>
                    </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- END COMMUNITY SECTION -->
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script>
         AOS.init({
             offset: 300
         });
     </script>
     
<?php 
    include('footer.php')
?>