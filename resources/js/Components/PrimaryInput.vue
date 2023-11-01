<script setup>
    const props=defineProps({
        modelValue:String,
        label:String,
        placeholder:String,
        error:String,
        type:{
            type:String,
            default:'text'
        }

    })
    const emit = defineEmits(['update:modelValue'])
</script>

<template>
    <div>
    <label class="w-full block" for="uname"><b>{{ label }}</b></label>
    <input class="w-full " :type="type" :placeholder="placeholder" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" required>
    <span class="text-red-500" v-if="error">{{ error}}</span>
    </div>
</template>
