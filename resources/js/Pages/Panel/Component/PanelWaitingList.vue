<template>
  <div class="bg-white p-2 rounded-lg border">
    <div class="bg-[#3b5998] text-gray-200 p-1 2xl:p-2 rounded-md">
      <h1 class="font-bold text-center text-sm 2xl:text-xl 2xl:md-2">
        Panel Waiting List
      </h1>
    </div>

    <section class="">
      <div class="py-2 mx-auto w-full">
        <!-- Start coding here -->
        <div class="relative">
          <div
            class="flex flex-col items-center justify-between space-y-3 md:flex-row md:space-y-0 md:space-x-4"
          >
            <div class="w-full gap-x-2 md:w-1/2 flex">
              <form class="w-32 2xl:w-36">
                <select
                  id="countries"
                  class="bg-gray-50 border border-gray-300 pl-3 2xl:pl-4 text-gray-900 text-[11px] 2xl:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-0.5 2xl:p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
                  <option selected>Page size</option>
                  <option value="1">1</option>
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select>
              </form>
              <form class="flex items-center w-full">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                  <div
                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                  >
                    <svg
                      aria-hidden="true"
                      class="2xl:w-5 2xl:h-5 w-4 h-4 text-gray-500 dark:text-gray-400"
                      fill="currentColor"
                      viewbox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </div>
                  <input
                    type="text"
                    class="block w-full p-0.5 2xl:p-2 pl-8 2xl:pl-10 text-[12px] 2xl:text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500"
                    placeholder="Search"
                  />
                </div>
              </form>
            </div>
            <div
              class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3"
            >
            <Link :href="route('panel.draft')">
              <SecondaryButton>

                <svg
                  class="2xl:w-4 2xl:h-4 w-3 h-3 mr-2"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke="currentColor"
                    stroke-width="2"
                    d="M21 12c0 1.2-4 6-9 6s-9-4.8-9-6c0-1.2 4-6 9-6s9 4.8 9 6Z"
                  />
                  <path
                    stroke="currentColor"
                    stroke-width="2"
                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                  />
                </svg>
                View panel

              </SecondaryButton>
            </Link>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="overflow-x-auto">
      <table
        class="w-full text-[11px] 2xl:text-sm text-left text-gray-500 dark:text-gray-400"
      >
        <thead
          class="text-gray-100 uppercase bg-gray-600 dark:bg-gray-700 dark:text-gray-400"
        >
          <tr>
            <th scope="col" class="p-2">
              <div class="flex items-center justify-center">
                <input
                  id="default-checkbox"
                  type="checkbox"
                  value=""
                  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2"
                />
              </div>
            </th>
            <th scope="col" class="p-2">No</th>
            <th scope="col" class="p-2">Name</th>
            <th scope="col" class="p-2">Unit</th>
            <th scope="col" class="p-2">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b dark:border-gray-700">
            <th
              scope="row"
              class="p-2 font-medium text-gray-900 whitespace-nowrap dark:text-white"
            >
              <div class="flex items-center justify-center">
                <input
                  id="default-checkbox"
                  type="checkbox"
                  value=""
                  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2"
                />
              </div>
            </th>
            <th
              scope="row"
              class="p-2 font-medium text-gray-900 whitespace-nowrap dark:text-white"
            >
              1
            </th>
            <td class="p-2">LT AHMAD NOR ASYRAF BIN SAMA'ON</td>
            <td class="p-2">
              INSTITUT LATIHAN INSTRUKTUR TUDM - INSTITUT LATIHAN INSTRUKTUR
              TUDM
            </td>
            <td class="p-2 flex items-center">

              <span
                class="bg-blue-100 text-blue-800 text-[11px] 2xl:text-xs font-medium me-2 px-2.5 py-0.5 rounded"
                >Profile Overview</span
              >
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>


<script setup>
import SecondaryButton from "@/Components/SecondaryButton.vue";
import { Link } from "@inertiajs/vue3";
</script>
