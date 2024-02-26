<template>
  <nav class="relative flex justify-center  p-2">
    <template v-for="link in pagination.links" :key="link.label">
      <Link
        preserve-scroll
        :href="link.url ?? ''"
        v-html="link.label"
        class="flex items-center justify-center py-2 px-3 text-xs 2xl:text-sm rounded-lg text-gray-600"
        :class="{ 'bg-[#3b5998] text-white': link.active, '!text-gray-300': !link.url }"
      />
    </template>
  </nav>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
  pagination: Object,
});
</script>
