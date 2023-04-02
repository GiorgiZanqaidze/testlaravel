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
            <a href="/quotes/quote/create">Create Quote</a>
            <form action="/logout" method="POST">
                @csrf
                <button href="/logout">LogOut<button>
            </form>
            @else
            <a href="/login">Login</a>
            @endauth
            <a href="/" class="ml-3">Home Page</a>
        </header>
    {{$slot}}
</body>
