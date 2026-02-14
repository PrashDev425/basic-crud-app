<?php require "../../database/connect.php"; ?>

<?php include "../../layout/header.php"; ?>

<?php
$totalStudents = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) as total_students FROM students")
)["total_students"];

$oldestStudent = mysqli_fetch_assoc(
    mysqli_query(
        $conn,
        "SELECT CONCAT(first_name,' ',last_name) as name, dob 
                         FROM students ORDER BY dob ASC LIMIT 1"
    )
);

$highestMarks = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT MAX(marks) as max_marks FROM students")
)["max_marks"];

$lowestMarks = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT MIN(marks) as min_marks FROM students")
)["min_marks"];

$studentsByMarks = mysqli_query(
    $conn,
    "SELECT * FROM students ORDER BY marks DESC"
);

$departmentCount = mysqli_query(
    $conn,
    "SELECT department, COUNT(*) AS total_students
     FROM students GROUP BY department"
);

$avgByDept = mysqli_query(
    $conn,
    "SELECT department, AVG(marks) AS avg_marks
     FROM students GROUP BY department"
);

$top3 = mysqli_query(
    $conn,
    "SELECT * FROM students ORDER BY marks DESC LIMIT 3"
);

$admissionYear = mysqli_query(
    $conn,
    "SELECT admission_year, COUNT(*) AS total_students
     FROM students GROUP BY admission_year"
);

$marksByGender = mysqli_query(
    $conn,
    "SELECT gender, SUM(marks) AS total_marks
     FROM students GROUP BY gender"
);

$passFail = mysqli_query(
    $conn,
    "SELECT CONCAT(first_name,' ',last_name) AS full_name,
     CASE WHEN marks >= 40 THEN 'Pass' ELSE 'Fail' END AS result
     FROM students"
);
?>

<main>
    <h5>Dashboard</h5>
    <section class="grid">
        <article>
            <h5>Total Students</h5>
            <h2><?php echo $totalStudents; ?></h2>
        </article>
        <article>
            <h5>Highest Marks</h5>
            <h2><?php echo $highestMarks; ?></h2>
        </article>
        <article>
            <h5>Lowest Marks</h5>
            <h2><?php echo $lowestMarks; ?></h2>
        </article>
        <article>
            <h5>Oldest Student</h5>
            <strong><?php echo $oldestStudent["name"]; ?></strong>
            <p>DOB: <?php echo $oldestStudent["dob"]; ?></p>
        </article>
    </section>
    <hr>
    <section class="grid">
        <article>
            <header>
                <h5>All Students (Highest Marks First)</h5>
            </header>
            <table role="grid">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Marks</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($studentsByMarks)): ?>
                        <tr>
                            <td><?php echo $row["first_name"] .
                                " " .
                                $row["last_name"]; ?></td>
                            <td><?php echo $row["department"]; ?></td>
                            <td><?php echo $row["marks"]; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </article>
        <article>
            <header>
                <h5>Total Students by Department</h5>
            </header>
            <table>
                <thead>
                    <tr>
                        <th>Department</th>
                        <th>Total Students</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($departmentCount)): ?>
                        <tr>
                            <td><?php echo $row["department"]; ?></td>
                            <td><?php echo $row["total_students"]; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </article>
    </section>

    <section class="grid">
        <article>
            <header>
                <h5>Average Marks by Department</h5>
            </header>
            <table>
                <thead>
                    <tr>
                        <th>Department</th>
                        <th>Average Marks</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($avgByDept)): ?>
                        <tr>
                            <td><?php echo $row["department"]; ?></td>
                            <td><?php echo round($row["avg_marks"], 2); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </article>
        <article>
            <header>
                <h5>Top 3 Students</h5>
            </header>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Marks</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($top3)): ?>
                        <tr>
                            <td><?php echo $row["first_name"] .
                                " " .
                                $row["last_name"]; ?></td>
                            <td><?php echo $row["marks"]; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </article>
    </section>
    <section class="grid">
        <article>
            <header>
                <h5>Students by Admission Year</h5>
            </header>
            <table>
                <thead>
                    <tr>
                        <th>Year</th>
                        <th>Total Students</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($admissionYear)): ?>
                        <tr>
                            <td><?php echo $row["admission_year"]; ?></td>
                            <td><?php echo $row["total_students"]; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </article>
        <article>
            <header>
                <h5>Total Marks by Gender</h5>
            </header>
            <table>
                <thead>
                    <tr>
                        <th>Gender</th>
                        <th>Total Marks</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($marksByGender)): ?>
                        <tr>
                            <td><?php echo $row["gender"]; ?></td>
                            <td><?php echo $row["total_marks"]; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </article>
    </section>
    <article>
        <header>
            <h5>Pass / Fail Result</h5>
        </header>
        <table>
            <thead>
                <tr>
                    <th>Student</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($passFail)): ?>
                    <tr>
                        <td><?php echo $row["full_name"]; ?></td>
                        <td><?php echo $row["result"]; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </article>
</main>


<?php include "../../layout/footer.php"; ?>