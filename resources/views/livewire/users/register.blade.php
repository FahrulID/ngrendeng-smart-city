<form wire:submit.prevent="register">
    <input name="nik" type="text" placeholder="NIK" wire:model="nik" />
    @error('nik')
        <span class="error">{{ $message }}</span>
    @enderror
    <input name="tanggal-lahir" type="date" wire:model="tanggal_lahir" />
    @error('tanggal_lahir')
        <span class="error">{{ $message }}</span>
    @enderror
    <button type="submit">
        Register
        <div wire:loading>
            <img src="https://raw.githubusercontent.com/n3r4zzurr0/svg-spinners/main/preview/ring-resize-black-36.svg"
                style="visibility:visible;max-width:100%;">
        </div>
    </button>
</form>
