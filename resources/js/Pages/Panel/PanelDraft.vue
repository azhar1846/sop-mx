<template>
  <PanelDraftList />
  <Layout>
    <Head title="Panel Draft" />
    <div class="bg-[#3b5998] text-gray-200 p-1 2xl:p-2 rounded-md">
      <h1 class="font-bold text-center text-sm 2xl:text-xl">
        PANEL PENGESAHAN DARJAH KERJA TATADEMMOT PEGAWAI KANAN SIRI 1/2004
      </h1>
    </div>

    <div class="bg-white p-2 shadow-md rounded-lg border border-gray-200 mt-2">
      <div class="flex items-start">
        <img
          src="http://20.38.101.22/Profile-Image/3DBB0D2F-0968-4625-A52C-D8777129B0A9.jpg"
          alt="profile image"
          class="h-20 w-20 2xl:h-32 2xl:w-32 rounded-lg shadow p-1 2xl:p-2"
        />

        <div class="2xl:p-2 p-1">
          <h1 class="font-bold text-sm 2xl:text-xl">
            P/LT KOL TUDM SARAVANASENNAN A/L R. VEERASENNAN (373258)
          </h1>
          <p class="text-xs 2xl:text-base text-gray-500">
            INSTITUT LATIHAN INSTRUKTUR TUDM |
            <span class="font-bold">48 Years Old</span>
          </p>
          <p class="text-xs 2xl:text-base font-bold text-blue-500">
            OCCUPATIONAL TRADE : PILOT
          </p>
        </div>
      </div>

      <hr class="border-t border-gray-200 my-2" />

      <div class="flex gap-x-2">
        <div class="w-2/5">
          <div>
            <label
              for="message"
              class="block mb-1 text-[10px] 2xl:text-base font-bold text-gray-900 dark:text-white"
              >Panel Summary</label
            >
            <textarea

              class="w-full text-[12px] min-h-[100px] 2xl:min-h-[150px] 2xl:text-sm p-1 2xl:p-2 text-justify text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
            >
            </textarea>
          </div>

          <div>
            <label
              for="message"
              class="block mb-1 text-[12px] 2xl:text-base font-bold text-gray-900 dark:text-white"
              >Diagnosis</label
            >
          </div>
          <div>
            <label
              for="message"
              class="block mb-1  text-[12px] 2xl:text-base font-bold text-gray-900 dark:text-white"
              >Notes</label
            >
            <textarea
              class="w-full text-[10px] h-[100px] 2xl:h-[150px] 2xl:text-sm p-1 2xl:p-2 text-justify text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
            >
            </textarea>
          </div>
        </div>
        <div class="w-3/5">b</div>
      </div>
    </div>
  </Layout>
</template>

<script setup>
import Layout from "@/Layouts/AuthenticatedLayoutTwo.vue";
import PanelDraftList from "@/Pages/Panel/Component/PanelDraftList.vue";
import { Head } from "@inertiajs/vue3";
import { ref, onMounted } from "vue";

const textarea = ref(null);

const autoResize = () => {
  if (textarea.value) {
    textarea.value.style.height = "auto";
    textarea.value.style.height = textarea.value.scrollHeight + "px";
  }
};

onMounted(() => {
  autoResize(); // Adjust height on initial load if there's initial content
});
</script>
