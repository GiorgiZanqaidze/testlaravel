<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>



<style>
    html {
        scroll-behavior: smooth;
    }

</style>

<body style="font-family: Open Sans, sans-serif">
        <header class="flex flex-row gap-4 bg-blue-500 h-50">
            @auth
            <h1>Welcome, {{auth()->user()->name}}!</h1>
            <a href="/movies/movie/create">{{__('msg.create-movie')}}</a>
            <form action="/logout" method="POST">
                @csrf
                <button href="/logout">{{__('msg.logout')}}<button>
            </form>
            <a href="/dashboard" class="ml-3 mr-3">{{__('msg.dashboard')}}</a>
            @else
            <a href="/login">{{__('msg.login')}}</a>
            @endauth
            <a href="/" class="ml-3">{{__('msg.home')}}</a>
        </header>
        <main class='flex min-h-screen gap-20'>
            <aside class="flex items-center flex-col justify-center gap-4 m-4">
                {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">EN</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">KA</button> --}}
                <h1>default {{ Config::get('languages')[App::getLocale()] }}</h1>
                @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                    @endif
                @endforeach
            </aside>
            <div class="flex flex-col min-h-screen justify-center items-center">
                {{$slot}}
            </div>
        </main>
</body>

