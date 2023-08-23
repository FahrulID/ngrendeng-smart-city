<body>
    <div class="container-signin">
    <h1 style="padding-bottom:18.75px;">
        Sign in
    </h1>

    <form wire:submit.prevent="register">
        <div class="" style="padding-bottom:24px;">
            <input name="nik" type="text" placeholder="NIK" wire:model="nik" placeholder="NIK" style="border-style:solid; border-width:2px; border-color:#97CBCC;" />
            @error('nik')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="" style="padding-bottom:33px;">
            <input name="tanggal-lahir" type="date" wire:model="tanggal_lahir" style="border-style:solid; border-width:2px; border-color:#97CBCC;"/>
            @error('tanggal_lahir')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <button class="btn-daftar rounded-3" type="submit"> Register
            <div wire:loading>
                <img src="https://raw.githubusercontent.com/n3r4zzurr0/svg-spinners/main/preview/ring-resize-black-36.svg"
                    style="visibility:visible;max-width:100%;">
            </div>
        </button>
    </form>
    </div>
</body>

<style>

</style>
</html>
