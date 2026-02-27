<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-2xl w-full max-w-sm">
        <h1 class="text-2xl text-center text-gray-800 mb-6">Admin login</h1>
             @error('user')
            <div class="text-red-500">{{$message}}</div>   
            @enderror
        <form action="/admin-login" method="post" class="space-y-4">
            @csrf
            <div>
            
                 <label for="" class="text-gray-600 mb-1">Admin name</label>
            <input type="text" placeholder="Enter admin name"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" name="name">
            @error('name')
            <div class="text-red-500">{{$message}}</div>   
            @enderror
            </div>
            <div>
                 <label for="" class="text-gray-600 mb-1">Password</label>
            <input type="password" placeholder="Enter password"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" name="password">
              @error('password')
            <div class="text-red-500">{{$message}}</div>   
            @enderror
            </div>
            
           <button type="submit" class="w-full bg-blue-500 rounded-xl px-4 py-2 text-white">Login</button>
        </form>
    </div>
    
</body>
</html>