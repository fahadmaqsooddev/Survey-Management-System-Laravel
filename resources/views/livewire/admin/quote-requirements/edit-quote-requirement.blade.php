<div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="row p-3">
                    <div class="col-md-6">
                        <h2 class="p-3">Edit Quote Requirement</h2>
                    </div>
                </div>

                <div class="row m-2">
                    <div class="col-md-12">

                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                        <form wire:submit.prevent="updateQuoteRequirement" enctype="multipart/form-data">

                            <label>Title</label>
                            <input type="text" class="form-control" wire:model="title" placeholder="Enter Title">
                            @error('title') <p class="text-danger">{{ $message }}</p> @enderror

                            

                            <label class="mt-3">Description</label>
                            <textarea class="form-control" wire:model="description"></textarea>
                            @error('description') <p class="text-danger">{{ $message }}</p> @enderror
                            

                            <div class="row mt-3">
                                <div class="col-md-12 mx-auto">
                                    <button type="submit" class="btn btn-outline-success w-100" style="padding:15px;">
                                        <p wire:loading.remove>Submit</p>
                                        <p wire:loading>Uploading...</p>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>