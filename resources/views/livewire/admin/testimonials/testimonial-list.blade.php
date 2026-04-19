<div>
    <div class="row">
        <div class="col-xl-12">
            <div>
               {{-- Header --}}
                <div class="row p-3">
                    <div class="col-md-6">
                        <h2 class="p-3">{{ $this->headerText }}</h2>
                    </div>
                    <div class="col-md-6 text-right">
                        <button 
                            type="button" 
                            wire:click="toggleAddTestimonial" 
                            wire:loading.attr="disabled"
                            class="btn btn-outline-success">
                            
                            <span wire:loading.remove>
                                {{ $this->buttonText }}
                            </span>

                            <span wire:loading>
                                Loading...
                            </span>
                        </button>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        @if($showAddTestimonial)
                            @livewire('admin.testimonials.add-testimonial', [], key('add-testimonial'))
                        @endif
                    </div>
                </div>

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                @if(!$showAddTestimonial && !$showEditTestimonial)
                    <div class="row m-2">
                        @if($testimonials && $testimonials->count())
                            @foreach($testimonials as $testimonial)
                                <div class="col-md-4">
                                    <div class="card main_card">
                                        <div class="card-body">
                                            <img src="{{ $testimonial->image }}" style="width:100%">
                                            <h1 class="mt-3">{{ $testimonial->name }}</h1>
                                            <p>{{ $testimonial->message }}</p>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <button 
                                                        wire:click="editBanner({{ $testimonial->id }})"
                                                        class="btn btn-outline-primary w-100">
                                                        Edit
                                                    </button>
                                                </div>

                                                <div class="col-md-6">
                                                    <button 
                                                        wire:click="deleteTestimonial({{ $testimonial->id }})"
                                                        onclick="return confirm('Delete This Testimonial ?')"
                                                        class="btn btn-outline-danger w-100">
                                                        Trash
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-md-12 text-center">
                                <p>No testimonials found.</p>
                            </div>
                        @endif
                    </div>

                    
                    <div class="mt-4 float-right">
                        {{ $testimonials->links('pagination::bootstrap-4') }}
                    </div>
                @endif

                @if($showEditTestimonial)
                    <div class="row mt-3">
                        <div class="col-md-12">
                            @livewire('admin.testimonials.edit-testimonial', ['id' => $editTestimonialId], key($editTestimonialId))
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>