<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

include "_Nav.php";
include "../config/db.php";
?>

<script src="https://cdn.tailwindcss.com"></script>

<div class="max-w-7xl mx-auto px-6 py-10">

    <h1 class="text-3xl font-bold text-gray-900 mb-6">All Courses</h1>

    <!-- Courses Table -->
    <div class="overflow-x-auto bg-white shadow rounded-xl">
        <table class="min-w-full text-left border-collapse">

            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="p-4 font-semibold text-gray-700">#</th>
                    <th class="p-4 font-semibold text-gray-700">Banner</th>
                    <th class="p-4 font-semibold text-gray-700">Title</th>
                    <th class="p-4 font-semibold text-gray-700">Category</th>
                    <th class="p-4 font-semibold text-gray-700">Institute</th>
                    <th class="p-4 font-semibold text-gray-700">Ratings</th>
                    <th class="p-4 font-semibold text-gray-700">Students</th>
                    <th class="p-4 font-semibold text-gray-700">Price</th>
                    <th class="p-4 font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>

            <tbody>

                <?php
                $sql = "SELECT * FROM courses ORDER BY course_id DESC";
                $result = $conn->query($sql);
                $i = 1;

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>

                <tr class="border-b hover:bg-gray-50 transition">
                    <td class="p-4"><?php echo $i++; ?></td>

                    <td class="p-4">
                        <img src="./<?php echo $row['banner_image']; ?>" 
                             class="w-20 h-14 object-cover rounded shadow">
                    </td>

                    <td class="p-4 font-medium"><?php echo $row['course_title']; ?></td>

                    <td class="p-4 text-gray-700"><?php echo $row['course_category']; ?></td>

                    <td class="p-4 flex items-center gap-3">
                        <img src="./<?php echo $row['institute_image']; ?>" 
                             class="w-10 h-10 object-cover rounded-full shadow">
                        <span><?php echo $row['institute_name']; ?></span>
                    </td>

                    <td class="p-4">
                        ⭐ <?php echo $row['ratings']; ?> 
                        <span class="text-gray-500">(<?php echo $row['total_ratings']; ?>)</span>
                    </td>

                    <td class="p-4">
                        <?php echo $row['students_enrolled']; ?>
                    </td>

                    <td class="p-4 font-semibold text-emerald-600">
                        <?php echo $row['price']; ?>
                    </td>

                    <td class="p-4 space-x-3">

                        <a href="edit_course.php?id=<?php echo $row['course_id']; ?>"
                           class="px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                           Edit
                        </a>

                        <a href="delete_course.php?id=<?php echo $row['course_id']; ?>"
                           onclick="return confirm('Are you sure you want to delete this course?');"
                           class="px-3 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                           Delete
                        </a>

                    </td>
                </tr>

                <?php
                    }
                } else {
                    echo "<tr><td colspan='9' class='p-6 text-center text-gray-500'>No courses found.</td></tr>";
                }
                ?>

            </tbody>

        </table>
    </div>

</div>

<?php include "_Footer.php"; ?>
