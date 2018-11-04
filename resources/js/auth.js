// require('./scripts');
// require('./plugins/alerts');
// require('./plugins/tables');
// require('./plugins/forms');

Vue.component('LoginForm', require("../components/auth/LoginForm.vue"));
// Vue.component('ResetForm', require("../components/auth/ResetForm.vue"));
// Vue.component('RegisterForm', require("../components/auth/RegisterForm.vue"));

// const auth = new Vue({
//     methods: {
//         sendForm(action, data){

//             axios.post(saction, data)
//                 .then(res => {
//                     let respURL = res.request.responseURL;
//                     let currURL = window.location.href;

//                     if (respURL != currURL) {
//                         window.location.href = respURL;

//                     } else {
//                         window.location.reload();
//                     }
//                 })
//                 .catch(err => {
//                     let errors = err.response.data.errors;
//                 });
//             }
//         }
//     });
