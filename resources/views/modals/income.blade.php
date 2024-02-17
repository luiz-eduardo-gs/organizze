<!-- Main modal -->
<div id="income" data-modal-placement="top-left" tabindex="-1" aria-hidden="true"
    class="mt-14 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-8">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Nova despesa
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="income">
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
                <form x-data="{ repeat: false, observation: false, tags: false }" class="space-y-4" action="#">
                    <div>
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Descrição</label>
                        <input type="text" name="description" id="description"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Farmácia, mercado..." required />
                    </div>
                    <div class="flex justify-between gap-2">
                        <div class="basis-1/2">
                            <label for="value"
                                class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Valor</label>
                            <input type="number" name="value" id="value"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="R$ 0,00" required />
                        </div>
                        <div class="basis-1/2">
                            <div>
                                <label for="date"
                                    class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Data</label>
                                <input type="text" name="date" id="date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required />
                            </div>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-hand-thumbs-up-fill text-green-500 mt-6 absolute top-[235px] right-8"
                        viewBox="0 0 16 16">
                        <path
                            d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a10 10 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733q.086.18.138.363c.077.27.113.567.113.856s-.036.586-.113.856c-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.2 3.2 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.8 4.8 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                    </svg>
                    <div class="flex justify-between gap-2">
                        <div class="basis-1/2">
                            <label for="account"
                                class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Conta/Cartão</label>
                            <select id="account" name="account" class="w-full rounded-lg">
                                <option selected value="itau">Itaú</option>
                                <option value="nubank">Nubank</option>
                            </select>
                        </div>
                        <div class="basis-1/2">
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Categoria</label>
                            <select id="category" name="category" class="w-full rounded-lg">
                                <option selected>Buscar a categoria...</option>
                            </select>
                        </div>
                    </div>
                    <div x-data="{installments: ''}" x-show="repeat">
                        <span class="text-gray-500">Repetir</span>
                        <div class="flex items-center gap-2 text-sm">
                            <input x-model="installments" id="fixed-income" type="radio" value="fixed"
                                name="installments"
                                class="checked:text-green-500 checked:ring-transparent focus:ring-transparent" />
                            <label for="fixed-income">é uma despesa fixa</label>
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <input x-model="installments" id="installments" type="radio" value="installments"
                                name="installments"
                                class="checked:text-green-500 checked:ring-transparent focus:ring-transparent" />
                            <label for="installments">é um lançamento parcelado em</label>
                        </div>

                        <select id="fixed" x-show="installments == $el.id">
                            <option selected value="monthly">Mensal</option>
                        </select>

                        <div id="installments" x-show="installments == $el.id">
                            oi
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