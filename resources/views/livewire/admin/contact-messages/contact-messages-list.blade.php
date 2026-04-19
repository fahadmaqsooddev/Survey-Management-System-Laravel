<div>
    <div class="row">
        <div class="col-xl-12">
            {{-- Header --}}
            <div class="row p-3">
                <div class="col-md-6">
                    <h2 class="p-3">Contact Messages List</h2>
                </div>
            </div>

            {{-- Success message --}}
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            {{-- Table --}}
            <div class="table-responsive table-bordered">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Submitted At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($contact_messages && $contact_messages->count())
                            @foreach($contact_messages as $index => $contact)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $contact->first_name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->subject }}</td>
                                    <td>{{ $contact->message }}</td>
                                    <td>{{ $contact->created_at->format('d M, Y H:i') }}</td>
                                    <td>
                                        <button 
                                            wire:click="deleteMessage({{ $contact->id }})"
                                            onclick="return confirm('Delete this message?')"
                                            class="btn btn-sm btn-danger">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center">No messages found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            <div class="mt-3 float-right">
                {{ $contact_messages->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>