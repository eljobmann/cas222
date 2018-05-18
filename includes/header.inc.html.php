<?php define('BASE_URL', '/cas222/template/'); ?>

<header>

    
    <nav class="site-nav">

        <div class="menu-toggle">
            <div class="hamburger"></div>
        </div>

        <ul class="open desktop">
            <li><a href="<?php echo BASE_URL; ?>">Home</a></li>
            <li><a href="<?php echo BASE_URL; ?>events">Event Details</a></li>
            <li><a href="<?php echo BASE_URL; ?>register">Registration</a></li>
            <li><a href="<?php echo BASE_URL; ?>FAQ">FAQ</a></li>
            <li><a href="<?php echo BASE_URL; ?>contact">Contact</a></li>
        </ul>
    </nav>
</header>

<!--  nav {
        float: right;
        padding: 5 px;
        margin: 1%;
    }

    a:hover#menu-icon {
        background-color: #444;
        border-radius: 4px 4px 0 0;
    }

    nav ul {
        list-style: none;
    }

    nav li {
        display: inline-block;
        padding: 10px;
    }

    .current {
        color: white;
    }
Extra CSS from stylesheet (from different hamburger menu)-->