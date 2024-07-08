@extends('layouts.app')

{{-- title  --}}
@section('title')
    Show
@endsection

@section('content')
    <div class="text-center mt-5">
        <div>Psost Details </div>
        <div> {{ $post['id'] }}</div>
        <div>{{ $post['title'] }}</div>
        <div>{{ $post['posted_by'] }}</div>
        <div>{{ $post['created_at'] }}</div>
    </div>
@endsection
