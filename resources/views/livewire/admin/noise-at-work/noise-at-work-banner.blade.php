<div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="row p-3">
                    <div class="col-md-6">
                        <h2 class="p-3">Update Noise At Work Banner </h2>
                    </div>
                </div>

                <div class="row m-2">
                    <div class="col-md-12">

                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                        @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form wire:submit.prevent="addUpdateBanner" enctype="multipart/form-data">

                            <label>Title</label>
                            <input type="text" class="form-control" wire:model="title" placeholder="Enter Your Title">
                            @error('title') <p class="text-danger">{{ $message }}</p> @enderror

                            <label class="mt-3">Image</label>
                            <input type="file" class="form-control" wire:model="image">
                            @error('image') <p class="text-danger">{{ $message }}</p> @enderror


                            @if ($image)
                                <div class="mt-3">
                                    <img src="{{ $image->temporaryUrl() }}" width="200">
                                </div>
                            @endif

                            {{-- Existing stored image --}}
                            @if (!$image && $existingImage)
                                <div class="mt-3">
                                    <img src="{{ $existingImage }}" width="200">
                                </div>
                            @endif

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
