<form wire:submit.prevent="login">
    <input name="username" type="text" placeholder="Username" wire:model="username" />
    @error('username')
        <span class="error">{{ $message }}</span>
    @enderror
    <input name="password" type="password" wire:model="password" />
    @error('password')
        <span class="error">{{ $message }}</span>
    @enderror

    <button type="submit">
        Login
        <div wire:loading>
            <img src="https://raw.githubusercontent.com/n3r4zzurr0/svg-spinners/main/preview/ring-resize-black-36.svg"
                style="visibility:visible;max-width:100%;">
        </div>
    </button>
</form>
