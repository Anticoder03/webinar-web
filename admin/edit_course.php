<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

include "_Nav.php";
include "../config/db.php";

// Fetch course
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $course = $conn->query("SELECT * FROM courses WHERE course_id = $id")->fetch_assoc();
}

if (!$course) {
    die("<h2 class='text-center text-red-600 mt-10'>Course not found!</h2>");
}

// Update logic
if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $category = $_POST['category'];
    $institute_name = $_POST['institute_name'];
    $ratings = $_POST['ratings'];
    $total_ratings = $_POST['total_ratings'];
    $students_enrolled = $_POST['students_enrolled'];
    $price = $_POST['price'];

    // ------- Banner Image -------
    $banner_image = $course['banner_image'];
    if (!empty($_FILES['banner_image']['name'])) {

        if (!empty($course['banner_image']) && file_exists($course['banner_image'])) {
            unlink($course['banner_image']);
        }

        $fileName = time() . "_" . basename($_FILES["banner_image"]["name"]);
        $target = "uploads/banner/" . $fileName;

        if (move_uploaded_file($_FILES["banner_image"]["tmp_name"], $target)) {
            $banner_image = $target;
        }
    }

    // ------- Institute Image -------
    $institute_image = $course['institute_image'];
    if (!empty($_FILES['institute_image']['name'])) {

        if (!empty($course['institute_image']) && file_exists($course['institute_image'])) {
            unlink($course['institute_image']);
        }

        $fileName = time() . "_" . basename($_FILES["institute_image"]["name"]);
        $target = "uploads/institute/" . $fileName;

        if (move_uploaded_file($_FILES["institute_image"]["tmp_name"], $target)) {
            $institute_image = $target;
        }
    }

    // Update query
    $sql = "UPDATE courses SET 
                course_title = '$title',
                course_category = '$category',
                institute_name = '$institute_name',
                banner_image = '$banner_image',
                institute_image = '$institute_image',
                ratings = '$ratings',
                total_ratings = '$total_ratings',
                students_enrolled = '$students_enrolled',
                price = '$price'
            WHERE course_id = $id";

    if ($conn->query($sql)) {
        echo "<script>alert('Course updated successfully!'); window.location='see_courses.php';</script>";
    } else {
        echo "<script>alert('Failed to update course');</script>";
    }
}
?>

<script src="https://cdn.tailwindcss.com"></script>

<div class="max-w-3xl mx-auto bg-white p-8 mt-10 rounded-xl shadow-lg">
    <h2 class="text-3xl font-bold mb-6 text-blue-600">Edit Course</h2>

    <form action="" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 gap-6">

        <div>
            <label class="font-semibold">Course Title</label>
            <input type="text" name="title" value="<?php echo $course['course_title']; ?>" required class="w-full border p-3 rounded-lg">
        </div>

        <div>
            <label class="font-semibold">Category</label>
            <input type="text" name="category" value="<?php echo $course['course_category']; ?>" required class="w-full border p-3 rounded-lg">
        </div>

        <div>
            <label class="font-semibold">Institute Name</label>
            <input type="text" name="institute_name" value="<?php echo $course['institute_name']; ?>" required class="w-full border p-3 rounded-lg">
        </div>

        <div>
            <label class="font-semibold">Current Banner</label><br>
            <img src="<?php echo $course['banner_image']; ?>" class="w-32 h-20 object-cover rounded mb-2 shadow">
            <input type="file" name="banner_image" class="w-full border p-3 bg-white rounded-lg">
        </div>

        <div>
            <label class="font-semibold">Current Institute Image</label><br>
            <img src="<?php echo $course['institute_image']; ?>" class="w-16 h-16 rounded-full object-cover mb-2 shadow">
            <input type="file" name="institute_image" class="w-full border p-3 bg-white rounded-lg">
        </div>

        <div class="grid grid-cols-3 gap-4">

            <div>
                <label class="font-semibold">Ratings</label>
                <input type="number" step="0.1" max="5" min="0"
                       name="ratings" value="<?php echo $course['ratings']; ?>"
                       class="w-full border p-3 rounded-lg">
            </div>

            <div>
                <label class="font-semibold">Total Ratings</label>
                <input type="number" name="total_ratings"
                       value="<?php echo $course['total_ratings']; ?>"
                       class="w-full border p-3 rounded-lg">
            </div>

            <div>
                <label class="font-semibold">Students</label>
                <input type="number" name="students_enrolled"
                       value="<?php echo $course['students_enrolled']; ?>"
                       class="w-full border p-3 rounded-lg">
            </div>

        </div>

        <div>
            <label class="font-semibold">Price</label>
            <input type="text" name="price" value="<?php echo $course['price']; ?>" class="w-full border p-3 rounded-lg">
        </div>

        <button type="submit" name="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg text-lg font-semibold">
            Update Course
        </button>

    </form>
</div>

<?php include "_Footer.php"; ?>
