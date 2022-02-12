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


       


        mounted() {
            this.usersTransactions =  $('#transactions').val() ? JSON.parse($('#transactions').val()) : [];

        },

        methods: {


            switchPayment(){
                this.payment = !(this.payment);

            },
        
          


        }
    });
}