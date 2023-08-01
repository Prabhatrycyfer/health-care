<!--start-discount-sec-->
<div class="disnt-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1">

         <div class="row align-items-center">
          <div class="col-lg-4 col-md-12">
            <div class="dis-txt">
              <h4>simply dummy text</h4>
              <p>Lorem Ipsum is simply dummy text </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="search-bar d-flex">
              <input type="search" placeholder="Your email">
              <button type="button">Subscribe</button>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="get-box">
              <div class="get-txt">
                <h3>Get Discount</h3>
                <label>On Any Of Our Product</label>
              </div>
              <div class="dis">
                <span>GET</span>
                <label>10%</label>
                <span>OFF</span>
              </div>
            </div>

          </div>

         </div>

      </div>
    </div>
  </div>
</div>
<!--end-discount-sec-->

<!--start-footer-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="fst-box">
          <img src="images/footer-logo.png">
          <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
            industry's standard dummy text ever since the 1500s</p>
            <div class="social mt-4">
              <ul>
                <li><a href="https://www.facebook.com/Arogya-Ayurveda-107143992312460/?mibextid=LQQJ4d"><img src="images/face.png"></a></li>
                <li><a href="https://www.instagram.com/arogya_ayurvedachd/?igshid=YmMyMTA2M2Y%3D"><img src="images/insta.png"></a></li>
                <li><a href="#"><img src="images/snap.png"></a></li>
                <li><a href="#"><img src="images/chat.png"></a></li>
              </ul>
            </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-12">
        <div class="row">
          <div class="col-md-3">
            <div class="scd-box">
              <h4>YOUR ACCOUNT</h4>
              <ul class="pl-0">
                <li><a href="#">Personal Info</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="#">cart page</a></li>
                <li><a href="#">My Wishlists</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-3">
            <div class="scd-box">
              <h4>PRODUCT</h4>
              <ul class="pl-0">
                <li><a href="#">Prices Drop</a></li>
                <li><a href="#">New Products</a></li>
                <li><a href="#">Best Sales</a></li>
                <li><a href="#">All products</a></li>
                <li><a href="#">Beauty Product</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-3">
            <div class="scd-box">
              <h4>USEFULL LINK</h4>
              <ul class="pl-0">
                <li><a href="#">Delivery</a></li>
                <li><a href="#">Terms and Conditions</a></li>
                <li><a href="#">privacy policy</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-3">
            <div class="scd-box">
              <h4>contact us</h4>
              <div class="locat d-flex align-items-center">
                <label class="icons"><i class="fa-solid fa-location-dot"></i></label>
                <label>Location <span>Mohali India</span> </label>
              </div>
              <div class="locat d-flex align-items-center">
                <label class="icons"><i class="fa-solid fa-phone"></i></label>
                <label>Contact Us <span>+91 123-456-789</span> </label>
              </div>
              <div class="locat d-flex align-items-center">
                <label class="icons"><i class="fa-solid fa-envelope"></i></label>
                <label>Email <span>Dummy@gmail.com</span> </label>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</footer>
<!--end-footer-->

<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p class="mb-0">Copyright © 2023 Trycyfer Software Development Company | All Rights Reserved</p>
      </div>
      <div class="col-md-6">
        <div class="pays">
          <ul>
            <li><a href="#"><img src="images/pay-1.png"></a></li>
            <li><a href="#"><img src="images/g-pay.png"></a></li>
            <li><a href="#"><img src="images/visa.png"></a></li>
            <li><a href="#"><img src="images/pay-3.png"></a></li>
            <li><a href="#"><img src="images/pay-4.png"></a></li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</div>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

  <script>
        const imgs = document.querySelectorAll('.img-select a');
        const imgBtns = [...imgs];
        let imgId = 1;

        imgBtns.forEach((imgItem) => {
            imgItem.addEventListener('click', (event) => {
                event.preventDefault();
                imgId = imgItem.dataset.id;
                slideImage();
            });
        });

        function slideImage() {
            const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

            document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
        }

        window.addEventListener('resize', slideImage);
    </script>

<script>
$(document).ready(function(){
  $("#carts").click(function(){
    $(".cart-items").toggle();
  });
});
</script>

<script>
  $(document).ready(function () {
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      if (scroll > 100) {
        $(".black").css("background", "#fdead9");
      }

      else {
        $(".black").css("background", "#ccc0");
      }
    })
  })
</script>

<script>
  $(document).ready(function () {
    $("#testimonial-slider").owlCarousel({
      items: 4,
      itemsDesktop: [1000, 3],
      itemsDesktopSmall: [979, 2],
      itemsTablet: [768, 1],
      pagination: true,
      autoPlay: false
    });
  });
</script>


</body>

</html>