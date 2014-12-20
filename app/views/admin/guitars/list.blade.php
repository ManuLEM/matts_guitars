@section('content')
    <ul>
        @foreach ($guitars as $guitar)
            <li>{{ guitar.title }}</li>
        @endforeach
        <li><a href="#">Nouvel Article</a></li>
    </ul>
@stop