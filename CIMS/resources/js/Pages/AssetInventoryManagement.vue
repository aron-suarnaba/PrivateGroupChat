<script setup>
import HomeLayout from '@/Layouts/HomeLayout.vue';
defineOptions({ layout: HomeLayout });
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
                                >Docs</a
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
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-2">
                    <span class="info-box text-bg-primary bg-gradient">
                        <span class="info-box-icon">
                            <i class="bi bi-phone"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Smartphone</span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>
