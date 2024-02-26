

<template>
  <div class="antialiased bg-[#f0f2f5] min-h-screen">
    <Topbar />
    <main class=" p-2 2xl:p-4 ml-44 2xl:ml-64 h-auto pt-14 2xl:pt-20 bg-slate">
      <slot />
    </main>
  </div>
</template>

<script setup>
import Topbar from "@/Components/Topbar.vue";
// import { onMounted } from "vue";
// import { initFlowbite } from "flowbite";

// onMounted(() => {
//   initFlowbite();
// });
</script>
