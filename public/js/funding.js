if (window.Vue) {
    new Vue({
        el: "#funding",
        data: {
           isLoading: false,
           
        investment: {
            amount: '',
            payment: '',
        },

        btc: "bc1qlqfgvl2sm5faw5jc66e9jgc08rcassypyg3m20",

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

            copyBtc() {
               this.$refs.btc.focus();
                document.execCommand('copy');
                return  this.$toastr.Add({
                        msg: "copied successfully!",
                        clickClose: false,
                        timeout: 2000,
                        position: "toast-top-right",
                        type: "success",
                        preventDuplicates: true,
                        progressbar: false,
                        style: { backgroundColor: "green" }
                    });
                  
            },



            copyUsdt() {
                this.$refs.usdt.focus();
                 document.execCommand('copy');
                 return  this.$toastr.Add({
                         msg: "copied successfully!",
                         clickClose: false,
                         timeout: 2000,
                         position: "toast-top-right",
                         type: "success",
                         preventDuplicates: true,
                         progressbar: false,
                         style: { backgroundColor: "green" }
                     });
                   
             },
           
         
        },
             
          

                
            

          


        
    });
}