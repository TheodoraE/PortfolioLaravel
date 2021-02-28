<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio - Backoffice</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body style="background: url('{{asset('img/bg.jpg')}}')">
    {{-- Header --}}
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark my-3 mx-5 fixed-top">
            <a class="navbar-brand" href="/">FrontOffice</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">

                <li class="nav-item">
                  <a class="nav-link" href="/backoffice#navLinks">Nav Links <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/backoffice#socialLinks">Social Links</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/backoffice#aboutTitles">About Titles</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/backoffice#aboutCounts">About Counts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/backoffice#aboutSkills">About Skills</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/backoffice#aboutInterests">About Interests</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/backoffice#resumeTitles">Resume Titles</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/backoffice#resumeTitles2">Resume Subtitles</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/backoffice#resumeInfos">Resume Infos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/backoffice#resumeEducations">Resume Education</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/backoffice#portfolioTitles">Portfolio Titles</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/backoffice#portfolioFilters">Portfolio Filters</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/backoffice#portfolioDivs">Portfolio Divs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/backoffice#contactTitles">Contact Titles</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/backoffice#contactCards">Contact Cards</a>
                </li>
              </ul>
            </div>
        </nav>
    </header>

    {{-- Content --}}
    @yield('content')


    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>