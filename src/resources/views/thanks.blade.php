@extends('layouts.app')

@section('content')
<div class="thanks">
    <p class="thanks__message">お問い合わせありがとうございました</p>
    <a href="{{ route('home') }}" class="thanks__button">HOME</a>
</div>
@endsection
