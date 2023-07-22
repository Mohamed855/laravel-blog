@extends('layouts/app')

@section('content')
    <section class="container m-auto pt-20">

        <form action="{{ route('blog.update', $article->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="w-full mb-4 rounded-lg dark:bg-gray-700 px-5 md:mx-0">

                <div class="px-4 py-2 mb-5 bg-white rounded-lg dark:bg-gray-900">
                    <input type="text" id="editor"
                        class="block py-5 px-5 w-full px-0 text-sm text-gray-900 bg-white dark:bg-gray-900 dark:text-white dark:placeholder-gray-400"
                        placeholder="Enter article title" name="title" value="{{ $article->title }}">
                </div>

                <div class="px-4 py-2 bg-white rounded-lg dark:bg-gray-900">
                    <textarea id="editor" rows="8"
                        class="block py-5 px-5 w-full px-0 text-sm text-gray-900 bg-white dark:bg-gray-900 dark:text-white dark:placeholder-gray-400"
                        placeholder="Write an article..." name="description">{{ $article->description }}</textarea>
                </div>
            </div>
            <div class="m-auto flex items-center justify-center w-full px-5 md:mx-0">
                <label for="dropzone-file"
                    class="flex flex-col items-center justify-center w-full border-1 border-dashed border-gray-300 border rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to
                                upload</span>
                            or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG or JPEG (MAX. 2048 MB)</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" name="image" />
                </label>
            </div>
            <div class="py-10 px-5 md:mx-0">
                <button type="submit"
                    class="bg-gray-900 hover:bg-gray-700 text-gray-200 py-4 px-5 float-right rounded-lg font-bold text-sm place-self-start transition duration-300">
                    Save Article
                </button>
            </div>
        </form>
    </section>
@endsection
