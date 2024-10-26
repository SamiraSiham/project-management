<script setup>
import doubleRightArrow from "./icons/double-right-arrow.vue";
import doubleLeftArrow from "./icons/double-left-arrow.vue";
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
import DoubleLeftArrow from "./icons/double-left-arrow.vue";
let open = ref(false);
const toggleSidebar = () => {
    open.value = !open.value;
};
let toggleCoursesbtn = ref(false);
const toggleCourses = () => {
    toggleCoursesbtn.value = !toggleCoursesbtn.value;
};
let toggleToolsbtn = ref(false);
const toggleTools = () => {
    toggleToolsbtn.value = !toggleToolsbtn.value;
};
let toggleManagementbtn = ref(false);
const toggleManagement = () => {
    toggleManagementbtn.value = !toggleManagementbtn.value;
};
</script>
<template>
    <div
        class="min-h-screen p-3 bg-white shadow-lg"
        :class="open ? 'w-[550px] rounded-none' : 'w-20'"
    >
        <div class="px-2">
            <div
                class="flex gap-x-2 items-center"
                :class="open ? 'py-1 w-full' : 'py-1'"
            >
                <div
                    v-if="open"
                    class="w-8 h-8 cursor-pointer"
                    @click="toggleSidebar"
                >
                    <doubleLeftArrow />
                </div>
                <div
                    v-if="!open"
                    class="w-8 h-8 cursor-pointer"
                    @click="toggleSidebar"
                >
                    <doubleRightArrow />
                </div>
            </div>

            <div :class="open ? '' : 'hidden'" class="w-full">
                <h2 class="text-sm font-semibold mt-8 text-center text-accent">
                    Vous pouvez rechercher des outils pour:
                </h2>
                <div class="flex flex-col my-8 items-center justify-center">
                    <div
                        class="flex justify-between w-full items-center gap-x-3 cursor-pointer" @click="toggleCourses"
                    >
                        <h2 class="text-md cursor-pointer">Courses</h2>
                        <div
                            class="rounded-full w-5 h-5 text-center flex items-center justify-center bg-accent text-white text-md"
                        >
                            <i
                                :class="
                                    toggleCoursesbtn ? 'fa-minus' : 'fa-plus'
                                "
                                class="fa-solid cursor-pointer"
                            ></i>
                        </div>
                    </div>
                    <ul :class="toggleCoursesbtn ? '' : 'hidden'" class="py-2">
                        <li class="list-none py-2">
                            <a href="" class="text-sm hover:underline"
                                >General Knowledge</a
                            >
                        </li>
                        <li class="list-none py-2">
                            <a href="" class="text-sm hover:underline"
                                >Academics</a
                            >
                        </li>
                        <li class="list-none py-2">
                            <a href="" class="text-sm hover:underline"
                                >Live Courses</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col my-8 items-center justify-center">
                    <div
                        class="flex justify-between w-full items-center gap-x-3 cursor-pointer" @click="toggleTools"
                    >
                        <h2 class="text-md">Tools</h2>
                        <div
                            class="rounded-full w-5 h-5 text-center flex items-center justify-center bg-accent text-white text-md"
                        >
                            <i
                                :class="toggleToolsbtn ? 'fa-minus' : 'fa-plus'"
                                class="fa-solid cursor-pointer"
                            ></i>
                        </div>
                    </div>
                    <ul :class="toggleToolsbtn ? '' : 'hidden'" class="py-2">
                        <li class="list-none py-2">
                            <a href="" class="text-sm hover:underline"
                                >Market Research</a
                            >
                        </li>
                        <li class="list-none py-2">
                            <a href="" class="text-sm hover:underline"
                                >Strategy</a
                            >
                        </li>
                        <li class="list-none py-2">
                            <a href="" class="text-sm hover:underline"
                                >Finance</a
                            >
                        </li>
                        <li class="list-none py-2">
                            <a href="" class="text-sm hover:underline"
                                >Project Management</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col my-8 items-center justify-center">
                    <div class="flex justify-between w-full items-center cursor-pointer" @click="toggleManagement">
                        <h2 class="text-md">Research</h2>
                        <div
                            class="rounded-full w-5 h-5 text-center flex items-center justify-center bg-accent text-white text-md"
                        >
                            <i
                                :class="
                                    toggleManagementbtn ? 'fa-minus' : 'fa-plus'
                                "
                                class="fa-solid cursor-pointer"
                                
                            ></i>
                        </div>
                    </div>
                    <ul
                        :class="toggleManagementbtn ? '' : 'hidden'"
                        class="py-2"
                    >
                        <li class="list-none py-2">
                            <a href="" class="text-sm hover:underline"
                                >Market Research</a
                            >
                        </li>
                        <li class="list-none py-2">
                            <a href="" class="text-sm hover:underline"
                                >Strategy</a
                            >
                        </li>
                        <li class="list-none py-2">
                            <a href="" class="text-sm hover:underline"
                                >Finance</a
                            >
                        </li>
                        <li class="list-none py-2">
                            <a href="" class="text-sm hover:underline"
                                >Project Management</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col text-md my-8 justify-center">
                    <Link :href="route('about')"> About Us </Link>
                </div>
                <div class="flex flex-col text-md my-8 justify-center">
                    <Link :href="route('contact')"> Contact Us </Link>
                </div>
            </div>
        </div>
    </div>
</template>
