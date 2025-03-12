<?php
include_once "../config/connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App | Admin</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-400">
    <?php include_once "includes/header.php"; ?>
    <?php include_once "includes/subheader.php"; ?>
    <div class="p-10 flex h-[35rem] justify-center items-center">
        <div id="default-tab-content">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="home" role="tabpanel"
                aria-labelledby="home">
                <table class="w-[50rem]">
                    <thead>
                        <tr>
                            <th class="p-2 border-y border-gray-600 text-start">S.N.</th>
                            <th class="p-2 border-y border-gray-600 text-start">Topic</th>
                            <th class="p-2 border-y border-gray-600 text-start">Total Questions</th>
                            <th class="p-2 border-y border-gray-600 text-start">Total Marks</th>
                            <th class="p-2 border-y border-gray-600 text-start">Time Limit</th>
                            <th class="p-2 border-y border-gray-600 text-start">Action</th>
                        </tr>
                    </thead>
                    <?php
                    $callingQuiz = $connect->query("select * from quiz");
                    while ($quiz = $callingQuiz->fetch_array()):
                        ?>
                    <tbody>
                        <tr>
                            <td class="p-2 border-y border-gray-600"><?= $quiz['id']; ?></td>
                            <td class="p-2 border-y border-gray-600"><?= $quiz['title']; ?></td>
                            <td class="p-2 border-y border-gray-600"><?= $quiz['total_question']; ?></td>
                            <td class="p-2 border-y border-gray-600"><?= $quiz['total_question']*$quiz['right_answer_marks']?></td>
                            <td class="p-2 border-y border-gray-600"><?= $quiz['time_limit']; ?></td>
                            <td class="p-2 border-y border-gray-600">
                                <a href="" class="bg-green-600 px-2 py-1 text-white font-semibold">Start</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php endwhile; ?>
                </table>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="user" role="tabpanel"
                aria-labelledby="user-tab">
                <table class="w-[55rem]">
                    <thead>
                        <tr>
                            <th class="p-2 border-y border-gray-600 text-start">S.N.</th>
                            <th class="p-2 border-y border-gray-600 text-start">Name</th>
                            <th class="p-2 border-y border-gray-600 text-start">Gender</th>
                            <th class="p-2 border-y border-gray-600 text-start">College</th>
                            <th class="p-2 border-y border-gray-600 text-start">Email</th>
                            <th class="p-2 border-y border-gray-600 text-start">Contact</th>
                            <th class="p-2 border-y border-gray-600 text-start"></th>
                        </tr>
                    </thead>
                    <?php
                        $callingUser = $connect->query("select * from users");
                        while ($user = $callingUser->fetch_array()):
                    ?>
                    <tbody>
                        <tr>
                            <td class="p-2 border-y border-gray-600"><?= $user['user_id']?></td>
                            <td class="p-2 border-y border-gray-600"><?= $user['name']?></td>
                            <td class="p-2 border-y border-gray-600"><?= $user['gender']?></td>
                            <td class="p-2 border-y border-gray-600"><?= $user['college_name']?></td>
                            <td class="p-2 border-y border-gray-600"><?= $user['email']?></td>
                            <td class="p-2 border-y border-gray-600"><?= $user['contact']?></td>
                            <td class="p-2 border-y border-gray-600">
                                <a href="?deleteUser=<?= $user['user_id'];?>" class="bg-green-600 px-2 py-1 text-white font-semibold">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php endwhile;?>
                </table>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="ranking" role="tabpanel"
                aria-labelledby="ranking-tab">
                <table class="w-[50rem]">
                    <thead>
                        <tr>
                            <th class="p-2 border-y border-gray-600 text-start">Rank</th>
                            <th class="p-2 border-y border-gray-600 text-start">Name</th>
                            <th class="p-2 border-y border-gray-600 text-start">Gender</th>
                            <th class="p-2 border-y border-gray-600 text-start">College</th>
                            <th class="p-2 border-y border-gray-600 text-start">Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-2 border-y border-gray-600">1</td>
                            <td class="p-2 border-y border-gray-600">Sudhanshu</td>
                            <td class="p-2 border-y border-gray-600">Male</td>
                            <td class="p-2 border-y border-gray-600">pcp</td>
                            <td class="p-2 border-y border-gray-600">9</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="feedback" role="tabpanel"
                aria-labelledby="feedback-tab">
                <table class="w-[60rem]">
                    <thead>
                        <tr>
                            <th class="p-2 border-y border-gray-600 text-start">S.N.</th>
                            <th class="p-2 border-y border-gray-600 text-start">Subject</th>
                            <th class="p-2 border-y border-gray-600 text-start">Email</th>
                            <th class="p-2 border-y border-gray-600 text-start">Date</th>
                            <th class="p-2 border-y border-gray-600 text-start">Time</th>
                            <th class="p-2 border-y border-gray-600 text-start">By</th>
                            <th class="p-2 border-y border-gray-600 text-start"></th>
                        </tr>
                    </thead>
                    <?php
                        $callingUser = $connect->query('select * from feedback');
                        while ($user = $callingUser->fetch_array()):
                            ?>
                    <tbody>
                        <tr>
                            <td class="p-2 border-y border-gray-600"><?= $user['id'];?></td>
                            <td class="p-2 border-y text-blue-500 border-gray-600"><?= $user['subject'];?></td>
                            <td class="p-2 border-y border-gray-600"><?= $user['email'];?></td>
                            <td class="p-2 border-y border-gray-600"><?= date('Y-m-d', strtotime($user['date_time'])); ?></td>
                            <td class="p-2 border-y border-gray-600"><?= date("h:i A", strtotime($user['date_time']));?></td>
                            <td class="p-2 border-y border-gray-600"><?= $user['name'];?></td>
                            <td class="p-2 border-y border-gray-600">
                                <a href="?deleteFeedback=<?= $user['id'];?>" class="bg-green-600 px-2 py-1 text-white font-semibold">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php endwhile;?>
                </table>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="quiz" role="tabpanel"
                aria-labelledby="quiz-tab">

                <table class="w-[60rem]">
                    <div class="flex justify-between">
                        <h1 class="text-xl font-bold mb-5">Manage Quiz</h1>
                        <a href="addQuiz.php"
                            class="text-lg bg-green-600 text-white rounded px-3 py-1 font-semibold mb-5">Add Quiz</a>
                    </div>
                    <thead>
                        <tr>
                            <th class="p-2 border-y border-gray-600 text-start">S.N.</th>
                            <th class="p-2 border-y border-gray-600 text-start">Topic</th>
                            <th class="p-2 border-y border-gray-600 text-start">Total Question</th>
                            <th class="p-2 border-y border-gray-600 text-start">Total Marks</th>
                            <th class="p-2 border-y border-gray-600 text-start">Time limit</th>
                            <th class="p-2 border-y border-gray-600 text-start"></th>
                        </tr>
                    </thead>
                    <?php
                    $callingQuiz = $connect->query("select * from quiz");
                    while ($quiz = $callingQuiz->fetch_array()):
                        ?>
                        <tbody>
                            <tr>
                                <td class="p-2 border-y border-gray-600"><?= $quiz['id']; ?></td>
                                <td class="p-2 border-y border-gray-600"><?= $quiz['title']; ?></td>
                                <td class="p-2 border-y border-gray-600"><?= $quiz['total_question']; ?></td>
                                <td class="p-2 border-y border-gray-600"><?= $quiz['total_question']*$quiz['right_answer_marks']?></td>
                                <td class="p-2 border-y border-gray-600"><?= $quiz['time_limit']; ?></td>
                                <td class="p-2 border-y border-gray-600">
                                    <a href="?removeQuiz=<?= $quiz['id'];?>" class="bg-red-600 px-2 py-1 text-white font-semibold">Remove</a>
                                </td>
                            </tr>
                        </tbody>
                    <?php endwhile; ?>

                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
<?php
if (isset($_GET['removeQuiz'])){
    $remove_id = $_GET['removeQuiz'];

    $query = $connect->query("delete from quiz where id='$remove_id'");
    if($query){
        redirect("index.php");
    }
}
if (isset($_GET['deleteFeedback'])){
    $remove_id = $_GET['deleteFeedback'];

    $query = $connect->query("delete from feedback where id='$remove_id'");
    if($query){
        redirect("index.php");
    }
}
if (isset($_GET['deleteUser'])){
    $remove_id = $_GET['deleteUser'];

    $query = $connect->query("delete from users where user_id='$remove_id'");
    if($query){
        redirect("index.php");
    }
}
