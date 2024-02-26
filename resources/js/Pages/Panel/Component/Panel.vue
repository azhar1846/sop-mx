<template>
  <aside
    class="fixed top-11 2xl:top-16 border left-0 z-50 w-64 2xl:w-96 h-screen transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
  >
    <div
      class="overflow-y-auto py-1 2xl:py-3 px-2 2xl:px-4 h-full bg-white dark:bg-gray-800"
    >
      <div class="bg-[#3b5998] text-gray-200 p-1 2xl:p-2 rounded-md">
        <h1 class="font-bold text-center text-sm 2xl:text-xl 2xl:md-2">
          Panel
        </h1>
      </div>
      <hr class="border-t my-1 2xl:my-2" />

      <div class="border rounded-t-md border-gray-300">
        <table class="w-full text-[11px] 2xl:text-sm">
          <tr class="border-b bg-gray-200">
            <th class="p-2 text-left">Series</th>
            <th class="p-2">Date</th>
            <th class="p-2">Action</th>
          </tr>
          <tr class="border-b">
            <td class="p-1.5 2xl:p-2">
              <div class="relative text-left">
                4/2024
                <div
                  class="absolute inline-flex items-center justify-center w-5 h-5 2xl:w-7 2xl:h-7 text-[8px] 2xl:text-xs font-bold text-white bg-emerald-500 border-2 border-white rounded-full -top-2 2xl:end-0 dark:border-gray-900"
                >
                  10
                </div>
              </div>
            </td>
            <td class="text-center p-1.5 2xl:p-2">23/2/2024</td>
            <td class="text-center p-1.5 2xl:p-2">
              <button
                type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded 2xl:rounded-lg text-sm p-1 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
              >
                <svg
                  class="2xl:w-5 2xl:h-5 w-3 h-3"
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
                    d="m14.3 4.8 2.9 2.9M7 7H4a1 1 0 0 0-1 1v10c0 .6.4 1 1 1h11c.6 0 1-.4 1-1v-4.5m2.4-10a2 2 0 0 1 0 3l-6.8 6.8L8 14l.7-3.6 6.9-6.8a2 2 0 0 1 2.8 0Z"
                  />
                </svg>
                <span class="sr-only">Icon description</span>
              </button>
              <button
                type="button"
                class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded 2xl:rounded-lg text-sm p-1 text-center inline-flex items-center me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
              >
                <svg
                  class="2xl:w-5 2xl:h-5 w-3 h-3 "
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
                    d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"
                  />
                </svg>
                <span class="sr-only">Icon description</span>
              </button>
            </td>
          </tr>
          <tr class="border-b">
            <td class="p-1.5 2xl:p-2">
              <div class="relative text-left">
                14 & 15 /2024
                <!-- <div
                  class="absolute inline-flex items-center justify-center w-5 h-5  2xl:w-7 2xl:h-7 text-[8px] 2xl:text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 2xl:-end-4 dark:border-gray-900">
                  20
                </div> -->
              </div>
            </td>
            <td class="text-center p-1.5 2xl:p-2">23/2/2024</td>
            <td class="text-center p-1.5 2xl:p-2 text-green-600 font-bold">
              Checkout
            </td>
          </tr>
        </table>
      </div>
    </div>
  </aside>
</template>


