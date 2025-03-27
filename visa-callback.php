<?php


include_once "config/function.php";
include_once "config/config.php";
session_start();

$loggedIn = false;
if (!empty($_SESSION["sdtravels_user"])) {
    $loggedIn = true;
    $uid = $_SESSION["sdtravels_user"];
}

// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if (confirmTransaction($_GET["trxref"])) {
    // echo "<pre>";
    // var_dump($_SESSION["visa_application"]);
    // echo "</pre>";

    // try {
    $data = $_SESSION['visa_application'];

    // echo "<pre>";
    // var_dump($data);
    // echo "</pre>";

    $fullname = $data['fullname'];
    $dob = $data['dob'];
    $pob = $data['pob'];
    $gender = $data['gender'];
    $nationality = $data['nationality'];
    $phone = $data['phone'];
    $email = $data['email'];
    $destin_country = $data['destin_country'];
    $visa_type = $data['visa_type'];
    $entry_date = $data['entry_date'];
    $exit_date = $data['exit_date'];
    $purpose_visit = $data['purpose_visit'];
    $occupation = $data['occupation'];
    $employer = $data['employer'];
    $income = $data['income'];
    $passport_num = $data['passport_num'];
    $passport_issue = $data['passport_issue'];
    $passport_exp = $data['passport_exp'];
    $sponsor_name = $data['sponsor_name'];
    $sponsor_relationship = $data['sponsor_relationship'];

    $applicantID = uniqid();

    $passport_scan = "";
    $bank_statement = "";
    $sponsor_letter = "";
    $medical_certificate = "";
    $police_clearance = "";

    // Move uploaded files to final directory
    if (!empty($data["files"])) {

        $final_upload_dir = "uploads/visa_documents/";
        if (!is_dir($final_upload_dir)) {
            mkdir($final_upload_dir, 0777, true);
        }

        $final_files = [];
        foreach ($data['files'] as $key => $temp_path) {
            $new_path = $final_upload_dir . basename($temp_path);
            rename($temp_path, $new_path); // Move file to permanent location
            $final_files[$key] = $new_path; // Save final path
        }

        $passport_scan = $final_files["passport_scan"] ?? "";
        $bank_statement = $final_files["bank_statement"] ?? "";
        $sponsor_letter = $final_files["sponsor_letter"] ?? "";
        $medical_certificate = $final_files["medical_certificate"] ?? "";
        $police_clearance = $final_files["police_clearance"] ?? "";
    }

    $certificates = [];
    $cert = "";
    if (!empty($data['certificates'])) {
        foreach ($data['certificates'] as $key => $temp_path) {
            $new_path = $final_upload_dir . basename($temp_path);
            rename($temp_path, $new_path);
            $certificates[] = $new_path;
        }
        $cert = json_encode($certificates) ?? "";
    }


    // Start transaction
    // $begin = mysqli_begin_transaction($conn, name: "visa");
    // var_dump($begin);

    // 1️⃣ Insert into applicants table

    $applicant_query = mysqli_query($conn, "INSERT INTO `applicants` (`applicationid`, `userid`, `full_name`, `dob`, `place_of_birth`, `gender`, `nationality`, `phone`, `email`) 
        VALUES ('$applicantID', '$uid', '$fullname', '$dob', '$pob', '$gender', '$nationality', '$phone', '$email')");
    if (!$applicant_query) throw new Exception("Applicant prep failed: " . mysqli_error($conn));
    $applicant_id = mysqli_insert_id($conn);
    // var_dump($applicant_query);

    // 2️⃣ Insert into passports table
    $sql = "INSERT INTO `passports` (`applicant_id`, `passport_number`, `issue_date`, `expiry_date`, `passport_scan`) 
                VALUES ('$applicant_id', '$passport_num', '$passport_issue', '$passport_exp', '$passport_scan')";
    $passports_query = mysqli_query($conn, $sql);
    if (!$passports_query) throw new Exception("Passport prep failed: " . mysqli_error($conn));

    // insert into travel details table
    $sql = "INSERT INTO `travel_details` (`applicant_id`, `destination_country`, `visa_type`, `purpose`, `entry_date`, `exit_date`) 
                VALUES ('$applicant_id', '$destin_country', '$visa_type', '$purpose_visit', '$entry_date', '$exit_date')";
    $travel_details_query = mysqli_query($conn, $sql);
    if (!$travel_details_query) throw new Exception("Passport prep failed: " . mysqli_error($conn));


    // 3️⃣ Insert into employment table
    $sql = "INSERT INTO employment (applicant_id, employment_status, employer_name, monthly_income, bank_statement) 
                VALUES ('$applicant_id', '$occupation', '$employer', '$income', '$bank_statement')";
    $employment_query = mysqli_query($conn, $sql);
    if (!$employment_query) throw new Exception("Employment prep failed: " . mysqli_error($conn));


    // 4️⃣ Insert into sponsorship table (if applicable)
    if (!empty($data['sponsor_name'])) {
        $sql = "INSERT INTO sponsorships (applicant_id, sponsor_name, sponsor_relationship, sponsor_letter) 
                    VALUES ('$applicant_id', '$sponsor_name', '$sponsor_relationship', '$sponsor_letter')";
        $sponsorship_query = mysqli_query($conn, $sql);
        if (!$sponsorship_query) throw new Exception("Sponsor prep failed: " . mysqli_error($conn));
    }

    // 4️⃣ Insert into education table (if applicable)
    if (!empty($data['certificates'])) {
        $sql = "INSERT INTO `education` (`applicant_id`, `certificate_files`) 
                    VALUES ('$applicant_id', '$cert')";
        $education_query = mysqli_query($conn, $sql);
        if (!$education_query) throw new Exception("Certificates prep failed: " . mysqli_error($conn));
    }

    // 5️⃣ Insert into health & security table
    $sql = "INSERT INTO health_security (applicant_id, medical_certificate, police_clearance) 
                VALUES ('$applicant_id', '$medical_certificate', '$police_clearance')";
    $health_query = mysqli_query($conn, $sql);
    if (!$health_query) throw new Exception("Health security prep failed: " . mysqli_error($conn));

    unset($_SESSION['visa_application']);

    echo "<script>alert('Visa application submitted successfully!'); location.href = 'visa.php'</script>";

    if (mysqli_errno($conn) > 0) {
        echo "<script>alert('Error processing application: " . $e->getMessage() . "'); location.href = 'visa.php'</script>";
    }
    // } catch (Exception $e) {
    //     // mysqli_rollback($conn);
    //     echo "<script>alert('Error processing application: " . $e->getMessage() . "'); location.href = 'visa.php'</script>";
    // }
} else {
    echo "<script>alert('Payment not successful'); location.href = 'visa.php'</script>";
}
