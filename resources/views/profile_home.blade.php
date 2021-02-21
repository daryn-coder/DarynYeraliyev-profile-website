<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile page</title>
    <style>
        body{
            background-color: #00FFFF;
        }
        /* body */
        .container{
            width: 80%;
            height: 500px;
            margin: 6% auto;
            background-color: white;
            display: flex;
            flex-wrap: wrap;
        }
        .img{
            width: 50%;
        }
        .ind{
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
    </style>
</head>
<body>
    
    <div class="container">
        <div class="img">
            <img src="Daryn.jpg" alt="Daryn">
        </div>
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
            </div>
        </div>
    </div>
</body>
</html>