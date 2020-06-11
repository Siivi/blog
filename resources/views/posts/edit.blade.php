@section('title', 'Edit Post')
@section('action', route('posts.create'))
@extends('layout')

@section('content')

<h1 class="title">Uuenda: {{ $post->title }}</h1>

<form method="post" action="{{ route('posts.update', [$post->slug]) }}">

    @csrf
    @method('patch')
    @include('partials.errors')

    <div class="field">
        <label class="label">Millest jutt</label>
        <div class="control">
            <input type="text" name="title" value="{{ $post->title }}" class="input" placeholder="Millest jutt" minlength="5" maxlength="100" required />
        </div>
    </div>

    <div class="field">
        <label class="label">Sisu</label>
        <div class="control">
            <textarea name="content" class="textarea" placeholder="Sisu" minlength="5" maxlength="2000" required rows="10">{{ $post->content }}</textarea>
        </div>
    </div>

    <div class="field">
        <label class="label">Teemad</label>
        <div class="control">
            <div class="select">
                <select name="category" required>
                    <option value="" disabled selected>Mis võiks olla teemaks</option>
                    <option value="school" {{ $post->category === 'school' ? 'selected' : null }}>Kool</option>
                    <option value="MyOpinion" {{ $post->category === 'MyOpinion' ? 'selected' : null }}>Minu arvamus</option>
                    <option value="Children" {{ $post->category === 'Children' ? 'selected' : null }}>Lapsed</option>
                    <option value="SelfAnalysis" {{ $post->category === 'SelfAnalysis' ? 'selected' : null }}>Enese analüüs</option>
                </select>
            </div>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link is-outlined">Uuenda</button>
        </div>
    </div>

</form>

@endsection