@extends('layout')

@section('content')
<div class="flex justify-center gap-8 my-12 mx-8">
    <aside class="pt-2">
        <ul class="divide-y divide-gray-300 text-gray-500">
            <div class="flex flex-col gap-4 mb-4">
                <li><a href="{{ route('categories') }}">Categorias</a></li>
                <li><a href="{{ route('accounts') }}">Contas</a></li>
                <li class="text-green-600"><a href="{{ route('cards') }}">Cartões de crédito</a></li>
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
                <h3 class="font-bold text-2xl">Cartões de Crédito</h3>
                <button
                    class="flex items-center gap-2 bg-green-100 font-medium rounded-lg py-1 px-2 text-green-400 transition duration-500 ease-in-out hover:bg-green-50">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus-circle font-bold text-green-600" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                    </svg>
                    <span>Adicionar cartão</span>
                </button>
            </div>

            <ul class="divide-y px-4">
                <li class="flex items-center justify-between py-6">
                    <div class="flex items-center gap-6">
                        <img class="rounded-lg w-16 h-12"
                            src="https://assets.organizze.com.br/institutions/logos/itau.png">
                        <h4 class="font-semibold">Itaú</h4>
                    </div>
                    <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m9 5 7 7-7 7" />
                    </svg>
                </li>
                <li class="flex items-center justify-between py-6">
                    <div class="flex items-center gap-6">
                        <img class="rounded-lg w-16 h-12"
                            src="https://assets.organizze.com.br/institutions/logos/nubank.png">
                        <h4 class="font-semibold">Nubank</h4>
                    </div>
                    <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m9 5 7 7-7 7" />
                    </svg>
                </li>
                <li class="flex items-center justify-between py-6">
                    <div class="flex items-center gap-6">
                        <img class="rounded-lg w-16 h-12"
                            src="https://assets.organizze.com.br/institutions/logos/will-bank.png">
                        <h4 class="font-semibold">Will Bank</h4>
                    </div>
                    <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m9 5 7 7-7 7" />
                    </svg>
                </li>
                <li class="flex items-center justify-between py-6">
                    <div class="flex items-center gap-6">
                        <img class="rounded-lg w-16 h-12"
                            src="https://assets.organizze.com.br/institutions/logos/caju.png">
                        <h4 class="font-semibold">Home Office</h4>
                    </div>
                    <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m9 5 7 7-7 7" />
                    </svg>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection