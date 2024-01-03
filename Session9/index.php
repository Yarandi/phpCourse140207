<?php

// Database Configuration
$host = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

// Create Connection
$conn = new mysqli($host, $username, $password, $database);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to Add a Contact
function addContact($name, $email, $phone) {
    global $conn;

    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $phone = mysqli_real_escape_string($conn, $phone);

    $sql = "INSERT INTO contacts (name, email, phone) VALUES ('$name', '$email', '$phone')";
    return $conn->query($sql);
}

// Function to Get All Contacts
function getContacts() {
    global $conn;

    $sql = "SELECT * FROM contacts";
    $result = $conn->query($sql);

    $contacts = [];

    while ($row = $result->fetch_assoc()) {
        $contacts[] = $row;
    }

    return $contacts;
}

// Function to Delete a Contact
function deleteContact($id) {
    global $conn;

    $sql = "DELETE FROM contacts WHERE id = $id";
    return $conn->query($sql);
}

// Function to Get a Contact by ID
function getContactById($id) {
    global $conn;

    $sql = "SELECT * FROM contacts WHERE id = $id";
    $result = $conn->query($sql);

    return $result->fetch_assoc();
}

// Function to Update a Contact
function updateContact($id, $name, $email, $phone) {
    global $conn;

    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $phone = mysqli_real_escape_string($conn, $phone);

    $sql = "UPDATE contacts SET name='$name', email='$email', phone='$phone' WHERE id = $id";
    return $conn->query($sql);
}

// Check if the form is submitted for adding or updating a contact
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if (empty($_POST['id'])) {
        addContact($name, $email, $phone);
    } else {
        $id = $_POST['id'];
        updateContact($id, $name, $email, $phone);
    }
}

// Check if the delete button is clicked
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    deleteContact($id);
}

// Get all contacts
$contacts = getContacts();

// Initialize variables for updating a contact
$updateId = '';
$updateName = '';
$updateEmail = '';
$updatePhone = '';

// Check if the update button is clicked
if (isset($_GET['edit'])) {
    $updateId = $_GET['edit'];
    $contact = getContactById($updateId);

    if ($contact) {
        $updateName = $contact['name'];
        $updateEmail = $contact['email'];
        $updatePhone = $contact['phone'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <!-- Your HTML content here -->

    <!-- Form for Adding and Updating Contacts -->
    <form action="index.php" method="post">
        <input type="hidden" name="id" value="<?php echo $updateId; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $updateName; ?>" required>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $updateEmail; ?>" required>
        <label for="phone">Phone:</label>
        <input type="tel" name="phone" value="<?php echo $updatePhone; ?>" required>
        <button type="submit" name="save">Save Contact</button>
    </form>

    <!-- Contact List -->
    <h3>Contact List</h3>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Display contacts here -->
            <?php
                foreach ($contacts as $contact) {
                    echo "<tr>";
                    echo "<td>{$contact['name']}</td>";
                    echo "<td>{$contact['email']}</td>";
                    echo "<td>{$contact['phone']}</td>";
                    echo "<td><a href='index.php?edit={$contact['id']}'>Edit</a> | <a href='index.php?delete={$contact['id']}'>Delete</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

</body>
</html>
