<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body>

    {{ $slot }}

    <section class="mt-2">
        <div class="ml-4 text-center text-sm text-zinc-500 dark:text-zinc-400 sm:text-right sm:mr-4 sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </section>

    @fluxScripts

</body>

</html>
