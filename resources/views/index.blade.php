@extends('layouts.app')

@section('content')
    <section class="hero-bg-image flex flex-col items-center justify-center">
        <h1 class="text-gray-200 text-5xl uppercase font-bold pb-10 text-center">Welocme To Our Blog</h1>
        <a class="bg-gray-200 text-gray-700 py-4 px-5 rounded-lg font-bold uppercase text-xl" href="">Start Reading</a>
    </section>

    <section class="container sm:grid grid-cols-2 gap-15 mx-auto py-15">
        <div class="mx-2 md:mx-0">
            <img class="sm:rounded-lg" src="https://picsum.photos/id/239/700/400" alt="">
        </div>
        <div class="flex flex-col items-left justify-center m-10 sm:m-0">
            <h2 class="font-bold text-gray-900 text-4xl uppercase">
                How to be an expert in 2023
            </h2>
            <p class="font-bold text-gray-700 text-xl pt-2">
                A list of all programming languages here
            </p>
            <p class="pt-5 pb-5 text-gray-500 text-sm leading-5 truncate">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold text-sm place-self-start " href="">
                Read more
            </a>
        </div>
    </section>

    <section class="text-center p-15 bg-gray-900 text-gray-100">
        <h2 class="text-2xl">Blog Categories</h2>
        <div class="container mx-auto pt-10 sm:grid grid-cols-4">
            <span class="font-bold text-2xl py-2 block">UX Design</span>
            <span class="font-bold text-2xl py-2 block">Programming Languages</span>
            <span class="font-bold text-2xl py-2 block">Graphic Design</span>
            <span class="font-bold text-2xl py-2 block">Front-End</span>
        </div>
    </section>

    <section>
        <div class="container mx-auto text-justify py-15">
            <h2 class="font-bold text-center text-5xl py-15">
                Recent Posts
            </h2>
            <p class="text-gray-400 leading-6 px-10">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
        <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
            <div class="md:flex bg-yellow-700 text-gray-100 pt-10">
                <div class="block m-auto pt-4 pb-15 w-4/5">
                    <ul class="flex text-xs gap-2">
                        <li
                            class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-100">
                            <a href="">PHP</a>
                        </li>
                        <li
                            class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-100">
                            <a href="">Programming</a>
                        </li>
                        <li
                            class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-100">
                            <a href="">Languages</a>
                        </li>
                        <li
                            class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-100">
                            <a href="">Backend</a>
                        </li>
                    </ul>
                    <h3 class="text-l py-10 leading-6">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </h3>
                    <a class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold text-sm inline-block hover:bg-yellow-100 hover:text-yellow-700 transition duration-100"
                        href="">
                        Read more
                    </a>
                </div>
            </div>
            <div class="flex">
                <img class="object-cover" src="https://picsum.photos/id/242/960/620" alt="">
            </div>
        </div>
    </section>
@endsection
