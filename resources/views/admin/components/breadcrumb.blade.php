<h2>{{ $title }}</h2>
<nav class="nav">
    <a class="nav-link" href="{{ route('admin.index') }}">{{ $parent }}</a>
    <a class="nav-link active">{{ $active }}</a>
</nav>