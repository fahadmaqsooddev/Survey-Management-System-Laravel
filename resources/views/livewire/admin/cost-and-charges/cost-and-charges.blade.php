<div>
    <div class="row">
        <div class="col-xl-12">
            
            <div class="card">
                <div class="row p-3">
                    <div class="col-md-6">
                        <h2 class="p-3">Update Cost and Charges</h2>
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
                        
                        <form wire:submit.prevent="updateCostAndCharges" enctype="multipart/form-data">
                            
                            {{-- Title --}}
                            <label>Title</label>
                            <input type="text" class="form-control" wire:model="title">
                            @error('title') <p class="text-danger">{{ $message }}</p> @enderror
                            
                            
                            {{-- Banner Title --}}
                            <label class="mt-3">Banner Title</label>
                            <input type="text" class="form-control" wire:model="banner_title">
                            @error('banner_title') <p class="text-danger">{{ $message }}</p> @enderror
                            
                            
                            {{-- Description --}}
                            <label class="mt-3">Description</label>
                            <textarea class="form-control" wire:model="description"></textarea>
                            @error('description') <p class="text-danger">{{ $message }}</p> @enderror
                            
                            
                            {{-- Image --}}
                            <label class="mt-3">Image</label>
                            <input type="file" class="form-control" wire:model="image">
                            @error('image') <p class="text-danger">{{ $message }}</p> @enderror
                            
                            <div class="mt-2">
                                <p>Current Image</p>
                                <img src="{{ $oldImage }}" width="200">
                            </div>
                            
                            @if($image)
                                <div class="mt-2">
                                    <p>Preview</p>
                                    <img src="{{ $image->temporaryUrl() }}" width="200">
                                </div>
                            @endif
                            
                            
                            {{-- Banner Image --}}
                            <label class="mt-3">Banner Image</label>
                            <input type="file" class="form-control" wire:model="banner_image">
                            @error('banner_image') <p class="text-danger">{{ $message }}</p> @enderror
                            
                            <div class="mt-2">
                                <p>Current Banner</p>
                                <img src="{{ $oldBannerImage }}" width="200">
                            </div>
                            
                            @if($banner_image)
                                <div class="mt-2">
                                    <p>Preview</p>
                                    <img src="{{ $banner_image->temporaryUrl() }}" width="200">
                                </div>
                            @endif
                            
                            
                            {{-- Submit --}}
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-outline-success w-100" style="padding:15px;">
                                        <span wire:loading.remove>Update</span>
                                        <span wire:loading>Updating...</span>
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