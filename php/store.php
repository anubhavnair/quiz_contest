<?php
require_once ("config.php");

// Create table if not exist survey_answers
$sql = "CREATE TABLE IF NOT EXISTS survey_answers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    answer VARCHAR(255),
    user_type VARCHAR(255),
    organization VARCHAR(255),
    fname VARCHAR(255),
    lname VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(255),
    pincode VARCHAR(255),
    meet VARCHAR(255)
)";
$pdo->exec($sql);

// Retrieve POST data
$data = [
    'answer' => $_POST['answer'],
    'user_type' => $_POST['user_type'],
    'organization' => $_POST['organization'],
    'fname' => $_POST['fname'],
    'lname' => $_POST['lname'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
    'pincode' => $_POST['pincode'],
    'meet' => $_POST['meet'],
];

// Prepare SQL statement to prevent SQL injection
$sql = "INSERT INTO survey_answers (answer, user_type, organization, fname, lname, email, phone, pincode, meet) VALUES (:answer, :user_type, :organization, :fname, :lname, :email, :phone, :pincode, :meet)";
$stmt = $pdo->prepare($sql);

// Bind parameters to the prepared statement
$stmt->bindParam(':answer', $data['answer']);
$stmt->bindParam(':user_type', $data['user_type']);
$stmt->bindParam(':organization', $data['organization']);
$stmt->bindParam(':fname', $data['fname']);
$stmt->bindParam(':lname', $data['lname']);
$stmt->bindParam(':email', $data['email']);
$stmt->bindParam(':phone', $data['phone']);
$stmt->bindParam(':pincode', $data['pincode']);
$stmt->bindParam(':meet', $data['meet']);

// Execute the prepared statement
if ($stmt->execute()) {

    // Send email notification
     $to = 'pathideamultiskil@gmail.com';
    //$to = 'itsshemant566@gmail.com';
    $subject = 'New survey submission';
    $message = 'New survey submission received. Details below:' . "\r\n\r\n";
    foreach ($data as $key => $value) {
        $message .= $key . ': ' . $value . "\r\n";
    }
    $headers = 'From: askshopkeeper@example.com' . "\r\n" .
        'Reply-To: askshopkeeper@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    header("Location: ../success.php?success=Form submitted successfully");
} else {
    echo "Error: " . $stmt->errorInfo()[2];
}

