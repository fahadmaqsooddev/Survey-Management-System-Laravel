<div>

    <!-- Main Body - Start -->
    <main class="page_content">

        <!-- Page Banner Section -->
        <section class="page_banner text-center"
            style="background-image:url('{{ $cost_and_charges->banner_image }}') !important;
            background-repeat:no-repeat;
            background-size:cover;
            background-position:center;
            width:100%;">

            <div class="container decoration_wrap">

                <h1 class="page_title" style="color:white; text-shadow:0px 0px 20px #060606;">
                    Cost and Charges
                </h1>

                <ul class="breadcrumb_nav unordered_list_center">
                    <li>
                        <a href="{{ route('home') }}" style="color:white; text-shadow:0px 0px 20px #060606;">
                            Home
                        </a>
                    </li>
                    <li style="color:white;">
                        {{ $cost_and_charges->banner_title }}
                    </li>
                </ul>

                <div class="deco_item shape_1 wow fadeInUp" data-wow-delay=".1s">
                    <img src="assets/images/shapes/shape_circle_1.svg"
                         data-parallax='{"y" : -140, "smoothness": 10}'
                         alt="Shape Image">
                </div>

                <div class="deco_item shape_2 wow rotateInDownRight" data-wow-delay=".1s">
                    <img src="assets/images/shapes/shape_circle_half_1.svg"
                         data-parallax='{"y" : 200, "smoothness": 10}'
                         alt="Shape Image">
                </div>

                <div class="deco_item shape_3 wow fadeInDown">
                    <img src="assets/images/shapes/shape_1.svg"
                         data-parallax='{"x" : -200, "smoothness": 10}'
                         alt="Shape Image">
                </div>

            </div>
        </section>

        <!-- About Section -->
        <section class="about_section section_space_lg decoration_wrap">
            <div class="container">

                <div class="row align-items-center">

                    <div class="col col-lg-6 order-last order-lg-first">
                        <div class="about_image decoration_wrap text-center">
                            <img class="amin-up-down"
                                 src="{{ $cost_and_charges->image }}"
                                 alt="About Image">
                        </div>
                    </div>

                    <div class="col col-lg-6">
                        <div class="about_content mb-4 mb-lg-0">

                            <div class="section_heading">

                                <h2 class="heading_subtitle text-uppercase">
                                    <span class="double_icon">
                                        <i class="fas fa-sharp fa-square-full"></i>
                                        <i class="fas fa-sharp fa-square-full"></i>
                                    </span>
                                    <span>Cost and Charges</span>
                                </h2>

                                <h3 class="heading_title">
                                    {{ $cost_and_charges->heading }}
                                </h3>

                                <p class="heading_description mb-0">
                                    {{ $cost_and_charges->description }}
                                </p>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq_section section_space_lg" style="padding-top:0px !important;">

            <div class="container">

                <div class="row">
                    <div class="col col-lg-8 mx-auto">
                        <div class="section_heading mb-4">
                            <h2 class="heading_title mb-0"
                                style="text-align:center;font-size:22px;">
                                All our measurements are attended so that we can keep an eye
                                on what the noise environment is and to prevent tampering
                                with the results.
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-lg-12">

                        <div class="accordion_wrap" id="faq_accordion_1">

                            @if($quote_requirements && $quote_requirements->count())

                                @foreach($quote_requirements as $key => $quote)

                                    @php
                                        $headingId = 'heading_' . $key;
                                        $collapseId = 'collapse_' . $key;
                                    @endphp

                                    <div class="accordion_item">

                                        <h3 class="accordion_header m-0" id="{{ $headingId }}">
                                            <button class="accordion_button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#{{ $collapseId }}"
                                                    aria-expanded="false"
                                                    aria-controls="{{ $collapseId }}">
                                                {{ $quote->title }}
                                            </button>
                                        </h3>

                                        <div id="{{ $collapseId }}"
                                             class="accordion-collapse collapse"
                                             aria-labelledby="{{ $headingId }}"
                                             data-bs-parent="#faq_accordion_1">

                                            <div class="accordion_body">
                                                <p class="m-0">
                                                    {{ $quote->description }}
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                @endforeach

                            @endif

                        </div>

                    </div>
                </div>

            </div>
        </section>

    </main>
</div>

<!-- Script -->

<script>

    $(document).ready(function () {
        var myModal = $('#myModal');
        myModal.modal('show');
    });

    function closeModal() {
        $('#myModal').modal('hide');
    }

</script>