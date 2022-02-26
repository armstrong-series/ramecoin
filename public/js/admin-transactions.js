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


      
         perecentageChange: "",
         transId: "",
         

           url:{
              status: "",
              coin: "",
              return_investment: ""

           },
           address: "",
           transactions: [],
        },


       


        mounted() {
            this.transactions =  JSON.parse($('#getTransactions').val());
            this.url.status = $("#status").val();
            this.url.return_investment = $("#returns").val();
  

        },

        methods: {

            selectTransaction(index) {
                this.transaction = Object.assign({}, this.transactions[index]);
                console.log(this.transaction);
            },

            downloadPaymentProof(file) {
                axios.get('/admin/transaction/download/' + file, { responseType: 'arraybuffer' }).then(response => {
                    let blob = new Blob([response.data], { type: 'image/*' })
                    const link = document.createElement('a')
                    link.href = window.URL.createObjectURL(blob)
                    link.download = file
                    link.click();
                });
            },





            addReturnOnInvestment(){
                this.isLoading = true;
                axios.post(this.url.return_investment,{
                    id: this.transaction.id,
                    perecentageChange: this.perecentageChange,
                    _token: $('input[name=_token]').val()
                }).then((response) => {
                    $('#roi').modal('hide');
                    console.log('response....',response.data);
                   
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
                    let transactionEdit = response.data.wallet;
                    this.transactions = this.transactions.map((transaction) =>{
                        if(transaction.id === transactionEdit.id){
                            transaction = Object.assign({}, transactionEdit)
                        }
                        return transaction;
                    })
                   
    
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
                    console.log('response....',response.data);
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
                    let transactionEdit = response.data.transaction;
                    this.transactions = this.transactions.map((transaction) =>{
                        if(transaction.id === transactionEdit.id){
                            transaction = Object.assign({}, transactionEdit)
                        }
                        return transaction;
                    })
                   
    
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
                    id: transaction.id,
                    status: transaction.status,   
                }

             },

        }

            
            
        
    });
}