<template>
  <aside
    class="fixed top-11 2xl:top-16 border left-0 z-50 w-64 2xl:w-96 h-screen transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
  >
    <div
      class="overflow-y-auto py-1 2xl:py-3 px-2 2xl:px-4 h-full bg-white dark:bg-gray-800"
    >
      <div class="bg-[#3b5998] text-gray-200 p-1 2xl:p-2 rounded-md">
        <h1 class="font-bold text-center text-sm 2xl:text-xl">
          Patient Information
        </h1>
      </div>
      <hr class="border-t my-1 2xl:my-2" />
      <div class="relative">
        <img
          src="http://20.38.101.22/Profile-Image/10000474-0C53-4A01-B9CE-00C2D50B717E.jpg"
          alt="profile image"
          class="h-20 w-20 2xl:h-28 2xl:w-28 rounded-lg mx-auto shadow p-0.5 2xl:p-1"
        />

        <div class="text-center mt-1 2xl:mt-2">
          <h2 class="font-bold text-[11px] 2xl:text-base">
            KAPT AZHAR BIN SHAARI
          </h2>
          <p class="text-[10px] 2xl:text-sm mb-1 2xl:mb-2">(3015506)</p>
          <p class="text-gray-600 text-[10px] 2xl:text-sm">
            95 HOSPITAL ANGKATAN TENTERA TUANKU MIZAN
          </p>
        </div>

        <hr class="border-t my-1 2xl:my-2" />

        <ul class="p-1 2xl:p-2 space-y-1 2xl:space-y-2">
          <li
            class="flex items-center justify-between text-[11px] 2xl:text-sm "
          >
            <span class="font-bold">Date of Birth</span>
            <span class="text-gray-600">08-12-1974</span>
          </li>
          <li
            class="flex items-center justify-between text-[11px] 2xl:text-sm "
          >
            <span class="font-bold">Age</span>
            <span class="text-gray-600">49 years old</span>
          </li>
          <li
            class="flex items-center justify-between text-[11px] 2xl:text-sm "
          >
            <span class="font-bold">Contact number</span>
            <span class="text-gray-600">016-5216134</span>
          </li>
          <li
            class="flex items-center justify-between text-[11px] 2xl:text-sm "
          >
            <span class="font-bold">Email</span>
            <span class="text-gray-600">musa.othman@navy.mil.my</span>
          </li>
        </ul>

        <svg
          class="2xl:w-6 2xl:h-6 w-4 h-4 text-gray-800 dark:text-white absolute top-0 right-4 cursor-pointer"
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
        >
          <path
            stroke="currentColor"
            stroke-linecap="square"
            stroke-linejoin="round"
            stroke-width="2"
            d="M7 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h1m4-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm7.4 1.6a2 2 0 0 1 0 2.7l-6 6-3.4.7.7-3.4 6-6a2 2 0 0 1 2.7 0Z"
          />
        </svg>
      </div>

      <hr class="border-t my-1 2xl:my-2" />

      <div class="bg-[#3b5998] text-gray-200 p-1 2xl:p-2 rounded-t-md">
        <h1 class="font-bold text-center text-sm 2xl:text-xl">
          Clinical Encounter
        </h1>
      </div>

      <ul class="p-1 2xl:p-2 border">
        <li
          class="flex items-center justify-between text-[11px] 2xl:text-sm border-b py-1 2xl:py-2"
        >
          <span class="font-bold">PULHEEMS Validity</span>
          <span class="text-white text-[8px] 2xl:text-xs rounded-md 2xl:py-0.5 2xl:px-1 py-0.5 px-1 bg-green-400">Valid</span>
        </li>
        <li
          class="flex items-center justify-between text-[11px] 2xl:text-sm border-b py-1 2xl:py-2"
        >
          <span class="font-bold">Deployment Status</span>
          <span class="text-white text-[8px] 2xl:text-xs rounded-md 2xl:py-0.5 2xl:px-1 py-0.5 px-1 bg-green-400 ">LD</span>
        </li>
        <li
          class="flex items-center justify-between text-[11px] 2xl:text-sm border-b py-1 2xl:py-2"
        >
          <span class="font-bold">PES Updated</span>
          <span class="text-gray-600">06-10-2023</span>
        </li>
        <li
          class="flex items-center justify-between text-[11px] 2xl:text-sm border-b py-1 2xl:py-2"
        >
          <span class="font-bold">Framingham Score</span>
          <span class="text-gray-600">3.9%</span>
        </li>
        <li
          class="flex items-center justify-between text-[11px] 2xl:text-sm border-b py-1 2xl:py-2"
        >
          <span class="font-bold">Latest Lab Result</span>
          <span class="text-gray-600">02-10-2023</span>
        </li>
        <li
          class="flex items-center justify-between text-[11px] 2xl:text-sm border-b py-1 2xl:py-2"
        >
          <span class="font-bold">Latest Chest X-Ray</span>
          <span class="text-gray-600">02-10-2023</span>
        </li>
        <li
          class="flex items-center justify-between text-[11px] 2xl:text-sm py-1 2xl:py-2"
        >
          <span class="font-bold">Latest Ultrasound</span>
          <span class="text-gray-600">02-10-2023</span>
        </li>
      </ul>
    </div>
  </aside>
</template>

  <script setup>
import { Link } from "@inertiajs/vue3";
</script>
