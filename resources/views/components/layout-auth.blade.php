<head>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PT BPR SERANG | Whatsapp Gateway API">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="keywords"
        content="waapi,wa gateway, whatsapp blast PT BPR SERANG">
    <meta name="author" content="Galih Setiabudi, WA-GATEWAY">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>{{ $title }} | PT BPR SERANG</title>

    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>




</head>

<body class="bg-login">
    <div class="wrapper">

        {{ $slot }}
    </div>

</body>

<script src="{{ asset('assets/js/pace.min.js') }}"></script>
</body>

</html>
