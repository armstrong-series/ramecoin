if (window.Vue) {
    new Vue({
        el: "#dashboard",
        data: {
           isLoading: false,

           wallet:true,

           coin: {
               name: "",
               address: ""

           },

           url:{
              coin: "",

           }


        },



        mounted() {
            this.url.coin = $("#createWallet").val();
 
        },

        methods: {
           
          
            addCoin(){
                this.isLoading = true;
                axios.post(this.url.coin,{
                    name: this.coin.name,
                    address: this.coin.address,
                    _token: $('input[name=_token]').val()
                }).then((response) => {
                    $('#addWallet').modal('hide');
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

                    this.coin.name =  "",
                    this.coin.address = ""

                    this.wallet = false;
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