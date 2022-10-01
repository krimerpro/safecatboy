@extends('layouts.default')
@section('content')

<!-- Preloader  -->
<div class="loader bg-dark">
  <div class="loader-inner ball-scale-ripple-multiple ball-scale-ripple-multiple-color">
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<!-- /End Preloader  -->


<div id="page">

  <!-- ============================
       BG & Overlays
  ================================= -->

  <!-- Waterpipe BG -->
  <div id="waterpipe" class="section-overlay">
    <canvas></canvas>
  </div>
  <!-- /End Waterpipe BG -->

  <!-- Overlay BG -->
  <div class="section-overlay bg-black overlay-opacity"></div>
  <!-- /End Overlay BG -->


  <!-- Modal -->
  <div id="modal-notify" class="modal fade modal-scale" tabindex="-1" role="dialog"
       aria-labelledby="meinModalLabel">

    <!-- .modal-dialog -->
    <div class="modal-dialog" role="document">
      <div>

        <!-- .modal-content -->
        <div class="modal-content text-center bg-dark text-light">
          <button class="button-close" data-dismiss="modal" aria-label="Close"><i
              class="icon icon-lg icon-arrows-remove"></i></button>


          <!-- Headline -->
          <div class="wrap-line border-dark">
            <h3><span class="font-weight-200">Stay</span> Tuned</h3>
          </div>
          <!-- /End Headline -->

          <!-- Description -->
          <div class="p-t-b-15">
            <p>We launch our new website soon.<br>
              Please stay updated and follow.</p>
          </div>
          <!-- /End Description -->

          <div class="p-t-b-30">

            <!-- Newsletter Form:
             alternative newsletter form via email;
             write your email in newsletter-process.php and use:
             <form action="php/newsletter-process.php" id="newsletter-form" method="post"> insted of
             <form id="mc-form"> -->
            <form id="mc-form">

              <!-- Input Group -->
              <div class="input-group">
                <input type="email" id="email" class="form-control form-control-light"
                       name="email"
                       placeholder="Enter your Email here...">
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-color"><i
                        class="icon icon-sm icon-arrows-slim-right-dashed"></i>
                    </button>
                  </span>
              </div>
              <!-- /End Input Group -->

              <!-- Message Alert -->
              <div id="message-newsletter" class="message-wrapper text-white message">

                <span><i class="icon icon-sm icon-arrows-slim-right-dashed"></i><label
                    class="message-text" for="email"></label></span>
              </div>
              <!-- /End Message Alert -->

            </form>
            <!-- /End Newsletter Form -->

          </div>
        </div>

      </div>
      <!-- /End .modal-content -->
    </div>
    <!-- /End .modal-dialog -->
  </div>
  <!-- /End Modal -->

  <div class="container-fluid">
    <div class="row">


      <!-- ============================
           Info
      ================================= -->

      <div id="info" class="col-md-12 text-white text-center page-info col-transform">
        <div class="vert-middle">
          <div class="reveal scale-out">

            <!-- Logo -->
            <div class="p-t-b-15">
              <?php
                if($agent->isMobile()){
              ?>
                  <img src="images/logo-lg.png" height="86" width="70" alt="" style="width:40%;height:40%">
               <?php
             } else{
               ?>
                  <img src="images/logo-lg.png" height="86" width="70" alt="" style="width:10%;height:10%">
               <?php
             }
               ?>

            </div>
            <!-- /End Logo -->

            <div class="p-t-b-15">
              <!-- Headline & Description -->
              <h2><span class="font-weight-200">We're launching our</span><br>new Website</h2>

              <p>We're coming soon! Safe Cat Boy all over the world!<br>We're
                working hard to give you the best experience!<br>
              </p>
              <!-- /End Headline & Description -->
            </div>
            <!-- Arrow -->
            <div class="p-t-b-20">
              <i class="icon icon-sm icon-arrows-slim-down-dashed"></i>
            </div>
            <!-- /End Arrow -->


            <!-- Buttons -->
            <div class="p-t-b-15 btn-row">
              <a class="btn btn-border-white show-info"
                 role="button" href="https://t.me/SafeCatBoy" target="_blank">
                Telegram Official
              </a>
              <a class="btn btn-border-white show-info"
                 role="button" href="https://poocoin.app/tokens/0x170EB04A9Ada0Be289C31a4230cE8402C8782149" target="_blank">
                Chart
              </a>
            </div>
            <!-- /End Buttons -->

          </div>
        </div>
      </div>

    </div>
  </div>

</div>
<!-- /#page -->

@stop
