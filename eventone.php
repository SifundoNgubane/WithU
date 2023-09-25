

<head>
    <title>Event Description Page</title>
    <style>
        /* Add your custom CSS styles here */
        body {
            font-family: Arial, sans-serif;
            font-size: 15px;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            max-height: 800px;
            margin-top: 10px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            opacity: 0.8;
            border-radius: 15px 50px 30px;
        }

        h1 {
            color: #333;
            margin-top: 0;
        }

        p {
            line-height: 1.6;
        }

        .countdown {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 10px;
            margin: 2px 2px;
            cursor: pointer;
            border-radius: 15px;
        }
    </style>
</head>
<?php

include_once 'includes/header.php';
?>
<body>
   

    <div class="container">
        <h1 style="color:green"> WithU Career Expo</h1>
        <p>Date: August 28, 2023
            <br>Location:Bona Comprehensive School ,Soweto ,Johannesburg , 1723<br>Gauteng, South Africa</p>

        <h2 style="color:green">About the Event</h2>
        <p>The WithU Career Expo Outreach Programme in connection with the university of Johannesburg aims to connect students with industry professionals and students who are studying specific courses grade 12 students might be interested in and provide
            valuable insights into various career paths. This event serves as a platform for grade 12 students to explore potential career opportunities, gain industry knowledge, and network with leading industry professionals.
        </p>

        <h2 style="color:green">Agenda</h2>
        <ul>
            <li>10:00 AM - 11:00 AM: Opening Keynote</li>
            <li>11:15 AM - 12:15 AM: Panel Discussion</li>
            <li>12:30 AM - 13:30 PM: Networking Event</li>
            <li>13:30 PM - 14:30 PM: Lunch Break</li>
            <li>14:30 PM - 4:00 PM: Speaker Session</li>
        </ul>

        <h2 style="color:green">Registration</h2>
        <p>Register now to secure your spot!</p>
        <a href="registration.html" class="button">Register</a>

        <div class="countdown" id="countdown">
            <?php
            // Set the date and time of the event
            $eventDate = strtotime('August 28, 2023 00:00:00');
            $now = time();
            $distance = $eventDate - $now;

            if ($distance > 0) {
                // Calculate days, hours, minutes, and seconds
                $days = floor($distance / (60 * 60 * 24));
                $hours = floor(($distance % (60 * 60 * 24)) / (60 * 60));
                $minutes = floor(($distance % (60 * 60)) / (60));
                $seconds = floor($distance % 60);

                echo $days . 'd ' . $hours . 'h ' . $minutes . 'm ' . $seconds . 's';
            } else {
                echo 'Event has started!';
            }
            ?>
        </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/@widgetbot/crate@3" async defer>
  new Crate({
    server: '1136736554522521683',
    channel: '1136736555407511614'
    
  })
</script>


