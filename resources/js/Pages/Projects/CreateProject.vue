<template>
  <div>
    <AdminLayout>
      <div class="w-[80%] mx-auto mt-10">
        <div class="text-bold font-bold text-2xl mb-5">Create Project</div>
        <div class="flex w-full">
          <div class="w-2/3 border p-8">
            <section class="bg-white dark:bg-gray-900">
              <div class="py-2 px-4 mx-auto max-w-2xl">
                <form @submit.prevent="createProject">
                  <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                      <label
                        for="team"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >Team</label
                      >
                      <select
                        v-model="formProject.teamId"
                        id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                      >
                        <option
                          :value="team.id"
                          v-for="(team, index) in teams"
                          :key="index"
                        >
                          {{ team.name }}
                        </option>
                      </select>
                    </div>
                    <div class="sm:col-span-2">
                      <label
                        for="name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >Project Name</label
                      >
                      <input
                        type="text"
                        v-model="formProject.projectName"
                        id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Project name"
                        required=""
                      />
                    </div>
                    <div class="w-full">
                      <label
                        for="brand"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >Start</label
                      >
                      <input
                        v-model="formProject.start"
                        type="date"
                        id="start"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Product brand"
                        required=""
                      />
                    </div>
                    <div class="w-full">
                      <label
                        for="price"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        >End</label
                      >
                      <input
                        v-model="formProject.end"
                        type="date"
                        id="end"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="$2999"
                        required=""
                      />
                    </div>
                  </div>
                  <button
                    type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800"
                  >
                    Create Project
                  </button>
                </form>
              </div>
            </section>
          </div>
          <div class="w-1/3 bg-gray-100 p-8">
            <div class="border p-4 bg-white rounded">
              <h3 class="text-lg font-bold">Create Team</h3>
              <hr class="mb-2" />
              <form @submit.prevent="createTeam">
                <label class="block mb-2" for="name">Name Team</label>
                <div class="mb-4">
                  <input
                    v-model="formTeam.name"
                    type="text"
                    class="w-full p-2 border rounded border-gray-200 bg-gray-100"
                  />
                  <div v-if="errors.name" class="text-red-600 text-xs">
                    {{ errors.name }}
                  </div>
                </div>
                <button
                  class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded"
                >
                  Create
                </button>
              </form>
            </div>

            <div class="border p-4 bg-white rounded mt-4">
              <h3 class="text-lg font-bold">List Team</h3>
              <hr class="mb-2" />
              <table class="table w-full">
                <tbody>
                  <tr
                    class="border-b"
                    v-for="(team, index) in teams"
                    :key="index"
                  >
                    <td class="p-2 hover:bg-gray-100">{{ team.name }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </AdminLayout>
  </div>
</template>

<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { router } from "@inertiajs/vue3";
import { reactive } from "vue";

defineProps({
  errors: Object,
  teams: Object,
});

const formTeam = reactive({
  name: null,
});

const formProject = reactive({
  teamId: null,
  projectName: null,
  start: null,
  end: null,
});

const createTeam = () => {
  router.post("/teams/create", formTeam);
  formTeam.name = null;
};

const createProject = () => {
  router.post("/projects/create", formProject);
  formProject.teamId = null;
  formProject.projectName = null;
  formProject.start = null;
  formProject.end = null;
};
</script>
