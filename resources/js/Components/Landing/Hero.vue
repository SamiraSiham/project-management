<script setup>
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <section class="flex justify-center items-center w-full px-3 mt-8">
        <div
            class="flex flex-row max-md:flex-col-reverse items-center gap-10 max-md:mt-3"
        >
            <!-- Content -->
            <div
                class="flex flex-1 flex-col max-md:items-center items-start ml-8"
            >
                <h2
                    class="text-accent decoration-green text-3xl md:text-3xl lg:text-4xl max-md:text-center text-left mb-6"
                >
                    <span class="text-black"> Management en Action - Par </span>Lafraxo Youness
                </h2>
                <p class="text-md max-md:text-center text-left mb-6">
                    <!-- Lorem ipsum odor amet, consectetuer adipiscing elit. Sem
                    orci faucibus augue molestie facilisis eget sapien tristique
                    aptent. Phasellus sit ligula natoque at efficitur varius
                    posuere scelerisque? Luctus dictumst cras cras mattis
                    dignissim massa facilisi congue massa. -->
                    La formation et les outils pour faire grandir votre entreprise, tout en un clic.
                    Une vision pratique et structurée des aspects les plus cruciaux du management d'entreprise. 
                </p>
                <div class="flex justify-center flex-wrap gap-3">
                    <Link
                        :href="route('login')"
                        class="btn btn-dark hover:bg-white hover:text-accent hover:border-accent"
                    >
                        Get Started
                    </Link>
                    <Link
                        :href="route('contact')"
                        class="btn btn-white hover:bg-accent hover:border-white hover:text-white"
                    >
                        Contact Us
                    </Link>
                </div>
            </div>
            <!-- Image -->
            <div
                class="flex justify-center flex-1 md:mb-16 max-md:mb-3 items-center lg:mb-0"
            >
                <img
                    :src="hero"
                    class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-[80%] md:h-full"
                    alt=""
                />
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            hero: "/assets/images/Tabs-rafiki.svg",
        };
    },
};
</script>
