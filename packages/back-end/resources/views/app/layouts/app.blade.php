<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <title>{{ (isset($pageTitle))? $pageTitle . ' | ' : '' }}{{env('APP_NAME')}} - Buy Wholesale Food</title>
    <meta name="description"
          content="{{ (isset($pageDescription))? $pageDescription : env('APP_NAME').' is a wholesale surplus food marketplace.' }}"/>
    @if(isset($keywords))
        <meta name="keywords" content="{{ $keywords }}"/>
    @endif
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=10.0"/>
    <meta http-equiv="refresh">
    <link rel="canonical" href="{{ Request::url() }}">
    <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class='flex flex-col h-full text-grey-darkest'> <!--<![endif]-->
    <div id="app" class="h-full flex flex-col">
        <div class="flex-grow">
            @include('app.partials.header')
            @yield('content')
        </div>
    </div>
    <link rel="stylesheet" href="/css/app.css" />
</body>
</html>
