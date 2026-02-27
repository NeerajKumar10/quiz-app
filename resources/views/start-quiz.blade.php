<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz start page</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-user-navbar></x-user-navbar>
    <div class="bg-gray-100 flex flex-col items-center min-h-screen pt-5">
        <h1 class="text-4xl text-center text-green-800 mb-6 font-bold"></h1>
        <h2 class="text-lg text-center text-green-800 mb-6 font-bold">The Quiz Container 1 Questions and no limit to attempt this Quiz</h2>
        <h1 class="text-2xl text-center text-green-800 mb-6 font-bold">Good Luck</h1>
        <a type="submit" href="/user-signup" class="bg-blue-500 rounded-md px-4 py-2 my-5 text-white">
        Login/Signup for to Start Quiz
        </a>
    </div>
    
</body>
</html>