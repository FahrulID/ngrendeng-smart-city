<div>
    <h1>{{ $submission->title }}</h1>
    <h1>{{ $submission->Statuses->description }}</h1>
    @foreach ($fields as $field)
        <div class="form-group">
            <label for="{{ $field->Fields->id }}">{{ $field->Fields->title }}</label>

            @if ($field->Fields->FieldTypes->type == 'text')
                <input type="text" class="form-control" id="{{ $field->Fields->id }}" name="{{ $field->Fields->id }}"
                    placeholder="{{ $field->Fields->description }}" value="{{ $field->entry }}">
            @elseif ($field->Fields->FieldTypes->type == 'file')
                <embed src="{{ url($field->entry) }}"
                    type="{{ explode('.', $field->entry)[1] == 'pdf' ? 'application/pdf' : 'image/jpg' }}" width="100%"
                    height="600px" />
            @endif

            {{-- <label>{{ $field->Statuses->description }}</label> --}}
        </div>
    @endforeach

    <button wire:click="getDocx">Print Berkas</button>

    @if ($submission->Statuses->id == 1)
        <button wire:click="accept">Terima berkas</button>
    @elseif ($submission->Statuses->id == 2)
        <button wire:click="sign">Sudah ditandatangani</button>
    @endif
    <button wire:click="reject">Tolak berkas</button>
</div>
