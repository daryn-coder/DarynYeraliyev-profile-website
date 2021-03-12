<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new post</title>

    
</head>

<body>
    <form action="{{ route('add-post') }}" method="POST">
        @csrf
        <input name="Title" type="text" placeholder="Title">
        <textarea name="Body" cols="22" rows="5" placeholder="Body"></textarea>
        <button type="submit">Create</button>
    </form>
</body>

<style>
    input{
        display: block;
        margin-bottom: 1rem;
    }
    textarea{
        display: block;
        margin-bottom: 1rem;
    }
</style>

</html>