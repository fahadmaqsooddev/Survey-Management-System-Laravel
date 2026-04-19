<form wire:submit.prevent="submit">
    <input type="email" wire:model.defer="email" placeholder="Enter your email" class="form-control @error('email') is-invalid @enderror">
    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror

    <button type="submit" class="btn btn-primary mt-2">Subscribe</button>
</form>
@push('scripts')
    <script>
        window.addEventListener('newsletterSubscribed', () => {
            alert('Thank you! You are subscribed to the newsletter.');
        });
    </script>
@endpush