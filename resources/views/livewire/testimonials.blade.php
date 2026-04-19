<!-- Review Section - Start -->
<section class="review_section section_space_lg bg_dark_3" style="padding-top:50px !important;padding-bottom:50px !important;">
    <div class="container">

        <div class="section_heading text-center text-white">
            <h2 class="heading_subtitle text-uppercase">
                <span class="double_icon">
                    <i class="fas fa-sharp fa-square-full"></i>
                    <i class="fas fa-sharp fa-square-full"></i>
                </span>
                <span>Client Says</span>
            </h2>

            <h3 class="heading_title mb-0">
                What People Says
            </h3>
        </div>

        <div class="review_carousel text-white">
            <div class="row common_carousel_3col" data-slick='{"arrows": false}'>

                @forelse($testimonials as $testimonial)

                <div class="col carousel_item">
                    <div class="review_item style_1">

                        <div class="content_area">

                            <p class="review_content">
                                {{ $testimonial->message }}
                            </p>

                            <ul class="rating_star unordered_list">

                                @for ($i = 1; $i <= $testimonial->rating; $i++)
                                    <li><i class="fas fa-star"></i></li>
                                @endfor

                            </ul>

                            <span class="quote_icon">
                                <img src="{{ asset('assets/images/icons/icon_quote_white.svg') }}" alt="Quote Icon">
                            </span>

                        </div>

                        <div class="admin_item">

                            <div class="admin_thumbnail">
                                <img src="{{ $testimonial->image }}" alt="Admin Avatar">
                            </div>

                            <div class="admin_info">
                                <h3 class="admin_name">{{ $testimonial->name }}</h3>
                            </div>

                        </div>

                    </div>
                </div>

                @empty

                <div class="col-12 text-center text-white">
                    <p>No testimonials available</p>
                </div>

                @endforelse

            </div>
        </div>

    </div>
</section>
<!-- Review Section - End -->