<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
</head>
<body>
    @auth

    <p>Congrats, you are logged in!</p>
    <form action="/logout" method="POST">
        @csrf
        <button>Log out</button>
    </form>

    <div style="border: 3px solid black">
        <h2>Create a new post</h2>
        <form action="/create-post" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Post title">
            <textarea name="body" placeholder="Body Content..."></textarea>
            <button>Save Post</button>
        </form>
    </div>

    @else
    <div style="border: 3px solid black">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input type="text" name="name" placeholder="name">
            <input type="text" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <button>Register</button>
        </form>
    </div>

    <div style="border: 3px solid black">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="login-name" placeholder="name">
            <input type="password" name="login-password" placeholder="password">
            <button>Log In</button>
        </form>
    </div>
    
    @endauth

    
</body>
</html>