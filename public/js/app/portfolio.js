
new Vue({
    el: '#portfolio',
    data: {
        isLoading: false,
        portfolio: {
            name: '', 
           description: ""
        },


        originalFile: '',
        input: null,
        imageFile: null,
        isImageUploading: false,

        route: {
            portfolio_create: ""
        }

       
    },


    mounted() {
        this.route.portfolio_create = $('#createPortfolio').val();
    },



    methods: {
       

        createPortfolio(){
            this.isLoading = true;
            let formData = new FormData();
            formData.append('slides', this.originalFile);
            formData.append('name', this.portfolio.name);
            formData.append('description', this.portfolio.description);
            axios.post(this.route.portfolio_create, formData,{
              headers: {
                  'Content-Type': 'multipart/formdata'
              }  
            }).then((response) => {
                $('#myModal').modal('hide');
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
                    style: { backgroundColor: "red"}
                  });
            
            })
        },

        showImagePreview(event) {
            this.input = event.target;
            if (this.input.files && this.input.files[0]) {
                this.originalFile = this.input.files[0]
                let reader = new FileReader();
                reader.onload = (e) => {
                    this.imageFile = e.target.result;    
                };
            
                reader.readAsDataURL(this.input.files[0]);
            }
        },
        clearImage() {
            this.imageFile = null;
            this.input = null;
        },
    }


})