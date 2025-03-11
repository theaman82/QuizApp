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
    <div class="bg-slate-800 flex justify-between items-center text-white px-[5%] py-3">
        <h1 class="text-2xl font-bold">QuizApp</h1>
        <div class="flex gap-2 items-center">
            <h3 class="text-lg font-semibold border rounded-xl px-2 py-1">Hello Admin!</h3>
            <a href="" class="bg-red-500 text-white font-semibold px-2 py-1 rounded">Logout</a>
        </div>
    </div>
    <div class="bg-gray-200 flex  flex-col gap-10 items-start  text-gray-800 px-[5%] py-">
        <!-- <a href="" class="font-semibold">Dashboard</a>
        <a href="" class="font-semibold">Home</a>
        <a href="" class="font-semibold">User</a>
        <a href="" class="font-semibold">Ranking</a>
        <a href="" class="font-semibold">Feedback</a>
        <a href="" class="font-semibold">Quiz</a> -->


        <div class="flex justify-start items-start border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium" id="default-tab"
                data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="" >
                    <button
                        class="inline-block py-2 px-4 text-gray-600  text-lg rounded-t-lg hover:text-gray-600  dark:hover:text-gray-300"
                         data-tabs-target="#dashboard" type="button">Dashboard</button>
                </li>
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block py-2 px-4 rounded-t-lg border-b-2 hover:text-gray-600 text-lg dark:hover:text-gray-300"
                        id="home-tab" data-tabs-target="#home" type="button" role="tab"
                        aria-controls="home" aria-selected="false">Home</button>
                </li>
                <li role="presentation">
                    <button
                        class="inline-block py-2 px-4 rounded-t-lg border-b-2 hover:text-gray-600 text-lg dark:hover:text-gray-300"
                        id="user-tab" data-tabs-target="#user" type="button" role="tab" aria-controls="user"
                        aria-selected="false">User</button>
                </li>
                <li role="presentation" >
                    <button
                        class="inline-block py-2 px-4 rounded-t-lg border-b-2 hover:text-gray-600 text-lg dark:hover:text-gray-300"
                        id="ranking-tab" data-tabs-target="#ranking" type="button" role="tab" aria-controls="ranking"
                        aria-selected="false">Ranking</button>
                </li>
                <li role="presentation">
                    <button
                        class="inline-block py-2 px-4 rounded-t-lg border-b-2 hover:text-gray-600 text-lg dark:hover:text-gray-300"
                        id="quiz-tab" data-tabs-target="#quiz" type="button" role="tab" aria-controls="quiz"
                        aria-selected="false">Quiz</button>
                </li>
                <li role="presentation">
                    <button
                        class="inline-block py-2 px-4 rounded-t-lg border-b-2 hover:text-gray-600 text-lg dark:hover:text-gray-300"
                        id="feedback-tab" data-tabs-target="#feedback" type="button" role="tab" aria-controls="feedback"
                        aria-selected="false">Feedback</button>
                </li>
            </ul>
        </div>


    </div>
    <div class="p-10 flex h-[35rem] justify-center items-center">
        <div id="default-tab-content">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="home" role="tabpanel"
                aria-labelledby="home">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                        class="font-medium text-gray-800 dark:text-white">home tab's associated content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                    classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="user" role="tabpanel"
                aria-labelledby="user-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                        class="font-medium text-gray-800 dark:text-white">User tab's associated content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                    classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="ranking" role="tabpanel"
                aria-labelledby="ranking-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                        class="font-medium text-gray-800 dark:text-white">ranking tab's associated content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                    classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="quiz" role="tabpanel"
                aria-labelledby="quiz-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                        class="font-medium text-gray-800 dark:text-white">quiz tab's associated content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                    classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="feedback" role="tabpanel"
                aria-labelledby="feedback-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                        class="font-medium text-gray-800 dark:text-white">feedback tab's associated content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                    classes to control the content visibility and styling.</p>
            </div>
        </div>
    </div>
    <!-- <div class="p-10 flex h-[35rem] justify-center items-center">
        <div class="bg-white rounded p-5">
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
                <tbody>
                    <tr>
                        <td class="p-2 border-y border-gray-600">1.</td>
                        <td class="p-2 border-y border-gray-600">PHP Advance</td>
                        <td class="p-2 border-y border-gray-600">20</td>
                        <td class="p-2 border-y border-gray-600">40</td>
                        <td class="p-2 border-y border-gray-600">10 Min</td>
                        <td class="p-2 border-y border-gray-600">
                            <a href="" class="bg-green-600 px-2 py-1 text-white font-semibold">Start</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 border-y border-gray-600">1.</td>
                        <td class="p-2 border-y border-gray-600">PHP Advance</td>
                        <td class="p-2 border-y border-gray-600">20</td>
                        <td class="p-2 border-y border-gray-600">40</td>
                        <td class="p-2 border-y border-gray-600">10 Min</td>
                        <td class="p-2 border-y border-gray-600">
                            <a href="" class="bg-green-600 px-2 py-1 text-white font-semibold">Start</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 border-y border-gray-600">1.</td>
                        <td class="p-2 border-y border-gray-600">PHP Advance</td>
                        <td class="p-2 border-y border-gray-600">20</td>
                        <td class="p-2 border-y border-gray-600">40</td>
                        <td class="p-2 border-y border-gray-600">10 Min</td>
                        <td class="p-2 border-y border-gray-600">
                            <a href="" class="bg-green-600 px-2 py-1 text-white font-semibold">Start</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 border-y border-gray-600">1.</td>
                        <td class="p-2 border-y border-gray-600">PHP Advance</td>
                        <td class="p-2 border-y border-gray-600">20</td>
                        <td class="p-2 border-y border-gray-600">40</td>
                        <td class="p-2 border-y border-gray-600">10 Min</td>
                        <td class="p-2 border-y border-gray-600">
                            <a href="" class="bg-green-600 px-2 py-1 text-white font-semibold">Start</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 border-y border-gray-600">1.</td>
                        <td class="p-2 border-y border-gray-600">PHP Advance</td>
                        <td class="p-2 border-y border-gray-600">20</td>
                        <td class="p-2 border-y border-gray-600">40</td>
                        <td class="p-2 border-y border-gray-600">10 Min</td>
                        <td class="p-2 border-y border-gray-600">
                            <a href="" class="bg-green-600 px-2 py-1 text-white font-semibold">Start</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 border-y border-gray-600">1.</td>
                        <td class="p-2 border-y border-gray-600">PHP Advance</td>
                        <td class="p-2 border-y border-gray-600">20</td>
                        <td class="p-2 border-y border-gray-600">40</td>
                        <td class="p-2 border-y border-gray-600">10 Min</td>
                        <td class="p-2 border-y border-gray-600">
                            <a href="" class="bg-green-600 px-2 py-1 text-white font-semibold">Start</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> -->

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>