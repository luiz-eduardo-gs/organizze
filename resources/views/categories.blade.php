@extends('layout')

@section('content')
<div class="flex justify-center gap-8 my-12 mx-8">
    <aside class="pt-2">
        <ul class="divide-y divide-gray-300 text-gray-500">
            <div class="flex flex-col gap-4 mb-4">
                <li class="text-green-600"><a href="{{ route('categories') }}">Categorias</a></li>
                <li><a href="{{ route('accounts') }}">Contas</a></li>
                <li><a href="{{ route('cards') }}">Cartões de crédito</a></li>
            </div>
            <div class="flex flex-col gap-4 pt-4 text-sm">
                <li><a href="#">Preferências</a></li>
                <li><a href="#">Plano</a></li>
                <li><a href="{{ route('tags') }}">Tags</a></li>
                <li><a href="#">Alertas</a></li>
                <li><a href="#">Atividades</a></li>
            </div>
        </ul>
    </aside>
    <div class="flex bg-white divide-x py-8 px-10 rounded-lg w-[800px]">
        <div class="w-full">
            <div class="flex items-center justify-between mb-8">
                <h3 class="font-bold text-2xl">Categorias</h3>
                <button
                    class="flex items-center gap-2 bg-green-100 font-medium rounded-lg py-1 px-2 text-green-400 transition duration-500 ease-in-out hover:bg-green-50">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus-circle font-bold text-green-600" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                    </svg>
                    <span>Categoria de despesa</span>
                </button>
            </div>

            <ul class="text-sm font-medium text-center text-gray-500 flex">
                <li class="w-full focus-within:z-10">
                    <a href="#"
                        class="inline-block w-full p-4 border-b-2 text-green-500 border-green-600 hover:text-green-600"
                        aria-current="page">Receitas</a>
                </li>
                <li class="w-full focus-within:z-10">
                    <a href="#"
                        class="inline-block w-full p-4 border-b-2 border-transparent transition duration-500 ease-in-out hover:text-green-600 hover:border-b-gray-200">Despesas</a>
                </li>
            </ul>

            <ul class="divide-y py-4">
                <li class="flex justify-between py-2">
                    <div class="flex items-center gap-2">
                        <div class="rounded-full p-5 bg-red-500"></div>
                        <a class="hover:text-gray-300" href="#">Academia</a>
                    </div>
                    <div class="text-blue-500">
                        <a class="hover:text-blue-300" href="#">arquivar</a>
                        <a class="hover:text-blue-300" href="#">+ sub-categoria</a>
                    </div>
                </li>
                <li class="flex justify-between py-2">
                    <div class="flex items-center gap-2">
                        <div class="rounded-full p-5 bg-green-500"></div>
                        <a class="hover:text-gray-300" href="#">Adiantamento da fatura</a>
                    </div>
                    <div class="text-blue-500">
                        <a class="hover:text-blue-300" href="#">arquivar</a>
                        <a class="hover:text-blue-300" href="#">+ sub-categoria</a>
                    </div>
                </li>
                <li class="flex justify-between py-2">
                    <div class="flex items-center gap-2">
                        <div class="rounded-full p-5 bg-pink-500"></div>
                        <a class="hover:text-gray-300" href="#">Alimentação</a>
                    </div>
                    <div class="text-blue-500">
                        <a class="hover:text-blue-300" href="#">arquivar</a>
                        <a class="hover:text-blue-300" href="#">+ sub-categoria</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection