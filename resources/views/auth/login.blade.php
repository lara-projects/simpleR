@extends("auth.base")

@section("title")
Admin Paneli Giriş
@endsection

@section("content")

<div class="login-panel panel panel-default">
    <div class="panel-heading text-center">Admin Giriş</div>
    <div class="panel-body">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form role="form" action="{{ url('/auth/login') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <fieldset>
                <div class="form-group">
                    <input class="form-control" placeholder="E-mail adresiniz." name="email" type="email"
                           autofocus="">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Şifreniz." name="password" type="password">
                </div>
                <div class="checkbox">
                    <label>
                        <input name="remember" type="checkbox">Beni Hatırla
                    </label>
                </div>
                <div class="form-group">
                        <button type="submit" class="btn btn-primary">Oturum Aç</button>

                        <a class="btn btn-link" href="{{ url('/password/email') }}">Şifremi Unuttum</a>
                </div>
            </fieldset>
        </form>

    </div>
</div>

@endsection