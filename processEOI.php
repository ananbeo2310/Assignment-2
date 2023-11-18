<?php
require_once "settings.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $jobReference = $_POST["job_reference"];

    $firstName = $_POST["first_name"];

    $lastName = $_POST["last_name"];

    $streetAddress = $_POST["street_address"];

    $suburbTown = $_POST["suburb_town"];

    $state = $_POST["state"];
    
    $postcode = $_POST["postcode"];

    $emailAddress = $_POST["email_address"];

    $phoneNumber = $_POST["phone_number"];

    $skill1 = $_POST["skill1"];

    $skill2 = $_POST["skill2"];

    $skill3 = $_POST["skill3"];

    $otherSkills = $_POST["other_skills"];

}
?>