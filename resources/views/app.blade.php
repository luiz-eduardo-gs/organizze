<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-zinc-100">
    <header class="bg-green-500">
        <nav class="h-14 flex justify-between items-center mx-auto text-white w-[1079px]">
            <svg width="145" height="32" viewBox="0 0 145 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.5"
                    d="M16.0001 0V8C11.5824 8 8.00007 11.5823 8.00007 16H0C0 7.16463 7.16093 0 16.0001 0Z"
                    fill="#FBF7EA"></path>
                <path opacity="0.75"
                    d="M16.0001 32V24C11.5824 24 8.00007 20.4177 8.00007 16H0C0 24.8354 7.16093 32 16.0001 32Z"
                    fill="#FBF7EA"></path>
                <path
                    d="M32.0001 16C32.0001 24.8354 24.8392 32 16 32V24C20.4177 24 24.0001 20.4177 24.0001 16C24.0001 11.5823 20.4177 8 16 8V0C24.8392 0 32.0001 7.16463 32.0001 16Z"
                    fill="#FBF7EA"></path>
                <path
                    d="M44.2714 8.43652C42.2056 8.43652 40.5273 9.12514 39.2328 10.5287C37.9647 11.9323 37.3325 13.7234 37.3325 15.9549C37.3325 18.1863 37.9647 19.9511 39.2328 21.3283C40.5273 22.6792 42.2056 23.3678 44.2714 23.3678C46.3373 23.3678 47.9892 22.6792 49.2273 21.302C50.4954 19.9248 51.1276 18.1336 51.1276 15.9285C51.1276 13.7234 50.4954 11.9059 49.2273 10.5287C47.9892 9.12514 46.3373 8.43652 44.2714 8.43652ZM44.2451 21.2456C41.4078 21.2456 39.786 19.1797 39.786 15.9022C39.786 12.6247 41.5207 10.5588 44.2451 10.5588C46.9695 10.5588 48.6779 12.651 48.6779 15.8758C48.6779 19.1007 46.9695 21.2493 44.2451 21.2493V21.2456Z"
                    fill="#FBF7EA"></path>
                <path
                    d="M56.2227 11.6351H56.0572V8.71506H53.6602V23.0932H56.0572V16.4554C56.0572 12.6247 57.6527 10.6981 60.8738 10.6417V8.49304C58.5896 8.49304 57.0205 9.53914 56.219 11.6351H56.2227Z"
                    fill="#FBF7EA"></path>
                <path
                    d="M69.7954 20.3124H65.9948C64.7003 20.3124 64.0682 19.8984 64.0682 19.0743C64.0682 18.3293 64.4821 17.889 65.3062 17.7536C65.9384 17.8928 66.5743 17.9756 67.2592 17.9756C70.4539 17.9756 72.5725 16.0753 72.5725 13.2907C72.5725 11.9398 72.1322 10.8109 71.2517 9.93042C71.5527 9.07623 72.5988 8.49674 73.9234 8.49674V6.51367C71.9666 6.51367 70.3975 7.50709 69.8217 9.04613C69.1331 8.6322 68.2262 8.44029 67.0973 8.44029C65.5018 8.44029 64.2074 8.88056 63.1876 9.76109C62.198 10.6153 61.7013 11.7705 61.7013 13.2042C61.7013 14.9125 62.3899 16.207 63.7671 17.0612V17.2267C62.6382 17.5579 61.8969 18.4648 61.8969 19.5974C61.8969 20.4779 62.4764 21.3058 63.3269 21.5541V21.746C62.006 22.16 61.1519 23.2061 61.1519 24.5569C61.1519 26.7319 63.1349 28.0828 67.2102 28.0828C71.5339 28.0828 74.1228 26.6491 74.1228 23.8947C74.1228 21.6632 72.5273 20.3124 69.7992 20.3124H69.7954ZM67.1538 10.175C69.024 10.175 70.2357 11.3302 70.2357 13.2343C70.2357 15.1383 69.1068 16.2634 67.1538 16.2634C65.2008 16.2634 64.0682 15.1346 64.0682 13.2343C64.0682 11.334 65.2535 10.175 67.1538 10.175ZM67.3194 26.2917C64.6477 26.2917 63.3269 25.5767 63.3269 24.1694C63.3269 22.9314 64.1246 22.2954 65.6938 22.2954H69.5771C71.0372 22.2954 71.7521 22.8448 71.7521 23.9775C71.7521 25.5203 70.2658 26.2917 67.3194 26.2917Z"
                    fill="#FBF7EA"></path>
                <path
                    d="M86.9211 20.1995V13.6444C86.9211 10.3669 84.9681 8.43652 81.3594 8.43652C79.7338 8.43652 78.3866 8.85045 77.3104 9.67453C76.2643 10.4723 75.6848 11.5485 75.5757 12.8994H77.8899C77.9727 11.3566 79.2672 10.3368 81.2503 10.3368C83.4516 10.3368 84.5541 11.3829 84.5541 13.4488V14.5212H80.7272C77.175 14.5212 74.9736 16.1468 74.9736 19.1496C74.9736 21.6557 76.9003 23.3641 79.7639 23.3641C81.9953 23.3641 83.8956 22.2916 84.5278 20.7187H84.6934C84.6934 22.4008 85.4911 23.2512 87.1167 23.2512C87.5307 23.2512 87.9446 23.1948 88.3284 23.0856V21.2418C88.1892 21.2681 87.9973 21.2982 87.8053 21.2982C86.9813 21.2982 86.9248 20.7752 86.9248 20.1957L86.9211 20.1995ZM84.5541 17.0311C84.5541 19.5936 82.8194 21.3848 80.2606 21.3848C78.5259 21.3848 77.4233 20.4478 77.4233 18.8787C77.4233 17.2267 78.5786 16.2597 80.9191 16.2597H84.5541V17.0311Z"
                    fill="#FBF7EA"></path>
                <path
                    d="M98.044 8.43652C95.869 8.43652 94.0779 9.53906 93.1973 11.3829H93.0054V8.71122H90.6084V23.0932H93.0054V15.571C93.0054 12.5682 94.7138 10.5588 97.2463 10.5588C99.504 10.5588 100.633 11.8796 100.633 14.4986V23.0932H103.03V14.2503C103.03 10.698 101.16 8.43652 98.0478 8.43652H98.044Z"
                    fill="#FBF7EA"></path>
                <path d="M107.847 8.71497H105.48V23.0969H107.847V8.71497Z" fill="#FBF7EA"></path>
                <path
                    d="M129.74 10.5588V8.71497H110.466V10.698H118.368L110.492 21.3057V23.0969H129.849V21.1138H121.864L129.74 10.5626V10.5588ZM119.173 21.1101H113.329L121.1 10.698H126.902L119.17 21.1101H119.173Z"
                    fill="#FBF7EA"></path>
                <path
                    d="M141.604 18.7696C141.247 20.3387 139.704 21.4149 137.612 21.4149C134.857 21.4149 133.153 19.5711 133.179 16.4027H143.806C143.862 15.9888 143.889 15.4921 143.889 14.9163C143.889 10.9765 141.522 8.44409 137.529 8.44409C135.49 8.44409 133.838 9.13271 132.6 10.5099C131.362 11.8608 130.756 13.6783 130.756 15.9361C130.756 18.1939 131.388 20.0114 132.63 21.3622C133.868 22.7131 135.52 23.3717 137.559 23.3717C139.268 23.3717 140.698 22.9577 141.853 22.1035C143.038 21.2494 143.753 20.1468 144.001 18.7696H141.604ZM137.503 10.3933C140.062 10.3933 141.522 11.9098 141.522 14.6341H133.206C133.288 12.0716 134.997 10.3933 137.499 10.3933H137.503Z"
                    fill="#FBF7EA"></path>
                <path d="M107.847 3.92102H105.48V6.29167H107.847V3.92102Z" fill="#FBF7EA"></path>
            </svg>

            <ul class="flex p-4 gap-8 text-sm">
                <li>visão geral</li>
                <li>lançamentos</li>
                <li>relatórios</li>
                <li>limite de gastos</li>
            </ul>

            <div class="flex gap-4 items-center">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.135 11.1858L15.6373 10.321C15.7885 9.50533 15.7885 8.66861 15.6373 7.85299L17.135 6.98814C17.3072 6.88971 17.3846 6.6858 17.3283 6.49596C16.9381 5.24439 16.2737 4.11236 15.4053 3.17017C15.2717 3.02603 15.0537 2.99088 14.885 3.08932L13.3873 3.95416C12.758 3.41275 12.0338 2.99439 11.2498 2.72017V0.994003C11.2498 0.797128 11.1127 0.624862 10.9194 0.582675C9.62912 0.294393 8.30725 0.308456 7.08029 0.582675C6.88693 0.624862 6.74982 0.797128 6.74982 0.994003V2.72369C5.96936 3.00142 5.24514 3.41978 4.61232 3.95767L3.11818 3.09283C2.94592 2.99439 2.73147 3.02603 2.59787 3.17369C1.72951 4.11236 1.06506 5.24439 0.674825 6.49947C0.615059 6.68931 0.695918 6.89322 0.868184 6.99166L2.36584 7.8565C2.21467 8.67213 2.21467 9.50885 2.36584 10.3245L0.868184 11.1893C0.695918 11.2878 0.618575 11.4917 0.674825 11.6815C1.06506 12.9331 1.72951 14.0651 2.59787 15.0073C2.73147 15.1514 2.94943 15.1866 3.11818 15.0881L4.61584 14.2233C5.24514 14.7647 5.96936 15.1831 6.75334 15.4573V17.187C6.75334 17.3838 6.89045 17.5561 7.08381 17.5983C8.37404 17.8866 9.69592 17.8725 10.9229 17.5983C11.1162 17.5561 11.2533 17.3838 11.2533 17.187V15.4573C12.0338 15.1795 12.758 14.7612 13.3908 14.2233L14.8885 15.0881C15.0608 15.1866 15.2752 15.1549 15.4088 15.0073C16.2772 14.0686 16.9416 12.9366 17.3319 11.6815C17.3846 11.4881 17.3072 11.2842 17.135 11.1858V11.1858ZM8.99982 11.8995C7.44943 11.8995 6.18732 10.6374 6.18732 9.08697C6.18732 7.53658 7.44943 6.27447 8.99982 6.27447C10.5502 6.27447 11.8123 7.53658 11.8123 9.08697C11.8123 10.6374 10.5502 11.8995 8.99982 11.8995Z"
                        fill="#FEFDF9"></path>
                </svg>

                <svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.99953 18.0869C9.26096 18.0869 10.2842 17.0797 10.2842 15.8369H5.71489C5.71489 17.0797 6.73811 18.0869 7.99953 18.0869ZM15.692 12.8237C15.002 12.0938 13.711 10.9959 13.711 7.39941C13.711 4.66777 11.7652 2.48105 9.14168 1.94457V1.21191C9.14168 0.590703 8.63025 0.0869141 7.99953 0.0869141C7.36882 0.0869141 6.85739 0.590703 6.85739 1.21191V1.94457C4.23382 2.48105 2.28811 4.66777 2.28811 7.39941C2.28811 10.9959 0.997036 12.0938 0.307036 12.8237C0.0927507 13.0504 -0.0022493 13.3215 -0.000463589 13.5869C0.00346498 14.1635 0.463108 14.7119 1.14596 14.7119H14.8531C15.536 14.7119 15.996 14.1635 15.9995 13.5869C16.0013 13.3215 15.9063 13.0501 15.692 12.8237Z"
                        fill="#FEFDF9"></path>
                </svg>

                <img class="rounded-full" height="29" width="29"
                    src="https://s3.amazonaws.com/production.organizze/uploads/users/5281387/avatars/xlarge.jpg?1703778867"
                    alt="Xlarge">
            </div>
        </nav>
    </header>

    <main>
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
                    <div
                        class="flex flex-col gap-2 items-center justify-center border border-gray-100 rounded-md py-4 px-4 w-20">
                        <span class="text-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor"
                                class="bi bi-dash-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                            </svg>
                        </span>
                        <span class="uppercase text-sm">Despesa</span>
                    </div>
                    <div
                        class="flex flex-col gap-2 items-center justify-center border border-gray-100 rounded-md py-4 px-4 w-20">
                        <span class="text-green-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor"
                                class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                            </svg>
                        </span>
                        <span class="uppercase text-sm">Receita</span>
                    </div>
                    <div
                        class="flex flex-col gap-2 items-center justify-center border border-gray-100 rounded-md py-4 px-4 w-20">
                        <span class="text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor"
                                class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                            </svg>
                        </span>
                        <span class="uppercase text-sm">Transf.</span>
                    </div>
                    <div
                        class="flex flex-col gap-2 items-center justify-center border border-gray-100 rounded-md py-4 px-4 w-20">
                        <span class="text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor"
                                class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                            </svg>
                        </span>
                        <span class="uppercase text-sm">IMPORTAR</span>
                    </div>
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
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
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
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
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
    </main>
</body>

</html>