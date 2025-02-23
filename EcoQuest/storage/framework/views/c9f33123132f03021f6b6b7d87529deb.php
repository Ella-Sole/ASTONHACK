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
    <body>
        <main>
            <nav>
                <a href="<?php echo e(url('/')); ?>">HOME</a>
                <a href="<?php echo e(url('/leaderboard')); ?>" class="active">LEADERBOARD</a>
                <a href="<?php echo e(url('/activities')); ?>">ACTIVITY</a>
                <a href="<?php echo e(url('/login')); ?>">LOG IN</a>
                <a href="<?php echo e(url('/rewards')); ?>">REWARDS</a>
            </nav>
            <h1 class="page-title">EcoQuest</h1>
            <div class = "rewards-section">
            <h1>Rewards</h1>
            <p>Exchange your points for rewards!</p>
            <p>You currently have: <?php echo e(auth()->user()->score); ?> points</p>
            <div class = "display-rewards">
                <?php $__currentLoopData = $reward; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rewards): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p class = "reward-name"><?php echo e($reward['reward_name']); ?></p>
                    <p class = "reward-image"><img src = "<?php echo e(url($reward->reward_image . 'jpg')); ?>"></p>
                    <p class = "reward-price"><?php echo e($reward['score']); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            </main>
    </body>
</html><?php /**PATH C:\xampp\htdocs\EcoQuest\resources\views/rewards.blade.php ENDPATH**/ ?>