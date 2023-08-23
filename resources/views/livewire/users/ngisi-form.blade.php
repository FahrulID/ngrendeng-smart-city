<form wire:submit.prevent="submit">
    <h1>{{ $form->title }}</h1>
    @foreach ($fields as $field)
        <div class="form-group">
            <label for="{{ $field['id'] }}">{{ $field['title'] }}</label>
            <input type="{{ $field['type'] }}" class="form-control" id="{{ $field['id'] }}" name="{{ $field['id'] }}"
                placeholder="{{ $field['description'] }}" wire:model="fields.{{ $loop->index }}.value">
            @error("fields.{{ $loop->index }}.value")
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    @endforeach

    <button type="submit" class="btn btn-primary">
        Submit
        <div wire:loading>
            <img src="https://raw.githubusercontent.com/n3r4zzurr0/svg-spinners/main/preview/ring-resize-black-36.svg"
                style="visibility:visible;max-width:100%;">
        </div>
    </button>
</form>
