@section('content')
    <section id="login-section">
        <form method="post" action="{{ URL::route('postLogin') }}" autocomplete="off">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Login">
        </form>
        @if($errors->has('credentials'))
            <p class="error">{{$errors->first('credentials')}}</p>
        @endif
        @if($errors->has('expire'))
            <p class="error">{{$errors->first('expire')}}</p>
        @endif
    </section>
@stop
