<div>
    <form wire:submit.prevent="resetPassword">
        <input type="password" wire:model="password" placeholder="New Password">
        <input type="password" wire:model="password_confirmation" placeholder="Confirm Password">
        <button type="submit">Reset Password</button>
    </form>
    @error('password') <div>{{ $message }}</div> @enderror
</div>