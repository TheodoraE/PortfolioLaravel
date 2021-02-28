@extends('template.second')

@section('content')
    <section class="container mt-5">
        @include('backoffice.partials.navLinks')
        @include('backoffice.partials.socialLinks')
        @include('backoffice.partials.aboutTitles')
        @include('backoffice.partials.aboutCounts')
    </section>
@endsection