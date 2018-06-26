@extends('layout.master')
    @section (' title ')
    PopUp
    @stop
    @section('content')
    <div class="popup-content">
    <div class="popup-content-wrapper">
       <div class="popup-container">
           <a href="#" class="close-popup"></a>
            <div class="images">
                <img class="img-responsive" src="resources/assets/images/newsletter.jpg" alt="newsletter">
            </div>
             <div class="text">
                <div class="popup-content-text">
                    <img class="logo" src="resources/assets/images/logo-popup.png" alt="Logo-images">
                   <p>Bạn có muốn thêm sản phẩm không ?</p>
                </div>
                <div class="newletter-form">
                   <div class="widget_wysija_cont shortcode_wysija">
                      <div class="wysija-msg ajax" id="msg-form-wysija-shortcode57bd06004b338-1"></div>
                      <form class="widget_wysija shortcode_wysija" action="#" method="post" id="form-wysija-shortcode57bd06004b338-1">
                        <button type="submit" value="Subscribe!" class="wysija-submit wysija-submit-field button button1 hover-white">Ok</button>
                        <button type="submit" value="Subscribe!" class="wysija-submit wysija-submit-field button button1 hover-white">Cancel</button>
                      </form>
                   </div>
                </div>
             </div>
       </div>
    </div>
    </div>
    <!-- End popup  -->
   
    <!-- End pushmenu -->
     <div class="wrappage">
        <div class="bg-slider-one-item space-50">

        </div>
        <div id="back-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </div>
    @endsection