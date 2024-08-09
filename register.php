<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Student Registration</title>
</head>
<body>
<div class="card">
    <div class="heading">
        <img src="auf.png" alt="AUF Logo" style="width: 50px; vertical-align: middle; margin-right: 10px;">
        STUDENT REGISTRATION
    </div>
    <form action="summary.php" method="POST">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob">
        </div>

        <div class="form-group">
            <label for="sex">Sex:</label>
            <div class="radio-group">
                <input type="radio" id="male" name="sex" value="Male">Male
                <input type="radio" id="female" name="sex" value="Female">Female
            </div>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <textarea id="address" name="address"></textarea>
        </div>

        <div class="form-group">
            <label for="department">College Department:</label>
            <select id="department" name="department">
                <option value="Computer Science">Bachelor of Science in Information Technology</option>
                <option value="Engineering">Bachelor of Science in Computer Science</option>
                <option value="Business">Bachelor of Science in Multimedia Arts</option>
            </select>
        </div>

        <div class="form-group">
            <label for="program">Program:</label>
            <input type="text" id="program" name="program">
        </div>

        <div class="form-group">
            <label for="mobile">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile">
        </div>

        <div class="form-buttons">
            <button type="reset">Reset</button>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
