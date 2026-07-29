<script setup lang="ts">
import {
    Dialog,
    DialogPanel,
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    PopoverGroup,
} from '@headlessui/vue';
import {
    ChevronDownIcon,
} from '@heroicons/vue/20/solid';
import {
    Bars3Icon,
    ChartPieIcon,
    XMarkIcon,
} from '@heroicons/vue/24/outline';
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import { contacts, home } from '@/routes';
import posts from '@/routes/posts';

const products = [
    {
        name: 'Analytics',
        description: 'Get a better understanding of your traffic',
        href: '#',
        icon: ChartPieIcon,
    },
];

const mobileMenuOpen = ref(false);
</script>

<template>
    <header class="bg-gray-900">
        <nav
            class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8"
            aria-label="Global"
        >
            <div class="flex lg:flex-1">
                <Link :href="home.url()" class="-m-1.5 p-1.5">
                    <span class="sr-only">Dandelion's blog</span>
                    <img
                        src="/images/identics/logo/logo-dark.png"
                        class="w-20"
                        alt=""
                    />
                </Link>
            </div>
            <div class="flex lg:hidden">
                <button
                    type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400"
                    @click="mobileMenuOpen = true"
                >
                    <span class="sr-only">Open main menu</span>
                    <Bars3Icon class="size-6" aria-hidden="true" />
                </button>
            </div>
            <PopoverGroup class="hidden lg:flex lg:gap-x-12">

                <Link :href=home.url() class="text-sm/6 font-semibold text-white"
                    >Home</Link
                >
                <Link :href=posts.index.url() class="text-sm/6 font-semibold text-white"
                    >Blog</Link
                >
                <Link :href=contacts.url() class="text-sm/6 font-semibold text-white"
                    >Contacts</Link
                >
            </PopoverGroup>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                search
            </div>
        </nav>
        <Dialog
            class="lg:hidden"
            @close="mobileMenuOpen = false"
            :open="mobileMenuOpen"
        >
            <div class="fixed inset-0 z-50"></div>
            <DialogPanel
                class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-100/10"
            >
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img
                            class="h-8 w-auto"
                            src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                            alt=""
                        />
                    </a>
                    <button
                        type="button"
                        class="-m-2.5 rounded-md p-2.5 text-gray-400"
                        @click="mobileMenuOpen = false"
                    >
                        <span class="sr-only">Close menu</span>
                        <XMarkIcon class="size-6" aria-hidden="true" />
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-white/10">
                        <div class="space-y-2 py-6">
                            <Disclosure
                                as="div"
                                class="-mx-3"
                                v-slot="{ open }"
                            >
                                <DisclosureButton
                                    class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-white hover:bg-white/5"
                                >
                                    Product
                                    <ChevronDownIcon
                                        :class="[
                                            open ? 'rotate-180' : '',
                                            'size-5 flex-none',
                                        ]"
                                        aria-hidden="true"
                                    />
                                </DisclosureButton>
                                <DisclosurePanel class="mt-2 space-y-2">
                                    <DisclosureButton
                                        v-for="item in [
                                            ...products,
                                        ]"
                                        :key="item.name"
                                        as="a"
                                        :href="item.href"
                                        class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-white hover:bg-white/5"
                                        >{{ item.name }}</DisclosureButton
                                    >
                                </DisclosurePanel>
                            </Disclosure>
                            <a
                                href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5"
                                >Features</a
                            >
                            <a
                                href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5"
                                >Marketplace</a
                            >
                            <a
                                href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5"
                                >Company</a
                            >
                        </div>
                        <div class="py-6">
                            search
                        </div>
                    </div>
                </div>
            </DialogPanel>
        </Dialog>
    </header>
</template>

<style scoped></style>
