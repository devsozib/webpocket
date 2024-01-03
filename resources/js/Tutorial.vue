<template>
    <div>
        <div style="text-align: center; width: 330px; margin-bottom: 20px;" class="container">
            <select v-model="type" @change="getData(this.menu_id,this.sub_menu_id,type)"  class="form-select p-3" style="border: 4px solid #E9D298;border-radius: 23px;" aria-label="Default select example">
                <option selected value="app">App</option>
                <option value="ssd">*800#</option>
            </select>
        </div>
        <div v-if="tutorials.length > 0" class="container">
            <swiper
            :spaceBetween="50"
            :slidesPerView="1"
            :navigation="true"
            :pagination="true"
            :modules="modules"
            :autoplay="{
                delay: 3000,
                disableOnInteraction: false,
                }"
            class="mySwiper"
            >
                <swiper-slide v-for="(item,index) in tutorials" :key="index" style="text-align: center;">
                    <img width="230" max-height="230"  :src="item.image_path" alt="">
                    <div class="text-box" style="margin: 10px 10px 10px 10px;">
                        <h6 style="color: #063a22;">Step {{ item.step_no }}</h6>
                        <h5>{{ item.title }}</h5>
                    </div>
                </swiper-slide>
            </swiper>
        </div>
        <p v-else class="text-center text-danger">Tutorial not found!</p>
        <div v-if="tutorials.length > 0" class="limits-btns text-center">
            <a href="/limit-charges" class="btn style1">Limits & Charges</a>
        </div>
    </div>
</template>
<script>
import { Swiper, SwiperSlide } from 'swiper/vue';
// Import Swiper styles
import "swiper/css";

import "swiper/css/navigation";
import "swiper/css/pagination";

// import required modules
import {Autoplay, Navigation, Pagination } from "swiper";
export default {
    data(){
        return {
            modules: [Navigation, Pagination,Autoplay],
            type:"app",
            tutorials: [],
        }
    },
    props:{
        menu_id:Number,
        sub_menu_id:Number
    },
    components: {
      Swiper,
      SwiperSlide,
    },
    mounted(){
        this.getData(this.menu_id, this.sub_menu_id,this.type);
    },
    methods:{
        getData(menu_id, sub_menu_id,type){
            axios.get("get-tutorials", {
                params: {
                    menu_id: menu_id,
                    sub_menu_id: sub_menu_id,
                    type: type
                },
            }).then((res) => {
               console.log(res.data);
               this.tutorials = res.data.tutorials;
            }).catch((error) => {});
            }
    },
  };
</script>

<style>
:root {
    --swiper-navigation-size: 22px;
}
:root {
    --swiper-theme-color: #063a22;
}

.swiper-wrapper {
    height: 650px;
}

.textCard[data-v-b6d51246] {
    -webkit-backdrop-filter: blur(62px);
    backdrop-filter: blur(62px);
    background: linear-gradient(0deg, #AF9252 0%, #E9D298 100%);
    border: 1px solid hsla(0,0%,100%,.2);
    border-radius: 26px;
    box-shadow: 0 4px 20px rgba(0,0,0,.15);
    font-size: 14px;
    margin-top: 35px;
    padding: 22px 26px;
}
.btn {
    padding: 5px 35px 5px!important;
    font-size: 15px!important;

}
.swiper-button-next, .swiper-button-prev {
        display: none;
    }
    .form-select {
    font-weight: 600!important;


}

</style>
