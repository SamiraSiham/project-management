<template>
    <!-- This component doesn't need a template -->
    <div></div>
</template>

<script setup>
import { watch } from "vue";
import { usePage } from "@inertiajs/vue3";
import Swal from "sweetalert2";

const page = usePage();

watch(
    () => page.props.alert,
    (alert) => {
        if (alert) {
            Swal.fire({
                title: alert.title,
                html: alert.html || alert.text,
                icon: alert.icon,
                showConfirmButton : false
                // confirmButtonText: alert.confirmButtonText || "",
            });
        }
    },
    { immediate: true}
);
</script>
