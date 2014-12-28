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
        function load()
        {
            if (window.innerWidth / window.innerHeight < 1.62866) {
                document.getElementsByTagName('body')[0].style.backgroundSize = 'cover';
            }
            console.log(blurs);
            for (var i = 0; i < blurs.length; i++) {
                if (window.innerWidth / window.innerHeight < 1.62866) {
                    blurs[i].style.backgroundSize = "auto " + window.innerHeight + "px";
                }
                else {
                    blurs[i].style.backgroundSize = window.innerWidth + "px auto";
                }
                if (i < 2) {
                    blurs[i].style.backgroundPosition = "-" + (blurs[i].offsetParent.offsetLeft + 3) + "px -" + (- 103 + blurs[i].offsetParent.offsetTop + blurs[i].offsetTop) + "px";
                }
                else {
                    blurs[i].style.backgroundPosition = "-" + (blurs[i].offsetParent.offsetLeft + 3) + "px -" + (- 100 + blurs[i].offsetParent.offsetTop + blurs[i].offsetTop) + "px";
                }
            };
        };
        function resize()
        {
            if (window.innerWidth / window.innerHeight < 1.62866) {
                document.getElementsByTagName('body')[0].style.backgroundSize = 'cover';
            }
            for (var i = 0; i < blurs.length; i++) {
                if (window.innerWidth / window.innerHeight < 1.62866) {
                    blurs[i].style.backgroundSize = "auto " + window.innerHeight + "px";
                }
                else {
                    blurs[i].style.backgroundSize = window.innerWidth + "px auto";
                }
                if (i < 2) {
                    blurs[i].style.backgroundPosition = "-" + (blurs[i].offsetParent.offsetLeft + 5) + "px -" + (- 115 + blurs[i].offsetParent.offsetTop + blurs[i].offsetTop) + "px";
                }
                else {
                    blurs[i].style.backgroundPosition = "-" + (blurs[i].offsetParent.offsetLeft + 5) + "px -" + (- 112 + blurs[i].offsetParent.offsetTop + blurs[i].offsetTop) + "px";
                }
            };
        };
        var blurs = document.querySelectorAll('span.blur');
        window.onresize = resize;

        load();
    </script>
@stop
