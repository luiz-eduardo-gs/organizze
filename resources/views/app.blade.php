@extends('layout')

@include('modals.expense')
@include('modals.income')

@section('content')
<div class="flex bg-white mx-auto mt-8 h-56 divide-x p-8 rounded-lg w-[1079px]">
    <div class="w-2/3">
        <div class="flex flex-col pb-8">
            <p>Boa tarde,</p>
            <span class="flex gap-2 items-center">
                <span class="font-medium text-xl">Luiz!</span>
                <img ng-src="https://zze-front.organizze.com.br/6.7.0/images/application/dashboard/afternoon-a0414711f8.png"
                    src="https://zze-front.organizze.com.br/6.7.0/images/application/dashboard/afternoon-a0414711f8.png">
            </span>
        </div>
        <div class="flex justify-between gap-4 pr-8">
            <div class="flex flex-col items-center px-8 py-2 h-16 bg-white rounded-md shadow-lg">
                <span class="text-gray-500">receita mensal</span>
                <span class="text-green-600 font-medium text-lg">R$ 8.346,05</span>
            </div>
            <div class="flex flex-col items-center px-8 py-2 h-16 bg-white rounded-md shadow-lg">
                <span class="text-gray-500">despesa mensal</span>
                <span class="text-red-600 font-medium text-lg">R$ 8.040,53</span>
            </div>
            <div class="flex gap-2 items-center justify-center px-8 py-2 h-16 bg-white rounded-md shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                    <path
                        d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1z" />
                </svg>
                <span>ver relatórios</span>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-7 pl-8">
        <h3 class="font-medium text-lg">Acesso rápido</h3>
        <div class="flex gap-3">
            <button data-modal-target="expense" data-modal-toggle="expense"
                class="flex flex-col gap-2 items-center justify-center border border-gray-100 rounded-md py-4 px-4 w-20 transition duration-700 ease-in-out hover:bg-gray-50 cursor-pointer">
                <span class="text-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor"
                        class="bi bi-dash-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                    </svg>
                </span>
                <span class="uppercase text-sm">Despesa</span>
            </button>
            <button data-modal-target="income" data-modal-toggle="income"
                class="flex flex-col gap-2 items-center justify-center border border-gray-100 rounded-md py-4 px-4 w-20 transition duration-700 ease-in-out hover:bg-gray-50 cursor-pointer">
                <span class="text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor"
                        class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                    </svg>
                </span>
                <span class="uppercase text-sm">Receita</span>
            </button>
            <button
                class="flex flex-col gap-2 items-center justify-center border border-gray-100 rounded-md py-4 px-4 w-20 transition duration-700 ease-in-out hover:bg-gray-50 cursor-pointer">
                <span class="text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor"
                        class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                    </svg>
                </span>
                <span class="uppercase text-sm">Transf.</span>
            </button>
            <button
                class="flex flex-col gap-2 items-center justify-center border border-gray-100 rounded-md py-4 px-4 w-20 transition duration-700 ease-in-out hover:bg-gray-50 cursor-pointer">
                <span class="text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor"
                        class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                    </svg>
                </span>
                <span class="uppercase text-sm">IMPORTAR</span>
            </button>
        </div>
    </div>
</div>

<div class="flex justify-center gap-7">
    <div class="bg-white rounded-lg w-[550px] h-[500px] mt-8 p-8">
        <div class="divide-y">
            <div class="flex gap-2 mb-4">
                <div class="border rounded w-1 border-green-600 bg-green-600">&nbsp;</div>
                <div class="flex flex-col">
                    <span class="text-gray-500">Saldo geral</span>
                    <div class="flex items-center gap-2">
                        <span class="text-gray-500 text-xl">R$</span>
                        <span class="text-2xl font-medium">137.23</span>
                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.0002 2.41667C13.1585 2.41667 15.9752 4.19167 17.3502 7C15.9752 9.80833 13.1668 11.5833 10.0002 11.5833C6.8335 11.5833 4.02516 9.80833 2.65016 7C4.02516 4.19167 6.84183 2.41667 10.0002 2.41667ZM10.0002 0.75C5.8335 0.75 2.27516 3.34167 0.833496 7C2.27516 10.6583 5.8335 13.25 10.0002 13.25C14.1668 13.25 17.7252 10.6583 19.1668 7C17.7252 3.34167 14.1668 0.75 10.0002 0.75ZM10.0002 4.91667C11.1502 4.91667 12.0835 5.85 12.0835 7C12.0835 8.15 11.1502 9.08333 10.0002 9.08333C8.85016 9.08333 7.91683 8.15 7.91683 7C7.91683 5.85 8.85016 4.91667 10.0002 4.91667ZM10.0002 3.25C7.9335 3.25 6.25016 4.93333 6.25016 7C6.25016 9.06667 7.9335 10.75 10.0002 10.75C12.0668 10.75 13.7502 9.06667 13.7502 7C13.7502 4.93333 12.0668 3.25 10.0002 3.25Z"
                                fill="#858782"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="pt-4">
                <h4 class="font-semibold text-lg">Minhas contas</h4>
                <ul class="divide-y">
                    <li class="flex justify-between items-center py-4">
                        <div class="flex gap-2">
                            <img class="rounded-full w-12 h-12"
                                src="https://assets.organizze.com.br/institutions/logos/itau.png">
                            <div>
                                <h5 class="font-semibold">Itaú</h5>
                                <p class="text-gray-500 text-sm">Conta manual</p>
                            </div>
                        </div>
                        <span class="text-blue-600 text-xl font-semibold">R$ 105,57</span>
                    </li>
                    <li class="flex justify-between items-center py-4">
                        <div class="flex gap-2">
                            <img class="rounded-full w-12 h-12"
                                src="https://assets.organizze.com.br/institutions/logos/nubank.png">
                            <div>
                                <h5 class="font-semibold">Nubank</h5>
                                <p class="text-gray-500 text-sm">Conta manual</p>
                            </div>
                        </div>
                        <span class="text-blue-600 text-xl font-semibold">R$ 31,66</span>
                    </li>
                    <li class="flex justify-between items-center py-4">
                        <div class="flex gap-2">
                            <img class="rounded-full w-12 h-12"
                                src="https://assets.organizze.com.br/institutions/logos/will-bank.png">
                            <div>
                                <h5 class="font-semibold">Will Bank</h5>
                                <p class="text-gray-500 text-sm">Conta manual</p>
                            </div>
                        </div>
                        <span class="text-blue-600 text-xl font-semibold">R$ 0,00</span>
                    </li>
                </ul>
            </div>
        </div>

        <button
            class="text-gray-400 border rounded-md border-gray-200 w-full py-2 transition duration-700 ease-in-out hover:bg-green-600 hover:text-white">Gerenciar
            contas</button>
    </div>

    <div class="bg-white rounded-lg w-[500px] mt-8 p-8">
        <div class="divide-y">
            <div class="flex gap-2 mb-4">
                <div class="border rounded w-1 border-green-600 bg-green-600">&nbsp;</div>
                <div class="flex flex-col">
                    <span class="text-gray-500">Faturas de Março</span>
                    <div class="flex items-center gap-2">
                        <span class="text-gray-500 text-xl">R$</span>
                        <span class="text-2xl font-medium">-1.746,04</span>
                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.0002 2.41667C13.1585 2.41667 15.9752 4.19167 17.3502 7C15.9752 9.80833 13.1668 11.5833 10.0002 11.5833C6.8335 11.5833 4.02516 9.80833 2.65016 7C4.02516 4.19167 6.84183 2.41667 10.0002 2.41667ZM10.0002 0.75C5.8335 0.75 2.27516 3.34167 0.833496 7C2.27516 10.6583 5.8335 13.25 10.0002 13.25C14.1668 13.25 17.7252 10.6583 19.1668 7C17.7252 3.34167 14.1668 0.75 10.0002 0.75ZM10.0002 4.91667C11.1502 4.91667 12.0835 5.85 12.0835 7C12.0835 8.15 11.1502 9.08333 10.0002 9.08333C8.85016 9.08333 7.91683 8.15 7.91683 7C7.91683 5.85 8.85016 4.91667 10.0002 4.91667ZM10.0002 3.25C7.9335 3.25 6.25016 4.93333 6.25016 7C6.25016 9.06667 7.9335 10.75 10.0002 10.75C12.0668 10.75 13.7502 9.06667 13.7502 7C13.7502 4.93333 12.0668 3.25 10.0002 3.25Z"
                                fill="#858782"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="pt-4">
                <h4 class="font-semibold text-lg">Meus cartões</h4>
                <ul class="divide-y">
                    <li>
                        <div class="flex justify-between items-center py-4">
                            <div class="flex gap-2">
                                <img class="rounded-md w-16 h-14"
                                    src="https://assets.organizze.com.br/institutions/logos/nubank.png">
                                <div>
                                    <h5 class="font-semibold">Itaú</h5>
                                    <p class="text-gray-500 text-sm">Conta manual</p>
                                </div>
                            </div>

                            <button
                                class="text-sm bg-green-200 text-green-600 py-2 px-3 rounded-md transition duration-700 ease-in-out hover:bg-green-100 hover:text-green-500">Ver
                                fatura</button>
                        </div>
                        <div class="bg-zinc-100 rounded-3xl mb-4 flex justify-between p-4">
                            <div class="pl-14">
                                <span class="text-gray-500">Limite Disponível</span>
                                <div>
                                    <span class="text-gray-500 text-lg">R$</span>
                                    <span class="text-xl font-semibold">9633,91</span>
                                </div>
                            </div>
                            <div class="pr-6">
                                <span class="text-gray-500">Fatura atual <span class="text-gray-400 text-xs">(Venc.
                                        1/3)</span></span>
                                <div>
                                    <span class="text-gray-500 text-lg">R$</span>
                                    <span class="text-xl font-semibold">-366,09</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between items-center py-4">
                            <div class="flex gap-2">
                                <img class="rounded-md w-16 h-14"
                                    src="https://assets.organizze.com.br/institutions/logos/itau.png">
                                <div>
                                    <h5 class="font-semibold">Itaú</h5>
                                    <p class="text-gray-500 text-sm">Conta manual</p>
                                </div>
                            </div>

                            <button
                                class="text-sm bg-green-200 text-green-600 py-2 px-3 rounded-md transition duration-700 ease-in-out hover:bg-green-100 hover:text-green-500">Ver
                                fatura</button>
                        </div>
                        <div class="bg-zinc-100 rounded-3xl mb-4 flex justify-between p-4">
                            <div class="pl-14">
                                <span class="text-gray-500">Limite Disponível</span>
                                <div>
                                    <span class="text-gray-500 text-lg">R$</span>
                                    <span class="text-xl font-semibold">9633,91</span>
                                </div>
                            </div>
                            <div class="pr-6">
                                <span class="text-gray-500">Fatura atual <span class="text-gray-400 text-xs">(Venc.
                                        1/3)</span></span>
                                <div>
                                    <span class="text-gray-500 text-lg">R$</span>
                                    <span class="text-xl font-semibold">-366,09</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between items-center py-4">
                            <div class="flex gap-2">
                                <img class="rounded-md w-16 h-14"
                                    src="https://assets.organizze.com.br/institutions/logos/will-bank.png">
                                <div>
                                    <h5 class="font-semibold">Itaú</h5>
                                    <p class="text-gray-500 text-sm">Conta manual</p>
                                </div>
                            </div>

                            <button
                                class="text-sm bg-green-200 text-green-600 py-2 px-3 rounded-md transition duration-700 ease-in-out hover:bg-green-100 hover:text-green-500">Ver
                                fatura</button>
                        </div>
                        <div class="bg-zinc-100 rounded-3xl mb-4 flex justify-between p-4">
                            <div class="pl-14">
                                <span class="text-gray-500">Limite Disponível</span>
                                <div>
                                    <span class="text-gray-500 text-lg">R$</span>
                                    <span class="text-xl font-semibold">9633,91</span>
                                </div>
                            </div>
                            <div class="pr-6">
                                <span class="text-gray-500">Fatura atual <span class="text-gray-400 text-xs">(Venc.
                                        1/3)</span></span>
                                <div>
                                    <span class="text-gray-500 text-lg">R$</span>
                                    <span class="text-xl font-semibold">-366,09</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <button
            class="text-gray-400 border rounded-md border-gray-200 w-full py-2 transition duration-700 ease-in-out hover:bg-green-600 hover:text-white">Gerenciar
            cartões</button>
    </div>
</div>
@endsection