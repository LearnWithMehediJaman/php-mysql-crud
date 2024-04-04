<?php
include('db.php');

$id = $_GET['id'];

if (isset($_POST['Submit'])) {
    if ($_POST['Submit'] == 'Update Student') {

        $name = $_POST['name'];
        $father = $_POST['father_name'];
        $mother = $_POST['mother_name'];
        $roll = $_POST['roll_no'];
        $phone = $_POST['phone'];

        $sql = "UPDATE students SET name = '$name', father_name = '$father', mother_name = '$mother', roll_no = '$roll', phone = '$phone' WHERE id = $id";

        $result = mysqli_query($connection, $sql);

        if($result) {
            echo '<div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
            <span class="font-medium">Success !</span> Student Updated.
          </div>';
        } else {
            echo '<div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <span class="font-medium">Error !</span> Failed to update student.
          </div>';
        }
    }
}

$sql = "SELECT * FROM students WHERE id = $id";
$result = mysqli_query($connection, $sql);
$student = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Edit</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body>
    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST" enctype="multipart/form-data" class="max-w-sm mx-auto">
        <div class="p-4 md:p-5 space-y-4">
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Student name</label>
                <input type="text" name="name" value="<?php echo $student['name']; ?>" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>

            <div class="mb-5">
                <label for="father_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Father's Name</label>
                <input type="text" name="father_name" value="<?php echo $student['father_name']; ?>" id="father_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>

            <div class="mb-5">
                <label for="mother_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mother's Name</label>
                <input type="text" name="mother_name" value="<?php echo $student['mother_name']; ?>" id="mother_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>

            <div class="mb-5">
                <label for="roll_no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Roll No</label>
                <input type="text" name="roll_no" value="<?php echo $student['roll_no']; ?>" id="roll_no" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>

            <div class="mb-5">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone No</label>
                <input type="text" name="phone" value="<?php echo $student['phone']; ?>" id="phone_no" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>
        </div>

        <!-- Modal footer -->
        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
            <input type="submit" name="Submit" value="Update Student" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <a href="index.php" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Back</a>
        </div>
    </form>
</body>

</html>