if (window.Vue) {
    new Vue({
        el: "#funding",
        data: {
           isLoading: false,
           
        investment: {
            amount: '',
            payment: '',
            coin: '',
            file:'',
        },

        originalFile: '',
        imageFile: null,
        input: null,
        isImageUploading: false,


           url:{
              deposit: ""

           },
         


        },


       



        mounted() {
            this.url.deposit = $("#deposit").val();
  

        },

        methods: {


            switchCoin(event){
              console.log('event...',event.target.value)
              console.log('coin...',this.investment.coin)

            },


            fundWallet(){
                this.isLoading = true;
                let formData = new FormData();
                formData.append('_token', $('input[name=_token]').val());
                formData.append('file', this.originalFile);
                for (let key in this.investment) {
                    let value = this.investment[key]
                    formData.append(key, value);
                }   
                axios.post(this.url.deposit, formData)
                .then((response) => {
                    $('#fundingWallet').modal('hide');
                    this.$toastr.Add({
                        msg: response.data.message,
                        clickClose: false,
                        timeout: 2000,
                        position: "toast-top-right",
                        type: "success",
                        preventDuplicates: true,
                        progressbar: false,
                        style: { backgroundColor: "green" }
                    });
                    this.isLoading = false;
                    // window.location.reload();
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
           
           
             copyAddress(){
                navigator.clipboard.writeText(this.address).then(() => {
                    this.$toastr.Add({
                        msg: "Copy successful!",
                        clickClose: false,
                        timeout: 2000,
                        position: "toast-top-right",
                        type: "success",
                        preventDuplicates: true,
                        progressbar: false,
                        style: { backgroundColor: "green" }
                    });
                }).catch((error) => {
             
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