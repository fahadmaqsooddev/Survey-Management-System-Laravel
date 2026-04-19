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
                            wire:click="toggleAddNoiseAtWork"
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
                        @if($showAddNoiseAtWork)
                            @livewire('admin.noise-at-work.add-noise-at-work', [], key('add-noise-at-work'))
                        @endif
                    </div>
                </div>

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                @if(!$showAddNoiseAtWork && !$showEditNoiseAtWork)
                    <div class="row m-2">
                        @if($noise_at_works && $noise_at_works->count())
                            @foreach($noise_at_works as $noise_at_work)
                                <div class="col-md-4">
                                    <div class="card main_card">
                                        <div class="card-body">
                                            <img src="{{ $noise_at_work->image }}" style="width:100%">
                                            <h1 class="mt-3">{{ $noise_at_work->heading }}</h1>
                                            <p>{{ $noise_at_work->description }}</p>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <button 
                                                        wire:click="editNoiseAtWork({{ $noise_at_work->id }})"
                                                        class="btn btn-outline-primary w-100">
                                                        Edit
                                                    </button>
                                                </div>

                                                <div class="col-md-6">
                                                    <button 
                                                        wire:click="deleteNoiseAtWork({{ $noise_at_work->id }})"
                                                        onclick="return confirm('Delete this Noise At Work?')"
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
                                <p>No Noise At Work found.</p>
                            </div>
                        @endif
                    </div>

                    
                    <div class="mt-4 float-right">
                        {{ $noise_at_works->links('pagination::bootstrap-4') }}
                    </div>
                @endif


                @if($showEditNoiseAtWork)
                    <div class="row mt-3">
                        <div class="col-md-12">
                            @livewire('admin.noise-at-work.edit-noise-at-work', ['id' => $editNoiseAtWorkId], key($editNoiseAtWorkId))
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>