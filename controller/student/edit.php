<?php
require "../../database/connect.php";

$id = isset($_GET["id"]) ? (int) $_GET["id"] : 0;
$student = null;

// Get student data
if ($id > 0) {
    $result = mysqli_query($conn, "SELECT * FROM students WHERE student_id = $id");
    $student = mysqli_fetch_assoc($result);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && $student) {

    $id = (int) $_POST["student_id"];
    $fname = trim($_POST["first_name"]);
    $lname = trim($_POST["last_name"]);
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $dept = trim($_POST["department"]);
    $year = $_POST["admission_year"];
    $marks = $_POST["marks"];

    $sql = "UPDATE students SET 
                first_name = '$fname',
                last_name = '$lname',
                gender = '$gender',
                dob = '$dob',
                department = '$dept',
                admission_year = '$year',
                marks = '$marks'
            WHERE student_id = $id";

    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit;
}
?>

<?php include('../../layout/header.php'); ?>

<main>
    <h5>Edit Student</h5>

    <?php if ($student): ?>

        <form method="post">
            <input type="hidden" name="student_id" value="<?php echo $student['student_id'] ?>">
            <input name="first_name" placeholder="First Name" value="<?php echo $student['first_name'] ?>" required>
            <input name="last_name" placeholder="Last Name" value="<?php echo $student['last_name'] ?>" required>
            <select name="gender" required>
                <option value="Male" <?php echo $student['gender'] == "Male" ? "selected" : "" ?>>Male</option>
                <option value="Female" <?php echo $student['gender'] == "Female" ? "selected" : "" ?>>Female</option>
                <option value="Other" <?php echo $student['gender'] == "Other" ? "selected" : "" ?>>Other</option>
            </select>
            <input type="date" name="dob" value="<?php echo $student['dob'] ?>" required>
            <select name="department" required>
                <option value="Computer Science" <?php echo $student['department'] == "Computer Science" ? "selected" : "" ?>>
                    Computer
                    Science</option>
                <option value="Business" <?php echo $student['department'] == "Business" ? "selected" : "" ?>>Business
                </option>
                <option value="Engineering" <?php echo $student['department'] == "Engineering" ? "selected" : "" ?>>
                    Engineering
                </option>
                <option value="Arts" <?php echo $student['department'] == "Arts" ? "selected" : "" ?>>Arts</option>
            </select>
            <input type="number" name="admission_year" placeholder="Admission Year"
                value="<?php echo $student['admission_year'] ?>" min="1900" max="2100" step="1" required>
            <input type="number" name="marks" placeholder="Marks" value="<?php echo $student['marks'] ?>" min="0" max="100"
                required>
            <button>Update</button>
            <a href="controller/student" role="button" class="secondary">Cancel</a>
        </form>

    <?php else: ?>

        <p style="color:red;">Student not found.</p>
        <a href="controller/student/">Back to list</a>

    <?php endif; ?>

</main>

<?php include('../../layout/footer.php'); ?>