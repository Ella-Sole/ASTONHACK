<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>EcoQuest: Leaderboard</title>
        <script src="{{ asset('/app.js') }}"></script>
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
            <div id="leaderboard">
    <h1>Leaderboard</h1>
    <ul id="scores-list">
        <li>1: Sarah: 100</li>
        <li>2: joemama: 50</li>
        <li>3: EcoGrindset: 20</li>
        <!-- Scores will be dynamically added here -->
    </ul>


            </div>
        </main>
    </body>
</html>
