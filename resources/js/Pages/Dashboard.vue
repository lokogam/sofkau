<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Preguntas from "./Preguntas.vue";
import JetApplicationLogo from '@/Jetstream/ApplicationLogo.vue';
import Paginator from '../componentes/paginator.vue';
import { Method } from '@inertiajs/inertia';
</script>

<template>
    <AppLayout title="Juego">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Puntos
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div>
                        <div
                            class="p-6 sm:px-20 bg-white border-b border-gray-200"
                        >
                            <div>
                                <!-- <JetApplicationLogo class="block h-12 w-auto" /> -->
                                <!-- <img src="https://ik.imagekit.io/lvh0tltbeph/SofkaU/logo-sof…-version=javascript-1.4.3&updatedAt=1645658493330" alt=""> -->
                            </div>

                            <div class="mt-8 text-2xl">
                                Sofka-CHALLENGE Quiz
                            </div>

                            <div class="mt-6 text-gray-500"></div>
                        </div>

                        <div
                            class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2"
                        >
                            <div class="p-6">
                                <div class="flex items-center">
                                    <svg
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        viewBox="0 0 24 24"
                                        class="w-8 h-8 text-gray-400"
                                    >
                                        <path
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                                        />
                                    </svg>
                                    <div
                                        class="ml-4 text-lg text-gray-600 leading-7 font-semibold"
                                    >
                                        <div
                                            v-for="dato in preguntas.data" :key="dato.id">
                                            <input type="text" v-model="dato.id" id="pregunta" style="display:none" v-on:change="respuesta()">
                                            <h1>
                                                {{ dato.name }}
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="ml-12" v-for="res in respuestas " :key="res.id">
                                    <div class="mt-2 text-sm text-gray-500">
                                        <input type="radio">
                                        {{ res.name }} 
                                    </div>
                                </div>
                                <div>
                                    <Paginator class="mt-3" :paginator="preguntas"></Paginator>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<script>
export default{
    props:{
        preguntas:Object,
        respuestas:Object,
    },
    components:{
    },
    methods:{
        preguntas(){
            
        }
    },
}
</script>
