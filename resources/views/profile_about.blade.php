<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile page</title>
    <style>
        body{
            background: url('https://s3-us-west-2.amazonaws.com/uw-s3-cdn/wp-content/uploads/sites/6/2017/11/04133712/waterfall.jpg');
            background-color: rgba(0,0,0,0.4);
            background-blend-mode:darken;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .menu{
            
            color: red;
            margin-top: 5%;
            font-size: 20px;
            display: flex;
            justify-content: space-around;
            cursor: pointer;
        }
        .menu-content{
            padding: 5px;
            color: red;
            text-decoration: none;
        }
        .menu-content:hover{
            
            font-size: 25px;
            color: #FF69B4;
        }
        .container{
            margin: auto;
            width: 50%;
            align-content: center;
            text-align: center;
            color: aqua;
        }
    </style>
</head>
<body>
    <div class="menu">
        <a href="{{ url('/profile-home/' . app()->getlocale()) }}" class="menu-content">{{__('lang.home')}}</a>
        <a href="{{ url('/profile-about/' . app()->getlocale()) }}" class="menu-content">{{__('lang.about')}}</a>
        <a href="{{ url('/profile-contact/' . app()->getlocale()) }}" class="menu-content">{{__('lang.contact')}}</a>
    </div>
    <div class="container">
        <h1>{{__('lang.welcome')}}</h1>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae debitis doloribus pariatur harum sed? Ratione voluptates libero architecto, et blanditiis officia. Quisquam hic error alias officiis quia consequatur quidem quae.
        </p>
    </div>
</body>
</html>