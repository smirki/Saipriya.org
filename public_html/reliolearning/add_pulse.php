<?php
$password = "your_password";
if (isset($_POST['password']) && $_POST['password'] === $password) {
    // Display the form when the password is correct
?>
    <form action="save_pulse.php" method="post">
        <div class="mb-4">
            <label for="title" class="block mb-2">Title:</label>
            <input type="text" name="title" id="title" class="border border-gray-300 dark:border-gray-600 p-2 w-full dark:bg-gray-800 dark:text-white">
        </div>
        <div class="mb-4">
            <label for="content" class="block mb-2">Content:</label>
            <textarea name="content" id="content" rows="10" class="border border-gray-300 dark:border-gray-600 p-2 w-full dark:bg-gray-800 dark:text-white"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2">Save Pulse</button>
    </form>
<?php
} else {
    // Display the password form
?>
    <form action="index.php?page=add_pulse" method="post">
        <div class="mb-4">
            <label for="password" class="block mb-2">Password:</label>
            <input type="password" name="password" id="password" class="border border-gray-300 dark:border-gray-600 p-2 w-full dark:bg-gray-800 dark:text-white">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2">Submit</button>
    </form>
<?php
}
?>
