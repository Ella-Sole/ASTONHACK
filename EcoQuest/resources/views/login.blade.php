<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('/style.css') }}">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');
        </style>
</head>
<body class = "login-bg">
    <main>
    <nav>
                <a href="{{ url('/') }}">HOME</a>
                <a href="{{ url('/leaderboard') }}" class="active">LEADERBOARD</a>
                <a href="{{ url('/activities') }}">ACTIVITY</a>
                <a href="{{ url('/login') }}">LOG IN</a>
                <a href="{{url('/rewards')}}">REWARDS</a>
            </nav>
        <h1 class="page-title">EcoQuest</h1>
        <div id="form">
            <form id="SignIn" action="{{ route('loginUser') }}" method="POST">>
                @csrf
                <h2 id="mainheader">EcoQuest: Login</h2>
                    <div class="login-submit">
                        <label for="email-login" required></label>
                        <input name="email" placeholder="Email" type="email" id="email-login" required> <br>
                        <label for="password-enter"></label> <!--should be required when on login page-->
                        <input name="password" placeholder="Password" type="password" id="password" required> <br>
                    </div>

                    <div class="signup-submit" hidden>
                        <label for="email-signup"></label>
                        <input name="email1" placeholder="Email" type="email" id="email-signup"> <br>
                        <label for="password1"></label>
                        <input name="password1" placeholder="Password" type="password" id="password1"> <br>
                        <label for="password2"></label>
                        <input name="password2" placeholder=" Re-Enter Password" type="password" id="password2">
                    </div>
                <p id="hasaccount">Dont have an account yet?<button id="linktosignup" type="button"><u>Sign up here.</u></button></p>
                <p id="noaccount" hidden>Already Have an account?<button id="linktologin" type="button"><u>Login in here.</u></button></p>
                <button type="submit" id="submit">Submit</button>
            </form>
        </div>
    </main>
    <script src="{{ asset('/login.js') }}"></script>
</body>
</html>