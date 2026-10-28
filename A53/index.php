<!DOCTYPE html>
<html>
<head>
    <title>Job Application Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
    <b>Job Portal</b>
    <a href="index.php">Home</a>
    <a href="index.php">Apply for Job</a>
    <a href="view.php">View Applications</a>
</div>

<div class="container">
    <h1>Job Application Form</h1>


    <form action="save.php" method="post">

        <div class="form-row">
            <div>
                <label>Full Name *</label>
                <input type="text" name="name" required>
            </div>

            <div>
                <label>Email *</label>
                <input type="email" name="email" required>
            </div>
        </div>

        <div class="form-row">
            <div>
                <label>Phone Number *</label>
                <input type="tel" name="phone"
                       pattern="[0-9+\-() ]{7,20}" required>
                <small>Enter your phone number.</small>
            </div>

            <div>
                <label>Qualification *</label>
                <select name="qualification" required>
                    <option value="">Select qualification</option>
                    <option>10th</option>
                    <option>12th</option>
                    <option>Diploma</option>
                    <option>BCA</option>
                    <option>MCA</option>
                    <option>Graduate</option>
                    <option>Post Graduate</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div>
                <label>Work Experience</label>
                <select name="experience">
                    <option>Fresher</option>
                    <option>1 Year</option>
                    <option>2 Years</option>
                    <option>3 Years</option>
                    <option>More than 3 Years</option>
                </select>
            </div>

            <div>
                <label>Job Position *</label>
                <select name="job_position" required>
                    <option value="">Select job position</option>
                    <option>Computer Operator</option>
                    <option>Office Assistant</option>
                    <option>Web Developer</option>
                    <option>PHP Developer</option>
                    <option>Data Entry Operator</option>
                </select>
            </div>
        </div>

        <label>Address</label>
        <textarea name="address" rows="4"></textarea>

        <button type="submit">Submit Application</button>
        <button type="reset" class="clear">Clear Form</button>

    </form>
</div>

</body>
</html>