<!DOCTYPE html>
<html lang="fr">


@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1> Rajouter Nouveau Post </h1>
                </div>

                <div class="form-group row">
                    <label for="légende" class="col-md-4 col-form-label "> Post Legende</label>


                    <input id="	légende" type="text" class="form-control @error('	légende') is-invalid @enderror"
                        name="légende" value="{{ old('légende') }}" required autocomplete="	légende" autofocus>

                    @error('légende')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message->first('légende') }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label "> Post Image</label>
                    <input type="file" , class="form-control-file" id="image" name="image">

                    @if ($errors->has('image'))
                         <strong class="text-danger">{{ $errors->first('image') }}</strong>

                    @endif
                </div>
                <div class="row pt-4">
                    <button class="btn btn-danger">Rajouter nouveau post</button>
                </div>
            </div>
        </div>
</div>

</form>

</div>
@endsection

</body>

</html>
