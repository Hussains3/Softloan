<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"/><!--imported template css-->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            <div class=" mx-auto">
                @livewire('side-bar')
                <div class="">
                    @livewire('navigation-menu')
                    <!-- Page Content -->
                    <main>
                        {{-- {{ $slot }} --}}

                        <div id="root">
                            <div id="underRoot" class="relative md:ml-64 bg-gray-100">
                                <div class="relative  pb-32 pt-12">
                                    <div class="px-4 md:px-10 mx-auto w-full">
                                        <div>
                                            <!-- Card stats -->
                                            <div class="flex flex-wrap">
                                                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                                    <div class="relative flex flex-col min-w-0 break-words bg-gradient-to-r from-green-400 to-blue-500 rounded mb-6 xl:mb-0 shadow-lg">
                                                        <div class="flex-auto p-4">
                                                        <div class="flex flex-wrap">
                                                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                            <h5 class="text-gray-500 uppercase font-bold text-xs">
                                                                Traffic
                                                            </h5>
                                                            <span class="font-semibold text-xl text-gray-800">
                                                                350,897
                                                            </span>
                                                            </div>
                                                            <div class="relative w-auto pl-4 flex-initial">
                                                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-white">
                                                                <i class="far fa-chart-bar"></i>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <p class="text-sm text-gray-500 mt-4">
                                                            <span class="text-green-500 mr-2">
                                                            <i class="fas fa-arrow-up"></i> 3.48%
                                                            </span>
                                                            <span class="whitespace-no-wrap">
                                                            Since last month
                                                            </span>
                                                        </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                                    <div class="relative flex flex-col min-w-0 break-words bg-gradient-to-r from-blue-500 to-purple-400 rounded mb-6 xl:mb-0 shadow-lg">
                                                        <div class="flex-auto p-4">
                                                        <div class="flex flex-wrap">
                                                            <div
                                                            class="relative w-full pr-4 max-w-full flex-grow flex-1"
                                                            >
                                                            <h5 class="text-gray-500 uppercase font-bold text-xs">
                                                                New users
                                                            </h5>
                                                            <span class="font-semibold text-xl text-gray-800">
                                                                2,356
                                                            </span>
                                                            </div>
                                                            <div class="relative w-auto pl-4 flex-initial">
                                                            <div
                                                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-white"
                                                            >
                                                                <i class="fas fa-chart-pie"></i>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <p class="text-sm text-gray-500 mt-4">
                                                            <span class="text-red-500 mr-2">
                                                            <i class="fas fa-arrow-down"></i> 3.48%
                                                            </span>
                                                            <span class="whitespace-no-wrap">
                                                            Since last week
                                                            </span>
                                                        </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                                    <div class="relative flex flex-col min-w-0 break-words bg-gradient-to-r from-purple-400 to-red-500 rounded mb-6 xl:mb-0 shadow-lg">
                                                        <div class="flex-auto p-4">
                                                        <div class="flex flex-wrap">
                                                            <div
                                                            class="relative w-full pr-4 max-w-full flex-grow flex-1"
                                                            >
                                                            <h5 class="text-gray-500 uppercase font-bold text-xs">
                                                                Sales
                                                            </h5>
                                                            <span class="font-semibold text-xl text-gray-800">
                                                                924
                                                            </span>
                                                            </div>
                                                            <div class="relative w-auto pl-4 flex-initial">
                                                            <div
                                                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-white"
                                                            >
                                                                <i class="fas fa-users"></i>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <p class="text-sm text-gray-500 mt-4">
                                                            <span class="text-orange-500 mr-2">
                                                            <i class="fas fa-arrow-down"></i> 1.10%
                                                            </span>
                                                            <span class="whitespace-no-wrap">
                                                            Since yesterday
                                                            </span>
                                                        </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                                    <div class="relative flex flex-col min-w-0 break-words bg-gradient-to-r from-red-400 to-orange-500 rounded mb-6 xl:mb-0 shadow-lg">
                                                        <div class="flex-auto p-4">
                                                        <div class="flex flex-wrap">
                                                            <div
                                                            class="relative w-full pr-4 max-w-full flex-grow flex-1"
                                                            >
                                                            <h5 class="text-gray-500 uppercase font-bold text-xs">
                                                                Performance
                                                            </h5>
                                                            <span class="font-semibold text-xl text-gray-800">
                                                                49,65%
                                                            </span>
                                                            </div>
                                                            <div class="relative w-auto pl-4 flex-initial">
                                                            <div
                                                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-400"
                                                            >
                                                                <i class="fas fa-percent"></i>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <p class="text-sm text-gray-500 mt-4">
                                                            <span class="text-green-500 mr-2">
                                                            <i class="fas fa-arrow-up"></i> 12%
                                                            </span>
                                                            <span class="whitespace-no-wrap">
                                                            Since last month
                                                            </span>
                                                        </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 md:px-10 mx-auto w-full -m-24">
                                    <div class="flex flex-wrap">
                                        <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
                                        <div
                                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-gray-800"
                                        >
                                            <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                                            <div class="flex flex-wrap items-center">
                                                <div class="relative w-full max-w-full flex-grow flex-1">
                                                <h6
                                                    class="uppercase text-gray-200 mb-1 text-xs font-semibold"
                                                >
                                                    Overview
                                                </h6>
                                                <h2 class="text-white text-xl font-semibold">
                                                    Sales value
                                                </h2>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="p-4 flex-auto">
                                            <!-- Chart -->
                                            <div class="relative h-350-px">
                                                <canvas id="line-chart"></canvas>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="w-full xl:w-4/12 px-4">
                                        <div
                                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
                                        >
                                            <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                                            <div class="flex flex-wrap items-center">
                                                <div class="relative w-full max-w-full flex-grow flex-1">
                                                <h6
                                                    class="uppercase text-gray-500 mb-1 text-xs font-semibold"
                                                >
                                                    Performance
                                                </h6>
                                                <h2 class="text-gray-800 text-xl font-semibold">
                                                    Total orders
                                                </h2>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="p-4 flex-auto">
                                            <!-- Chart -->
                                            <div class="relative h-350-px">
                                                <canvas id="bar-chart"></canvas>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap mt-4">
                                        <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
                                        <div
                                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
                                        >
                                            <div class="rounded-t mb-0 px-4 py-3 border-0">
                                            <div class="flex flex-wrap items-center">
                                                <div
                                                class="relative w-full px-4 max-w-full flex-grow flex-1"
                                                >
                                                <h3 class="font-semibold text-base text-gray-800">
                                                    Page visits
                                                </h3>
                                                </div>
                                                <div
                                                class="relative w-full px-4 max-w-full flex-grow flex-1 text-right"
                                                >
                                                <button
                                                    class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                    type="button"
                                                >
                                                    See all
                                                </button>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="block w-full overflow-x-auto">
                                            <!-- Projects table -->
                                            <table
                                                class="items-center w-full bg-transparent border-collapse"
                                            >
                                                <thead>
                                                <tr>
                                                    <th
                                                    class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left"
                                                    >
                                                    Page name
                                                    </th>
                                                    <th
                                                    class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left"
                                                    >
                                                    Visitors
                                                    </th>
                                                    <th
                                                    class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left"
                                                    >
                                                    Unique users
                                                    </th>
                                                    <th
                                                    class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left"
                                                    >
                                                    Bounce rate
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left"
                                                    >
                                                    /argon/
                                                    </th>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    4,569
                                                    </td>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    340
                                                    </td>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    <i class="fas fa-arrow-up text-green-500 mr-4"></i>
                                                    46,53%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left"
                                                    >
                                                    /argon/index.html
                                                    </th>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    3,985
                                                    </td>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    319
                                                    </td>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                                                    46,53%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left"
                                                    >
                                                    /argon/charts.html
                                                    </th>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    3,513
                                                    </td>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    294
                                                    </td>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                                                    36,49%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left"
                                                    >
                                                    /argon/tables.html
                                                    </th>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    2,050
                                                    </td>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    147
                                                    </td>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    <i class="fas fa-arrow-up text-green-500 mr-4"></i>
                                                    50,87%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left"
                                                    >
                                                    /argon/profile.html
                                                    </th>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    1,795
                                                    </td>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    190
                                                    </td>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    <i class="fas fa-arrow-down text-red-500 mr-4"></i>
                                                    46,53%
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="w-full xl:w-4/12 px-4">
                                        <div
                                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
                                        >
                                            <div class="rounded-t mb-0 px-4 py-3 border-0">
                                            <div class="flex flex-wrap items-center">
                                                <div
                                                class="relative w-full px-4 max-w-full flex-grow flex-1"
                                                >
                                                <h3 class="font-semibold text-base text-gray-800">
                                                    Social traffic
                                                </h3>
                                                </div>
                                                <div
                                                class="relative w-full px-4 max-w-full flex-grow flex-1 text-right"
                                                >
                                                <button
                                                    class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                    type="button"
                                                >
                                                    See all
                                                </button>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="block w-full overflow-x-auto">
                                            <!-- Projects table -->
                                            <table
                                                class="items-center w-full bg-transparent border-collapse"
                                            >
                                                <thead class="thead-light">
                                                <tr>
                                                    <th
                                                    class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left"
                                                    >
                                                    Referral
                                                    </th>
                                                    <th
                                                    class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left"
                                                    >
                                                    Visitors
                                                    </th>
                                                    <th
                                                    class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left min-w-140-px"
                                                    ></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left"
                                                    >
                                                    Facebook
                                                    </th>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    1,480
                                                    </td>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    <div class="flex items-center">
                                                        <span class="mr-2">60%</span>
                                                        <div class="relative w-full">
                                                        <div
                                                            class="overflow-hidden h-2 text-xs flex rounded bg-red-200"
                                                        >
                                                            <div
                                                            style="width: 60%;"
                                                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"
                                                            ></div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left"
                                                    >
                                                    Facebook
                                                    </th>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    5,480
                                                    </td>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    <div class="flex items-center">
                                                        <span class="mr-2">70%</span>
                                                        <div class="relative w-full">
                                                        <div
                                                            class="overflow-hidden h-2 text-xs flex rounded bg-green-200"
                                                        >
                                                            <div
                                                            style="width: 70%;"
                                                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500"
                                                            ></div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left"
                                                    >
                                                    Google
                                                    </th>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    4,807
                                                    </td>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    <div class="flex items-center">
                                                        <span class="mr-2">80%</span>
                                                        <div class="relative w-full">
                                                        <div
                                                            class="overflow-hidden h-2 text-xs flex rounded bg-purple-200"
                                                        >
                                                            <div
                                                            style="width: 80%;"
                                                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500"
                                                            ></div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left"
                                                    >
                                                    Instagram
                                                    </th>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    3,678
                                                    </td>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    <div class="flex items-center">
                                                        <span class="mr-2">75%</span>
                                                        <div class="relative w-full">
                                                        <div
                                                            class="overflow-hidden h-2 text-xs flex rounded bg-blue-200"
                                                        >
                                                            <div
                                                            style="width: 75%;"
                                                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500"
                                                            ></div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left"
                                                    >
                                                    twitter
                                                    </th>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    2,645
                                                    </td>
                                                    <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                                                    >
                                                    <div class="flex items-center">
                                                        <span class="mr-2">30%</span>
                                                        <div class="relative w-full">
                                                        <div
                                                            class="overflow-hidden h-2 text-xs flex rounded bg-orange-200"
                                                        >
                                                            <div
                                                            style="width: 30%;"
                                                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500"
                                                            ></div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <footer class="block py-4">
                                        <div class="text-sm text-gray-600 font-semibold py-1 text-center md:text-left">
                                            Copyright © <span id="get-current-year"></span>
                                            <a href="#" class="text-gray-600 hover:text-gray-800 text-sm font-semibold py-1">Softx Technology LTD.</a>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script type="text/javascript">
    // sidebar scripts
        // showHide();
        var sideNav = document.getElementById("sideNav");
        var appBrand = document.getElementById("appBrand");
        var button = document.getElementById("onOffBtn");
        var topNav = document.getElementById("topNav");
        var underRoot = document.getElementById("underRoot");
        var sideNavHr = document.getElementById("sideNavHr");
        var ecsbar = document.getElementById("example-collapse-sidebar");
        var menuText = ecsbar.querySelectorAll('ul li span');



        button.addEventListener("click", checkMulti);//on click event

        function checkMulti() {
            //sidebar
            if (sideNav.classList.contains("md:w-64")) {
                sideNav.classList.remove("md:w-64");
                sideNav.classList.add("md:w-20");
            } else {
                sideNav.classList.remove("md:w-20");
                sideNav.classList.add("md:w-64");
            }
            // top nav bar
            if (topNav.classList.contains("md:ml-64")) {
                topNav.classList.remove("md:ml-64");
                topNav.classList.add("md:ml-20");
            } else {
                topNav.classList.remove("md:ml-20");
                topNav.classList.add("md:ml-64");
            }
            // main container
            if (underRoot.classList.contains("md:ml-64")) {
                underRoot.classList.remove("md:ml-64");
                underRoot.classList.add("md:ml-20");
            } else {
                underRoot.classList.remove("md:ml-20");
                underRoot.classList.add("md:ml-64");
            }

            appBrand.classList.toggle('hidden');
            button.classList.toggle('ml-auto');
            menuText.forEach(element => {
                element.classList.toggle('hidden');
            });
        }
    // sidebar scripts ending
    </script>

