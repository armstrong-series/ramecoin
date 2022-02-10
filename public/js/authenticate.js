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
            password_confirmation: '',
          
        },

           url:{
               authencticate: "",
               accountCreate:""

           }


        },



        mounted() {

            this.url.authenticate = $("#authenticate").val();
            this.url.accountCreate = $("#authenticate").val();
        },

        methods: {
           
            authenticateUser(){
                this.isLoading = true;
                axios.post(this.mailchimp.install, {
                    email: this.authencticate.email,
                    password: this.authencticate.password,
                    _token: $('input[name=_token]').val()
                }).then((response) => {
                    this.isLoading = false;
                    this.$notify({
                        title: 'Success',
                        message: response.data.message,
                        type: 'success'
                    });
       
                }).catch((error) => {
                    this.isLoading = false
                    if (error.response) {
                        this.$notify({
                            title: 'Error',
                            message: error.response.data.message
                        });
                    } else {
                        this.$notify.error({
                            title: 'Error',
                            message: 'oops! Unable to complete request.'
                        });
                    }
                })

            },


            accountCreation() {
                this.isloading = false;
                axios.post(this.url.accountCreate, {
                    name: this.account.name,
                    email: this.account.email,
                    password: this.account.password,
                    password_confirmation: this.account.password_confirmation,
                }).then((response) => {
                    this.isLoading = false;
                    this.$notify({
                        title: 'Success',
                        message: response.data.message,
                        type: 'success'
                    }).catch((error) => {
                        console.log(error.response)
                        this.isLoading = false;
                        this.$notify.error({
                            title: 'Error',
                            message: error.response.data.message
                        });
    
                    });
                })
            },

           
          

                
            

          


        }
    });
}