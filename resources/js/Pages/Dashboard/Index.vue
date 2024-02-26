<template>
  <Sidebar />
  <AuthenticatedLayout>
    <Head title="Dashboard" />
    <section>
      <div class="grid gap-4 mb-6 lg:mb-16 grid-cols-4">
        <Link :href="route('patients.index')">
          <div
            class="items-center p-2.5 2xl:p-5 bg-red-600 text-white rounded-xl shadow sm:flex relative"
          >
            <div>
              <h3
                class="text-xl 2xl:text-3xl font-bold tracking-tight dark:text-white"
              >
                Patient
              </h3>

              <p class="mt-3 text-xs 2xl:text-sm font-light dark:text-gray-400">
                Click here to search you patient.
              </p>
            </div>

            <div
              class="w-full absolute top-2 2xl:top-4 right-4 dark:text-gray-400 font-bold text-2xl 2xl:text-4xl flex justify-end"
            >
              {{ patientCount }}
            </div>
          </div>
        </Link>

        <Link :href="route('panel.index')">
          <div
            class="items-center p-2.5 2xl:p-5 bg-blue-600 text-white rounded-xl shadow sm:flex relative"
          >
            <div>
              <h3
                class="text-xl 2xl:text-3xl font-bold tracking-tight dark:text-white"
              >
                SOP Panel List
              </h3>

              <p class="mt-3 text-xs 2xl:text-sm font-light dark:text-gray-400">
                Click here to navigate panel list.
              </p>
            </div>

            <div
              class="w-full absolute top-2 2xl:top-4 right-4 dark:text-gray-400 font-bold text-2xl 2xl:text-4xl flex justify-end"
            >
              {{ patientCount }}
            </div>
          </div>
        </Link>
      </div>
    </section>
  </AuthenticatedLayout>
</template>


<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Sidebar from "@/Components/Sidebar.vue";
import { Head, Link } from "@inertiajs/vue3";

defineProps({
  patientCount: Number,
});
</script>
