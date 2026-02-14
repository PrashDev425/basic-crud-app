<?php
require "../../database/connect.php";
$result = mysqli_query($conn, "SELECT * FROM students ORDER BY student_id DESC");
?>

<?php include('../../layout/header.php'); ?>

<main>
    <a class="outline" href="controller/student/create.php" role="button">➕ Add Student</a>
    <hr>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Department</th>
                <th>Admission Year</th>
                <th>Marks</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['student_id'] ?></td>
                    <td><?php echo $row['first_name'] . " " . $row['last_name'] ?></td>
                    <td><?php echo $row['gender'] ?></td>
                    <td><?php echo $row['dob'] ?></td>
                    <td><?php echo $row['department'] ?></td>
                    <td><?php echo $row['admission_year'] ?></td>
                    <td><?php echo $row['marks'] ?></td>
                    <td>
                        <a class="outline" role="button"
                            href="controller/student/edit.php?id=<?php echo $row['student_id'] ?>">✏️ Edit</a>
                        <a class="outline" role="button"
                            href="controller/student/delete.php?id=<?php echo $row['student_id'] ?>"
                            onclick="return confirm('Delete student?')">❌ Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</main>

<?php include('../../layout/footer.php'); ?>