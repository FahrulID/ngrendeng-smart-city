<form wire:submit.prevent="submit">
    <h1>{{ $surat->title }}</h1>
    <h1>{{ $surat->Statuses->description }}</h1>
    @foreach ($fields as $field)
        <div class="form-group">
            <label for="{{ $field->Fields->id }}">{{ $field->Fields->title }}</label>

            @if ($field->Fields->FieldTypes->type == 'text')
                <input type="text" class="form-control" id="{{ $field->Fields->id }}" name="{{ $field->Fields->id }}"
                    placeholder="{{ $field->Fields->description }}" wire:model="fields.{{ $loop->index }}.entry">
            @elseif ($field->Fields->FieldTypes->type == 'file')
                <embed src="{{ url($field->entry) }}"
                    type="{{ explode('.', $field->entry)[1] == 'pdf' ? 'application/pdf' : 'image/jpg' }}"
                    width="100%" height="600px" />
            @endif

            {{-- <label>{{ $field->Statuses->description }}</label> --}}
        </div>
    @endforeach
</form>
