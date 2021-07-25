@extends('Layout.master')
@section('title')
<title>Portfolio</title>
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
            <div class="main-content" id="portfolio">
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
                        <div class="col-12">
                                <div class="card-deck-wrapper">
                                    <div class="card-deck">
                                        <div class="card mb-20">
                                            <img class="card-img-top img-fluid" src="{{ asset('assets/img/gallery-img/1.jpg') }}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title mb-10">Homepage Update</h5>
                                                <p class="card-text">Updated 5hr ago </p>
                                                <div class="info">
                                                    <div class="progress mb-20 progress-sm">
                                                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="avatar-area">
                                                            <div class="img-group">
                                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Smith Jones"><img src="{{ asset('assets/img/member-img/2.png') }}" alt="user" class="rounded-circle"> </a>
                                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="David jhon"><img src="{{ asset('assets/img/member-img/3.png') }}" alt="user" class="rounded-circle"> </a>
                                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jhon Henry"><img src="{{ asset('assets/img/member-img/4.png') }}" alt="user" class="rounded-circle"> </a>
                                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Smith"><img src="{{ asset('assets/img/member-img/5.png') }}" alt="user" class="rounded-circle"></a>
                                                            </div>
                                                        </div>
                                                        <h6 class="mb-0">30%</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mb-20">
                                            <img class="card-img-top img-fluid" src="{{ asset('assets/img/gallery-img/2.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title mb-10">Homepage Update</h5>
                                                <p class="card-text">Updated 5hr ago </p>
                                                <div class="info">
                                                    <div class="progress mb-20 progress-sm">
                                                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="avatar-area">
                                                            <div class="img-group">
                                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Smith Jones"><img src="{{ asset('assets/img/member-img/2.png') }}" alt="user" class="rounded-circle"> </a>
                                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="David jhon"><img src="{{ asset('assets/img/member-img/3.png') }}" alt="user" class="rounded-circle"> </a>
                                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jhon Henry"><img src="{{ asset('assets/img/member-img/4.png') }}" alt="user" class="rounded-circle"> </a>
                                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Smith"><img src="{{ asset('assets/img/member-img/5.png') }}" alt="user" class="rounded-circle"></a>
                                                            </div>
                                                        </div>
                                                        <h6 class="mb-0">50%</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mb-20 break-576-none">
                                            <img class="card-img-top img-fluid" src="{{ asset('assets/img/gallery-img/3.jpg') }}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title mb-10">Homepage Update</h5>
                                                <p class="card-text">Updated 5hr ago </p>
                                                <div class="info">
                                                    <div class="progress mb-20 progress-sm">
                                                        <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="avatar-area">
                                                            <div class="img-group">
                                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Smith Jones"><img src="{{ asset('assets/img/member-img/2.png') }}" alt="user" class="rounded-circle"> </a>
                                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="David jhon"><img src="{{ asset('assets/img/member-img/3.png') }}" alt="user" class="rounded-circle"> </a>
                                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jhon Henry"><img src="{{ asset('assets/img/member-img/4.png') }}" alt="user" class="rounded-circle"> </a>
                                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Smith"><img src="{{ asset('assets/img/member-img/5.png') }}" alt="user" class="rounded-circle"></a>
                                                            </div>
                                                        </div>
                                                        <h6 class="mb-0">70%</h6>
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
                            <div class="form-group"><input type="text" v-model="portfolio.name" placeholder="Enter Portfolio Name" class="form-control"></div>
                            <div class="form-group"><textarea name="" id="" v-model="portfolio.description" cols="30" rows="6" placeholder="Describe your portfolio" class="form-control"></textarea></div>
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
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="button" @click="createPortfolio()" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
             </div>

             <textarea name="" id="createPortfolio" style="display:none;" cols="30" rows="10">{{ route('user.portfolio.create') }}</textarea>

                <!-- Footer Area -->
                @include('Includes.footer')
            </div>
        </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/app/portfolio.js') }}"></script>
@endsection