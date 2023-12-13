@extends('nav')

@section('content')
<div class="card">
    <form action="{{ route('')}}" method="POST">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="name"></label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $user->nama}}">
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi Singkat</label>
            <textarea name="deskripsi" cols="5" rows="5" class="form-control">{{ $user->deskripsi}}</textarea>
        </div>

        <button class="update">Update</button>
    </form>
</div>
@endsection