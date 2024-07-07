@extends('layouts.app')
@section('title')
    Index
@endsection


@section('content')
    <div class="blog text-center mt-4">
        <a href="/create"
            class="border p-3 rounded-md font-semibold bg-blue-500 text-white hover:bg-blue-600 transition duration-200">Create
            Post</a>
    </div>
    <div class="flex justify-center  mt-6">
        <table class="text-center bg-white border border-gray-200 rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">#</th>
                    <th class="py-3 px-6 text-left">Title</th>
                    <th class="py-3 px-6 text-left">Posted By</th>
                    <th class="py-3 px-6 text-center">Created At</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>

            <tbody class="text-gray-600 text-sm font-light">
                @foreach ($posts as $post)
                    <tr class="bg-[#f7f7f7] border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left">{{ $post['id'] }}</td>
                        <td class="py-3 px-6 text-left">{{ $post['title'] }}</td>
                        <td class="py-3 px-6 text-left">{{ $post['posted_by'] }}</td>
                        <td class="py-3 px-6 text-left">{{ $post['created_at'] }}</td>
                        <td class="py-3 px-6 text-center">
                            <a href={{ route('posts.show', ['post' => $post['id']]) }}
                                class="border rounded-sm px-3 py-1 mr-2 text-blue-500 border-blue-500 hover:bg-blue-500 hover:text-white transition duration-200">View</a>
                            <a href="/posts/{{ $post['id'] }}"
                                class="border rounded-sm px-3 py-1 mr-2 text-green-500 border-green-500 hover:bg-green-500 hover:text-white transition duration-200">Edit</a>
                            <a href="/posts/{{ $post['id'] }}"
                                class="border rounded-sm px-3 py-1 text-red-500 border-red-500 hover:bg-red-500 hover:text-white transition duration-200">Delete</a>
                        </td>
                    </tr>
                @endforeach
                @yield('about')

            </tbody>
        </table>
    </div>
@endsection
