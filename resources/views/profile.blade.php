@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4"
                    role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold text-gray-900 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md text-4xl">
                    Hello {{ explode(' ', Auth::user()->name)[0] }}
                </header>

                <div class="w-full p-6">
                    <p class="text-gray-700">
                        <a class="bg-transparent border-2 bg-gray-900 text-gray-200 py-4 px-5 rounded-lg font-bold text-sm inline-block hover:bg-gray-700 hover:text-gray-200 transition duration-300"
                            href="{{ route('blog.create') }}">
                            Add Article
                        </a>
                    </p>
                </div>
            </section>
        </div>
    </main>
@endsection
