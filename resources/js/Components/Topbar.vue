<template>
  <Head title="Dashboard" />
  <nav
    class="bg-white border-b border-gray-200 px-3 py-1 2lx:px-4 2xl:py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50 shadow-lg"
  >
    <div class="flex flex-wrap justify-between items-center px-2 2xl:px-4">
      <div class="flex justify-start items-center">
        <button
          data-drawer-target="drawer-navigation"
          data-drawer-toggle="drawer-navigation"
          aria-controls="drawer-navigation"
          class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
        >
          <svg
            aria-hidden="true"
            class="w-6 h-6"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"
            ></path>
          </svg>
          <svg
            aria-hidden="true"
            class="hidden w-6 h-6"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"
            ></path>
          </svg>
          <span class="sr-only">Toggle sidebar</span>
        </button>
        <Link
          :href="route('dashboard.index')"
          class="flex items-center justify-between mr-4"
        >
          <span
            class="self-center text-base 2xl:text-2xl font-semibold whitespace-nowrap dark:text-white"
            >SOP Management</span
          >
        </Link>
      </div>
      <div class="flex items-center">
        <div class="text-right mr-3">
          <h2 class="font-bold text-sm 2xl:text-base">
            {{ authUserStore.user?.data?.fullname }}
          </h2>
          <p class="text-xs 2xl:text-sm">
            {{ authUserStore.user?.data?.healthUnit }}
          </p>
        </div>

        <Link
          :href="route('logout')"
          as="button"
          method="post"
          class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg px-3 py-2 2xl:px-5 2xl:py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55"
        >
          <svg
            class="2xl:w-5 2xl:h-5 w-3 h-3 me-2"
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
              d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H7a1 1 0 0 1-1-1v-7c0-.6.4-1 1-1Z"
            />
          </svg>

          <span class="text-xs 2xl:text-sm"> Sign out</span>
        </Link>
      </div>
    </div>
  </nav>
</template>


<script setup>
import { Link, Head } from "@inertiajs/vue3";
import axios from "axios";
import { onMounted, ref } from "vue";

import { useAuthUserStore} from '@/stores/AuthUserStore.js';

const authUserStore =  useAuthUserStore();




authUserStore.getAuthUser();


</script>
