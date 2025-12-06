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

    <h1 class="text-3xl font-bold text-gray-900 mb-6">All Events</h1>

    <!-- Events Table -->
    <div class="overflow-x-auto bg-white shadow rounded-xl">
        <table class="min-w-full text-left border-collapse">

            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="p-4 font-semibold text-gray-700">#</th>
                    <th class="p-4 font-semibold text-gray-700">Banner</th>
                    <th class="p-4 font-semibold text-gray-700">Title</th>
                    <th class="p-4 font-semibold text-gray-700">Speaker</th>
                    <th class="p-4 font-semibold text-gray-700">Date</th>
                    <th class="p-4 font-semibold text-gray-700">Time</th>
                    <th class="p-4 font-semibold text-gray-700">G-Form</th>
                    <th class="p-4 font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>

            <tbody>

                <?php
                $sql = "SELECT * FROM events ORDER BY event_date ASC";
                $result = $conn->query($sql);
                $i = 1;

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>

                <tr class="border-b hover:bg-gray-50 transition">
                    <td class="p-4"><?php echo $i++; ?></td>

                    <!-- Banner Image -->
                    <td class="p-4">
                        <img src="./<?php echo $row['event_banner']; ?>" 
                             class="w-24 h-16 object-cover rounded shadow">
                    </td>

                    <!-- Title -->
                    <td class="p-4 font-medium">
                        <?php echo $row['title']; ?>
                    </td>

                    <!-- Speaker -->
                    <td class="p-4 flex items-center gap-3">
                        <img src="./<?php echo $row['speaker_image']; ?>" 
                             class="w-10 h-10 rounded-full object-cover shadow">
                        <span><?php echo $row['speaker_name']; ?></span>
                    </td>

                    <!-- Event Date -->
                    <td class="p-4">
                        <?php echo date("d M Y", strtotime($row['event_date'])); ?>
                    </td>

                    <!-- Event Time -->
                    <td class="p-4">
                        <?php echo $row['event_time'] ?: "<span class='text-gray-400'>—</span>"; ?>
                    </td>

                    <!-- Google Form -->
                    <td class="p-4">
                        <?php if (!empty($row['g_form'])) { ?>
                            <a href="<?php echo $row['g_form']; ?>" target="_blank" 
                               class="text-blue-600 underline hover:text-blue-800">
                                Open →
                            </a>
                        <?php } else { ?>
                            <span class="text-gray-400">N/A</span>
                        <?php } ?>
                    </td>

                    <!-- Actions -->
                    <td class="p-4 space-x-3">
                        <a href="edit_event.php?id=<?php echo $row['event_id']; ?>"
                           class="px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                           Edit
                        </a>

                        <a href="delete_event.php?id=<?php echo $row['event_id']; ?>"
                           onclick="return confirm('Are you sure you want to delete this event?');"
                           class="px-3 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                           Delete
                        </a>
                    </td>
                </tr>

                <?php
                    }
                } else {
                    echo "<tr><td colspan='8' class='p-6 text-center text-gray-500'>
                            No events found.
                          </td></tr>";
                }
                ?>

            </tbody>

        </table>
    </div>

</div>

<?php include "_Footer.php"; ?>
