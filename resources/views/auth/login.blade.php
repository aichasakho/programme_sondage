
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulaire de connexion</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
<style>
    body{
    background-color: #FFE4E1;
}

.registration-form{
	padding: 50px 0;
}

.registration-form form{
    background-color: #fff;
    max-width: 600px;
    margin: auto;
    padding: 50px 70px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .form-icon{
	text-align: center;
    background-color: #FFB6C1;
    border-radius: 50%;
    font-size: 40px;
    color: white;
    width: 100px;
    height: 100px;
    margin: auto;
    margin-bottom: 50px;
    line-height: 100px;
}

.registration-form .item{
	border-radius: 20px;
    margin-bottom: 25px;
    padding: 10px 20px;
}

.registration-form .create-account{
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    background-color: #FFB6C1;
    border: none;
    color: white;
    margin-top: 20px;
}








@media (max-width: 576px) {
    .registration-form form{
        padding: 50px 20px;
    }

    .registration-form .form-icon{
        width: 70px;
        height: 70px;
        font-size: 30px;
        line-height: 70px;
    }
}
</style>
</head>
<body>
    <div class="registration-form">
    <form method="POST" action="{{ route('login') }}">
        @csrf
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            
            <div class="form-group">
            <input type="email" class="form-control item" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
            <input type="password" class="form-control item" id="password" name="password" placeholder="Mot de pass">
            </div>

            <div class="flex items-center justify-end mt-4 ">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié?') }}
                    </a>
                @endif
            </div>
            
            <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Se souvenir de Moi') }}</span>
            </label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-block create-account" >Se Connecter</button><br>
                
                <div class="form-group">
                    <a class="btn btn-block create-account" href="{{ route('register') }}">
                        {{ __('Pas de compte? Inscrivez-vous' ) }}
                    </a>
                </div>
            </div>
            
        </form>
        
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        $(document).ready(function(){
        $('#birth-date').mask('00/00/0000');
        $('#phone-number').mask('0000-0000');
        })
    </script>


</body>
</html>




