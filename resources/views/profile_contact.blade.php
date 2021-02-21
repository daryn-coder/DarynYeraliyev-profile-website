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
            margin:0 30%;
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
            <a href="{{ route('profile_home') }}" class="menu-content">Home</a>
            <a href="{{ route('profile_about') }}" class="menu-content">About Us</a>
            <a href="{{ route('profile_contact') }}" class="menu-content">Contact</a>
        </div>
        <h1>Contact Me</h1>
        <p>
            Got a question? I'd love to hear from you. Send me a message
            and I'll respond as soon as possible.
        </p>
        <form action="" class="form">
            <div class="div">
                <b>Name*</b>
                <input type="text" class="input">
            </div>
            <div class="div">
                <b>E-mail address*</b>
                <input type="email" class="input">
            </div>
            <div class="div">
                <b>Message</b>
                <textarea cols="25" rows="3" class="input"></textarea>
            </div>
            <div class="div">
                <button class="btn btn-outline-dark" type="submit">Send</button>
            </div>
        </form>
    </div>
</body>
</html>