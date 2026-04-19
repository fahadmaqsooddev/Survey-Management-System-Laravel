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
                            wire:click="toggleAddBanner"
                            wire:loading.attr="disabled"
                            class="btn btn-outline-success">

                            <span wire:loading.remove>
                                {{ $this->buttonText }}
                            </span>

                            <span wire:loading>
                                Processing...
                            </span>
                        </button>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        @if($showAddBanner)
                            @livewire('admin.banners.add-banner', [], key('add-banner'))
                        @endif
                    </div>
                </div>

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                @if(!$showAddBanner && !$showEditBanner)
                    <div class="row m-2">
                        @if($banners && $banners->count())
                            @foreach($banners as $banner)
                                <div class="col-md-4">
                                    <div class="card main_card">
                                        <div class="card-body">
                                            <img src="{{ $banner->image }}" style="width:100%">
                                            <h1 class="mt-3">{{ $banner->heading }}</h1>
                                            <p>{{ $banner->description }}</p>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <button 
                                                        wire:click="editBanner({{ $banner->id }})"
                                                        class="btn btn-outline-primary w-100">
                                                        Edit
                                                    </button>
                                                </div>

                                                <div class="col-md-6">
                                                    <button 
                                                        wire:click="deleteBanner({{ $banner->id }})"
                                                        onclick="return confirm('Delete this banner?')"
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
                                <p>No banners found.</p>
                            </div>
                        @endif
                    </div>

                    
                    <div class="mt-4 float-right">
                        {{ $banners->links('pagination::bootstrap-4') }}
                    </div>
                @endif


                @if($showEditBanner)
                    <div class="row mt-3">
                        <div class="col-md-12">
                            @livewire('admin.banners.edit-banner', ['id' => $editBannerId], key($editBannerId))
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>