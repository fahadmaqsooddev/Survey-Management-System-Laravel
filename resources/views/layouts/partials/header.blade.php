
<!-- Site Header - Start
================================================== -->
<header class="site_header site_header_1">
  <section class="top_header" style="padding: 30px;background: #093390;color: white;">
    <div class="container">
      <div class="row">
        <div class="col-md-2" style="padding-top: 5px;text-align: center;">
          <i class="fas fa-envelope"></i> <a style="color: white;" href="mailto:{{ $contact->email }}">Email Us</a>
        </div>

        <div class="col-md-2" style="padding-top: 5px;text-align: center;">
          <i class="fas fa-phone-alt"></i> <span>{{ $contact->phone }}</span>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </section>
<div class="container">
  <div class="header_wrapper">
    <div class="site_logo">
        <a class="site_link" href="{{ route('home') }}">
          <img src="{{ $logo->image }}" style="width: 75%;" alt="">
        </a>
    </div>
    <div class="mean__menu-wrapper d-none d-lg-block">
      <div class="main-menu">
          <nav id="mobile-menu">
            <ul>
                <li>
                  <a href="{{ route('home') }}" wire:navigate>Home</a>
              </li>

              <li>
                  <a href="{{ route('about-us') }}" wire:navigate>About Us</a>
              </li>

              <li>
                  <a href="{{ route('cost-and-charges') }}" wire:navigate>Cost and Charges</a>
              </li>

              <li>
                  <a href="{{ route('noise-survey-report') }}" wire:navigate>Noise Survey Report</a>
              </li>

              <li>
                  <a href="{{ route('noise-at-work') }}" wire:navigate>Noise at Work</a>
              </li>

              <li>
                  <a href="{{ route('contact-us') }}" wire:navigate>Contact</a>
              </li>

            </ul>
          </nav>
          <!-- for wp -->
          <div class="header__hamburger ml-50 d-none">
            <button type="button" class="hamburger-btn offcanvas-open-btn">
                <span>01</span>
                <span>01</span>
                <span>01</span>
            </button>
          </div>
      </div>
    </div>
    <div class="header_right">
      
    <!--</ul>-->
    <div class="offcanvas-toggle d-lg-none">
      <a class="bar-icon" href="javascript:void(0)">
          <span></span>
          <span>
          <small></small>
          </span>
          <span></span>
      </a>
    </div>
  </div>
  </div>
</div>
</header>
<!-- Site Header - End
================================================== -->