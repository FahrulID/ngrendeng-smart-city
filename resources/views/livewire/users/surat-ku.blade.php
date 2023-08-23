@foreach ($surat as $s)
    <a href="{{ route('form.my.view', ['id' => $s->id]) }}">
        {{ $s->created_at->isoFormat('D MMMM Y') }} - {{ $s->Forms->title }}</a>
    <br>
@endforeach
