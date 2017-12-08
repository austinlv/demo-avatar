@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <div style="width: 500px; margin: 20px auto;">
            {!! render_avatar_form() !!}
        </div>
    </div>
</div>
@endsection
