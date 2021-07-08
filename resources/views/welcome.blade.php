@extends('layouts.base')

@section('content')
    <h1>Liste de tous les éleves:</h1>
    <section class="container mb-3">
        @include('partials.sections.sectionAll')
    </section>
    <section class="container mb-3">
        @include('partials.sections.sectionGirl')
    </section>
    <section class="container mb-3">
        @include('partials.sections.sectionBoy')
    </section>
@endsection
