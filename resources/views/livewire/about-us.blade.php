<main class="page_content">
    
    <section class="about_section section_space_lg decoration_wrap">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col col-lg-6 order-last order-lg-first">
                    <img class="amin-up-down" src="{{ $about->image }}">
                </div>
                
                <div class="col col-lg-6">
                    <div class="about_content mb-4 mb-lg-0">
                        <div class="section_heading">
                            
                            <h2 class="heading_subtitle text-uppercase">
                                <span class="double_icon">
                                    <i class="fas fa-sharp fa-square-full"></i>
                                    <i class="fas fa-sharp fa-square-full"></i>
                                </span>
                                <span>About US</span>
                            </h2>
                            
                            <h3 class="heading_title">
                                {{ $about->heading }}
                            </h3>
                            
                            <p class="heading_description mb-0">
                                {{ $about->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    {{-- <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            
            <div class="modal-content">
                
                <div class="modal-header">
                    <h4 class="modal-title"><center>Subscribe to our Newsletter</center></h4>
                </div>
                
                <div class="modal-body">
                    <div class="col col-md-12">
                        
                        <form method="POST" action="{{ url('subscribe') }}">
                            @csrf
                            
                            <div class="form-group m-0">
                                <input class="form-control" type="email" name="email" placeholder="Email" required>
                            </div>
                            
                            <button type="submit" class="btn btn-primary mt-3">Subscribe</button>
                            
                            <div class="privacy-policy">
                                <input type="checkbox" id="privacy" name="privacy" required>
                                <label for="privacy">I accept the <a href="{{ url('privacy_policy') }}" target="_blank">Privacy Policy</a></label>
                            </div>
                            
                        </form>
                        
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger close" onclick="closeModal()">Close</button>
                </div>
                
            </div>
        </div>
    </div> --}}
    
</main>
@push('scripts')
    <script>
        $(document).ready(function () {
            $('#myModal').modal('show');
        });
        
        function closeModal() {
            $('#myModal').modal('hide');
        }
    </script>
@endpush