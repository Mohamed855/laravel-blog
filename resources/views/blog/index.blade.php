@extends('layouts/app')

@section('content')
    <section class="container m-auto bg-gray-900 text-gray-200 my-10">
        <h1 class="font-bold text-center text-5xl py-15 uppercase">
            All Articles
        </h1>
    </section>

    <section>
        @if (count($articles) > 0)
            @foreach ($articles as $article)
                <div class="container m-auto sm:grid grid-cols-2 md:gap-15 border-b border-gray-300 pb-15 mb-10">
                    <div class="px-4 md:px-0 flex">
                        <a href="blog/{{ $article->slug }}">
                            <img class="object-cover sm:rounded-lg" src="/images/{{ $article->image_path }}" alt="">
                        </a>
                    </div>

                    <div class="px-4 md:px-0">
                        <a href="blog/{{ $article->slug }}">
                            <h2 class="text-gray-900 font-bold text-4xl py-5 md:pt-0"> {{ $article->title }} </h2>
                        </a>
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

                            <a class="bg-gray-900 hover:bg-gray-700 text-gray-200 py-4 px-5 rounded-lg font-bold text-sm place-self-start transition duration-300"
                                href="blog/{{ $article->slug }}">
                                Read more
                            </a>
                        </span>
                    </div>
                </div>
            @endforeach
        @else
            <div class="container m-auto pb-8 mb-10">
                <h2 class="font-bold text-center text-3xl py-15 text-gray-900">
                    There is no any <strong>Articles</strong>
                </h2>
            </div>
        @endif
    </section>
@endsection
