<template>
  <div>
    <section class="bg-gray-50 dark:bg-gray-900">
      <div class="mx-auto w-full">
        <!-- Start coding here -->
        <div
          class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden"
        >
          <div
            class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4"
          >
            <div class="w-full">
              <form class="flex items-center">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                  <div
                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                  >
                    <svg
                      aria-hidden="true"
                      class="w-5 h-5 text-gray-500 dark:text-gray-400"
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
                    v-model="search"
                    type="text"
                    id="simple-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Search"
                  />
                </div>
              </form>
            </div>
          </div>
          <div class="overflow-x-auto">
            <table
              class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
            >
              <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
              >
                <tr>
                  <th scope="col" class="px-4 py-3">No</th>
                  <th scope="col" class="px-4 py-3">Project name</th>
                  <th scope="col" class="px-4 py-3">Start</th>
                  <th scope="col" class="px-4 py-3">End</th>
                  <th scope="col" class="px-4 py-3">Tasks</th>
                </tr>
              </thead>
              <tbody>
                <tr
                  class="border-b dark:border-gray-700"
                  v-for="(project, index) in dataProjects.data"
                  :key="index"
                >
                  <td class="px-4 py-3">{{ dataProjects.per_page - dataProjects.current_page }}</td>
                  <th
                    scope="row"
                    class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                  >
                    {{ project.project_name }}
                  </th>
                  <td class="px-4 py-3">{{ project.start }}</td>
                  <td class="px-4 py-3">{{ project.end }}</td>
                  <td class="px-4 py-3">300</td>
                </tr>
              </tbody>
            </table>
          </div>
          <nav
            v-if="dataProjects.total > dataProjects.per_page"
            class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
            aria-label="Table navigation"
          >
            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
              Showing
              <span class="font-semibold text-gray-900 dark:text-white"
                > {{ dataProjects.current_page }} - {{ dataProjects.per_page }}</span
              >
              of
              <span class="font-semibold text-gray-900 dark:text-white">{{
                dataProjects.total
              }}</span>
            </span>
            <ul class="inline-flex items-stretch -space-x-px">

              <li v-for="(item, index) in dataProjects.links" :key="index">
                <a
                  href="#" @click="pageTo(item.url)"
                  :class="{'bg-blue-500 text-white hover:text-white hover:bg-blue-500 hover:cursor-text' : item.active}"
                  class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" v-html="item.label"
                  ></a
                >
              </li>

            </ul>
          </nav>
        </div>
      </div>
    </section>
  </div>
</template>


<script setup>
import { watch, ref } from "vue";
import { router } from "@inertiajs/vue3";

defineProps({
  dataProjects: Object,
});

const emit = defineEmits(["search"]);
const search = ref("");

watch(search, (value) => {
  emit("search", value);
});

const pageTo = (url) => {
    router.get(url, search.value ? {q:search.value} : '', {preserveState:true});
}
</script>
