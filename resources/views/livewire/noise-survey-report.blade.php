<div>

    <livewire:noise-survey-report-banner />

    <!-- About Section -->
    <section class="about_section section_space_lg decoration_wrap">
        <div class="container">

            @foreach($data as $index => $noise_survey_report)

                @if($index % 2 == 0)

                    <div class="row align-items-center mt-5">

                        <div class="col-lg-6 order-last order-lg-first">
                            <div class="about_image decoration_wrap text-center">
                                <img
                                    class="amin-up-down"
                                    src="{{ $noise_survey_report->image }}"
                                    alt="image"
                                >
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="about_content mb-4 mb-lg-0">

                                <div class="section_heading">

                                    <h3 class="heading_title">
                                        {{ $noise_survey_report->heading }}
                                    </h3>

                                    <p class="heading_description mb-0">
                                        {!! $noise_survey_report->description !!}
                                    </p>

                                </div>

                            </div>
                        </div>

                    </div>

                @else

                    <div class="row align-items-center mt-5">

                        <div class="col-lg-6">

                            <div class="about_content mb-4 mb-lg-0">

                                <div class="section_heading">

                                    <h3 class="heading_title">
                                        {{ $noise_survey_report->heading }}
                                    </h3>

                                    <p class="heading_description mb-0">
                                        {!! $noise_survey_report->description !!}
                                    </p>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="about_image decoration_wrap text-center">

                                <img
                                    class="amin-up-down"
                                    src="{{ $noise_survey_report->image }}"
                                    alt="image"
                                >

                            </div>
                        </div>

                    </div>

                @endif

            @endforeach

        </div>
    </section>

</div>