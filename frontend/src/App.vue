<template>
  <div>
    <!-- start content -->
    <div class="backdrop"></div>
    <a class="backtop fas fa-arrow-up" href="#"></a>
    <!-- header part -->
    <header-part />

    <nav-bar />
    <!-- cart side bar -->
    <CartSideBar />

    <!-- mobile Menu -->
    <MobileMenu />

    <!-- Login Modal -->
    <LoginModal />

    <!-- start main content -->
    <router-view></router-view>
    <!-- end main content -->
    <!-- Newsletter -->
    <NewsLetter />
    <!-- start footer -->
    <FooterPart />
    <!-- end content -->
  </div>
</template>
<script setup>
  import HeaderPart from '@/components/HeaderPart.vue';
  import FooterPart from '@/components/FooterPart.vue';
  import NavBar from '@/components/NavBar.vue';
  import CartSideBar from '@/components/CartSideBar.vue';
  import MobileMenu from '@/components/MobileMenu.vue';
  import LoginModal from '@/components/LoginModal.vue';
  import NewsLetter from '@/components/NewsLetter.vue';

</script>
<style>

</style>