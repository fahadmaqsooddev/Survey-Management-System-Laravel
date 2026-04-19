<div>
    <!-- Contact Section - Start -->
    <section class="contact_section section_space_lg">
        <div class="container">

            <div class="section_heading">
                <h2 class="heading_subtitle text-uppercase">
                    <span class="double_icon">
                        <i class="fas fa-sharp fa-square-full"></i>
                        <i class="fas fa-sharp fa-square-full"></i>
                    </span>
                    <span>Contact Us</span>
                </h2>
                <h3 class="heading_title mb-0">
                    Feel Free Contact Us
                </h3>
            </div>

            <div class="row">
                <!-- Contact Form -->
                <div class="col col-lg-6">
                    <div class="contact_form">
                        <form wire:submit.prevent="submit">
                            <div class="row">

                                <div class="col col-md-12">
                                    <div class="form-group m-0">
                                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" 
                                            placeholder="First Name" wire:model.defer="first_name">
                                        @error('first_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                </div>

                                <div class="col col-md-12">
                                    <div class="form-group m-0">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                            placeholder="Email Address" wire:model.defer="email">
                                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                </div>

                                <div class="col col-md-12">
                                    <div class="form-group m-0">
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror" 
                                            placeholder="Subject" wire:model.defer="subject">
                                        @error('subject') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <textarea class="form-control @error('message') is-invalid @enderror" 
                                                placeholder="Write your Message" wire:model.defer="message"></textarea>
                                        @error('message') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <button type="submit" class="bd-btn-link mt-2">
                                        Send Now
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col col-lg-6">
                    <livewire:contact-detail />
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section - End -->

</div>

@push('scripts')
    <script>
        window.addEventListener('contactFormSubmitted', event => {
            $('#myModal').modal('hide');
            alert('Thank you! Your message has been sent.');
        });
    </script>
@endpush