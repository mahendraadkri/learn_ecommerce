<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <div class="grid grid-cols-2">
        <img src="https://t4.ftcdn.net/jpg/04/28/75/97/360_F_428759715_jsOPITlaytE3QXc2yI1D4U6uwZdVGkRp.jpg" alt="" class="h-screen ">
        <div class="flex justify-center items-center">
            <div class="text-center w-full">
                <h2 class="font-bold text-4xl">Welcome to Login page </h2>
                <img src="https://thumbs.dreamstime.com/z/login-icon-button-vector-illustration-isolated-white-background-126999474.jpg" alt="" class="mx-auto my-4 h-32">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <input type = "email" name="email" placeholder="Enter email" class="p-4 rounded-lg w-8/12 my-4">
                    <input type = "password" name="password" placeholder="Enter Password" class="p-4 rounded-lg w-8/12 my-4">
                    <input type="submit" value="Login" class="bg-blue-600 text-white w-4/12 py-3 mt-4 rounded-lg block mx-auto cursor-pointer">

                        <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    
                </form>
             

            </div>
        </div>
    </div>
    
</body>
</html>
