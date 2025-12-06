<?php
// Include DB connection
include "../config/db.php";

// Handle Form Submit
if (isset($_POST['submit'])) {

    $course_title = $_POST['course_title'];
    $course_category = $_POST['course_category'];
    $institute_name = $_POST['institute_name'];
    $ratings = $_POST['ratings'];
    $total_ratings = $_POST['total_ratings'];
    $students_enrolled = $_POST['students_enrolled'];
    $price = $_POST['price'];

    // --- Banner Image Upload ---
    $banner_image = "";
    if (!empty($_FILES['banner_image']['name'])) {
        $banner_name = time() . "_" . basename($_FILES["banner_image"]["name"]);
        $target_banner = "uploads/banner/" . $banner_name;

        if (move_uploaded_file($_FILES["banner_image"]["tmp_name"], $target_banner)) {
            $banner_image = $target_banner;
        }
    }

    // --- Institute Image Upload ---
    $institute_image = "";
    if (!empty($_FILES['institute_image']['name'])) {
        $inst_name = time() . "_" . basename($_FILES["institute_image"]["name"]);
        $target_inst = "uploads/institute/" . $inst_name;

        if (move_uploaded_file($_FILES["institute_image"]["tmp_name"], $target_inst)) {
            $institute_image = $target_inst;
        }
    }

    // Insert Query
    $sql = "INSERT INTO courses 
            (course_title, course_category, institute_name, banner_image, institute_image, 
             ratings, total_ratings, students_enrolled, price)
            VALUES 
            ('$course_title', '$course_category', '$institute_name', 
            '$banner_image', '$institute_image', '$ratings', '$total_ratings', 
            '$students_enrolled', '$price')";

    if ($conn->query($sql)) {
        echo "<script>alert('Course added successfully!'); window.location='add_course.php';</script>";
    } else {
        echo "<script>alert('Error: Failed to add course');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-3xl mx-auto bg-white p-8 mt-10 rounded-xl shadow-lg">

    <h2 class="text-3xl font-bold mb-6 text-emerald-700">Add New Course</h2>

    <form action="" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 gap-6">

        <div>
            <label class="font-semibold">Course Title</label>
            <input type="text" name="course_title" required class="w-full border p-2 rounded">
        </div>

        <div>
            <label class="font-semibold">Course Category</label>
            <input type="text" name="course_category" required class="w-full border p-2 rounded">
        </div>

        <div>
            <label class="font-semibold">Institute Name</label>
            <input type="text" name="institute_name" required class="w-full border p-2 rounded">
        </div>

        <div>
            <label class="font-semibold">Banner Image</label>
            <input type="file" name="banner_image" required class="w-full border p-2 rounded bg-white">
        </div>

        <div>
            <label class="font-semibold">Institute Image</label>
            <input type="file" name="institute_image" required class="w-full border p-2 rounded bg-white">
        </div>

        <div class="grid grid-cols-3 gap-4">
            <div>
                <label class="font-semibold">Ratings</label>
                <input type="number" step="0.1" max="5" min="0" name="ratings" required class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="font-semibold">Total Ratings</label>
                <input type="number" name="total_ratings" required class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="font-semibold">Students Enrolled</label>
                <input type="number" name="students_enrolled" required class="w-full border p-2 rounded">
            </div>
        </div>

        <div>
            <label class="font-semibold">Price</label>
            <input type="text" name="price" required class="w-full border p-2 rounded" placeholder="Free OR ₹5000">
        </div>

        <button type="submit" name="submit" 
                class="bg-emerald-600 hover:bg-emerald-700 text-white py-3 rounded-lg text-lg font-semibold">
            Add Course
        </button>
    </form>

</div>

</body>
</html>
