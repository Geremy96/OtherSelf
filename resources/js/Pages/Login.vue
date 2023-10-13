<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    email: '',
    password: ''
});
</script>

<template>
    <form @submit.prevent="form.post(route('login'))">
  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="email" placeholder="Enter email" v-model="form.email" required>
    <span style="color: red;">{{ form.errors.email }}</span>

    <br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" v-model="form.password" required>
    <span style="color: red;">{{ form.errors.password }}</span>
    <br>
    <button type="submit">Login</button>
  </div>
</form>
</template>
