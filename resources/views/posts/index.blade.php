@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        Post
        <form action="post" action="{{ route('posts') }}">
            <div class="mb-4">
                <label for="body">
                    Body
                </label>

                    <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded lg @error('body') border-red-500 @enderror">

                    </textarea>

                    @error('body')
                        <div class="text-red-500 mt-2 text-sm">
                            {{  $message }}
                        </div>
                    @enderror

                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py2 rouneded font-medium">
                            Post
                        </button>
                    </div>
            </div>
        </form>


        @if($posts->count())
            @foreach ($posts as $post)
                <div class="mb-4">
                    <a href="" class="font-bold"> {{ $post->user->name }} </a>
                    <span class="text-gray-600">
                        {{ $post->created_at }}
                    </span>
                    <p class="mb-2">
                        {{ $post->body }}
                        body
                    </p>
                </div>
            @endforeach
        @else
            <p>There a are no posts </p>
        @endif
    </div>
</div>


@endsection