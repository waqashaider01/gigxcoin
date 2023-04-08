


       
        <!--##############>footer start<############-->
<footer class="padding_4x footer1">
           

      <div class="main_footer_logo">
        <div>
          <img src="./assets/img/logo.png" alt="Slack logo" style="width: 200px;">
        </div>
        <div>
          <ul class="footer_social_icons">
            <li>
                <a href=""> <i class="fab fa-facebook-f"></i></a>
             
            </li>
            <li>
              <a href=""><i class="fab fa-twitter"></i></a>
            </li>
      
            <li>
              <a href=""><i class="fab fa-instagram"></i></a>
            </li>
      
            <li>
              <a href=""><i class="fab fa-linkedin-in"></i></a>
            </li>
          </ul>
        </div>
      </div>

          <div class="flex">
            <section class="flex-content padding_1x">
              <p > 
                GigXCoin is a revolutionary cryptocurrency that provides a unique solution for toll payments and payment for EV
                chargers. The aim of this whitepaper is to provide an overview of the GigXCoin project, its objectives, features, and
                advantages.
              </p>
            
            </section>
            <section class="flex-content padding_1x  center_footer_contact" >
              <h3>SERVICES</h3>
              <a href="#">About</a>
              <a href="#">Team</a>
              <a href="#">Buy Coin</a>
              <a href="#">FAQs</a>
             
            </section>
            <section class="flex-content padding_1x">
              <h3>Whitepapers</h3>
              <p>Download our Whitepaper</p>
              <a href="#">
               
<i class="bi bi-file-earmark-pdf-fill pdgimg"></i>
                   
 
                
  Download - English
                
             </a>

              <a href="#">
                 
<i class="bi bi-file-earmark-pdf-fill pdgimg"></i>
                     
                  Paid vs. Free
                  
              
              </a>
              
            </section>
            <section class="flex-content padding_1x">
              <h3>Contact us</h3>
            <a href="#">
              <i class="bi bi-envelope-fill pdgimg"></i>
              info@gigxcoin.com.au
               
            
            </a>
              <a href="#">
                <i class="bi bi-telephone-fill pdgimg"></i>
                +61 1300 88 53 67
              
              </a>
              <a href="#"> 
 
<i class="bi bi-geo-alt-fill pdgimg"></i>
 
Level 1, 5 George St, North <span >Strathfield NSW 2137</span>
   
              </a>
             
            </section>
          </div>
          
       
         
            <section class="   copy_write1">
             <div>
              <p class="footerstatus">
                &copy;Copyright 2023 | GigXCoin | All Rights Reserved
              </p>
             </div>
             <div class="   footersecond">
                
                    <a href="#">Disclaimer</a>
                    <a href="#"  class="createlind">Privacy Policy</a>
                    <a href="#"  class="createlind">Terms & Conditions</a>
                    
                  
             </div>
            </section>
          
        </footer>  
        <!-- ###################>Footer End  <##############-->


           <script src="./assets/js/script.js" defer></script>
    <script type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


      <script>
        var count = 0;
        var inc = 0;
        margin = 0;
        var slider = document.getElementsByClassName("slider-width")[0];
        var itemDisplay = 0;
        if (screen.width > 990) {
          itemDisplay = document.getElementsByClassName("slider-container")[0].getAttribute("item-display-d");
          margin = itemDisplay * 20;
        }
        if (screen.width > 700 && screen.width < 990) {
          itemDisplay = document.getElementsByClassName("slider-container")[0].getAttribute("item-display-t");
          margin = itemDisplay * 7;
        }
        if (screen.width > 280 && screen.width < 700) {
          itemDisplay = document.getElementsByClassName("slider-container")[0].getAttribute("item-display-m");
          margin = itemDisplay * 12;
        }


        var items = document.getElementsByClassName("item");
        var itemleft = items.length % itemDisplay;
        var itemslide = Math.floor(items.length / itemDisplay) - 1;
        for (let i = 0; i < items.length; i++) {
          items[i].style.width = (screen.width / itemDisplay) - margin + "px";
        }

        function next() {
          if (inc !== itemslide + itemleft) {
            if (inc == itemslide) {
              inc = inc + itemleft;
              count = count - (screen.width / itemDisplay) * itemleft;
            }
            else {
              inc++;
              count = count - screen.width;
            }
          }
          slider.style.left = count + "px";
        }

        function prev() {
          if (inc !== 0) {
            if (inc == itemleft) {
              inc = inc - itemleft;
              count = count + (screen.width / itemDisplay) * itemleft;
            }
            else {
              inc--;
              count = count + screen.width;
            }
          }
          console.log(inc)
          slider.style.left = count + "px";
        }
      </script>

    
</body>
</html>