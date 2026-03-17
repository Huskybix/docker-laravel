<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Laravel Site</title>
    @vite(['resources/css/app.css'])
</head>

<body class="flex flex-row">
    <nav class="flex flex-col gap-2 border-r border-[#ddd] h-screen p-4">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>

    <div class="flex w-full grow flex-col">

        <header id="topNav" class="flex min-h-18 w-full flex-col border-b border-[#ddd] px-8 !py-4">
            <div id="topBar" class="flex min-h-9 w-full flex-row items-center justify-between">
                <div class='toolbar-title text-xl'>
                    <h2 class="m-0 !font-semibold !text-gray-700">TitleBar</h2>
                </div>
            </div>
        </header>

        <main class="flex w-full grow flex-col px-2 py-8 md:px-8">
            @yield('content')
        </main>
    </div>
</body>
</html>