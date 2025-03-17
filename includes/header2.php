<div class="bg-slate-800 fixed z-50 top-0 left-0 w-full m-0 flex justify-between items-center text-white px-[5%] py-3 shadow-md">
    <a href="quiz.php" class="text-2xl font-bold">QuizApp</a>
    <div class="flex gap-2 items-center">
    <?php 
if (isset($_SESSION['user'])):
    $email = $_SESSION['user'];

    // Correct SQL query
    $query = $connect->query("SELECT * FROM users WHERE email='$email'");

    if ($query && $query->num_rows > 0) {
        $userData = $query->fetch_assoc();
        $username = $userData['name']; // Assuming 'name' column stores username
        
    } 

?>

        <h3 class="text-lg font-semibold border border-white rounded-xl px-3 py-1">Hello, <?= $username;?></h3>
        <?php endif;?>
        <a href="logout.php" class="bg-red-500 text-white font-semibold px-3 py-1 rounded hover:bg-red-600">Logout</a>
    </div>
</div>
