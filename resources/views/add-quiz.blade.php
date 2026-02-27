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
            <input type="text" placeholder="Enter quiz name" required
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
         <p  class="text-green-500 font-semibold">Total MCQs : {{$total}}
                  @if($total>0)
         <span class="text-sm text-yellow-400"><a href="/show-quiz/{{session('quizDetails')->id}}">Show MCQs</a></span>
         @endif
         </p>
   
        <h1 class="text-2xl text-center text-gray-800 mb-6">Add MCQs</h1>
       
        <form action="add-mcq" method="post" class="space-y-4">
            @csrf
            <div>
                   <textarea placeholder="Enter ypur question"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" name="question">
           </textarea>
           @error('question')
           <div class="text-red-500">{{$message}}</div>   
            @enderror
            </div>
        
           
           <div>
            <input type="text" placeholder="Enter first option"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" name="a">
            @error('a')
           <div class="text-red-500">{{$message}}</div>   
            @enderror
           </div>

            <div>
            <input type="text" placeholder="Enter second option"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" name="b">
            @error('b')
            <div class="text-red-500">{{$message}}</div>   
            @enderror
        </div>

            <div>
            <input type="text" placeholder="Enter third option"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" name="c">
             @error('c')
            <div class="text-red-500">{{$message}}</div>   
            @enderror
           </div>

            <div>
            <input type="text" placeholder="Enter fourth option"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" name="d">
             @error('d')
            <div class="text-red-500">{{$message}}</div>   
            @enderror
           </div>

            <div>
            <select
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" name="correct_ans">
            <option value="default">Select right answer</option>
            <option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
            <option value="d">D</option>
            </select>
           </div>
           <button type="submit" name="submit" value="add-more" class="w-full bg-blue-500 rounded-xl px-4 py-2 text-white">
    Add More</button>
    <button type="submit" name="submit"value="done" class="w-full bg-green-500 rounded-xl px-4 py-2 text-white">
    Add and submit</button>
   <a class="w-full text-center bg-red-500 block rounded-xl px-4 py-2 text-white" href="/end-quiz">Finish and Leave</a>
        </form>
        @endif
    </div>
    </div>
   
</body>
</html>