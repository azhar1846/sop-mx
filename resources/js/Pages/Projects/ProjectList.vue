<template>
  <AdminLayout>
    <div class="w-[80%] mx-auto mt-10">
      <div class="text-bold font-bold text-2xl mb-5">Create Project</div>
      <div class="flex w-full">
        <div class="w-2/3 border p-4">
          <section class="bg-white dark:bg-gray-900">
            <ItemList :dataProjects="projects" @search="searchProjects" />
          </section>
        </div>
        <div class="w-1/3 bg-gray-100 p-8">
          <div class="border p-4 bg-white rounded">
            <h3 class="text-lg font-bold">List Team</h3>
            <hr class="mb-2" />
            <table class="table w-full">
              <tbody>
                <tr
                  class="border-b"
                  v-for="(project, index) in listProjects"
                  :key="index"
                >
                  <td class="p-2 hover:bg-gray-100">
                    {{ project.project_name }}
                  </td>
                  <td class="flex items-center gap-x-2">
                    <svg
                      @click="confirmDeleteProject(project.id)"
                      class="w-6 h-6 text-red-800 cursor-pointer dark:text-white"
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

                    <svg
                      @click="confirmEditProject(project)"
                      class="w-6 h-6 text-green-400 dark:text-white cursor-pointer"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M11.3 6.2H5a2 2 0 0 0-2 2V19a2 2 0 0 0 2 2h11c1.1 0 2-1 2-2.1V11l-4 4.2c-.3.3-.7.6-1.2.7l-2.7.6c-1.7.3-3.3-1.3-3-3.1l.6-2.9c.1-.5.4-1 .7-1.3l3-3.1Z"
                        clip-rule="evenodd"
                      />
                      <path
                        fill-rule="evenodd"
                        d="M19.8 4.3a2.1 2.1 0 0 0-1-1.1 2 2 0 0 0-2.2.4l-.6.6 2.9 3 .5-.6a2.1 2.1 0 0 0 .6-1.5c0-.2 0-.5-.2-.8Zm-2.4 4.4-2.8-3-4.8 5-.1.3-.7 3c0 .3.3.7.6.6l2.7-.6.3-.1 4.7-5Z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <Modal :show="showEditModal" @close="closeModal">
            <div class="p-4">
              <form @submit.prevent="updateProject">
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
                <div class="mt-3 flex justify-end gap-x-2">
                  <SecondaryButton @click="closeModal">Cancel</SecondaryButton>
                  <PrimaryButton>Update</PrimaryButton>
                </div>
              </form>
            </div>
          </Modal>

          <Modal :show="showDeleteModal" @close="closeModal">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <button
                type="button"
                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-hide="popup-modal"
              >
                <svg
                  class="w-3 h-3"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 14 14"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                  />
                </svg>
                <span class="sr-only">Close modal</span>
              </button>
              <div class="p-4 md:p-5 text-center">
                <svg
                  class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 20 20"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                  />
                </svg>
                <h3
                  class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400"
                >
                  Are you sure you want to delete this project?
                </h3>
                <button
                  @click="deleteProject"
                  type="button"
                  class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center"
                >
                  Yes, I'm sure
                </button>
                <button
                  @click="closeModal"
                  type="button"
                  class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                >
                  No, cancel
                </button>
              </div>
            </div>
          </Modal>
        </div>
      </div>
    </div>
  </AdminLayout>
</template>

<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import ItemList from "@/Pages/Projects/components/ItemList.vue";
import Modal from "@/Components/Modal.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import { reactive, ref } from "vue";
import { Link, router } from "@inertiajs/vue3";

defineProps({
  projects: Object,
  teams: Object,
  search: Object,
  listProjects: Object,
});

const showEditModal = ref(false);
const showDeleteModal = ref(false);

const projectId = ref(null);
const deleteProjectId = ref(null);

const confirmEditProject = (data) => {
  showEditModal.value = true;
  formProject.teamId = data.team_id;
  formProject.projectName = data.project_name;
  formProject.start = data.start;
  formProject.end = data.end;
  projectId.value = data.id;
};

const confirmDeleteProject = (id) => {
  showDeleteModal.value = true;
  deleteProjectId.value = id;
};

const closeModal = () => {
  if (showEditModal.value) showEditModal.value = false;
  if (showDeleteModal.value) showDeleteModal.value = false;
};

const formProject = reactive({
  teamId: null,
  projectName: null,
  start: null,
  end: null,
});

const updateProject = () => {
  router.put("/projects/update/" + projectId.value, formProject);
  closeModal();
};

const deleteProject = () => {
  router.delete("/projects/delete/" + deleteProjectId.value);
  closeModal();
};

// Code to get search
const searchProjects = (key) => {
  router.get("/projects/index/", { q: key }, { preserveState: true });
};
</script>
