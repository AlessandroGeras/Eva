@extends("layouts.main")

@section("title","Palestras")

@section("corpo")
<x-lectures.lectures_title>
    <x-navbar.darkmode />
</x-lectures.lectures_title>

<x-lectures.timeline :lectures="$lectures" :months="$months" :search="$search" />
@endsection