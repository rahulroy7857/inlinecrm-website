  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="description" content="" />
  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="pragma" content="no-cache" />
    <meta name="theme-color" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'KG2PG Admissions') }} | @yield('title')</title>
    @yield('meta')
    <link rel="canonical" href="{{ url()->current() }}" />
  <link rel="shortcut icon" href="{{url('/website/favicon.png')}}" type="image/x-icon" />
  <link rel="icon" href="{{url('/website/favicon.ico')}}" type="image/x-icon" />
  <!--OG tag-->
  <meta property="og:locale" content="en_IN" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="{{url()->current()}}" />
  <meta property="og:title" content="KG2PG Admissions" />
  <meta property="og:description" content="" />
  <meta property="og:site_name" content="KG2PG Admissions" />
  <meta property="og:image" content="" />
  <!--Twitter card-->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:url" content="{{url('/')}}" />
  <meta name="twitter:title" content="KG2PG Admissions" />
  <meta name="twitter:description" content="" />
  <meta name="twitter:image" content="" />
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  @yield('style-css')
