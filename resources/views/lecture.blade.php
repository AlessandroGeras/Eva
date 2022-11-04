@extends("layouts.main")

@section("title","Palestra")

@section("corpo")

<x-lecture.lecture_name :lecture="$lecture" :months="$months">
    <x-navbar.darkmode />
</x-lecture.lecture_name>

<x-lecture.lecture_info :lecture="$lecture" />

@switch($user->permission->role)
@case('User')
<x-lecture.lecture_user :lecture="$lecture" :manylectures="$manylectures">
    <x-lecture.lecture_link :lecture="$lecture" />
</x-lecture.lecture_user>

@break

@default
<x-lecture.lecture_admin :lecture="$lecture" :manyusers="$manyusers">
    <x-lecture.lecture_link :lecture="$lecture" />
</x-lecture.lecture_admin>

<x-lecture.edit_lecture :lecture="$lecture" />
@endswitch

@endsection