if (window.Vue) {
    new Vue({
        el: "#funding",
        data: {
           isLoading: false,
           
        investment: {
            amount: '',
            payment: '',
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


            switchPayment(){
                this.payment = !(this.payment);

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
                Command: toastr["success"]("Copied successfuly!")
                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                }).catch(e => {
                console.error(e);
                Command: toastr["error"]("Unable to copy Address")
                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
              });   
            },
           
          

                
            

          


        }
    });
}