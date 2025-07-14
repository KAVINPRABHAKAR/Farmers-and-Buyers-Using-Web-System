<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Register</title></head>
<body>
<h2>Register</h2>
<form method="POST">
    <input type="text" name="name" placeholder="Your Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <select name="role">
        <option value="farmer">Farmer</option>
        <option value="buyer">Buyer</option>
    </select><br>
    <button type="submit" name="submit">Register</button>
</form>
<?php
if (isset($_POST['submit'])) {
    $stmt = $conn->prepare("INSERT INTO users(name, email, password, role) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $_POST['name'], $_POST['email'], $_POST['password'], $_POST['role']);
    $stmt->execute();
    echo "✅ Registered successfully!";
}
?>
</body>
</html>
