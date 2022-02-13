if (window.Vue) {
    new Vue({
        el: "#funding",
        data: {
           isLoading: false,
           
        investment: {
            amount: '',
            payment: '',
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
            },

            getImage(){
                let input = document.getElementById("payment_proof") ;
                this.originalFile = this.$refs.file.files[0];
               },


            fundWallet(){
                this.isLoading = true;
                let formData = new FormData();
                for (let key in this.investment) {
                    let value = this.investment[key]
                    formData.append(key, value);
                }  
                formData.append('proof', this.originalFile);
                formData.append('_token', $('input[name=_token]').val());
               
                axios.post(this.url.deposit, formData,{
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    },
                }).then((response) => {
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
                    window.location = "/transactions";
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

            copyAddress() {
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
            },
           
           copyBitcoinAddress(){
                document.addEventListener("copy", this.copyBtc);
                if (document.execCommand("copy")) {
                    this.copyAddress();
                }
                document.removeEventListener("copy", this.copyBtc);
           },
           copyBtc(e) {
            e.clipboardData.setData("text/plain", this.copyBitcoinAddress.btc);
            e.preventDefault();
        },
             
          

                
            

          


        }
    });
}