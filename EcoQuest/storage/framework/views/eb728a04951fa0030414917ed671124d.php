<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>EcoQuest: Leaderboard</title>
        <script src="<?php echo e(asset('/app.js')); ?>"></script>
        <link rel="stylesheet" href="<?php echo e(asset('/style.css')); ?>">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');
        </style>
    </head>
    <body class = "login-bg">
        <main>
            <nav>
                <a href="<?php echo e(url('/')); ?>">HOME</a>
                <a href="<?php echo e(url('/leaderboard')); ?>" class="active">LEADERBOARD</a>
                <a href="<?php echo e(url('/activities')); ?>">ACTIVITY</a>
                <a href="<?php echo e(url('/login')); ?>">LOG IN</a>
                <a href="<?php echo e(url('/rewards')); ?>">REWARDS</a>
            </nav>
            <h1 class="page-title">EcoQuest</h1>
            <div id="leaderboard">
    <h1>Leaderboard</h1>
    <ul id="scores-list">
        <!-- Scores will be dynamically added here -->
    </ul>


            </div>
        </main>
    </body>
</html><?php /**PATH C:\xampp\htdocs\EcoQuest\resources\views/leaderboard.blade.php ENDPATH**/ ?>