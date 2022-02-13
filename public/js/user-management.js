if (window.Vue) {
    new Vue({
        el: "#user-management",
        data: {
           isLoading: false,
          
           user:{
             name: "",
             email: "",
             mobile: "",
             password: "",
             confirm_password: "",
             role: "",
           },

           updateUser:{
            id: "",
            name: "",
            email: "",
            mobile: "",
            password: "",
            confirm_password: "",
            role: "",
          },


           url: {
               create: "",
               update: "",
               delete: "",
               secret: ""
           },

           users: []
        },


       


        mounted() {
         this.users = JSON.parse($("#users").val());
          this.url.create = $("#createUser").val();
          this.url.update = $("#updateUser").val();
          this.url.delete = $("#deleteUser").val();
          this.url.secret = $("#changeSecret").val();

        },

        methods: {

            addUser(){
              this.isLoading = true;
              let formData = new FormData();
                for(let key in this.user){
                    let value = this.user[key];
                    formData.append(key, value);
                }
                formData.append('_token', $('input[name=_token]').val());
                axios.post(this.url.create, formData)
                .then((response) => {
                        this.isloading = false;
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
                          $('.addUser').modal('hide');
                    }).catch((error) => {
                        console.log(error.response)
                        this.isLoading = false;
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
                    });


            },

            updateUser(){
                this.isLoading = true;
                let formData = new FormData();
                  for(let key in this.updateUser){
                      let value = this.updateUser[key];
                      formData.append(key, value);
                  }
                  formData.append('_token', $('input[name=_token]').val());
                  axios.post(this.url.update, formData)
                  .then((response) => {
                          this.isloading = false;
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
                          $('.editUser').modal('hide');
                      }).catch((error) => {
                          console.log(error.response)
                          this.isLoading = false;
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
                      });
  
  
              },
  

            changeSecret(){

                this.isLoading = true;
                let formData = new FormData();
                  for(let key in this.updateUser){
                      let value = this.updateUser[key];
                      formData.append(key, value);
                  }
                  formData.append('_token', $('input[name=_token]').val());
                  axios.post(this.url.secret, formData).then((response) => {
                          this.isloading = false;
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
                          $('.change_secret').modal('hide');
                      }).catch((error) => {
                          console.log(error.response)
                          this.isLoading = false;
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
                      });
            },



            deleteUser(index){
                let user = Object.assign({}, this.users[index]);
                user._token = $('input[name=_token]').val();
                const notifier = swal({
                    title: "Are you sure?",
                    text: "Once deleted, this data can't be recovered!",
                    icon: "warning",
                    // buttons: true,
                    // dangerMode: true,
                    closeOnClickOutside: false,
                    buttons: {
                    cancel: {
                        text: "cancel",
                        visible: true,
                        className: "",
                        closeModal: true,
                    },
                    confirm: {
                        text: "Confirm",
                        value: 'delete',
                        visible: true,
                        className: "btn-danger",
                    }
                }
                  });
                 notifier.then(value =>{
                     if(value == "delete"){
                        axios.delete(this.url.delete, { data: user}).then(response => {
                            this.isloading = false;
                            this.users.splice(index, 1);
                            this.isloading = false;
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
                            this.users.push(Object.assign({}, response.data.user, {}));
                        }).catch((error) => {
                            console.log(error.response)
                            this.isLoading = false;
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
                        });
                     }
                 })
              
            },


            
          clientChangeDialog(index) {
            const user = this.users[index]
            this.updateUser = {
                ...this.updateUser,
                id: this.user.id,
                name: user.name,
                mobile: user.mobile,
                email: user.email,
                role: user.role
                
            };

        },
           

          


        }
    });
}