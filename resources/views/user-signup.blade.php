<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-user-navbar></x-user-navbar>
<div class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-2xl w-full max-w-sm">
        <h1 class="text-2xl text-center text-gray-800 mb-6">User Signup</h1>
             @error('user')
            <div class="text-red-500">{{$message}}</div>   
            @enderror
        <form action="/user-signup" method="post" class="space-y-4">
            @csrf
            <div>
            
                 <label for="" class="text-gray-600 mb-1">User Name</label>
            <input type="text" placeholder="Enter user name"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" name="name">
            @error('name')
            <div class="text-red-500">{{$message}}</div>   
            @enderror
            </div>

              <div>
                 <label for="" class="text-gray-600 mb-1">User Email</label>
            <input type="email" placeholder="Enter user email"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" name="email">
              @error('email')
            <div class="text-red-500">{{$message}}</div>   
            @enderror
            </div>

            <div>
                 <label for="" class="text-gray-600 mb-1">Password</label>
            <input type="password" placeholder="Enter user password"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" name="password">
              @error('password')
            <div class="text-red-500">{{$message}}</div>   
            @enderror
            </div>
            
            <div>
                 <label for="" class="text-gray-600 mb-1">Confirm Password</label>
            <input type="password" placeholder="Confirm user password"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" name="password_confirmation">
            </div>
           <button type="submit" class="w-full bg-blue-500 rounded-xl px-4 py-2 text-white">Signup</button>
        </form>
    </div>
    
</div>
</body>
</html>