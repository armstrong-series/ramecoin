if (window.Vue) {
    new Vue({
        el: "#transactions",
        data: {
           isLoading: false,
           copy:false,
           payment:false,

           url:{
              

           },
           address: "",
           transactions: [],
           usersTransactions: [],


        },


        created() {
            if(navigator.clipboard) {
              this.copy = true;
            }
        },



        mounted() {

            this.usersTransactions =  $('#transactions').val() ? JSON.parse($('#transactions').val()) : [];

        },

        methods: {


            switchPayment(){
                this.payment = !(this.payment);

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