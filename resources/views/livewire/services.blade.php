<!-- Service Section - Start -->
<section class="service_section section_space_lg">

    <div class="container">

        <div class="section_heading text-center">

            <h2 class="heading_subtitle text-uppercase">
                <span class="double_icon">
                    <i class="fas fa-sharp fa-square-full"></i>
                    <i class="fas fa-sharp fa-square-full"></i>
                </span>
                <span>What we Do</span>
            </h2>

            <h3 class="heading_title mb-0">
                Latest services
            </h3>

        </div>

        <div class="row">

            @forelse($service as $services)

                <div class="col col-lg-4 col-md-6">

                    <div class="blog_item h-100">

                        <a class="item_image" href="#" data-cursor-text="VIEW">
                            <img
                                src="{{ $services->image }}"
                                alt="Service Image"
                                style="height:210px;"
                            >
                        </a>

                        <div class="item_content">

                            <h3 class="item_title">
                                <a href="#">
                                    {{ $services->heading }}
                                </a>
                            </h3>

                            <p>
                                {!! $services->description !!}
                            </p>

                            <a class="btn-link" href="#">
                                <span class="btn_text">
                                    Read More
                                </span>

                                <span class="btn_icon">
                                    <img src="{{ asset('assets/images/icons/icon_arrow_down_right.svg') }}">
                                    <img src="{{ asset('assets/images/icons/icon_arrow_down_right_primary.svg') }}">
                                </span>
                            </a>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12 text-center">
                    <p>No services found</p>
                </div>

            @endforelse

        </div>

    </div>

</section>
<!-- Service Section - End -->