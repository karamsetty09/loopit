<template>
    <!-- Registration Page -->
    <div class="vue-tempalte">
        <form @submit.prevent="handleSubmit">
            <h3>Sign Up</h3>

            <div class="form-group">
                <label>Full Name</label>
                <input type="text" class="form-control" v-model="name" placeholder="First Name"/>
            </div>

            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" v-model="email" placeholder="Email"/>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" v-model="password" placeholder="Password"/>
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" v-model="password_confirm" placeholder="Confirm Password"/>
            </div>

            <button class="btn btn-dark btn-block">Sign Up</button>
        </form>
    </div>
</template>

<script>
import axios from 'axios'
export default{
    name: 'Register',
    data(){
        return{
            name: '',
            email: '',
            password: '',
            password_confirm: ''
        }
    },
    methods: {
        async handleSubmit(){
            const response = await axios.post('api/register', {
                name: this.name,
                email: this.email,
                password: this.password,
                password_confirm: this.password_confirm
            });
            
            //call the login page
            this.$router.push('/login');

        }
    }
}
</script>