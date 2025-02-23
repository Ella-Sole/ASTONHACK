<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Activity</title>
    <link rel="stylesheet" href="<?php echo e(asset('/activities.css')); ?>">
</head>
<body>
<nav>
                  <img src="<?php echo e(asset('images/LogoNoBG1.png')); ?>" alt="Logo" id="LogoInHeader">
                <a href="<?php echo e(url('/')); ?>">HOME</a>
                <a href="<?php echo e(url('/leaderboard')); ?>" class="active">LEADERBOARD</a>
                <a href="<?php echo e(url('/activities')); ?>">ACTIVITY</a>
                <a href="<?php echo e(url('/login')); ?>">LOG IN</a>
                <a href="<?php echo e(url('/rewards')); ?>">REWARDS</a>
            </nav>
    <h1 id="maintitle">Log Your Eco-Friendly Activities</h1>
    <div id="logger">
        <div class="images">
            <figure id="T">
                <img class="icon" src="./PlantTree.png">
                <figcaption>Planted A Tree</figcaption>
            </figure>
            <div><button id="Tree" type="button" hidden> Log Activity</button></div>
            <figure id="L">
                <img class="icon" src="./Litter.png">
                <figcaption>Picked Up litter</figcaption>
            </figure>
            <div id="Confirm"><button id="Litter" type="button" hidden> Log Activity</button></div>
            <figure id="R">
                <img class="icon" src="./Recycle.png">
                <figcaption>Recycled</figcaption>
            </figure>
            <div id="Confirm"><button id="Recycled" type="button" hidden> Log Activity</button></div>
            <figure id="P">
                <img class="icon" src="./bus.png">
                <figcaption>Took Public Transport</figcaption>
            </figure>
            <div id="Confirm"><button id="Transport" type="button" hidden> Log Activity</button></div>
            <figure id="A">
                <img class="icon" src="./Apple.png">
                <figcaption>Grew Veg</figcaption>
            </figure>
            <div id="Confirm"><button id="Veg" type="button" hidden> Log Activity</button></div>
        </div>
    </div>
    <div id="form">
        <input id="GrowTree">
        <input id="PickedLitter">
        <input id="Recycled">
        <input id="PublicTransport">
        <input id="GrewVeg">
        <input type="Submit">
    </div>
    
    <div id="extraInfo">
        <h2>Did You Know?</h2>
        <p>Exercise improves brain function: Exercise increases blood flow to the brain, which can help with focus and concentration. It can also increase the size of the hippocampus, which is the part of the brain that controls memory. 
        </p>
    </div>
    <script src="<?php echo e(asset('/activities.js')); ?>"></script>
</body>
</html<?php /**PATH C:\xampp\htdocs\EcoQuest\resources\views/activities.blade.php ENDPATH**/ ?>