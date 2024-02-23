<!-- Main modal -->
<div id="expense" data-modal-placement="top-left" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" x-data="{ 
        repeat: false,
        observation: false,
        tags: false,
        recurrence: '',
        fixedRecurrence: '',
        installmentsTimes: '',
        installmentsType: '',
        number: '',
        type: '',
        creditCardId: '',
        accountId: '{{ isset($accounts[0]) ? $accounts[0]->id : null }}',
        accountImage: '{{ isset($accounts[0]) ? $accounts[0]->logo->value : null }}',
        accountName: '{{ isset($accounts[0]) ? $accounts[0]->name : null }}',
        categoryId: '{{ isset($categories[0]) ? $categories[0]->id : null }}',
        categoryColor: '{{ isset($categories[0]) ? $categories[0]->color->value : null }}',
        categoryName: '{{ isset($categories[0]) ? $categories[0]->name : null }}',
        fixedExpenseType() {
            return ['Anual', 'Semestral', 'Trimestral', 'Bimetral', 'Mensal', 'Quinzenal', 'Semanal', 'Diário'];
        },
        today() {
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0');
            var yyyy = today.getFullYear();

            return dd + '/' + mm + '/' + yyyy;
        }
     }"
    class="hidden mt-14 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow p-8">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                <h3 class="text-lg font-semibold text-gray-900 ">
                    Nova despesa
                </h3>
                <button type="button"
                    x-on:click="repeat = false; observation = false; tags = false; recurrence = ''; numbers = ''; type = '';"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-red-700 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center transition durantion-700 ease-in-out"
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
                <form class="space-y-4" method="post" action="{{ route('expenses.store') }}">
                    @csrf
                    <div>
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-500 ">
                            Descrição
                        </label>
                        <input type="text" name="description" id="description"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                            placeholder="Farmácia, mercado..." required />
                    </div>
                    <div class="flex justify-between gap-2">
                        <div class="basis-1/2">
                            <label for="value" class="block mb-2 text-sm font-medium text-gray-500 ">Valor</label>
                            <input type="text" name="value" id="value" x-mask:dynamic="'R$ ' + $money($input, '.', ',')"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 "
                                placeholder="R$ 0,00" required />
                        </div>
                        <div class="basis-1/2">
                            <div>
                                <label for="due-date" class="block mb-2 text-sm font-medium text-gray-500 ">Data</label>

                                <div class="relative max-w-sm">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input datepicker datepicker-autohide datepicker-buttons datepicker-autoselect-today
                                        required datepicker-format="dd/mm/yyyy" type="text" id="due-date"
                                        name="due-date" :value="today()"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full ps-10 p-2.5 "
                                        placeholder="Selecione a data">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button x-data="{isPaid: true}" type="button" @click="isPaid = ! isPaid">
                        <input hidden name="is-paid" :value="isPaid" />
                        <svg x-show="isPaid" id="thumbs-up" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="text-green-500 mt-6 absolute top-[242px] right-6">
                            <path d="M7 10v12" />
                            <path
                                d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2h0a3.13 3.13 0 0 1 3 3.88Z" />
                        </svg>
                        <svg x-show="! isPaid" id="thumbs-down" xmlns="http://www.w3.org/2000/svg" width="18"
                            height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="mt-6 absolute top-[244px] right-7">
                            <path d="M17 14V2" />
                            <path
                                d="M9 18.12 10 14H4.17a2 2 0 0 1-1.92-2.56l2.33-8A2 2 0 0 1 6.5 2H20a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.76a2 2 0 0 0-1.79 1.11L12 22h0a3.13 3.13 0 0 1-3-3.88Z" />
                        </svg>
                    </button>

                    <div class="flex justify-between gap-2">
                        <input hidden name="account" :value="accountId" />
                        <input hidden name="credit-card" :value="creditCardId" />
                        <input hidden name="category" :value="categoryId" />
                        <div class="basis-1/2">
                            <label for="accountsBtn"
                                class="block mb-2 text-sm font-medium text-gray-500 ">Conta/Cartão</label>
                            <button id="accountsBtn" data-dropdown-toggle="accounts" x-ref="accountsBtn"
                                class="flex justify-between w-full items-center py-2.5 px-4 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg focus:ring-4 focus:outline-none focus:ring-green-400"
                                type="button">
                                <div class="flex gap-2 items-center">
                                    <img class="rounded w-[24px]" :src="accountImage" />
                                    <span x-text="accountName"></span>
                                </div>
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="accounts"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-56">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="accountsBtn">
                                    @foreach ($accounts as $index => $account)
                                    <li>
                                        <button type="button"
                                            @click="$refs.accountsBtn.click(); accountId = '{{ $account->id }}'; creditCardId = ''; accountImage = '{{ $accounts[$index]->logo }}'; accountName = '{{ $accounts[$index]->name }}';"
                                            class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            <div class="inline-flex items-center gap-2">
                                                <img class="w-[24px] rounded" src="{{ $account->logo }}">
                                                <span>{{ $account->name }}</span>
                                            </div>
                                        </button>
                                    </li>
                                    @endforeach
                                </ul>
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="accountsBtn">
                                    @foreach ($creditCards as $index => $creditCard)
                                    <li>
                                        <button type="button"
                                            @click="$refs.accountsBtn.click(); creditCardId = '{{ $creditCard->id }}'; accountId = ''; accountImage = '{{ $creditCards[$index]->logo }}'; accountName = '{{ $creditCards[$index]->name }}';"
                                            class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            <div class="inline-flex items-center gap-2">
                                                <img class="w-[24px] rounded" src="{{ $creditCard->logo }}">
                                                <span>{{ $creditCard->name }}</span>
                                            </div>
                                        </button>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="basis-1/2">
                            <label for="categoryBtn"
                                class="block mb-2 text-sm font-medium text-gray-500 ">Categoria</label>
                            <button id="categoryBtn" data-dropdown-toggle="category" x-ref="categoryBtn"
                                class="flex justify-between w-full items-center py-2.5 px-4 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg focus:ring-4 focus:outline-none focus:ring-green-400"
                                type="button">
                                <div class="flex gap-2 items-center">
                                    <div :style="`background-color: ${categoryColor}`" class="rounded-md p-3"></div>
                                    <span x-text="categoryName"></span>
                                </div>
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <div id="category" class="z-10 hidden bg-white rounded-lg shadow w-56">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="categoryBtn">
                                    @foreach (array_filter($categories, fn ($category) => $category->type->value ===
                                    'expense') as $index => $category)
                                    <li>
                                        <button type="button"
                                            @click="$refs.categoryBtn.click(); categoryId = '{{ $category->id }}'; categoryColor = '{{ $categories[$index]->color }}'; categoryName = '{{ $categories[$index]->name }}';"
                                            class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            <div class="inline-flex items-center gap-2">
                                                <div style="background-color: {{ $category->color->value }}"
                                                    class="rounded-full p-4"></div>
                                                <span>{{ $category->name }}</span>
                                            </div>
                                        </button>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div x-show="repeat">
                        <template x-if="repeat && recurrence == 'fixed'">
                            <input hidden name="fixed-recurrence" :value="fixedRecurrence" />
                        </template>
                        <template x-if="repeat && recurrence == 'installments'">
                            <input hidden name="installments-recurrence-times" :value="installmentsTimes" />
                        </template>
                        <template x-if="repeat && recurrence == 'installments'">
                            <input hidden name="installments-recurrence-type" :value="installmentsType" />
                        </template>
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

                        <select id="fixed" x-show="recurrence == $el.id" x-model="fixedRecurrence"
                            class="focus:border-green-500 focus:ring-green-500 mt-3 w-full rounded-lg">
                            <template x-for="(value, index) in fixedExpenseType()">
                                <option :value="value"><span x-text="value"></span></option>
                            </template>
                        </select>

                        <div id="installments" x-show="recurrence == $el.id" class="flex gap-2 mt-3">
                            <select x-model="installmentsTimes"
                                class="focus:border-green-500 focus:ring-green-500 w-full rounded-lg">
                                <option selected value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            <select x-model="installmentsType"
                                class="focus:border-green-500 focus:ring-green-500 w-full rounded-lg">
                                <option selected value="m">Meses</option>
                                <option value="y">Anos</option>
                                <option value="d">Dias</option>
                            </select>
                        </div>
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
            <div class="flex justify-center">
                <button type="submit"
                    class="text-green-700 flex justify-center items-center transition duration-700 ease-in-out hover:text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z"
                            stroke-width="0" fill="currentColor" />
                    </svg>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>