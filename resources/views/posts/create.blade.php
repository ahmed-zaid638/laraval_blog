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
                <select name="posted_by" class="border px-2 py-2 w-full">
                    @foreach ($users as $user)
                        <option  value={{ $user->id }}>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <button class="border px-3 py-2 rounded-md mt-6 bg-slate-300">
                submit
            </button>
        </form>
    </div>
@endsection
