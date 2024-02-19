@extends('layout')

@section('content')
<div x-data>
    <div class="flex justify-center gap-8 my-12 mx-8">
        <aside class="pt-2">
            <ul class="divide-y divide-gray-300 text-gray-500">
                <div class="flex flex-col gap-4 mb-4">
                    <li><a href="{{ route('categories.index') }}">Categorias</a></li>
                    <li class="text-green-600"><a href="{{ route('accounts.index') }}">Contas</a></li>
                    <li><a href="{{ route('cards') }}">Cartões de crédito</a></li>
                </div>
                <div class="flex flex-col gap-4 pt-4 text-sm">
                    <li><a href="#">Preferências</a></li>
                    <li><a href="#">Plano</a></li>
                    <li><a href="{{ route('tags.index') }}">Tags</a></li>
                    <li><a href="#">Alertas</a></li>
                    <li><a href="#">Atividades</a></li>
                </div>
            </ul>
        </aside>
        <div class="flex bg-white divide-x py-8 px-10 rounded-lg w-[800px]">
            <div class="w-full">
                <div class="flex items-center justify-between mb-8">
                    <h3 class="font-bold text-2xl">Contas</h3>
                    <button data-modal-target="accounts" data-modal-toggle="accounts"
                        @click="$nextTick(() => { $refs.input.focus(); })"
                        class="flex items-center gap-2 bg-green-100 font-medium rounded-lg py-1 px-2 text-green-400 transition duration-500 ease-in-out hover:bg-green-50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus-circle font-bold text-green-600" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                        </svg>
                        <span>Nova conta</span>
                    </button>
                </div>

                <ul class="divide-y px-4">
                    <li class="flex items-center justify-between py-4">
                        <div class="flex items-center gap-6">
                            <img class="rounded-full w-12"
                                src="https://assets.organizze.com.br/institutions/logos/itau.png">
                            <h4 class="font-semibold">Itaú</h4>
                        </div>
                        <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m9 5 7 7-7 7" />
                        </svg>
                    </li>
                    <li class="flex items-center justify-between py-4">
                        <div class="flex items-center gap-6">
                            <img class="rounded-full w-12"
                                src="https://assets.organizze.com.br/institutions/logos/nubank.png">
                            <h4 class="font-semibold">Nubank</h4>
                        </div>
                        <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m9 5 7 7-7 7" />
                        </svg>
                    </li>
                    <li class="flex items-center justify-between py-4">
                        <div class="flex items-center gap-6">
                            <img class="rounded-full w-12"
                                src="https://assets.organizze.com.br/institutions/logos/will-bank.png">
                            <h4 class="font-semibold">Will Bank</h4>
                        </div>
                        <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m9 5 7 7-7 7" />
                        </svg>
                    </li>
                    <li class="flex items-center justify-between py-4">
                        <div class="flex items-center gap-6">
                            <img class="rounded-full w-12"
                                src="https://assets.organizze.com.br/institutions/logos/caju.png">
                            <h4 class="font-semibold">Home Office</h4>
                        </div>
                        <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m9 5 7 7-7 7" />
                        </svg>
                    </li>
                </ul>

                <div class="px-4 mt-8 flex gap-2 items-center text-gray-600">
                    <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13.5 8H4m0-2v13c0 .6.4 1 1 1h14c.6 0 1-.4 1-1V9c0-.6-.4-1-1-1h-5a1 1 0 0 1-.8-.4l-1.9-2.2a1 1 0 0 0-.8-.4H5a1 1 0 0 0-1 1Z" />
                    </svg>
                    <span>Contas arquivadas</span>
                </div>

                <ul class="text-sm">
                    <li class="flex items-center justify-between px-4 py-4">
                        <div class="flex items-center gap-3">
                            <div class="rounded-full p-4 bg-red-500"></div>
                            <h4>Conta incial</h4>
                        </div>
                        <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m9 5 7 7-7 7" />
                        </svg>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Main modal -->
    <div id="accounts" data-modal-placement="top-left" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="hidden mt-14 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow p-8">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Nova conta
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="accounts">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" method="post" action="#">
                        @csrf
                        <a href="#" class="flex flex-col items-center gap-2">
                            <svg class="border-4 border-gray-100 rounded-full text-gray-300 hover:border-green-400 trasaction duration-500 ease-in-out"
                                xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor"
                                viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8" />
                            </svg>
                            <p class="text-xs text-gray-400">escolha um ícone</p>
                        </a>
                        <div class="flex flex-col gap-2">
                            <label for="name" class="block text-sm font-medium text-gray-500">
                                Nome da conta
                            </label>
                            <input type="text" name="name" id="name" x-ref="input" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" />
                            <span class="text-xs text-gray-400">Dê um nome para identificar esta conta</span>
                        </div>
                        <div class="flex gap-2 border-b pt-4 pb-6">
                            <input type="checkbox" name="#" value="#"
                                class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 focus:ring-2" />
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-500">
                                Não somar no Saldo Geral
                            </label>
                        </div>
                        <div class="pt-4 text-center">
                            <button type="submit"
                                class="text-white rounded-lg bg-green-500 py-4 w-1/2 transition duration-700 ease-in-out hover:bg-green-700">
                                Adicionar conta
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection