
<?php include 'php/wish_lang.php'; ?>




<div class="position-fixed bg-white fixed-top">

        <nav class="navbar container  navbar-expand-lg navbar-light bg-white">
           <div>
             <a class="navbar-brand" href="index.php"><img class='logo' src="src/img/logo.png" alt="logo"></a>
           </div>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse item navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php"><?php echo $index_elements['nav_1'] ?><span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="About.php"><?php echo $index_elements['nav_2'] ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Contact.php"><?php echo $index_elements['nav_3'] ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?lg=franch">Français</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?lg=anglish">Anglais</a>
              </li>
             
            </ul>
          </div>
        </nav>
</div>



      <section class="m-top">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="src/img/kinsey-cB8YiJt_0Y0-unsplash.jpg" class="d-block slid-hight w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="src/img/bernd-dittrich-iFvGi2Jcbrc.jpg" class="d-block slid-hight w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="src/img/bernd-dittrich-iFvGi2Jcbrc-unsplash.jpg" class="d-block slid-hight w-100" alt="...">
              </div>
            </div>
            <div  class='shad d-flex flex-column align-items-center justify-content-center text-center'>
                <div class="bg-A text-white p-3 rounded w-md-100">
                    <h1>Maritime agency</h1>
                </div>
                <div class="bg-danger text-white p-3 rounded mt-3">
                    <h1>Chartering</h1>
                </div>
            

            </div>
          </div>
      </section>


      <section>
         <div class="d-flex justify-content-around m-3 flex-wrap">
            <div class="title text-center p-4">
                <h1><?php echo $index_elements['title_1'] ?></h1>
            </div>
            <div  class="para_1 mt-5 shadow-sm bg-light text-secondary text-center rounded">
                <h5><i class="fas fa-quote-left mr-2"></i><?php echo $index_elements['para_1'] ?><i class="fas fa-quote-right ml-2"></i></h5>
             <a href="About.php"><button type="button" class="btn btn-outline-secondary"><?php echo $index_elements['nav_2'] ?></button></a>
            </div>
         </div>
         
      </section>



      <section id="serv">
          <div class='services_section mt-5'>
              <div class='services_section_shadow p-4  text-white'> 
                  <h1 class="text-center"><?php echo $index_elements['serv'] ?></h1>
                  <div class="mt-4 services ml-4" id="servs">
                  <?php echo $index_elements['services_less'] ?>
       
                  </div>
                       
                      
                      
                      
                      
                      <div class="d-flex justify-content-end">

                           <button type="button"  onclick="show_serv()" id="btn" class="btn  btn-success"><?php echo $index_elements['btn_2'] ?></button>
                       </div>
              </div>
               
          </div>
    
      </section>



      <section>
          <div class="d-flex w-100  flex-wrap">
              <!-- <div class="haight_2 ">
                  <img class="w-100 h-100" src="src/img/map3.PNG" alt="maps">
              </div> -->
              <div class="w-100 p-5   justify-content-center">
                  <div  class="text-center branch_list_title">

                      <h1><?php echo $index_elements['branches'] ?></h1>
                  </div>
                  <ul class="branch_list mt-5 flex-wrap justify-content-around m-2 d-flex">
                      <li><i class="fas fa-map-marker-alt mr-2"></i>CASABLANCA</li>
                      <li><i class="fas fa-map-marker-alt mr-2"></i>Nador</li>
                      <li><i class="fas fa-map-marker-alt mr-2"></i>Tanger</li>
                      <li><i class="fas fa-map-marker-alt mr-2"></i>Layoune</li>
                      <li><i class="fas fa-map-marker-alt mr-2"></i>Agadir</li>
                      <li><i class="fas fa-map-marker-alt mr-2"></i>JORF LASFAR</li>
                      <li><i class="fas fa-map-marker-alt mr-2"></i>SAFI(Old harbor,New harbor)</li>
                  </ul>
              </div>
          </div>


          <div>
           <iframe class="w-100" src="https://www.google.com/maps/d/embed?mid=1lgSPOMO0GbanxFzmPLaGojUYlXdjGMDQ"  height="500"></iframe>
          </div>
      </section>





      <footer>
        <div class="d-flex p-3 justify-content-around flex-wrap bg-light shadow">
          <div class='footer_contact text-secondary m-3'>
            <h6><i class="fas fa-map-marker-alt text-success mr-2"></i>33, Avenue Hassan Seghir, N°88–8th Floor, Casablanca Morocco<br>
              RC Casa 204021 – TVA/IF 1112119 –Patente 35791699 –License N°275/7</h6>
          </div>
          <div class='footer_contact text-secondary  m-3'>
            <h6><i class="far fa-paper-plane text-success mr-2"></i>operations@nobleshipping.ma</h6>
          </div>
          <div class='footer_contact text-secondary  m-3'>
            <h6><i class="fas fa-mobile-alt text-success mr-2"></i>Tel: +212 522 443 333  Fax: +212 522 450 495</h6>
          </div>
        </div>
      </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/scripte.js"></script>
  </body>
</html>