<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    Userid: '',
    password: '',
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });

};
</script>

<template>
    <Head title="Log in" />
    <section
        class="flex items-stretch min-h-screen text-white bg-gradient-to-tl from-stone-600 via-cyan-900 to-neutral-900 ">
        <div class="relative items-center hidden w-1/2 lg:flex ">

            <div class="z-10 w-full px-24">

                <h2 class="text-xl font-bold tracking-widest 2xl:text-3xl">
                    "Each medical record entry, no matter how small, is significant stride towards ensuring the lifelong
                    well-being of our brave serviceman and women."
                </h2>
            </div>


            <div class="absolute bottom-0 left-0 right-0 flex justify-center p-4 space-x-4 text-center">

                <h1 class="text-sm 2xl:text-base">SOP Management System Version 3.0 © All Rights Reserved 2018 - {{ new
                    Date().getFullYear() }} </h1>
            </div>
        </div>
        <div class="z-0 flex items-center justify-center w-full px-0 text-center bg-black lg:w-1/2 md:px-16 bg-opacity-70">

            <div class="z-20 w-full py-6">
                <h1 class="text-3xl font-bold 2xl:text-5xl">SOP Management System</h1>
                <h2 class="mt-4 mb-4 text-xl 2xl:mt-14 2xl:text-3xl">
                    Welcome back.
                </h2>

                <form class="w-full px-4 mx-auto space-y-4 sm:w-2/3 lg:px-0" @submit.prevent="submit">
                    <div>
                        <InputLabel for="Userid" value="User ID" class="text-white text-left" />

                        <TextInput id="Userid" type="text" class="mt-1 block w-full text-black text-sm p-2"
                            v-model="form.Userid" autofocus autocomplete="Userid" />

                        <InputError class="mt-2 text-left" :message="form.errors.Userid" />
                    </div>

                    <div>
                        <InputLabel for="password" value="Password" class="text-white  text-left" />

                        <TextInput id="password" type="password" class="mt-1 block w-full text-black text-sm p-2"
                            v-model="form.password" autocomplete="current-password" />

                        <InputError class="mt-2 text-left" :message="form.errors.password" />
                    </div>

                    <div class=" pt-4 pb-2" type="submit">
                        <PrimaryButton type="submit" class="w-full" :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing">
                            <span> Log in</span>
                            <svg class="w-6 h-6 text-gray-200 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M15 7a2 2 0 1 1 4 0v4a1 1 0 1 0 2 0V7a4 4 0 0 0-8 0v3H5a2 2 0 0 0-2 2v7c0 1.1.9 2 2 2h10a2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V7Zm-5 6c.6 0 1 .4 1 1v3a1 1 0 1 1-2 0v-3c0-.6.4-1 1-1Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
</section></template>
