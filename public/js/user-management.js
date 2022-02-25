if (window.Vue) {
    new Vue({
        el: "#user-management",
        data: {
           isLoading: false,
          
           user:{
            id: "",
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
          this.url.update = $("#update").val();
          this.url.delete = $("#delete_user").val();
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
                  $('.addUser').modal('hide');
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
                          this.isloading = false;
                          
                          this.users.push(Object.assign({}, response.data.user, {}));
                          this.user = {
                              name: '',
                              email: '',
                              mobile: ''
                          }
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



            update(){
              this.isLoading = true;
              axios.post(this.url.update,{
                  id:this.updateUser.id,
                  email: this.updateUser.email,
                  name: this.updateUser.name,
                  mobile: this.updateUser.mobile,
                  role: this.updateUser.role,
                  _token: $('input[name=_token]').val()
              }).then((response) => {
                  console.log('response....',response.data);
                  $('.editUser').modal('hide');
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
                  let userEdit = response.data.user;
                  this.users = this.users.map((user) =>{
                      if(user.id === userEdit.id){
                          user = Object.assign({},userEdit)
                      }
                      return user;
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


        

           selectUser(index) {
                 this.updateUser = Object.assign({}, this.users[index]);
             },


             deleteUser(index) {
                let user = Object.assign({}, this.users[index]);
                console.log(user);
                user._token = $('input[name=_token]').val();

                const customAlert = swal({
                    title: 'Warning',
                    text: `Are you sure you want to delete this User? This action cannot be undone.`,
                    icon: 'warning',
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

                customAlert.then(value => {
                    if (value == 'delete') {
                        this.isLoading = true;
                        axios.delete(this.url.delete, { data: user })
                            .then(response => {
                                this.isLoading = false;
                                this.users.splice(index, 1);
                                this.$notify({
                                    title: 'Success',
                                    message: response.data.message,
                                    type: 'success'
                                });

                            }).catch(error => {
                                if (error.response) {
                                    this.isLoading = false;
                                    this.$notify.error({
                                        title: 'Error',
                                        message: error.response.data.message
                                    });
                                } else {
                                    this.$notify.error({
                                        title: 'Error',
                                        message: 'oops! Unable to complete request.'
                                    });
                                }
                            });

                    }
                });
            },

            
        //   clientChangeDialog(index) {
        //     const user = this.users[index]
        //     this.updateUser = {
        //         ...this.updateUser,
        //         id: user.id,
        //         name: user.name,
        //         email: user.email,
        //         mobile: user.mobile,
        //         role: user.role,  
        //     }
        //   }
          
         }
      
    });
}