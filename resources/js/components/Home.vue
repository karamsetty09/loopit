<template>
    <div>
        <!-- If user is logged in -->
        <h3 v-if="user"> Hi, {{ user }} Available cars for today:</h3>
        <h3 v-if="user">
            <div v-for="(car, index) in cars" :key="index" >
            <car-item :item="car" class="car" />
            {{ car.name }}  {{car.model}} {{car.subscription}} {{ car.rent}}
        </div>
        </h3>

        <h3 v-if="user"> 
            <a href="javascript:void(0)" @click="handleLogout" class="btn btn-dark btn-block">Logout</a>
        </h3>

        <!-- If user is logged Out -->
        <h3 v-if="!user"> Hello, pls login by clicking on Login. </h3>
        
    </div>
    

</template>

<script>
import axios from 'axios'
export default{
    name: 'Home',
    

    data() {
        return{
            user: null,
            cars: []
        }
    },
    async created(){
        console.log('Hello');
        this.user = localStorage.getItem('name');
        const response = await axios.get('api/cars');
        this.cars = response.data;
        // console.log(response);
    },
    methods:{
        handleLogout(){
       localStorage.removeItem('token');
       localStorage.removeItem('name');
       this.$router.push('/login');
        }
    }
}
</script>
