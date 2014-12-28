@section('content')
    <ul>
        @foreach ($guitars as $guitar)
            <li>{{ $guitar->title }}</li>
        @endforeach
        <li><a href="{{ route('getNewGuitar') }}">Nouvelle Guitarre</a></li>
    </ul>
@stop