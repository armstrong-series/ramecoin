if (window.Vue) {
    new Vue({
        el: "#withdrawal",
        data: {
           isLoading: false,

         
           authenticate: {
               email: "",
               password: ""
           },

           url: {
               authenticate: ""

           },

           paymentMethod:{
               paypal: true,
               paystack: true,
               stripe: true
           }


        },



        mounted() {

 
        },

        methods: {
           switchPayment(){
               this.paymentMethod.paypal = false;
               this.paymentMethod.paystack = false;

           }

        }
    });
}