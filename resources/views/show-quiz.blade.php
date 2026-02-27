<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MCQs Page</title>
     @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <x-navbar name="{{ $name }}"></x-navbar>

<div class="flex flex-col items-center min-h-screen pt-8">
    <div class="w-full max-w-3xl mt-4">
        <h1 class="text-2xl text-blue-500 mb-4 flex justify-between items-center">
            MCQs List 
            @isset($quizName)
                - {{ $quizName }}
            @endisset
            <a class="text-yellow-500 text-sm" href="/add-quiz">Back</a>
        </h1>

        <ul class="border border-gray-200 w-full">
            <!-- Header -->
            <li class="p-2 font-bold flex justify-between bg-gray-100">
                <span class="w-1/4">MCQ Id</span>
                <span class="w-3/4">Question</span>
            </li>

            <!-- MCQs -->
            @foreach ($mcqs as $mcq)
            <li class="p-2 flex justify-between even:bg-gray-200">
                <span class="w-1/4">{{ $mcq->id }}</span>
                <span class="w-3/4">{{ $mcq->question }}</span>
            </li>
            @endforeach
        </ul>
    </div>
</div>
   
</body>
</html>