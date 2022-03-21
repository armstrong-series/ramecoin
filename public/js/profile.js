if (window.Vue) {
    new Vue({
        el: "profile",
        data: {
           isLoading: false,
           profile_image: "",
          
          

           url: {
               profileImage: ""
           }
         
        },

        mounted() {
            this.url.profileImage = $("#profileImageStore").val();
        },

        methods: {
            uploadImage() {
                $('#selectImageInput').click()
            },
            
            selectImage(e){
                if (window.File && window.FileList && window.FileReader) {
                    var files = e.target.files; 
                    var file = files[0];
                    this.setProfileImage(file);
    
                } else {
                    this.$notify.error({
                        title: 'Error',
                        message: 'Unable to complete request. Please update your browser'
                    });
                }
            },

            setProfileImage(file) {
                this.profile_image = window.URL.createObjectURL(file);
                let formData = new FormData();
                if (file) {
                    formData.append('profile_pics', file)
                }
                formData.append('_token', $('input[name=_token]').val());
    
                axios.post(this.url.profileImage, formData,{
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    },
                }).then((response) => {
                    this.$toastr.Add({
                        msg: "Image Profile Updated",
                        clickClose: false,
                        timeout: 2000,
                        position: "toast-top-right",
                        type: "success",
                        preventDuplicates: true,
                        progressbar: false,
                        style: { backgroundColor: "green" }  
                    });
                }).catch( (error) => {
                    let message = "Unable to complete request"
                    if(error.response){
                        let errors = error.response.data.errors
                        let list = []
                        for (key in errors){
                            list.push(errors[key].join())
                        }
                        this.input_errors = list
                        message = error.response.data.message
                    }
                    
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