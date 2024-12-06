<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs Listing App</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white font-hanken-grotesk pb-20">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="" srcset="">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="" class="border border-transparent hover:border-blue-600 group transition-colors duration-300 p-3 rounded-xl">Jobs</a>
                <a href="" class="border border-transparent hover:border-blue-600 group transition-colors duration-300 p-3 rounded-xl">Careers</a>
                <a href="" class="border border-transparent hover:border-blue-600 group transition-colors duration-300 p-3 rounded-xl">Salaries</a>
                <a href="" class="border border-transparent hover:border-blue-600 group transition-colors duration-300 p-3 rounded-xl">Companies</a>
            </div>

            @auth
            <div class="space-x-6 flex font-bold">

                @if (auth()->user()->employer)
                    <div class="border border-transparent hover:border-blue-600 group transition-colors duration-300 p-3 rounded-xl">
                        <a href="/jobs/create">Post a Job</a>
                    </div>
                @endif

                <form action="/logout" method="post" class="border border-transparent hover:border-blue-600 transition-colors duration-300 p-3 rounded-xl">
                    @csrf
                    @method('delete')

                    <button>Log Out</button>
                </form>
            </div>
            @endauth
            
            @guest
            <div class="space-x-6 font-bold">
                <a href="/register">Sign In</a>
                <a href="/login">Log In</a>
            </div>
            @endguest

        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
