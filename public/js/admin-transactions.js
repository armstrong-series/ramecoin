if (window.Vue) {
    new Vue({
        el: "#transactions",
        data: {
           isLoading: false,
           copy:false,
           payment:false,

           transaction: {
               id: "",
               status: ""
           },

           url:{
              transaction_status: ""

           },
           address: "",
           transactions: [],
        },


       


        mounted() {
            console.log("transactions...", this.transactions)
            this.transactions =  JSON.parse($('#getTransactions').val());
            this.url.transaction_status = $("#statusUpdate").val();


        },

        methods: {

            downloadPaymentProof(){

            },



            updateStatus(){
                this.isLoading = true;
                axios.post(this.url.transaction_status,{
                    id:this.transaction.id,
                    status: this.transaction.status,
                    _token: $('input[name=_token]').val()
                }).then((response) => {
                    $('#changeStatus').modal('hide');
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
                    this.transactions.push(Object.assign({}, response.data.transaction, {}));
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


            checkStatus(index) {
                const transaction = this.transactions[index];
                this.transaction = {
                    ...this.transaction,
                    id: this.transaction.id,
                    status: transaction.status,   
                }

             },

        }

            
            
        
    });
}