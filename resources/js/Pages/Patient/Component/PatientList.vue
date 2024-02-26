<template>
  <div class="relative overflow-hidden">
    <div
      class="flex flex-col md:flex-row items-center justify-between mb-2 md:space-y-0 md:space-x-4"
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
                class="w-4 h-4 2xl:w-6 2xl:h-6 text-gray-500 dark:text-gray-400"
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
              class="bg-gray-50 border border-gray-300 text-gray-900 text-xs 2xl:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 2xl:pl-10 p-1 2xl:p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="Enter Military ID or Name"
            />
          </div>
        </form>
      </div>
      <div
        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0"
      >
        <SecondaryButton>
          <svg
            class="2xl:w-4 2xl:h-4 w-3 h-3 text-white"
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
          Create New Personnal Record
        </SecondaryButton>
      </div>
    </div>
    <div class="overflow-x-auto">
      <table class="w-full text-[10px] 2xl:text-sm text-left text-gray-500">
        <thead class=" text-gray-100 uppercase bg-gray-600">
          <tr>
            <th scope="col" class=" p-1.5 2xl:p-2">Mil ID</th>
            <th scope="col" class=" p-1.5 2xl:p-2">Name</th>
            <th scope="col" class=" p-1.5 2xl:p-2">Unit</th>
            <th scope="col" class=" p-1.5 2xl:p-2 text-center">Readiness</th>
            <th scope="col" class=" p-1.5 2xl:p-2 text-center">Validity</th>
            <th scope="col" class=" p-1.5 2xl:p-2 text-center">Actions</th>
          </tr>
        </thead>
        <tbody class="">
          <tr
            class="border-b dark:border-gray-700 hover:bg-blue-100 "
            v-for="(patient, index) in patients.data"
            :key="index"
          >
            <td class=" p-1.5 2xl:p-2">{{ patient.armyid }}</td>
            <td class=" p-1.5 2xl:p-2">
              {{ patient.name }}
            </td>
            <td class=" p-1.5 2xl:p-2">
              {{ patient?.unit ?? "" }}
            </td>
            <td class=" p-1.5 2xl:p-2 text-center">
              <span
                class="bg-green-400 text-white text-[9px] 2xl:text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300"
                >LD</span
              >
            </td>
            <td class=" p-1.5 2xl:p-2 text-center">
              <span
                class="bg-red-400 text-white text-[9px] 2xl:text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300"
                >Expired</span
              >
            </td>
            <td class=" p-1.5 2xl:p-2 text-center">
                <Link :href="`/patients/landing-page/${patient.armyid}`" class=" px-2.5 py-0.5 text-[10px] 2xl:text-xs justify-center gap-x-2  rounded-md text-blue-500">
                Profile Overview
              </Link>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <Pagination :pagination="patients.meta" />
  </div>
</template>

<script setup>
import { watch, ref } from "vue";
import Pagination from "@/Components/Pagination.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import { debounce } from "lodash-es";
import { Link } from "@inertiajs/vue3";

defineProps({
  patients: Object,
});

const emit = defineEmits(["search"]);
const search = ref("");

watch(
  search,
  debounce((value) => {
    emit("search", value);
  }, 300),
  {
    deep: true,
  }
);
</script>
