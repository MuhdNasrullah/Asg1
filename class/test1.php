<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test1</title>
</head>
<body>
</html><div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <form method="POST" action="process_form.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="matric_number">Matric Number:</label>
        <input type="text" id="matric_number" name="matric_number" pattern="[0-9]{6}" required><br><br>

        <label for="phone_number">Phone Number:</label>
        <input type="tel" id="phone_number" name="phone_number" pattern="[0-9]{10}" required><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>

        <label for="kulliyah">Kulliyah:</label>
        <input type="text" id="kulliyah" name="kulliyah" required><br><br>

        <input type="submit" value="Submit">
    </form>
</div>
</body>
