<script setup>
import { onMounted } from 'vue';
import Pagination from '../Pagination.vue';
    const props = defineProps({
        archives : Object
    });
    // onMounted(()=>{console.log(props.archives)})
</script>
<template>
    <div class="flex flex-col ">
        <div class="overflow-x-auto pb-4 mt-6 border rounded-lg px-2">
            <h2 class="text-xl font-bold m-3">Download Archive</h2>
            <div class="min-w-full inline-block align-middle">
                <div class="overflow-hidden border rounded-lg border-gray-300">
                    <table class="table-auto min-w-full rounded-xl">
                        <thead>
                            <tr class="bg-[#d1d5db]">
                                

                                <th
                                    scope="col"
                                    class="px-10 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize"
                                >
                                    ID
                                </th>
                                <th
                                    scope="col"
                                    class="p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize min-w-[150px]"
                                >
                                    Full Name 
                                </th>
                                <th
                                    scope="col"
                                    class="p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize"
                                >
                                    Email
                                </th>
                                <th
                                    scope="col"
                                    class="p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize"
                                >
                                    Fiche
                                </th>
                                <th
                                    scope="col"
                                    class="p-5 text-left whitespace-nowrap text-sm leading-6 font-semibold text-gray-900 capitalize"
                                >
                                    Date de téléchargement
                                </th>
                                
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-300">
                            <tr
                                class="bg-white transition-all duration-500 hover:bg-gray-50"
                                v-for="i in props.archives.data" :key="i.id"
                            >
                                
                                <td
                                    class="px-10 whitespace-nowrap text-sm leading-6 font-medium text-gray-900"
                                >
                                    {{ i.id }}
                                </td>
                                <td class="px-5 py-3">
                                    <div class="w-48 flex items-center gap-3">
                                        
                                        <div class="data">
                                            <p
                                                class="font-normal text-sm text-gray-900"
                                            >
                                                {{ i.first_name }} {{ i.last_name }}
                                            </p>
                                            
                                        </div>
                                    </div>
                                </td>
                                <td
                                    class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900"
                                >
                                    {{ i.email }}
                                </td>
                                <td
                                    class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900"
                                >
                                    {{ i.fiche.title }}
                                </td>
                                <td
                                    class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900"
                                >
                                    {{ i.download_date }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mt-10 flex justify-center">
                <Pagination :links="props.archives.links"/>
            </div>
        </div>
    </div>
</template>
