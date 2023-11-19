<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="description"
        content="DINACOM atau Dinus Application Competition adalah salah satu kompetisi IT terbesar di Indonesia untuk kalangan mahasiswa, ataupun pelajar." />
    <meta name="keywords"
        content="dinacom, dinacom2023, DINACOM,DINACOM 2023, dinacom 2023,lomba dinacom,udinus,lomba udinus, dinus fest 2023,dinus fest,dian nuswantoro,application,competition,kompetisi,event TI,dncc,DINACOM,apps competition,Dinus Application Competition">
    <meta name="author" content="DINACOM 2023" />
    <meta name="copyright" content="DINACOM 2023" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logo-icon.ico') }}">
    @include('components.style')
    <title>@yield('title')</title>

</head>

<body class="font-sarpanch m-0 p-0 overflow-x-hidden w-full bg-gradient-to-b from-grape-700 to-grape-600">

    {{-- Start Navbar --}}
    @include('components.navbar')
    {{-- End Navbar --}}

    {{-- Start Main --}}
    <main class="min-w-[100vw]">
        @yield('content')
    </main>
    {{-- End Main --}}


    @include('components.footer')


    {{-- Modal Login and Register --}}
    <x-auth></x-auth>

    @include('components.script')
</body>

</html>
