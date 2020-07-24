<?php include 'php/wish_lang.php'; ?>



<div class="position-fixed bg-white fixed-top">
       <nav class=" container  navbar navbar-expand-lg navbar-light bg-white ">
         
         <div>
             <a class="navbar-brand" href="index.php"><img class='logo' src="src/img/logo.png" alt="logo"></a>
         </div>
         <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
         </button>
 
 
 
         <div class="collapse list text-center navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
               <li class="nav-item ">
                 <a class="nav-link " href="index.php"><?php echo $index_elements['nav_1'] ?></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="About.php"><?php echo $index_elements['nav_2'] ?></a>
               </li>
               <li class="nav-item active ">
                 <a class="nav-link" href="Contact.php"><?php echo $index_elements['nav_3'] ?></a>
               </li>
               <li class="nav-item ang"  >
                 <a class="nav-link"   href="Contact.php?lg=franch">Français</a>
               </li>
               <li class="nav-item"  >
                 <a class="nav-link"   href="Contact.php?lg=anglish">Anglais</a>
               </li>
             </ul>
         </div>
 
       </nav>
</div>






      <div class='bg w-100 m-top'>
          <div class="bg-shadow d-flex justify-content-around flex-wrap p-5">
            <div class="title-contact text-white  w-50">
                <h1 class="p-2 m-0"><?php echo $contact_elements['Contact'] ?></h1>
                <p class="mt-4 w-75"><?php echo $contact_elements['para'] ?><br>
                - Casablanca : +212522443333 <br>
                - El Jadida(Jorf lasfar) : +212523348803 
                </p>
  
            </div>
            <div class='text-white inputs w-50 d-flex mt-5  flex-column align-items-center'>
              <form class='w-100' action="php/send_the_mail.php" method='POST'>
                    <div class="w-75 mt-4">
                        <p class="m-0"><?php echo $contact_elements['mail'] ?></p>
                        <input class="w-100 text-white p-2 rounded" type="email" name="mail" id="">
                        <?php
                            if(!empty($_GET)){
                              if(isset($_GET['er'])){

                                if($_GET['er'] == 'mail'){
  
                                  echo '<p class="text-danger mt-1">Please enter a valid email address.</p>';
                                }
                              }
                            }
                        
                        ?>
                    </div>
                    <div  class="w-75 mt-4">
                      <p class="m-0"><?php echo $contact_elements['phone'] ?></p>
                        <input class="w-100 text-white p-2 rounded" type="text" name="number" id="">
                    
                      </div>
                    <div  class="w-75 mt-4">
                      <p class="m-0"><?php echo $contact_elements['sub'] ?></p>
                        <input class="w-100 text-white p-2 rounded" type="text" name="subject" id="">
                        <?php
                             if(!empty($_GET)){
                             if(isset($_GET['er'])){
                              if($_GET['er'] == 'sub'){

                                echo '<p class="text-danger mt-1">Please enter your subject.</p>';
                              }
                             }
                            }
                        
                        ?>
                      </div>
                    <div  class="w-75 mt-4">
                        <p class="m-0"><?php echo $contact_elements['mess'] ?></p>
                        <textarea class="w-100 text-white p-2 rounded" name="description" id="" cols="30" rows="2"></textarea>
                        <?php
                             if(!empty($_GET)){
                              if(isset($_GET['er'])){

                                if($_GET['er'] == 'mes'){
  
                                  echo '<p class="text-danger mt-1">The message field is required!</p>';
                                }
                              }
                            }
                        
                        ?>
                      </div>
                      <?php
                             if(!empty($_GET)){
                              if(isset($_GET['er'])){

                                if($_GET['er'] == 'done'){
  
                                  echo '<p class="text-success mt-1">Your email id sended</p>';
                                }
                              }
                            }
                        
                        ?>
                  
                    <div  class="w-75 mt-4">
                        <button type="submit" class="btn p-2 w-100 btn-success"><i class="far fa-paper-plane  mr-2"></i> send </button>
                    </div>
      
                  </form>
                </div>
          </div>

      </div>

    <footer>
        <div class="d-flex p-3 justify-content-around flex-wrap bg-light shadow">
          <div class='footer_contact text-secondary m-3'>
            <h6><i class="fas fa-map-marker-alt text-success mr-2"></i>33, Avenue Hassan Seghir, N°88–8th Floor, Casablanca Morocco<br>
              RC Casa 204021 – TVA/IF 1112119 –Patente 35791699 –License N°275/7</h6>
          </div>
          <div class='footer_contact text-secondary  m-3'>
            <h6><i class="far fa-paper-plane text-success mr-2"></i>Operations@nobleshipping.ma</h6>
          </div>
          <div class='footer_contact text-secondary  m-3'>
            <h6><i class="fas fa-mobile-alt text-success mr-2"></i>Tel: +212 522 443 333  Fax: +212 522 450 495</h6>
          </div>
        </div>
      </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    
</body>
</html>