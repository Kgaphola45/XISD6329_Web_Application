<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "myhmsdb");

if (isset($_POST['patsub1'])) {
    // Elder data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $medical_conditions = $_POST['medical_conditions'];
    $allergies = $_POST['allergies'];
    $current_medications = $_POST['current_medications'];
    $Care_Coordinator = $_POST['Care Coordinator'];
    $Nurse_contact = $_POST['Nurse_contact'];
    $special_needs = $_POST['special_needs'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Relative data
    $relative_first_name = $_POST['relative_first_name'];
    $relative_last_name = $_POST['relative_last_name'];
    $relative_gender = $_POST['relative_gender'];
    $relative_email = $_POST['relative_email'];
    $relative_physical_address = $_POST['relative_physical_address'];
    $relative_id_number = $_POST['relative_id_number'];
    $relative_relation = $_POST['relative_relation'];
    $relative_contact = $_POST['relative_contact'];
    $relative_emergency_contact = $_POST['relative_emergency_contact'];
    $relative_additional_notes = $_POST['relative_additional_notes'];

    if ($password == $cpassword) {
        // Insert elder data
        $query = "INSERT INTO patreg (fname, lname, dob, gender, address, contact, email, medical_conditions, allergies, current_medications, Care Coordinator, doctor_contact, special_needs, password, cpassword) 
                  VALUES ('$fname', '$lname', '$dob', '$gender', '$address', '$contact', '$email', '$medical_conditions', '$allergies', '$current_medications', '$Care_Coordinator', '$Nurse_contact', '$special_needs', '$password', '$cpassword')";
        $result = mysqli_query($con, $query);

        if ($result) {
            // Get the last inserted ID (pid)
            $pid = mysqli_insert_id($con);

            // Insert relative data
            $query2 = "INSERT INTO Relative_ToElderly (first_name, last_name, gender, email, physical_address, id_number, relation, contact, emergency_contact, additional_notes) 
                       VALUES ('$relative_first_name', '$relative_last_name', '$relative_gender', '$relative_email', '$relative_physical_address', '$relative_id_number', '$relative_relation', '$relative_contact', '$relative_emergency_contact', '$relative_additional_notes')";
            $result2 = mysqli_query($con, $query2);

            if ($result2) {
                $_SESSION['pid'] = $pid; 
                $_SESSION['username'] = $fname . " " . $lname;
                $_SESSION['fname'] = $fname;
                $_SESSION['lname'] = $lname;
                $_SESSION['gender'] = $gender;
                $_SESSION['contact'] = $contact;
                $_SESSION['email'] = $email;
                header("Location:admin-panel.php");
                exit();  
            } else {
                echo "Error inserting relative data: " . mysqli_error($con);
            }
        } else {
            echo "Error inserting elder data: " . mysqli_error($con);
        }
    } else {
        echo "Passwords do not match";
    }
}
?>

