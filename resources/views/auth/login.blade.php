<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel Login</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>

<div class="container-fluid">

    <div class="row">

        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading text-center">Admin Giriş</div>
                <div class="panel-body">
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
            <!-- Login Panel -->

        </div>
        <!-- /.col-->

    </div>
    <!-- /.row -->
</div>

</body>

</html>

