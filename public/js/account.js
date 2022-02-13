if (window.Vue) {
    new Vue({
        el: "#auth",
        data: {
           isLoading: false,

           authenticate:{
               email: "", 
               password: ""
           },

           account: {
            name: '',
            email: '',
            password: '',
            confirm_password: ""
          
        },

           url:{
               authencticate: "",
               accountCreate:""

           }


        },



        mounted() {

            this.url.authenticate = $("#authenticate").val();
            this.url.accountCreate = $("#createUser").val();
        },

        methods: {
           
          
            accountCreation() {
                this.isloading = false;
                axios.post(this.url.accountCreate, {
                    name: this.account.name,
                    email: this.account.email,
                    password: this.account.password,
                    confirm_password: this.account.confirm_password,
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
                        style: { backgroundColor: "green"}
                     });
                        this.isLoading = false;
                        window.location = "/login";
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
    
    
                    })
              
            },

           
          

                
            

          


        }
    });
}