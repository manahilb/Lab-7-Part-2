<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>

    <?php
    if (isset($_POST["firstname"])) {
        $firstname = $_POST["firstname"];
    } else {
        $firstname = "";
    }

    if (isset($_POST["lastname"])) {
        $lastname = $_POST["lastname"];
    } else {
        $lastname = "";
    }

    if (isset($_POST["age"])) {
        $age = $_POST["age"];
    } else {
        $age = "";
    }

    if (isset($_POST["species"])) {
        $species = $_POST["species"];
    } else {
        $species = "";
    }

    if ($species == "M") {
        $species = "Human";
    } elseif ($species == "D") {
        $species = "Dwarf";
    } elseif ($species == "E") {
        $species = "Elf";
    } elseif ($species == "H") {
        $species = "Hobbit";
    }

    if (isset($_POST["food"])) {
        $food = $_POST["food"];
    } else {
        $food = "";
    }

    if (isset($_POST["partysize"])) {
        $partysize = $_POST["partysize"];
    } else {
        $partysize = "";
    }

    if (isset($_POST["bookday"])) {
        $date = $_POST["bookday"];
    } else {
        $date = "";
    }

    $tours = array();

    if (isset($_POST["accom"])) {
        $tours[] = "Accommodation";
    }

    if (isset($_POST["4day"])) {
        $tours[] = "Four-day tour";
    }

    if (isset($_POST["10day"])) {
        $tours[] = "Ten-day tour";
    }

    if (count($tours) > 0) {
        $booking = implode(" and ", $tours);
    } else {
        $booking = "No tour selected";
    }

    echo "<p>Welcome " . htmlspecialchars($firstname) . " " . htmlspecialchars($lastname) . "!</p>";
    echo "<p>You are now booked on the " . htmlspecialchars($booking) . "</p>";
    echo "<p>Species: " . htmlspecialchars($species) . "</p>";
    echo "<p>Age: " . htmlspecialchars($age) . "</p>";
    echo "<p>Meal Preference: " . htmlspecialchars($food) . "</p>";
    echo "<p>Date: " . htmlspecialchars($date) . "</p>";
    echo "<p>Number of travellers: " . htmlspecialchars($partysize) . "</p>";
    ?>
</body>
</html>
