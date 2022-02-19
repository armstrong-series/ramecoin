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


           wallet:true,

           coin:{
               name: "",
               address: ""
           },

           url:{
              status: "",
              coin: ""

           },
           address: "",
           transactions: [],
        },


       


        mounted() {
            console.log("transactions...", this.transactions)
            this.transactions =  JSON.parse($('#getTransactions').val());
            this.url.status = $("#status").val();
            this.url.coin = $("#addCoin").val();


        },

        methods: {

            downloadPaymentProof(){

            },

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

            updateStatus(){
                this.isLoading = true;
                axios.post(this.url.status,{
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