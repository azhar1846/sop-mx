<template>
  <Sidebar />
  <AuthenticatedLayout>
    <Head title="Search Patient Records" />
    <section class="bg-white rounded-lg shadow dark:bg-gray-900 p-3 sm:p-5">
      <div class="mx-auto">
        <h1 class="font-bold text-lg 2xl:text-2xl mb-2">
          Search Personnel Record
        </h1>
        <PatientList :patients="patients" @search="searchPatients" />
      </div>
    </section>
  </AuthenticatedLayout>
</template>


<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, router } from "@inertiajs/vue3";
import PatientList from "@/Pages/Patient/Component/PatientList.vue";
import Sidebar from "@/Components/Sidebar.vue";

defineProps({
  patients: Object,
  search: Object,
});

const searchPatients = (key) => {
  router.get("/patients/index/", { q: key }, { preserveState: true });
};
</script>
