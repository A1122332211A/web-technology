<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" content="the united states, route 70, kansas state">
    <?php
        include 'assets/inc/meta.php';
    ?>
    <title>Route 70</title>
</head>
<body>
    <header>
        <h1>Route 70</h1>
    </header>
    <?php
        include $php_component . 'navigation.php';
    ?>
    <main>
        <div>
            <h3>Route 70</h3>
            <img src='' id='icon' alt='car' onclick="right('icon');">
            <p>Route 70 connects the western and the eastern United States, crossing through Lawrence in Kansas State, and end at Baltimore in Maryland State.</p>
        </div>
        <div>
            <h3>Lawrence to Baltimore</h3>
            <p>Starting from Lawrence to the east coast, route 70 stretches eastwards through St. Louis to Baltimore, stretching through 1099 miles. The part of the road takes drivers 16 hours and 40 minutes, the time for taking rest not included. Drivers are required to pay tolls along the road. </p>
        </div>
        <div>
            <h3>Kansas City</h3>
            <p>Kansas City stretches across the Missouri River. The city resides in both the Missouri state and the Kansas state. The city area is approximately a thousand two hundred and twenty-five square miles. Kansas City International Airport is in the north of the city.</p>
        </div>
    </main>
    <footer>
        <?php
            include $php_component . 'citation_google_feb_24_2023.php';
        ?>
        <p>Google. (n.d.). [Google Maps directions for driving from Lawrence, Kansas, to Baltimore, Maryland]. Retrieved February 24, 2023, from https://www.google.com/maps/dir/Lawrence,+KS/Baltimore,+Maryland.</p>
    </footer>
</body>
</html>