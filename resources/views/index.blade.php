@extends("layouts.main")

@section("title","Home")

@section("corpo")

<x-index.index_logo :messages="$messages">
    <x-navbar.darkmode />
</x-index.index_logo>

<x-index.warning :warning="$warning"/>

<x-index.index_categorias />
@endsection
