<template>
  <aside
    class="fixed top-11 2xl:top-16 border left-0 z-50 w-64 2xl:w-96 h-screen transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
  >
    <div
      class="overflow-y-auto py-1 2xl:py-3 px-2 2xl:px-4 h-full bg-white dark:bg-gray-800"
    >
      <div class="bg-[#3b5998] text-gray-200 p-1 2xl:p-2 rounded-md">
        <h1 class="font-bold text-center text-sm 2xl:text-xl">Panel List</h1>
      </div>
      <hr class="border-t my-1 2xl:my-2" />

      <div class="bg-white p-1 2xl:p-1.5 rounded-md shadow-md border border-gray-200">
        <ul class="text-[10px] 2xl:text-sm">
          <li class="flex items-start justify-between gap-x-2 py-1 2xl:py-2 border-b">
            <div class="flex items-start gap-x-3">
              <svg
                class="min-w-4 max-w-4 min-h-4 max-h-4 cursor-move"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M5 10H19M14 19L12 21L10 19M14 5L12 3L10 5M5 14H19"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </svg>

              <span>1 . KOL TUDM AZMAN BIN TAIB (3015506)</span>
            </div>
            <span
              class="bg-green-400 text-white text-[9.5px] 2xl:text-xs font-bold me-2 py-0.5 px-1 2xl:py-1.5 2xl:px-2 rounded-full"
              >FE</span
            >
          </li>
          <li class="flex items-start justify-between gap-x-2 py-1 2xl:py-2 border-b">
            <div class="flex items-start gap-x-3">
              <svg
                class="min-w-4 max-w-4 min-h-4 max-h-4 cursor-move"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M5 10H19M14 19L12 21L10 19M14 5L12 3L10 5M5 14H19"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </svg>

              <span>2 . P/LT KOL TUDM SARAVANASENNAN A/L R. VEERASENNAN (373258)</span>
            </div>
            <span
              class="bg-yellow-400 text-white text-[9.5px] 2xl:text-xs font-bold me-2 py-0.5 px-1 2xl:py-1.5 2xl:px-2 rounded-full"
              >LE</span
            >
          </li>
        </ul>
      </div>
    </div>
  </aside>
</template>

    <script setup>
import { Link } from "@inertiajs/vue3";
</script>
