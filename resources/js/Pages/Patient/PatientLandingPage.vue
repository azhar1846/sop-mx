<template>
  <PatientInfo />
  <AuthenticatedLayoutTwo>
    <Head title="Landing Page" />

    <div class="bg-white rounded-md shadow p-2">
      <div
        class="bg-[#3b5998] text-gray-200 p-1 2xl:p-2 rounded-md text-center"
      >
        <h1 class="font-bold text-sm 2xl:text-xl">
          Appointment History
        </h1>
      </div>

      <div class="2xl:space-y-3">
        <div
          class="border border-gray-300 shadow bg-white mt-2 p-3 2xl:p-4 rounded-md"
        >
          <div class="flex items-center justify-between">
            <h2 class="font-bold text-xs 2xl:text-base">Appt ID : 499406</h2>
            <p class="text-[10px] 2xl:text-sm italic text-gray-400">
              CREATED BY : AZARIAH BINTI MOHD DESA (5004262) AT HAT TM
            </p>
          </div>
          <h2 class="text-xs 2xl:text-base">
            Appointment : <span class="font-bold">28/12/2022</span>
          </h2>

          <table class="border w-full mt-2 text-xs 2xl:text-sm">
            <tr class="border-b bg-gray-200">
              <th
                class="p-1 2xl:p-2 border-r border-gray-300 w-[180px] 2xl:w-[250px]"
              >
                Type (Sub Type)
              </th>
              <th
                class="p-1 2xl:p-2 border-r border-gray-300 w-[180px] 2xl:w-[250px]"
              >
                Attandance
              </th>
              <th
                class="p-1 2xl:p-2 border-r border-gray-300 w-[180px] 2xl:w-[250px]"
              >
                Status
              </th>
              <th class="p-1 2xl:p-2 border-r border-gray-300">Notes</th>
              <th class="p-1 2xl:p-2 w-[180px] 2xl:w-[250px]">
                Change Details
              </th>
            </tr>
            <tr class="text-center">
              <td class="p-1 2xl:p-2 border-r">SOP (PERIODIC - ANNUAL)</td>
              <td class="p-1 2xl:p-2 border-r"></td>
              <td class="p-1 2xl:p-2 border-r"></td>
              <td class="p-1 2xl:p-2 border-r"></td>
              <td class="p-1 2xl:p-2">
                <SecondaryButton>
                  <svg
                    class="w-6 h-6 mr-2 dark:text-white"
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
                      d="M12 7.8v8.4M7.8 12h8.4m4.8 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                    />
                  </svg>
                  Add to panel
                </SecondaryButton>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </AuthenticatedLayoutTwo>
</template>

<script setup>
import { Head } from "@inertiajs/vue3";
import AuthenticatedLayoutTwo from "@/Layouts/AuthenticatedLayoutTwo.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import PatientInfo from "@/Pages/Patient/Component/PatientInfo.vue";
</script>
