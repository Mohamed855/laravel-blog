@extends('layouts/app')

@section('content')
    <section class="container m-auto bg-gray-900 text-gray-200 my-5">
        <h1 class="font-bold text-center text-5xl py-15 uppercase">
            All Articles
        </h1>
    </section>

    @if (session()->has('message'))
        <div class="container m-auto bg-red-100 border border-red-500 text-red-700 px-4 py-3 text-center mb-10"
            role="alert">
            <p class="font-bold text-2xl">{{ session()->get('message') }}</p>
        </div>
    @endif

    <section>
        @if (count($articles) > 0)
            @foreach ($articles as $article)
                <div class="container m-auto sm:grid grid-cols-2 md:gap-15 border-b border-gray-300 pb-15 my-10">
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

                            <p class="article-overflow text-l text-gray-700  pt-8 mb-10 leading-6 text-justify">
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
                    @guest
                        There is no any <strong>Articles</strong>
                    @else
                        There is no any <strong>Articles</strong><br><br>
                        <a class="bg-transparent border-2 bg-gray-900 text-gray-200 py-4 px-5 rounded-lg font-bold text-sm inline-block hover:bg-gray-700 hover:text-gray-200 transition duration-300"
                            href="{{ route('blog.create') }}">
                            Add Article
                        </a>
                    @endguest
                </h2>
            </div>
        @endif
    </section>
@endsection
