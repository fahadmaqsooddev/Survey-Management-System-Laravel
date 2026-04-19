<!-- Site Footer - Start
      ================================================== -->
      <footer class="site_footer style_1">
        <div class="footer_widget_area bg_dark_3">
          <div class="container">
            <div class="footer_widget_grid">
              <div class="site_logo">
                  <a class="site_link" href="{{ route('home') }}">
                    <img src="{{ $logo->image }}" alt="" style="width: 60%;">
                </a>
              </div>
              <div class="footer_widget">
                <h3 class="footer_widget_title">Contact Us</h3>
                <div class="icon_list_widget">
                  <h4 class="widget_title mb-0">
                    If you want to Get a New Idea:
                  </h4>
                  <ul class="icon_list unordered_list_block">
                    <li>
                      <a href="mailto:{{ $contact->email }}">
                        <span class="list_item_text">
                          <span class="__cf_email__" data-cfemail="">Email Us</span>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!--<div class="footer_widget">-->
              <!--  <h3 class="footer_widget_title">Find Us</h3>-->
              <!--  <div class="icon_list_widget">-->
              <!--    <ul class="icon_list unordered_list_block">-->
              <!--      <li>-->
              <!--        <div class="w-location mb-2">-->
              <!--          <img src="assets/images/icons/icon_mapmark.svg" alt="Icon Mapmark">-->
              <!--        </div>-->
              <!--        <a target="_blank" href="https://www.google.com/maps">-->
              <!--          <span class="list_item_text">-->
              <!--            1989 Dummy Road-->
              <!--          </span>-->
              <!--        </a>-->
              <!--      </li>-->
              <!--    </ul>-->
              <!--  </div>-->
              <!--</div>-->
              <div class="footer_widget">
                <h3 class="footer_widget_title">Newsletter</h3>
                 <livewire:news-letter-form/>
              </div>
            </div>
          </div>
        </div>
        <div class="footer_bottom bg_dark_3">
          <div class="container">
            <div class="footer_bottom_grid">
              <div class="copyright_widget">
                Copyright © {{ date('Y')}} by <a target="_blank" href="#"><u> Noise Survey Limited.</u></a> All Rights Reserved.
              </div>
              <div class="backtotop style_1">
                <a href="#" class="scroll">
                  <i class="fal fa-chevron-up"></i>
                </a>
              </div>
              <!--<div class="footer_social">-->
              <!--  <ul class="social_icon unordered_list_end">-->
              <!--    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>-->
              <!--    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>-->
              <!--    <li><a href="#!"><i class="fab fa-youtube"></i></a></li>-->
              <!--  </ul>-->
              <!--</div>-->
            </div>
          </div>
        </div>
      </footer>
    </div>
      <!-- Site Footer - End
      ================================================== -->
    <!-- Body Wrap - End -->

    

 