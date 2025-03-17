<?php
include_once "config/connect.php";

if (!isset($_SESSION['question_index'])) $_SESSION['question_index'] = 0;
if (!isset($_SESSION['rank'])) $_SESSION['rank'] = 0;

if (!isset($_GET['quizName'])) {
    header("Location: quiz.php");
    exit();
}

$quizName = $_GET['quizName'];
$question_index = $_SESSION['question_index'];
$callquestion = $connect->query("SELECT * FROM question WHERE topic='$quizName' LIMIT 1 OFFSET $question_index");

if ($qus = $callquestion->fetch_array()) {
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quiz Question</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="">
        <?php include_once "includes/header2.php";?>
        <div class="flex flex-col">
            <a href="quiz.php" class="font-semibold text-lg bg-red-500 p-5 rounded w-fit ">Exit</a>
            <div class="flex justify-center items-center  ">
                <div class="bg-white shadow-md mt-40 rounded-lg p-6 w-[120vh]">
                    <h2 class="text-lg font-semibold mb-4">Question <?= $_SESSION['question_index'] + 1 ?> ::</h2>
                    <p class="text-gray-700 mb-4"><?= htmlspecialchars($qus['question']); ?>?</p>

                    <form action="" method="POST" class="flex flex-col gap-3">
                        <?php foreach (['opt1', 'opt2', 'opt3', 'opt4'] as $opt): ?>
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="answer" value="<?= htmlspecialchars($qus[$opt]); ?>" required>
                                <span><?= htmlspecialchars($qus[$opt]); ?></span>
                            </label>
                        <?php endforeach; ?>

                        <button type="submit" name="next"
                            class="mt-4 w-40 bg-[#2E5077] text-white py-2 rounded-md hover:bg-blue-700 transition flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>

<?php
} else {
    // Store rank in database when quiz is finished
    if (isset($_SESSION['user'])) {
        $email = $_SESSION['user'];
        $userQuery = $connect->query("SELECT * FROM users WHERE email='$email'");
        $name = $userQuery->fetch_assoc()['name'];
        $connect->query("INSERT INTO rank (score, user_name) VALUES ('{$_SESSION['rank']}', '$name')");
    }

    session_destroy();
    header("Location: result.php");
    exit();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['next'])) {
    if (isset($_POST['answer'])) {
        $user_answer = $_POST['answer'];
        $correct_answer = $qus['correct_ans'];

        // Compare and update rank
        if ($user_answer === $correct_answer) {
            $_SESSION['rank'] += 2;
        }
    }

    $_SESSION['question_index']++;
    header("Location: startQuiz.php?quizName=$quizName");
    exit();
}
?>
