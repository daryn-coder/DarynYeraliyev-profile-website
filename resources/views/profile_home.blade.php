<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('profile.css') }}">
</head>
<body>
    <div class="img">
       <img src="{{ asset('img/Daryn.jpg') }}" alt="Daryn">
    </div>
    <div class="container">
        
        <div class="ind">
            <div class="menu">
                <a href="{{ url('/profile-home/' . app()->getlocale()) }}" class="menu-content">{{__('lang.home')}}</a>
                <a href="{{ url('/profile-about/' . app()->getlocale()) }}" class="menu-content">{{__('lang.about')}}</a>
                <a href="{{ url('/profile-contact/' . app()->getlocale()) }}" class="menu-content">{{__('lang.contact')}}</a>
            </div>
            <div class="bio">
                <h1>Daryn Yeraliyev</h1>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    At dolore sint quidem nostrum numquam veniam pariatur aut 
                    voluptates in similique optio asperiores magni earum ab ipsum,
                    eum, perspiciatis, alias repellendus?
                </p>
                <button class="btn btn-info">{{__('lang.info')}}</button>
            </div>
        </div>
    </div>
</body>
</html>