<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/style.css') }}">
</head>
<body>
    <header class="Heading">
        <nav>
                  <img src="{{ asset('images/LogoNoBG1.png') }}" alt="Logo" id="LogoInHeader">
                <a href="{{ url('/') }}">HOME</a>
                <a href="{{ url('/leaderboard') }}" class="active">LEADERBOARD</a>
                <a href="{{ url('/activities') }}">ACTIVITY</a>
                <a href="{{ url('/login') }}">LOG IN</a>
                <a href="{{ url('/rewards') }}">REWARDS</a>
            </nav>
    </header>

    <main>
    
        <section id="Intro">
            <img src="{{ asset('images/LeafDecorationsNoBG.png') }}" alt="LeafDecor" class="decor">

            <article>
                <h1> EcoQuest</h1>
                <p> Welcome to Eco Quest, the ultimate digital platform where saving the planet is as addictive as scrolling through cat videos !<br><br>
                    Are you tired of feeling guilty about your carbon footprint while binge-watching your favourite shows? Well, put down that plastic straw and strap in for an eco-adventure. Eco Quest is here to transform your daily grind into a heroic mission to rescue Mother Earth, with one bottle at a time. <br>
                    Here's the deal: you'll embark on a series of eco-friendly quests that are more exciting than watching grass grow (which, by the way, is great for carbon sequestration). From mastering the ancient art of composting to becoming a ninja of energy conservation, you'll rack up points faster than icebergs are melting. 
                </p>
            </article>
        </section>

        <section id="HowItWorks">
            <article>
                <h2> How It Works</h2>
            <ol>
                <li>Log your ECO friendly activities: every time you something good for Mother Earth, log it in the app. Forgot your reusable bag from Tesco's? No points for you! Remembered it? Cha-ching!</li>
                <li>Earn Those Sweet, Sweet Points, 
                    <ul>
                        <li>Composting your fruit peels : <b>5 Points</b></li>
                        <li>Cyrcling or walking to work instead of the bus:<b>20 Points</b></li>
                        <li>Wasting less food: <b>50 points</b></li>
                     </ul></li>
                <li>Watch Your Points Grow<br>Like a well-tended garden, your point total will flourish. Check the leader board to see how you stack up against other eco-warriors. Are you a sustainability seedling or a full-grown sequoia?                </li>
                <li>Reach Point Milestone:<br></li>
                <li> Cash in for Rewards:<br>Once you've accumulated enough points, trade them in for eco-friendly gift cards 
                    For every 1,000 points you get a 5 pound gift card !!
                    for every 10,000 points you get  a 50 pound gift card !!</li>
            </ol>
            </article>
            <img src="{{asset('images/LeafDecorationsNoBG.png')}}" alt="LeafDecor" class="decor2">

        </section>

        <section id="Innovation">
            <img src="{{asset('images/LeafDecorationsNoBG.png')}}" alt="LeafDecor" class="decor">

            <article>
                    <h3> Driving innovation  for a suistainable future for all</h3>

<p>Engaging Environmental Education: Eco Quest transforms complex environmental concepts into fun, interactive experiences, making it easier for users to learn and retain information about sustainability1.</p>

<p>Behaviour Change Catalyst: By gamifying eco-friendly actions, the website encourages users to adopt sustainable habits in their daily lives, potentially leading to significant positive environmental impact.</p>

<p>Increased Environmental Awareness: The platform raises awareness about various environmental issues, helping users understand the importance of sustainable practices.</p>

<p>Community Building: Eco Quest can create a community of environmentally conscious individuals, fostering collaboration and shared learning experiences.</p>

<p>Data Collection for Environmental Research: The platform can gather valuable data on user behavior and environmental impact, contributing to research and policy-making.</p>

<p>Cost-Effective Environmental website: As a digital platform, Eco Quest offers a cost-effective way to reach and educate a large audience about environmental issues.</p>


            </article>
        </section>

        <section id="LogActivity">            
            <h2>Driving Innovation for a sustainable future for all</h2>
    
            <article id="PointsDisplay">
                <div>
                    <h3>Your Number of Points:</h3>
                    <button id="points">0</button>
                </div>
                <img src="{{ asset('images/EnvironmentalPros.png') }}" alt="">

            </article>
            <img src="{{ asset('images/LeafDecorationsNoBG.png') }}" alt="LeafDecor" class="decor2">

        </section>


        <img src="{{ asset('images/LeafDecorationsNoBG.png') }}" alt="Logo" id="LogoInIntro">

    </main>



    
</body>
</html>