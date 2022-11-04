@extends("layouts.main")

@section("title","Minha Conta")

@section("corpo")
<x-dashboard.my_account :user="$user">
    <x-navbar.darkmode />
</x-dashboard.my_account>

@switch($user->permission->role)
@case('User')
<x-dashboard.my_events :manylectures="$manylectures" />
<x-dashboard.appointments :manyappointments="$manyappointments" />
@break

@case('Professional')
<x-dashboard.admin_lectures :lectures="$lectures" />
<x-dashboard.create_lecture />
<x-dashboard.users :user="$user" :users="$users" />
@break

@case('Administrator')
<x-dashboard.admin_lectures :lectures="$lectures" />
<x-dashboard.admin_panel :warning="$warning" />
<x-dashboard.create_lecture />
<x-dashboard.users :user="$user" :users="$users" />
@break
@endswitch

@endsection