<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-cream flex items-center justify-center min-h-screen">
    <div class="w-[720px] max-w-full h-auto bg-green rounded-lg flex flex-col md:flex-row overflow-hidden shadow-lg">
        <!-- Left Side - Image Holder -->
        <div class="md:flex-1 bg-yellow flex items-center justify-center p-4">
            <div class="w-[300px] h-[300px] bg-gray-300 rounded-md"></div>
        </div>
        
        <!-- Right Side - Login Form -->
        <div class="md:flex-1 bg-cream p-10 flex flex-col justify-center items-center">
            <h2 class="text-green text-3xl font-bold mb-8">Admin Log in</h2>
            <form action="{{ route('login') }}" method="POST" class="w-full max-w-xs">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block text-green font-medium mb-2">Email Address</label>
                    <input type="email" id="email" name="email" required
                        class="w-full border border-green rounded-lg px-4 py-2 text-green bg-cream focus:outline-none focus:ring-2 focus:ring-yellow">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-green font-medium mb-2">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full border border-green rounded-lg px-4 py-2 text-green bg-cream focus:outline-none focus:ring-2 focus:ring-yellow">
                </div>
                <div class="mb-6 text-right">
                    <a href="{{ route('password.request') }}" class="text-green text-sm underline hover:text-yellow">Forgot Password?</a>
                </div>
                <button type="submit"
                    class="w-full bg-yellow text-green font-bold py-2 px-4 rounded-lg hover:bg-orange transition-colors">
                    LOGIN
                </button>
            </form>
        </div>
    </div>
</body>
</html>
