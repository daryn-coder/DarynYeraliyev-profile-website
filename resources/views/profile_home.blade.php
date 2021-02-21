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
            background-color: #00FFFF;
        }
        .container{
            z-index: 2;
            box-shadow: 5px 10px rgb(0, 0, 0,0.4);
            width: 80%;
            height: 500px;
            margin: 6% auto;
            background-color: white;
            
        }
        .img{
            width: 50%;
        }
        .ind{
            display: inline;
            float: right;
            display: block;
            width: 50%;
        }
        .menu{
            color: #4B0082;
            padding-top: 5%;
            font-size: 20px;
            display: flex;
            justify-content: space-around;
            cursor: pointer;
        }
        .menu-content{
            color: indigo;
            text-decoration: none;
        }
        .menu-content:hover{
            font-size: 25px;
            color: #FF69B4;
        }
        .bio{
            
            padding-top: 10%;
        }
        .bio h1{
            text-align: center;
        }
        .img{
            position: absolute;
            top: 30px;
            left: 200px;
            z-index: 3;
            box-shadow: inset;
            width: 350px;
        }
        img{
            width: 100%;
            height: 600px;
        }
    </style>
</head>
<body>
    <div class="img">
       <img src="{{ asset('img/Daryn.jpg') }}" alt="Daryn">
    </div>
    <div class="container">
        
        <div class="ind">
            <div class="menu">
                <a href="{{ route('profile_home') }}" class="menu-content">Home</a>
                <a href="{{ route('profile_about') }}" class="menu-content">About Us</a>
                <a href="{{ route('profile_contact') }}" class="menu-content">Contact</a>
            </div>
            <div class="bio">
                <h1>Daryn Yeraliyev</h1>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    At dolore sint quidem nostrum numquam veniam pariatur aut 
                    voluptates in similique optio asperiores magni earum ab ipsum,
                    eum, perspiciatis, alias repellendus?
                </p>
                <button class="btn btn-info">More Info</button>
            </div>
        </div>
    </div>
</body>
</html>