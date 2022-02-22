if (window.Vue) {
    new Vue({
        el: "#confirmWithdrawal",
        data: {
           isLoading: false,

         
           authenticate: {
               email: "",
               password: ""
           },

           url: {
               authenticate: ""

           }


        },



        mounted() {
            this.url.authenticate = $("#authenticateWithdrawal").val();
 
        },

        methods: {
           
          
            authenticateWithdrawal(){
                this.isLoading = true;
                axios.post(this.url.authenticate,{
                    email: this.authenticate.email,
                   password: this.authenticate.password,
                    _token: $('input[name=_token]').val()
                }).then((response) => {
                    this.$toastr.Add({
                        msg: response.data.message,
                        clickClose: false,
                        timeout: 2000,
                        position: "toast-top-right",
                        type: "success",
                        preventDuplicates: true,
                        progressbar: false,
                        style: {backgroundColor: "green"}
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

           
          

                
            

          


        }
    });
}