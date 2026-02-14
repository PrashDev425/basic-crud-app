<?php
require "../../database/connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["first_name"];
    $lname = $_POST["last_name"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $dept = $_POST["department"];
    $year = $_POST["admission_year"];
    $marks = $_POST["marks"];

    $sql = "INSERT INTO students 
            (first_name, last_name, gender, dob, department, admission_year, marks)
            VALUES 
            ('$fname', '$lname', '$gender', '$dob', '$dept', '$year', '$marks')";

    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit;
}
?>

<?php include('../../layout/header.php'); ?>

<main>
    <h5>Add Student</h5>
    <form method="post">
        <input name="first_name" placeholder="First Name" required>
        <input name="last_name" placeholder="Last Name" required>
        <select name="gender" required>
            <option value="" disabled selected>Select Gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select>
        <input type="date" name="dob" required>
        <select name="department" required>
            <option value="" disabled selected>Select Department</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Business">Business</option>
            <option value="Engineering">Engineering</option>
            <option value="Arts">Arts</option>
        </select>
        <input type="number" name="admission_year" placeholder="Admission Year" min="1900" max="2100" step="1" required>
        <input type="number" name="marks" placeholder="Marks" min="0" max="100" required>
        <button>Add</button>
        <a href="controller/student" role="button" class="secondary">Cancel</a>
    </form>
</main>

<?php include('../../layout/footer.php'); ?>