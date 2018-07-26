@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Создание пользовател @endslot
            @slot('parent') Главная @endslot
            @slot('active') Пользователь @endslot
        @endcomponent

        <hr>

        <form action="{{ route('admin.user_managment.user.store') }}" method="post">

            {{ csrf_field() }}

            {{-- form include --}}
            @include('admin.user_managment.users.partials.form')

        </form>

    </div>



@endsection