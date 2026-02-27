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
    <x-user-navbar></x-user-navbar>

     <div  class="flex flex-col items-center min-h-screen pt-8">
    
   
        <h1 class="text-2xl text-green-800 font-bold text-center">Category Name : {{$category}}
        </h1>
         <div class="w-200 mt-4">
        <ul class="border border-gray-200 ">
            <li class="p-2 font-bold">
                    <ul class="flex justify-between">
                    <li class="w-30">Quiz Id</li>
                    <li class="w-40">Name</li>
                    <li class="w-30">Action</li>
                </ul>
            </li>
          
            @foreach ($quizData as $quiz)
               <li class="even:bg-gray-200 p-2">
                <ul class="flex justify-between">
                    <li class="w-30">{{$quiz->id}}</li>
                    <li class="w-70">{{$quiz->name}}</li>
                    <li>
                       <a href="/start-quiz" class="text-green-500 font-semibold">
                        Attempt Quiz
                       </a>
                    </li>
                </ul>
                </li> 
            @endforeach
        </ul>
    </div>

    </div>
   <x-user-footer></x-user-footer>
</body>
</html>
</div>
