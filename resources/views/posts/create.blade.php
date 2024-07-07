@extends('layouts.app')
@section('title')
    Create
@endsection

@section('content')
    <div class="text-center w-[60%] mx-auto mt-9 p-5 ">
        <form action="{{ route('posts.store') }}" method="POST">
           @csrf
            <div class="block mb-4">
                <label for="" class="block text-left font-semibold">Title</label>
                <input type="text" name="title" id="" class="border px-2 py-2 w-full">
            </div>

            <div class="block mb-4">
                <label for="" class="block text-left font-semibold">Description</label>
                <input type="text" name="description" id="" class="border px-2 py-2 w-full">
            </div>

            <div class="block mb-4">
                <label for="" class="block text-left font-semibold">Post creator</label>
                <input type="text" name="post-creator" id="" class="border px-2 py-2 w-full">
            </div>

            <button class="border px-3 py-2 rounded-md mt-6 bg-slate-300">submit</button>
        </form>
    </div>
@endsection
