<!DOCTYPE html>

<html lang="en">

<head>
    <title>Homepage Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/slideshow.css">


</head>

<body>

    <?php include 'includes/header.inc.html.php'; ?>
    <!-- Content -->
    <aside>
        <h2>Insert Header here</h2>
        <p>This will be some text</p>

        <div>
            <center>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcas222cascade&tabs=timeline&width=300&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="200" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </center>
        </div>

        <img class="sidebar-img" src="images/logoAOne.jpg" alt="Ace in The Hole">

    </aside>
    <main>

        <!-- Slideshow -->

        <section id="slideshow" class="slideshow">
            <div id="photos">
                <img src="images/slideshow/fremontBridge2.png" class="show" alt="Portland, Oregon">
                <img src="images/slideshow/runnerAfro.jpg" alt="bridgePDX">
                <img src="images/slideshow/runnerCollage.jpg" alt="diversity">
                <img src="images/slideshow/waterPassing.jpg" alt="Cyclist">
                <img src="images/slideshow/genericSwimmer.jpg" alt="swimmer1">
                <img src="images/slideshow/cityRun2.jpg" alt="City Running 1">
                <img src="images/slideshow/cityBike3.jpg" alt="Hydration">
            </div>
            <a href="#" id="slideshow-left" class="slideshow-arrow"></a>
            <a href="#" id="slideshow-right" class="slideshow-arrow"></a>
        </section>

        <!---END SLIDESHOW---->

        <!--WELCOME MESSAGE -->
        <article>

            <section>
                <h1>Sample Text</h1>
                <p>Let your heart take you to wherever you want to be. We don't have anything but happy trees here. Here's something that's fun. I thought today we would make a happy little stream that's just running through the woods here. If you didn't have baby clouds, you wouldn't have big clouds.</p>
            </section>
            <section class="pictured">
                <img src="images/logoAOne.jpg">
            </section>
            <section class="stories">
                <h3>Sample Text</h3>
                <p>Let your heart take you to wherever you want to be. We don't have anything but happy trees here. Here's something that's fun. I thought today we would make a happy little stream that's just running through the woods here. If you didn't have baby clouds, you wouldn't have big clouds.</p>
                <br>
                <p>If there's two big trees invariably sooner or later there's gonna be a little tree. Just go back and put one little more happy tree in there. Only think about one thing at a time. Don't get greedy. From all of us here, I want to wish you happy painting and God bless, my friends. The only prerequisite is that it makes you happy. If it makes you happy then it's good.</p>
            </section>
        </article>

        <!-- Grid -->
        <section id="social">
            <div class="social">
                <center>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcas222cascade&tabs=timeline&width=300&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="200" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </center>
            </div>

            <div class="social">
                <h3>Find Out More!</h3>
                <ul>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <div class="social">
                <center>
                    <a class="twitter-timeline" data-width="200" data-height="250" data-dnt="true" data-theme="light" data-link-color="#FF0000" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </center>
            </div>
        </section>
    </main>

    <!-- Footer -->

    <?php include 'includes/footer.inc.html.php'; ?>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/script.js"></script>
    <script type="text/javascript" src="scripts/hamburger.js"></script>
</body>

</html>
