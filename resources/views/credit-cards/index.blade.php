@extends('layout')

@section('content')
<div x-data="{iconSource: '', days: [...Array(31 - 1 + 1).keys()].map(x => x + 1)}">
    <div class="flex justify-center gap-8 my-12 mx-8">
        <aside class="pt-2">
            <ul class="divide-y divide-gray-300 text-gray-500">
                <div class="flex flex-col gap-4 mb-4">
                    <li><a href="{{ route('categories.index') }}">Categorias</a></li>
                    <li><a href="{{ route('accounts.index') }}">Contas</a></li>
                    <li class="text-green-600"><a href="{{ route('credit-cards.index') }}">Cartões de crédito</a></li>
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
                    <h3 class="font-bold text-2xl">Cartões de Crédito</h3>
                    <button data-modal-target="credit-cards" data-modal-toggle="credit-cards"
                        @click="$nextTick(() => { $refs.input.focus(); })"
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
                    @foreach ($creditCards as $creditCard)
                    <li class="flex items-center justify-between py-6">
                        <div class="flex items-center gap-6">
                            <img class="rounded-lg w-16 h-12" src="{{ $creditCard->logo }}">
                            <h4 class="font-semibold">{{ $creditCard->name }}</h4>
                        </div>
                        <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m9 5 7 7-7 7" />
                        </svg>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- Main modal -->
    <div id="credit-cards" data-modal-placement="top-left" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="hidden mt-14 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow w-[500px] p-8 h-[830px]">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Novo cartão
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="credit-cards">
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
                    <form class="space-y-4" method="post" action="{{ route('credit-cards.store') }}">
                        @csrf
                        <input hidden name="logo" :value="iconSource" />
                        <button type="button" data-modal-target="credit-card-icon" data-modal-toggle="credit-card-icon"
                            class="flex flex-col items-center gap-2 w-full cursor-default">
                            <svg x-show="! iconSource"
                                class="cursor-pointer border-4 border-gray-100 rounded-full text-gray-300 hover:border-green-400 trasaction duration-500 ease-in-out"
                                xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor"
                                viewBox="0 0 16 16">
                                <circle cx="8" cy="8" r="8" />
                            </svg>
                            <img x-show="iconSource"
                                class="cursor-pointer border-4 border-gray-100 rounded-full hover:border-green-400 trasaction duration-500 ease-in-out w-16"
                                :src="iconSource" />
                            <p class="text-xs text-gray-400">escolha um ícone</p>
                        </button>
                        <div class="flex flex-col gap-2">
                            <label for="name" class="block text-sm font-medium text-gray-500">
                                Nome do cartão
                            </label>
                            <input type="text" name="name" id="name" x-ref="input" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" />
                            <span class="text-xs text-gray-400">Dê um nome para identificar este cartão</span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="limit" class="block text-sm font-medium text-gray-500">
                                Limite
                            </label>
                            <input x-mask:dynamic="'R$ ' + $money($input, '.', ',')" type="text" name="limit" id="limit"
                                required placeholder="R$ 0,00"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" />
                            <span class="text-xs text-gray-400">Dê um nome para identificar esta conta</span>
                        </div>
                        <div class="flex justify-between gap-2">
                            <div class="basis-1/2">
                                <label for="value" class="block mb-2 text-sm font-medium text-gray-500 ">Fecha
                                    dia</label>
                                <select id="closing-day" name="closing-day"
                                    class="w-full rounded-lg focus:border-green-500 focus:ring-green-500">
                                    <template x-for="(value, index) in days">
                                        <option x-text="value"></option>
                                    </template>
                                </select>
                            </div>
                            <div class="basis-1/2">
                                <label for="value" class="block mb-2 text-sm font-medium text-gray-500 ">Vence
                                    dia</label>
                                <select id="due-day" name="due-day"
                                    class="w-full rounded-lg focus:border-green-500 focus:ring-green-500">
                                    <template x-for="(value, index) in days">
                                        <option x-text="value"></option>
                                    </template>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="name" class="block text-sm font-medium text-gray-500">
                                Conta de pagamento padrão
                            </label>
                            <select id="default-account" name="default-account"
                                class="w-full rounded-lg focus:border-green-500 focus:ring-green-500">
                                @foreach ($accounts as $account)
                                <option value="{{ $account->id }}">{{ $account->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="pt-4 text-center">
                            @if ($accounts === [])
                            <button type="submit" disabled class="text-gray-500 rounded-lg bg-gray-100 py-4 w-1/2">
                                Adicionar cartão
                            </button>
                            @else
                            <button type="submit"
                                class="text-white rounded-lg bg-green-500 py-4 w-1/2 transition duration-700 ease-in-out hover:bg-green-700">
                                Adicionar cartão
                            </button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Icon modal -->
    <div id="credit-card-icon" data-modal-placement="top-left" data-modal-backdrop="static" tabindex="-1"
        aria-hidden="true"
        class="hidden mt-14 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow p-8 w-[500px] h-[830px]">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
                    <button type="button"
                        class="absolute left-8 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="credit-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-move-left">
                            <path d="M6 8L2 12L6 16" />
                            <path d="M2 12H22" />
                        </svg>
                        <span class="sr-only">Go back</span>
                    </button>
                    <h3 class="text-lg font-semibold text-gray-900 w-full text-center">
                        Selecione um ícone
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <div class="grid grid-cols-4">
                        @foreach ($logos as $logo)
                        <buton x-on:click="iconSource = $el.children[0].src" data-modal-hide="credit-card-icon"
                            class="flex flex-col items-center gap-2 cursor-pointer">
                            <img class="border-4 border-gray-100 rounded-full hover:border-green-400 trasaction duration-500 ease-in-out w-16"
                                src="{{ $logo }}">
                        </buton>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection