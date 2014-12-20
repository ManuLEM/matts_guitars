@section('content')
    <ul>
        @foreach ($articles as $article)
            <li>{{ article.title }}</li>
        @endforeach
        <li><a href="#">Nouvel Article</a></li>
    </ul>
@stop