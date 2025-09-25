<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>AppLab</title>
</head>
<body class="font-display">
    @include('components.header')
    @include('components.companies')
    @include('components.features')
    @include('components.smart-jackpots')
    @include('components.designed&built')
    @include('components.rectangle')
    @include('components.why-you-should-choose')
    @include('components.ultimate-features')
    @include('components.get-awesome-features')
    @include('components.rectangle')
    @include('components.meet-client-satisfaction')
    @include('components.frequently-asked-questions')
    @include('components.rectangle')
    @include('components.download')
    @include('components.footer')
</body>
</html>
