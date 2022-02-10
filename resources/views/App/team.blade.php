@extends('Layout.master')
@section('title')
<title>Team Member</title>
@endsection
@section('styles')
<style>
    .fileUpload {
      position: relative;
      overflow: hidden;
      margin: 10px;
      }
    .fileUpload input.upload {
      position: absolute;
      top: 0;
      right: 0;
      margin: 0;
      padding: 0;
      font-size: 20px;
      cursor: pointer;
      opacity: 0;
      filter: alpha(opacity=0);
    }
    * {
    box-sizing: border-box;
    }

    img.np-preview {
        background-color: #fff;
        border: 1px solid #ddd;
        padding: 5px;
        height: 230px;
        width: 400px;
        margin: 10px;
      }

</style>
@endsection
@section('content')
        <!-- Page Content -->
        <div class="ecaps-page-content">
            <!-- Top Header Area -->
           @include('Includes.header')
            <!-- Main Content Area -->
            <div class="main-content" id="team">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 box-margin">
                            <div class="animated-progressbar">
                                <div class="card">
                                    <div class="card-body"> 
                                        <button class="btn btn-info mt-15" data-toggle="modal" data-target="#myModal">Create</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">    
                        <div class="col-4"  v-for="(team, index) in teams">
                            <div class="card-deck-wrapper">
                                <div class="card-deck">
                                    <div class="card mb-20 break-576-none">     
                                        <img v-cloak class="card-img-top img-fluid" :src="'/storage/team-member/'+team.profile" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 v-cloak class="card-title mb-10">@{{ team.name }}</h5>
                                            <div v-cloak class="info">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-list-ul"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="javascript:void(0);" @click="editTeam(index)" data-toggle="modal" data-target="#editteam"><i class="fas fa-pen-fancy" title="edit team" style="float:center; width:15px; height:15px;"></i></a>
                                                        <hr>
                                                        <a class="dropdown-item" href="javascript:void(0);" @click="editThumbnail(team)" data-toggle="modal" title="Edit thumbnail" data-target="#editThumbnail"><i class="fad fa-file-edit" style="float:center; width:15px; height:15px;"></i></a>
                                                        <hr>
                                                        <a class="dropdown-item" @click="deleteMember(team.id)" title="delete" href="javascript:void(0);"><i class="fas fa-trash" style="float:center; width:15px; color:red; height:15px;"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card-deck-->
                            </div> <!-- end card-deck-wrapper-->
                        </div> <!-- end col-->
                    </div>

                 </div>


                 <!-- Modal  -->
                 <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content animated bounceInRight">
                            <div class="modal-header">
                               
                            </div>
                            <div class="modal-body">
                            <div class="form-group"><input type="text" v-model="team.name" placeholder="Enter Name" class="form-control"></div>
                            <div class="form-group"><input type="text" v-model="team.email" placeholder="Enter Email" class="form-control"></div>
                            <div class="form-group"><input type="text" v-model="team.desigantion" placeholder="(Optional) Enter Designation" class="form-control"></div>
                            <div class="form-group">
                                <textarea name="" id="" v-model="team.biography" cols="30" rows="6" placeholder="(Optional) Give a Biography" class="form-control"></textarea>
                            </div>
            
                            <div v-if="!imageFile" class="fileUpload px-5 py-2 mt-5 btn-md btn-primary" style="box-shadow:3px 4px 4px grey;">
                                   <span>Upload a Profile</span>&nbsp;&nbsp;<i v-if="!imageFile" class="fas fa-file-image"></i>
                                   <input  type="file" id="uploadBtn file"  name="profile" @change="showImagePreview(event)" accept="image/*"   ref="file" class="form-control upload">
							</div>

                            <div class="np-image-preview" v-if="imageFile != null && imageFile.length != 0" >
                                  <img class="np-preview" :src="imageFile" />
                             </div>
                             <div v-if="imageFile != null && imageFile.length != 0 && !isImageUploading">
                                 <button class="btn-sm btn-default" v-on:click="clearImage()">
                                 <i class="fas fa-trash"></i>
                                </button>
                                
                            </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button v-if="!isLoading" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button v-if="!isLoading"type="button" @click="createteam()" class="btn btn-primary">Save</button>
                                    <div v-if="isLoading" class="spinner-border text-info" role="status">
                                            <span class="sr-only">Loading...</span>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Thumbnail Edit -->
                <div class="modal inmodal" id="editThumbnail" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content animated bounceInRight">
                            <div class="modal-header">
                               
                            </div>
                            <div class="modal-body">
                            <div v-if="!imageFile" class="fileUpload px-5 py-2 mt-5 btn-md btn-primary" style="box-shadow:3px 4px 4px grey;">
                                   <span>Attach an image</span>&nbsp;&nbsp;<i v-if="!imageFile" class="fas fa-file-image"></i>
								<input  type="file" id="uploadBtn file"  name="slides" @change="showImagePreview(event)" accept="image/*"   ref="file" class="form-control upload">
							</div>

                            <div class="np-image-preview" v-if="imageFile != null && imageFile.length != 0" >
                                  <img class="np-preview" :src="imageFile" />
                             </div>
                             <div v-if="imageFile != null && imageFile.length != 0 && !isImageUploading">
                                 <button class="btn-sm btn-default" v-on:click="clearImage()">
                                 <i class="fas fa-trash"></i>
                                </button>                              
                            </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button v-if="!isLoading" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button v-if="!isLoading"type="button" @click="updateThumnail()" class="btn btn-primary">Save changes</button>
                                    <div v-if="isLoading" class="spinner-border text-info" role="status">
                                       <span class="sr-only">Loading...</span>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / -->
                 <!-- Modal  -->
                 <div class="modal inmodal" id="editMember" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content animated bounceInRight">
                            <div class="modal-header">
                               
                            </div>
                            <div class="modal-body">
                                <div class="form-group"><input type="text" v-model="edit_team.name" placeholder="Edit Name" class="form-control"></div>
                                <div class="form-group"><input type="text" v-model="edit_team.email" placeholder="Edit Email" class="form-control"></div>
                                <div class="form-group"><input type="text" v-model="edit_team.designation" placeholder="Edit Designation" class="form-control"></div>
                                               
                            </div>
                            <div class="modal-footer">
                                <button v-if="!isLoading" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button v-if="!isLoading"type="button" @click="renameMember()" class="btn btn-primary">Save changes</button>
                                    <div v-if="isLoading" class="spinner-border text-info" role="status">
                                            <span class="sr-only">Loading...</span>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
                    <textarea name="" id="createteam" cols="30" rows="10" style="display:none;">{{ route('team-member.create')}}</textarea>
                    <textarea name="" id="updateTeam" cols="30" rows="10" style="display:none;">{{ route('team-member.update')}}</textarea>
                    <textarea name="" id="teams" cols="30" rows="10" style="display:none;">{{ json_encode($teams) }}</textarea>

                <!-- Footer Area -->
                @include('Includes.footer')
            </div>
        </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/app/team.js') }}"></script>
@endsection