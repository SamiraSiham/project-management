<template>
    <div class="sm:flex items-center max-w-screen-xl ml-5">
    <div class="sm:w-1/2 p-7">
        <div class="image object-center text-center">
            <img :src="im1">
        </div>
    </div>
    <div class="sm:w-full p-3">
        <div class="text">
            <!-- <span class="uppercase">About us</span> -->
            <h2 class="my-4 font-bold text-3xl text-accent sm:text-4xl ">Les Outils Du Manager
            </h2>
            <p class="text-gray text-justify">
                Lafraxo Youness, professeur habilité à la Faculté des Sciences Juridiques, Économiques et Sociales de Marrakech, est un expert reconnu en marketing, en management, et particulièrement en management des systèmes d'information. Avec une solide expérience académique et une compréhension profonde des dynamiques managériales modernes, M. Lafraxo a dédié sa carrière à l'étude et à l'enseignement des pratiques de gestion les plus avancées. Son approche pédagogique vise à rapprocher les théories du management des réalités du terrain, mettant l'accent sur la manière dont les systèmes d’information peuvent transformer les organisations. Sa contribution à la formation de futurs leaders en gestion est renforcée par une recherche continue dans les domaines stratégiques de la transformation digitale et de l'innovation managériale.
            </p>
        </div>
    </div>
</div>
</template>
<script>
   export default{
    data(){
        return {
        im1: '/assets/images/im1.png',
      };
    }
   }
</script>