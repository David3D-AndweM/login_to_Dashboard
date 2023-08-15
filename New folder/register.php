<?php
$host = "db-mysql-nyc3-46237-do-user-14100452-0.b.db.ondigitalocean.com";
$port = "25060";
$dbname = "defaultdb";
$username = "doadmin";
$password = "AVNS_lVNp5mBoALOd93t2MvK";

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;sslmode=require", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = $_POST["username"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $email = $_POST["email"];
        $fullName = $_POST["fullName"];
        $town = $_POST["town"];
        $country = $_POST["country"];
        $phone = $_POST["phone"];
        $dob = $_POST["dob"];
        $bio = $_POST["bio"];

        // Check if the username already exists
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $existingUser = $stmt->fetch();

        if ($existingUser) {
            echo "Username already exists. Please choose a different username.";
        } else {
            // Create a new user in the database
            $stmt = $pdo->prepare("INSERT INTO users (username, password, email, full_name, town, country, phone, dob, bio) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$username, $password, $email, $fullName, $town, $country, $phone, $dob, $bio]);

            // Redirect to a success page
            header("Location: RegistrationSuccess.html");
            exit();
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
