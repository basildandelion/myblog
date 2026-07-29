<script setup lang="ts">
  import { Head } from '@inertiajs/vue3'
  import Layout from '@/layouts/AppLayout.vue'

  defineProps<{
      contacts: any
  }>()
</script>

<template>
  <Layout>
    <Head title="Contacts" />

  </Layout>
</template>
