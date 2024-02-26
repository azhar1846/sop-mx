<template>
  <div>
    <Navbar />

    <slot />
  </div>
</template>

<script setup>
import Navbar from "@/Components/layouts/Navbar.vue";
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";

// initialize components based on data attribute selectors
onMounted(() => {
  initFlowbite();
});
</script>


