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
               authenticate: "",
               generatedOtp: ""

           },

           paymentMethod:{
               paypal: true,
               paystack: true,
               stripe: true
           }


        },



        mounted() {
            this.url.generatedOtp = $("#generateOtp").val();

 
        },

        methods: {

         generateOtp(){
             this.isLoading = true;
             let formData = new FormData();
             formData.append('_token', $('input[name=_token]').val());
             axios.post(this.url.generatedOtp, formData).then((response) => {
                console.log('response..',response.data);
                this.$toastr.Add({
                    msg: response.data.message,
                    clickClose: false,
                    timeout: 2000,
                    position: "toast-top-right",
                    type: "success",
                    preventDuplicates: true,
                    progressbar: false,
                    style: {backgroundColor: "#1BBCE8"}
                });
                this.isLoading = false;
                
            }).catch((error) => {
                this.isLoading = false
                this.$toastr.Add({
                    msg: error.response.data.message,
                    clickClose: false,
                    timeout: 2000,
                    position: "toast-top-right",
                    type: "error",
                    preventDuplicates: true,
                    progressbar: false,
                    style: { backgroundColor: "red" }
                });
            });
         },
           switchPayment(){
               this.paymentMethod.paypal = false;
               this.paymentMethod.paystack = false;

           }

        }
    });
}