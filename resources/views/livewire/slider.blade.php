<div class="slider">
    @foreach($banners as $index => $banner)
        <div class="slider-content @if($index == 0) active @endif">
            <img class="image_slider"
                 style="filter: brightness(0.9); width:100%; height:700px;"
                 src="{{ $banner->image }}"
                 alt="{{ $banner->heading }}">

            <div class="slider-text">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero_banner_content mb-5 mb-lg-0">
                            <div class="section_heading">
                                <h3 class="heading_title text-white">
                                    {{ $banner->heading }}
                                </h3>
                                <p class="heading_description mb-0 text-white"
                                   style="text-shadow:0px 0px 6px black;">
                                   {{ $banner->description }}
                                </p>
                            </div>
                            <ul class="btns_group unordered_list">
                                <li>
                                    <a href="{{ url('/contact') }}" class="bd-btn-link btn_primary">
                                        <span class="bd-button-content-wrapper">
                                            <span class="bd-button-icon">
                                                <i class="fa-light fa-arrow-right-long"></i>
                                            </span>
                                            <span class="bd-btn-anim-wrapp">
                                                <span class="bd-button-text">Contact Us</span>
                                                <span class="bd-button-text">Contact Us</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    function initializeSlider() {
        const contents = document.querySelectorAll('.slider-content');
        if (!contents.length) return;

        let currentIndex = 0;
        const maxIndex = contents.length - 1;

        // Clear any existing interval
        if (window.sliderInterval) clearInterval(window.sliderInterval);

        function nextImage() {
            contents.forEach(c => c.classList.remove('active'));
            currentIndex = (currentIndex + 1) > maxIndex ? 0 : currentIndex + 1;
            contents[currentIndex].classList.add('active');
        }

        // Show first slide explicitly
        contents[currentIndex].classList.add('active');

        window.sliderInterval = setInterval(nextImage, 4000);
    }

    // Initial load
    initializeSlider();

    if (window.Livewire) {
        Livewire.hook('message.processed', () => {
            initializeSlider();
        });
    }

});
</script>
@endpush