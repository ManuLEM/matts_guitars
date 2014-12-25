@section('content')
    <section id="login-section">
        <h1>Connexion</h1>
        <form method="post" action="{{ URL::route('postLogin') }}" autocomplete="off">
            <input type="text" name="username" placeholder="Nom d'utilisateur">
            <span class="blur"></span>
            <input type="password" name="password" placeholder="Mot de passe">
            <span class="blur"></span>
            <button type="submit"><i class="fa fa-lock"></i>Connexion</button>
            <span class="blur"></span>
        </form>
        @if($errors->has('credentials'))
            <p class="error">{{$errors->first('credentials')}}</p>
        @endif
        @if($errors->has('expire'))
            <p class="error">{{$errors->first('expire')}}</p>
        @endif
    </section>
    <script>
        var blurs = document.querySelectorAll('span.blur');
        for (var i = 0; i < blurs.length; i++) {
            blurs[i].style.backgroundSize = window.innerWidth + "px auto";
            if (i < 2) {
                blurs[i].style.backgroundPositionY = "-" + (- 103 + blurs[i].offsetParent.offsetTop + blurs[i].offsetTop) + "px";
            }
            else {
                blurs[i].style.backgroundPositionY = "-" + (- 100 + blurs[i].offsetParent.offsetTop + blurs[i].offsetTop) + "px";
            }
            blurs[i].style.backgroundPositionX = "-" + (blurs[i].offsetParent.offsetLeft + 3) + "px";
        };
    </script>
@stop
