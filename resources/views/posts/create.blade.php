@section('title', 'New Post')
@extends('layout')

@section('content')

<h1 class="title">Loo uus sisu</h1>

<form method="post" action="{{ route('posts.store') }}">

    @csrf
    @include('partials.errors')

    <div class="field">
        <label class="label">Millest jutt</label>
        <div class="control">
            <input type="text" name="title" value="{{ old('title') }}" class="input" placeholder="Millest jutt" minlength="5" maxlength="100" required />
        </div>
    </div>

    <div class="field">
        <label class="label">Sisu</label>
        <div class="control">
            <textarea name="content" class="textarea" placeholder="Sisu" minlength="5" maxlength="2000" required rows="10">{{ old('content') }}</textarea>
        </div>
    </div>

    <div class="field">
        <label class="label">Teemad</label>
        <div class="control">
            <div class="select">
                <select name="category" required>
                    <option value="" disabled selected>Mis võiks olla teemaks</option>
                    <option value="school" {{ old('category') === 'school' ? 'selected' : null }}>Kool</option>
                    <option value="MyOpinion" {{ old('category') === 'MyOpinion' ? 'selected' : null }}>Minu arvamus</option>
                    <option value="Children" {{ old('category') === 'Children' ? 'selected' : null }}>Lapsed</option>
                    <option value="SelfAnalysis" {{ old('SelfAnalysis') === 'php' ? 'selected' : null }}>Enese analüüs</option>
                </select>
            </div>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link is-outlined">Avalda</button>
        </div>
    </div>

</form>

@endsection