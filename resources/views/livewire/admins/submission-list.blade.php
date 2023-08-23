@foreach ($submissions as $submission)
    <a href="{{ route('submissions.preview', ['id' => $submission->id]) }}">{{ $submission->Forms->title }} -
        {{ $submission->nik }} - {{ $submission->Statuses->description }}</a>
    <br>
@endforeach


