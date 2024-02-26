<template>
  <aside
    class="fixed top-0 left-0 z-40 w-44 2xl:w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidenav"
    id="drawer-navigation"
  >
    <div class="overflow-y-auto 2xl:py-5 px-3 h-full bg-white dark:bg-gray-800">
      <ul class="space-y-1 2xl:space-y-2">
        <li>
          <Link
            :href="route('dashboard.index')"
            :class="{ 'bg-[#3b5998] text-white': $page.props.menuDashboard }"
            class="flex items-center p-1 2xl:p-2 text-xs 2xl:text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-[#3b5998]/90 hover:text-white group"
          >
            <svg
              aria-hidden="true"
              :class="{ ' text-white': $page.props.menuDashboard }"
              class="w-5 h-5 2xl:w-6 2xl:h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
              <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
            </svg>
            <span class="ml-3">Dashboard</span>
          </Link>
        </li>
        <li>
          <Link
            :href="route('patients.index')"
            :class="{ 'bg-[#3b5998] text-white': $page.props.menuPatientIndex }"
            class="flex items-center p-1 2xl:p-2 text-xs 2xl:text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-[#3b5998]/90 hover:text-white group"
          >
            <svg
              :class="{ ' text-white': $page.props.menuPatientIndex }"
              class="w-5 h-5 2xl:w-6 2xl:h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white group-hover:bg-[#3b5998]/"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                fill-rule="evenodd"
                d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4c0 1.1.9 2 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.8-3.1a5.5 5.5 0 0 0-2.8-6.3c.6-.4 1.3-.6 2-.6a3.5 3.5 0 0 1 .8 6.9Zm2.2 7.1h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1l-.5.8c1.9 1 3.1 3 3.1 5.2ZM4 7.5a3.5 3.5 0 0 1 5.5-2.9A5.5 5.5 0 0 0 6.7 11 3.5 3.5 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4c0 1.1.9 2 2 2h.5a6 6 0 0 1 3-5.2l-.4-.8Z"
                clip-rule="evenodd"
              />
            </svg>

            <span class="ml-3">Patient</span>
          </Link>
        </li>
        <li>
          <Link
            :href="route('admin.index')"
            :class="{ 'bg-[#3b5998] text-white': $page.props.menuAdmin }"
            class="flex items-center p-1 2xl:p-2 text-xs 2xl:text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-[#3b5998]/90 hover:text-white group"
          >
            <svg
              :class="{ ' text-white': $page.props.menuAdmin }"
              class="w-5 h-5 2xl:w-6 2xl:h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white group-hover:bg-[#3b5998]/"
              fill="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                fill-rule="evenodd"
                d="M17 10v1.1l1 .5.8-.8 1.4 1.4-.8.8.5 1H21v2h-1.1l-.5 1 .8.8-1.4 1.4-.8-.8a4 4 0 0 1-1 .5V20h-2v-1.1a4 4 0 0 1-1-.5l-.8.8-1.4-1.4.8-.8a4 4 0 0 1-.5-1H11v-2h1.1l.5-1-.8-.8 1.4-1.4.8.8a4 4 0 0 1 1-.5V10h2Zm.4 3.6c.4.4.6.8.6 1.4a2 2 0 0 1-3.4 1.4A2 2 0 0 1 16 13c.5 0 1 .2 1.4.6ZM5 8a4 4 0 1 1 8 .7 7 7 0 0 0-3.3 3.2A4 4 0 0 1 5 8Zm4.3 5H7a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h6.1a7 7 0 0 1-1.8-7Z"
                clip-rule="evenodd"
              />
            </svg>

            <span class="ml-3">Admin Portal</span>
          </Link>
        </li>
      </ul>
    </div>
  </aside>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
