<!DOCTYPE html>
<html>
    <head>
        <title>Register Form</title>
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    </head>
    <body>
        <div class="w3-card w3-margin w3-padding">
            <?php if (isset($_GET['error'])): ?>
                <div class= "w3-panel w3-red">
                    <p><?php echo $_GET['error']; ?></p>
                </div>
            <?php endif; ?>
            <h2>Register</h2>
            <form method="POST" action="register.php" class="w3-container" >
            <label class="w3-label w3-text-blue">First Name</label>
            <input type="w3-input w3-border" name="first_name"type="text">
            <br>
            <label class="w3-label w3-text-blue">Last Name</label>
            <input type="w3-input w3-border" name="last_name" type="text">
            <br>
            <label class="w3-label w3-text-blue" >Email</label>
            <input type="w3-input w3-border" name="email" type="text">
            <br>
            <label class="w3-label w3-text-blue">Location</label>
            <select class="w3-input w3-border">
                <option value="Location 1">Location 1</option>
                <option value="Location 2">Location 2</option>
                <option value="Location 3">Location 3</option>
            </select>
            <input type="w3-input w3-border"name="location" type="text">
            <br>
            <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>
