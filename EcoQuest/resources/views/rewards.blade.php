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
    <body>
        <main>
            <nav>
                <a href="{{ url('/') }}">HOME</a>
                <a href="{{ url('/leaderboard') }}" class="active">LEADERBOARD</a>
                <a href="{{ url('/activities') }}">ACTIVITY</a>
                <a href="{{ url('/login') }}">LOG IN</a>
                <a href="{{url('/rewards')}}">REWARDS</a>
            </nav>
            <h1 class="page-title">EcoQuest</h1>
            <div class = "rewards-section">
            <h1>Rewards</h1>
            <p>Exchange your points for rewards!</p>
            <p>You currently have: {{ auth()->user()->score }} points</p>
            <div class = "display-rewards">
                @foreach ($reward as $rewards)
                    <p class = "reward-name">{{$reward['reward_name']}}</p>
                    <p class = "reward-image"><img src = "{{url($reward->reward_image . 'jpg')}}"></p>
                    <p class = "reward-price">{{$reward['score']}}</p>
                @endforeach
            </div>
            </main>
    </body>
</html>