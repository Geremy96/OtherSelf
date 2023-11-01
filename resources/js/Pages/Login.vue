<script setup>
import PrimaryInput from '@/Components/PrimaryInput.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    email: '',
    password: ''
});
</script>

<template>
    <GuestLayout>
        <div class="w-full h-screen flex justify-center items-center">
        <form class="bg-white rounded-lg p-4 text-center shadow-xl" @submit.prevent="form.post(route('login'))">
            <img src="../../imgs/logo.png" alt="">
            <div class="container">
                <PrimaryInput v-model="form.email" label="Email" placeholder="xxxxxxxxx.@gmail.com" :error="form.errors.email"/>

                <br>

                <PrimaryInput v-model="form.password" label="Password" :error="form.errors.password" type="password"/>
                <br>
                <button class="bg-[#10494F] py-2 px-6 rounded-xl text-white font-montse" type="submit">Login</button>
            </div>
        </form>
    </div>
    </GuestLayout>
</template>

