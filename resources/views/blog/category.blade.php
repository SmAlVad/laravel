@extends('layouts.app')

@section('title', $category->title)

@section('content')
    
    @forelse($articles as $article)
        <div class="container">
            <div class="row">
                <div class="com-sm-12">
                    <h2><a href="{{ route('article', $article->slug) }}">{{ $article->title }}</a></h2>
                    <p>{!! $article->description_short !!}</p>
                </div>
            </div>
        </div>
    @empty
        <h2 class="text-center">Empty</h2>
    @endforelse

    {{ $articles->links() }}

@endsection