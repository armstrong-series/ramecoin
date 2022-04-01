if (window.Vue) {
    new Vue({
        el: "#userSecurity",
        data: {
           isLoading: false,
           account: {
            name: '',
            mobile: '',
            password: '',
            confirm_password: ""
          
          },

           url:{
               update: ""

           }


        },



        mounted() {
            this.url.update = $("#updateUser").val();
           
        },

        methods: {
           
          
            updateAccount() {
                this.isloading = false;
                let formData = new FormData();
                for(let key in this.account){
                    let value = this.account[key];
                    formData.append(key, value);
                }
                formData.append('_token', $('input[name=_token]').val());
                axios.post(this.url.update, formData).then((response) => { 
                    this.$toastr.Add({
                        msg: response.data.message,
                        clickClose: false,
                        timeout: 2000,
                        position: "toast-top-right",
                        type: "success",
                        preventDuplicates: true,
                        progressbar: false,
                        style: { backgroundColor: "#1BBCE8"}
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
    
    
                    })
              
            },

           
          

                
            

          


        }
    });
}