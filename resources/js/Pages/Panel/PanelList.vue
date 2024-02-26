<template>
  <Panel />
  <Layout>
    <Head title="Panel Listing" />

    <PanelWaitingList/>
  </Layout>
</template>

<script setup>
import { Head } from "@inertiajs/vue3";
import Layout from "@/Layouts/AuthenticatedLayoutTwo.vue";
import Panel from "@/Pages/Panel/Component/Panel.vue";
import PanelWaitingList from "./Component/PanelWaitingList.vue";
</script>
