<div>
    <div class="row">
        <div class="col-xl-12">
            {{-- Header --}}
            <div class="row p-3">
                <div class="col-md-6">
                    <h2 class="p-3 text-left">Email Subscribers List</h2>
                </div>
            </div>

            {{-- Success message --}}
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif


            <div class="row mb-3">
                <div class="col-md-6">
                    <label>Title</label>
                    <input type="text" wire:model="title" class="form-control" placeholder="Enter Title">

                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label>Description</label>
                    <textarea wire:model="description" class="form-control" placeholder="Enter Description"></textarea>

                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3">
                    <button wire:click="sendEmail" class="btn btn-sm btn-outline-success">
                        Send Email
                    </button>
                </div>
            </div>

            @error('selected')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror

            <div class="d-flex justify-content-end mb-2">
            <button type="button" wire:click="toggleSelectAll" class="btn btn-sm btn-primary">
                {{ $selectAllState ? 'Deselect All' : 'Select All' }}
            </button>
        </div>

            {{-- Table --}}
            <div class="table-responsive table-bordered">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($records && $records->count())
                            @foreach($records as $index => $rec)
                                <tr>
                                    <td>
                                         <input type="checkbox" wire:model="selected" value="{{ $rec->id }}">
                                    </td>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $rec->email }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center">No Data found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            <div class="mt-3 float-right">
                {{ $records->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>