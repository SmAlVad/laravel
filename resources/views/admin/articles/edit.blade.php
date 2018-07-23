@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Редактирование новости @endslot
            @slot('parent') Главная @endslot
            @slot('active') Новость @endslot
        @endcomponent

        <hr>

        <form action="{{ route('admin.article.update', $article ) }}" method="post">

            <input type="hidden" name="_method" value="put">

            {{ csrf_field() }}

            {{-- form include --}}
            @include('admin.articles.partials.form')

            <input type="hidden" name="modified_by" value="{{ Auth::id() }}">

        </form>

    </div>



@endsection