<script setup>
import HomeLayout from '@/Layouts/HomeLayout.vue';
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';
defineOptions({ layout: HomeLayout });
const phoneIndex = ref(route('phone.index'));
const goToPhoneIndex = () => {
    router.get(phoneIndex.value);
};
</script>
<template>
    <div class="app-content-header">
        <div class="container">
            <div class="row my-4">
                <div class="col-sm-6">
                    <h1 class="h3 mb-0">Asset & Inventory Management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">
                            <a href="#" class="text-underline text-primary"
                                >Home</a
                            >
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Asset & Inventory Management
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content">
        <div class="container p-5 pt-2">
            <div class="row">
                <div class="col-sm-12 col-md-4"></div>
                <div class="col-sm-12 col-md-4">
                    <div class="input-group mb-5">
                        <label
                            for="AssetSearchInput"
                            class="input-group-text border-0"
                            ><i class="bi bi-search"></i
                        ></label>
                        <input
                            id="AssetSearchInput"
                            type="text"
                            class="form-control border-0"
                            placeholder="Search"
                            autofocus="false"
                        />
                    </div>
                </div>
                <div class="col-sm-12 col-md-4"></div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-2">
                    <span class="info-box text-bg-success bg-gradient">
                        <span class="info-box-icon">
                            <i class="bi bi-pc-display"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Computer</span>
                        </div>
                    </span>
                </div>
                <div class="col-sm-12 col-md-2">
                    <span class="info-box text-bg-warning bg-gradient">
                        <span class="info-box-icon">
                            <i class="bi bi-printer"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Printer</span>
                        </div>
                    </span>
                </div>
                <div class="col-sm-12 col-md-2">
                    <span
                        class="info-box text-bg-primary bg-gradient"
                        @click="goToPhoneIndex"
                    >
                        <span class="info-box-icon">
                            <i class="bi bi-phone"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Smartphone</span>
                        </div>
                    </span>
                </div>
                <div class="col-sm-12 col-md-2">
                    <span class="info-box text-bg-info bg-gradient">
                        <span class="info-box-icon">
                            <i class="bi bi-windows"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">License</span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>
