<template>
  <Sidebar />
  <AuthenticatedLayout>
    <Head title="Admin Portal" />

    <section>
      <div class="grid gap-4 mb-3 grid-cols-2">
        <div
          class="px-3 py-5 2xl:px-5 2xl:py-10 bg-red-600 text-white w-full border border-gray-200 shadow rounded-xl relative"
        >
          <div>
            <h3 class="text-xl 2xl:text-3xl font-bold tracking-tight">
              Number of Registered User
            </h3>
          </div>

          <div
            class="w-full absolute top-3 text-white 2xl:top-6 right-4 dark:text-gray-400 font-bold text-4xl 2xl:text-6xl flex justify-end"
          >
            101
          </div>
        </div>

        <div
          class="px-3 py-5 2xl:px-5 2xl:py-10 bg-emerald-500 text-white w-full border border-gray-200 shadow rounded-xl relative"
        >
          <div>
            <h3 class="text-xl 2xl:text-3xl font-bold tracking-tight">
              Number of Medical Records
            </h3>
          </div>

          <div
            class="w-full absolute top-3 2xl:top-6 text-white right-4 dark:text-gray-400 font-bold text-4xl 2xl:text-6xl flex justify-end"
          >
            101
          </div>
        </div>
      </div>
    </section>

    <section
      class="p-2 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
    >
      <div class="border-b border-gray-200 dark:border-gray-700">
        <ul
          class="flex flex-wrap -mb-px text-xs 2xl:text-sm font-medium text-center"
          id="default-styled-tab"
          data-tabs-toggle="#default-styled-tab-content"
          data-tabs-active-classes="text-[#3b5998] hover:text-[#3b5998] dark:text-purple-500 dark:hover:text-purple-500 border-[#3b5998] dark:border-purple-500"
          data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
          role="tablist"
        >
          <li class="me-2" role="presentation">
            <button
              class="inline-block p-4 border-b-2 rounded-t-lg"
              id="profile-styled-tab"
              data-tabs-target="#styled-profile"
              type="button"
              role="tab"
              aria-controls="profile"
              aria-selected="false"
            >
              User Management
            </button>
          </li>
          <li class="me-2" role="presentation">
            <button
              class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
              id="dashboard-styled-tab"
              data-tabs-target="#styled-dashboard"
              type="button"
              role="tab"
              aria-controls="dashboard"
              aria-selected="false"
            >
              Unit List
            </button>
          </li>
        </ul>
      </div>
      <div id="default-styled-tab-content">
        <div
          class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800"
          id="styled-profile"
          role="tabpanel"
          aria-labelledby="profile-tab"
        >
          <div class="mx-auto">
            <h1 class="font-bold text-lg 2xl:text-2xl mb-2">User Management</h1>
            <div class="relative overflow-hidden">
              <div
                class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4"
              >
                <div class="w-full md:w-1/2">
                  <form class="flex items-center mb-2">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                      <div
                        class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                      >
                        <svg
                          aria-hidden="true"
                          class="w-4 h-4 2xl:w-5 2xl:h-5 text-gray-500 dark:text-gray-400"
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
                        id="simple-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-[11px] 2xl:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-8 2xl:pl-10 p-1 2xl:p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Enter Military ID or Name"
                      />
                    </div>
                  </form>
                </div>
                <div
                  class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0"
                >
                  <PrimaryButton>
                    <svg
                      class="w-4 h-4 text-white mr-2"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 12h14m-7 7V5"
                      />
                    </svg>
                    Create New User
                  </PrimaryButton>
                </div>
              </div>
              <div class="overflow-x-auto">
                <table
                  class="w-full text-[11px] 2xl:text-sm text-left text-gray-500 dark:text-gray-400"
                >
                  <thead
                    class="text-gray-100 uppercase bg-gray-600 dark:bg-gray-700 dark:text-gray-400"
                  >
                    <tr>
                      <th scope="col" class="p-2">No</th>
                      <th scope="col" class="p-2">User ID</th>
                      <th scope="col" class="p-2">Name</th>
                      <th scope="col" class="p-2">Health Unit</th>
                      <th scope="col" class="p-2">Role</th>
                      <th scope="col" class="p-2">Subrole</th>
                      <th scope="col" class="p-2">Status</th>
                      <th scope="col" class="p-2">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-b dark:border-gray-700">
                      <th
                        scope="row"
                        class="p-2 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                      >
                        1
                      </th>
                      <td class="p-2">1211830</td>
                      <td class="p-2">LT AHMAD NOR ASYRAF BIN SAMA'ON</td>
                      <td class="p-2">702 PPAT</td>
                      <td class="p-2">Paramedic</td>
                      <td class="p-2">Standard</td>
                      <td class="p-2 items-center">Expired</td>
                      <td class="p-2 flex items-center">
                        <span
                          class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300"
                          >Edit</span
                        >
                        <span
                          class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300"
                          >Enable</span
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <nav
                class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
                aria-label="Table navigation"
              >
                <span
                  class="text-sm font-normal text-gray-500 dark:text-gray-400"
                >
                  Showing
                  <span class="font-semibold text-gray-900 dark:text-white"
                    >1-10</span
                  >
                  of
                  <span class="font-semibold text-gray-900 dark:text-white"
                    >1000</span
                  >
                </span>
                <ul class="inline-flex items-stretch -space-x-px">
                  <li>
                    <a
                      href="#"
                      class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                    >
                      <span class="sr-only">Previous</span>
                      <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        fill="currentColor"
                        viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                          clip-rule="evenodd"
                        />
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                      >1</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                      >2</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      aria-current="page"
                      class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white"
                      >3</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                      >...</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                      >100</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                    >
                      <span class="sr-only">Next</span>
                      <svg
                        class="2xl:w-5 2xl:h-5 w-3 h-3"
                        aria-hidden="true"
                        fill="currentColor"
                        viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                          clip-rule="evenodd"
                        />
                      </svg>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div
          class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800"
          id="styled-dashboard"
          role="tabpanel"
          aria-labelledby="dashboard-tab"
        >
          bb
        </div>
      </div>
    </section>
  </AuthenticatedLayout>
</template>


<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Sidebar from "@/Components/Sidebar.vue";

import { onMounted } from "vue";
import { initFlowbite } from "flowbite";

onMounted(() => {
  initFlowbite();
});
</script>
