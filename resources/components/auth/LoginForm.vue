<template>
    <form method="POST" class="form-validate" :action="action" @submit.prevent="sendForm">
        <div class="form-group">
            <input id="email" type="text" name="email" :class="[{'is-invalid':errors.email}, 'input-material']">
            <label for="email" class="label-material">User Name</label>
            <span class="invalid-feedback" role="alert" v-show="errors.email"></span>
        </div>
        <div class="form-group">
            <input id="password" type="password" name="password" :class="[{'is-invalid':errors.password}, 'input-material']">
            <label for="password" class="label-material">Password</label>
        </div>
        <div class="form-group terms-conditions">
            <input id="remember-me" name="remember" type="checkbox" value="true" class="checkbox-template">
            <label for="remember-me">Remember me</label>
        </div>
        <button id="login" type="submit" class="btn btn-primary">Login</button>
    </form>
</template>

<script>
export default {
    name: "login-form",
    props: [
        'action',
    ],
    data(){
        return {
            email: "",
            password: "",
        }
    },
    methods:{
        login(){

        }
    }
}
</script>

<style>

</style>
