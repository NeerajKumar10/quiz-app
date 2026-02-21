<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Quiz Page</title>
     @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <x-navbar name={{$name}}></x-navbar>
    @if(session('category'))
    <div class="bg-green-800 text-white pl-5">{{session('category')}}</div>
    @endif
    <div  class="flex flex-col items-center min-h-screen pt-8">
          <div class="bg-white p-8 rounded-2xl shadow-2xl w-full max-w-md">
            @if(!session('quizDetails'))
        <h1 class="text-2xl text-center text-gray-800 mb-6">Add Quiz</h1>
        <form action="/add-quiz" method="POST" class="space-y-4">
            @csrf
            <div>
            <input type="text" placeholder="Enter quiz name"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" name="quiz">
              {{-- @error('quiz')
            <div class="text-red-500">{{$message}}</div>   
            @enderror --}}
            </div>

            <div>
                <select name="category_id" id="" class="w-full border border-gray-300 rounded-xl focus:outline-none px-4 py-2">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

           <button type="submit" class="w-full bg-blue-500 rounded-xl px-4 py-2 text-white">Add</button>
        </form>
        @else
        <span class="text-green-500 font-semibold text-lg">Quiz : {{session('quizDetails')->name}}</span>
        <h1 class="text-2xl text-center text-gray-800 mb-6">Add MCQs</h1>
        <form action="" method="get" class="space-y-4">
           <textarea type="text" placeholder="Enter ypur question"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" name="quiz">
           </textarea>
           
           <div>
            <input type="text" placeholder="Enter first option"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" name="quiz">
           </div>

            <div>
            <input type="text" placeholder="Enter second option"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" name="quiz">
           </div>

            <div>
            <input type="text" placeholder="Enter third option"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" name="quiz">
           </div>

            <div>
            <input type="text" placeholder="Enter fourth option"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" name="quiz">
           </div>

            <div>
            <select
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" name="right_answer">
            <option value="">Select right answer</option>
            <option value="">A</option>
            <option value="">B</option>
            <option value="">C</option>
            <option value="">D</option>
            </select>
           </div>
           <button type="submit" class="w-full bg-blue-500 rounded-xl px-4 py-2 text-white">
    Add More</button>
    <button type="submit" class="w-full bg-green-500 rounded-xl px-4 py-2 text-white">
    Add and submit</button>
        </form>
        </form>
        @endif
    </div>
    </div>
   
</body>
</html>