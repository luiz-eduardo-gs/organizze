<!-- Main modal -->
<div id="expense" data-modal-placement="top-left" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" x-data="{ 
        repeat: false,
        observation: false,
        tags: false,
        recurrence: '',
        number: '',
        type: '',
     }"
    class="hidden mt-14 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-8">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Nova despesa
                </h3>
                <button type="button"
                    x-on:click="repeat = false; observation = false; tags = false; recurrence = ''; numbers = ''; type = '';"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="expense">
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
                <form class="space-y-4" method="post" action="{{ route('transactions.post') }}">
                    @csrf
                    <div>
                        <label for=" description" class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">
                            Descrição
                        </label>
                        <input type="text" name="description" id="description"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Farmácia, mercado..." required />
                    </div>
                    <div class="flex justify-between gap-2">
                        <div class="basis-1/2">
                            <label for="value"
                                class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Valor</label>
                            <input type="number" name="value" id="value"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="R$ 0,00" required />
                        </div>
                        <div class="basis-1/2">
                            <div>
                                <label for="due-date"
                                    class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Data</label>

                                <div class="relative max-w-sm">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input datepicker datepicker-autohide datepicker-buttons datepicker-autoselect-today
                                        datepicker-format="dd/mm/yyyy" type="text" id="due-date" name="due-date"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                        placeholder="Selecione a data">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button x-data="{isPaid: true}" type="button" @click="isPaid = ! isPaid">
                        <input hidden name="is-paid" :value="isPaid" />
                        <svg x-show="isPaid" id="thumbs-up" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor"
                            class="bi bi-hand-thumbs-up-fill text-green-500 mt-6 absolute top-[39%] right-8"
                            viewBox="0 0 16 16">
                            <path
                                d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a10 10 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733q.086.18.138.363c.077.27.113.567.113.856s-.036.586-.113.856c-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.2 3.2 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.8 4.8 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                        </svg>
                        <svg x-show="! isPaid" id="thumbs-down" xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor"
                            class="bi bi-hand-thumbs-down-fill mt-6 absolute top-[39%] right-8" viewBox="0 0 16 16">
                            <path
                                d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.38 1.38 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51q.205.03.443.051c.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.9 1.9 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2 2 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.2 3.2 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.8 4.8 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591" />
                        </svg>
                    </button>
                    <div class="flex justify-between gap-2">
                        <div class="basis-1/2">
                            <label for="account"
                                class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Conta/Cartão</label>
                            <select id="account" name="account"
                                class="w-full rounded-lg focus:border-green-500 focus:ring-green-500">
                                <option selected value="itau">Itaú</option>
                                <option value="nubank">Nubank</option>
                            </select>
                        </div>
                        <div class="basis-1/2">
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Categoria</label>
                            <select id="category" name="category"
                                class="w-full rounded-lg focus:border-green-500 focus:ring-green-500">
                                <option selected>Buscar a categoria...</option>
                            </select>
                        </div>
                    </div>
                    <div x-show="repeat">
                        <span class="text-gray-500">Repetir</span>
                        <div class="flex items-center gap-2 text-sm">
                            <input x-model="recurrence" id="fixed-expense" type="radio" value="fixed"
                                class="checked:text-green-500 checked:ring-transparent focus:ring-transparent" />
                            <label for="fixed-expense">é uma despesa fixa</label>
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <input x-model="recurrence" id="installments" type="radio" value="installments"
                                class="checked:text-green-500 checked:ring-transparent focus:ring-transparent" />
                            <label for="installments">é um lançamento parcelado em</label>
                        </div>

                        <select id="fixed" name="recurrence[]" x-show="recurrence == $el.id"
                            class="focus:border-green-500 focus:ring-green-500 mt-3 w-full rounded-lg">
                            <option value="monthly">Mensal</option>
                        </select>

                        <div id="installments" x-show="recurrence == $el.id" class="flex gap-2 mt-3">
                            <select x-model="number" name="recurrence[]"
                                class="focus:border-green-500 focus:ring-green-500 w-full rounded-lg">
                                <template x-for="number in [2, 3]">
                                    <option :value="number" x-text="number"></option>
                                </template>
                            </select>
                            <select x-model="type" name="recurrence[]"
                                class="focus:border-green-500 focus:ring-green-500 w-full rounded-lg">
                                <template x-for="type in ['Meses', 'Anos', 'Dias']">
                                    <option :value="type.toLowerCase()" x-text="type"></option>
                                </template>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-between px-8">
                        <button type="button" @click="repeat = ! repeat"
                            class="border rounded-full p-3 text-gray-500 transition duration-500 ease-in-out hover:border-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-repeat" viewBox="0 0 16 16">
                                <path
                                    d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192m3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
                            </svg>
                        </button>
                        <button type="button"
                            class="border rounded-full p-3 text-gray-500 transition duration-500 ease-in-out hover:border-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-card-text" viewBox="0 0 16 16">
                                <path
                                    d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z" />
                                <path
                                    d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8m0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5" />
                            </svg>
                        </button>
                        <button type="button"
                            class="border rounded-full p-3 text-gray-500 transition duration-500 ease-in-out hover:border-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-paperclip" viewBox="0 0 16 16">
                                <path
                                    d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0z" />
                            </svg>
                        </button>
                        <button type="button"
                            class="border rounded-full p-3 text-gray-500 transition duration-500 ease-in-out hover:border-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-tag-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                            </svg>
                        </button>
                    </div>
                    <div>
                        <button type="submit"
                            class="text-green-500 flex justify-center items-center w-full transition duration-700 ease-in-out hover:text-green-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" fill="currentColor"
                                class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>