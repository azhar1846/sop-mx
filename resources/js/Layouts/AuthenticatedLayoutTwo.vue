
<template>
  <div class="antialiased bg-[#f0f2f5] min-h-screen">
    <Topbar />

    <main class="2xl:p-3 p-1.5 ml-64 2xl:ml-96 h-auto pt-14 2xl:pt-20 bg-slate">
      <slot />
    </main>
  </div>
</template>

<script setup>



import Topbar from "@/Components/Topbar.vue";


</script>
