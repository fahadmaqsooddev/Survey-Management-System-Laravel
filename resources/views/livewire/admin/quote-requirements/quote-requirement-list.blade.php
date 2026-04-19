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
                            wire:click="toggleAddQuoteRequirement" 
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
                        @if($showAddQuoteRequirement)
                            @livewire('admin.quote-requirements.add-quote-requirement', [], key('add-quote-requirement'))
                        @endif
                    </div>
                </div>

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif

                @if(!$showAddQuoteRequirement && !$showEditQuoteRequirement)
                    <div class="row m-2">
                        @if($quote_requirements && $quote_requirements->count())
                            @foreach($quote_requirements as $quote)
                                <div class="col-md-4">
                                    <div class="card main_card">
                                        <div class="card-body">
                                    
                                            <h1 class="mt-3">{{ $quote->title }}</h1>
                                            <p>{{ $quote->description }}</p>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <button 
                                                        wire:click="editQuoteRequirement({{ $quote->id }})"
                                                        class="btn btn-outline-primary w-100">
                                                        Edit
                                                    </button>
                                                </div>

                                                <div class="col-md-6">
                                                    <button 
                                                        wire:click="deleteQuoteRequirement({{ $quote->id }})"
                                                        onclick="return confirm('Delete This Quote Requirement ?')"
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
                                <p>No Quote Requirement found.</p>
                            </div>
                        @endif
                    </div>

                    
                    <div class="mt-4 float-right">
                        {{ $quote_requirements->links('pagination::bootstrap-4') }}
                    </div>
                @endif

                @if($showEditQuoteRequirement)
                    <div class="row mt-3">
                        <div class="col-md-12">
                            @livewire('admin.quote-requirements.edit-quote-requirement', ['id' => $editQuoteRequirementId], key($editQuoteRequirementId))
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>