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
                            wire:click="toggleAddService"
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
                        @if($showAddService)
                            @livewire('admin.services.add-service', [], key('add-service'))
                        @endif
                    </div>
                </div>

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                @if(!$showAddService && !$showEditService)
                    <div class="row m-2">
                        @if($services && $services->count())
                            @foreach($services as $service)
                                <div class="col-md-4">
                                    <div class="card main_card">
                                        <div class="card-body">
                                            <img src="{{ $service->image }}" style="width:100%">
                                            <h1 class="mt-3">{{ $service->heading }}</h1>
                                            <p>{{ $service->description }}</p>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <button 
                                                        wire:click="editService({{ $service->id }})"
                                                        class="btn btn-outline-primary w-100">
                                                        Edit
                                                    </button>
                                                </div>

                                                <div class="col-md-6">
                                                    <button 
                                                        wire:click="deleteService({{ $service->id }})"
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
                                <p>No services found.</p>
                            </div>
                        @endif
                    </div>

                    
                    <div class="mt-4 float-right">
                        {{ $services->links('pagination::bootstrap-4') }}
                    </div>
                @endif

                @if($showEditService)
                    <div class="row mt-3">
                        <div class="col-md-12">
                            @livewire('admin.services.edit-service', ['id' => $editServiceId], key($editServiceId))
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>