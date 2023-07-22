@extends('layouts/app')

@section('content')
    @if (session()->has('message'))
        <div class="container m-auto bg-green-100 border border-green-500 text-green-700 px-4 py-3 text-center my-5"
            role="alert">
            <p class="font-bold text-2xl">{{ session()->get('message') }}</p>
        </div>
    @endif
    <section>
        <div class="container m-auto grid gap-8">
            <div class="px-4 py-4 md:px-0 flex">
                <img class="object-cover sm:rounded-lg" src="/images/{{ $article->image_path }}" alt="">
            </div>

            <div class="px-4 md:px-0">

                <h2 class="text-gray-900 font-bold text-4xl py-5 md:pt-0"> {{ $article->title }} </h2>

                <span>
                    by <span class="text-gray-500 italic"> {{ $article->user->name }} </span>
                    on <span class="text-gray-500 italic">
                        {{ date('M d,Y', strToTime($article->updated_at)) }}
                    </span>
                    at <span class="text-gray-500 italic">
                        {{ date('h:m A', strToTime($article->updated_at)) }}
                    </span>

                    <p class="text-l text-gray-700 py-8 leading-6 text-justify">
                        {{ $article->description }}
                    </p>
                </span>
            </div>
        </div>
    </section>
    @if (Auth::user() && Auth::user()->id == $article->user_id)
        <section class="container mx-auto w-full text-right pr-3 md:pr-0">
            <a class="bg-green-700 hover:bg-green-500 text-gray-200 py-4 px-5 rounded-lg font-bold text-sm place-self-start transition duration-300 mr-3"
                href="{{ route('blog.edit', $article->slug) }}">
                Edit
            </a>
            <form action="/blog/{{ $article->slug }}" method="post" class="inline">
                @csrf
                @method('delete')
                <button type="submit"
                    class="h-12 bg-red-700 hover:bg-red-500 text-gray-200 py-4 px-5 rounded-lg font-bold text-sm place-self-start transition duration-300">
                    Delete
                </button>
            </form>
        </section>
    @endif
@endsection
