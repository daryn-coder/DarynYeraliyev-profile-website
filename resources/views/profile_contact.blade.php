<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        body{
            background-image: url('https://post.medicalnewstoday.com/wp-content/uploads/sites/3/2020/02/325466_1100-1100x628.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-color: rgba(0,0,0,0.4);
            background-blend-mode:darken;
        }
        .container{
            width: 40%;
            padding: 3%;
            background-color: yellow;
            margin: 2% auto;
            align-content: center;
        }
        .input{
            font-size: 20px;
            display: block;
        }
        .div{
            margin:0 25%;
            padding: 5px;
        }
        h1,p{
            text-align: center;
        }
        h1{
            color: red;
        }
        .menu{
            font-size: 20px;
            display: flex;
            justify-content: space-around;
            cursor: pointer;
        }
        .menu-content{
            padding: 5px;
            color: brown;
            text-decoration: none;
        }
        .menu-content:hover{
            
            font-size: 25px;
            color: #FF69B4;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="menu">
            <a href="{{ url('/profile-home/' . app()->getlocale()) }}" class="menu-content">{{__('lang.home')}}</a>
            <a href="{{ url('/profile-about/' . app()->getlocale()) }}" class="menu-content">{{__('lang.about')}}</a>
            <a href="{{ url('/profile-contact/' . app()->getlocale()) }}" class="menu-content">{{__('lang.contact')}}</a>
        </div>
        <h1>{{__('lang.mecontact')}}</h1>
        <p>
        {{__('lang.question')}}
        </p>
        <form action="" class="form">
            <div class="div">
                <b>{{__('lang.name')}}</b>
                <input type="text" class="input">
            </div>
            <div class="div">
                <b>{{__('lang.email')}}</b>
                <input type="email" class="input">
            </div>
            <div class="div">
                <b>{{__('lang.message')}}</b>
                <textarea cols="25" rows="3" class="input"></textarea>
            </div>
            <div class="div">
                <button class="btn btn-outline-dark" type="submit">{{__('lang.send')}}</button>
            </div>
        </form>
    </div>
</body>
</html>