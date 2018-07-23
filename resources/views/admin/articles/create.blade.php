@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Создание новости @endslot
            @slot('parent') Главная @endslot
            @slot('active') Новость @endslot
        @endcomponent

        <hr>

        <form action="{{ route('admin.article.store') }}" method="post">

            {{ csrf_field() }}

            {{-- form include --}}
            @include('admin.articles.partials.form')

            <input type="hidden" name="created_by" value="{{ Auth::id() }}">

        </form>

    </div>



@endsection