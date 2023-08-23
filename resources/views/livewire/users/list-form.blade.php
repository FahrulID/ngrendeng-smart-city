@foreach ($forms as $form)
    <a href="{{ route('form.isi', ['id' => $form->id]) }}">{{ $form->title }}</a>
    <br>
@endforeach
