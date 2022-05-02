@extends('layouts.app')
@section('content')


    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fa-solid fa-brain"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>NeuroData</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="articles.html"><i class="fas fa-table"></i><span>Articles</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="papers.html"><i class="fa-solid fa-newspaper"></i><span>Papers</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="login.html"><i class="far fa-user-circle"></i><span>Login</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">
                    <h3 class="text-dark mb-4" style="margin-top:30px">Add Blog: </h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Add Blog:</p>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" method="post" action="/user">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Name: </span>
                                            <input type="text" name="title" class="form-control" placeholder="title" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-primary" type="submit" name="submitbtn"><i class="fa-solid fa-floppy-disk"></i>&nbsp;<span>Save</span></button>
                                    </div>
                                </div>
                                <textarea name="content"></textarea>
                                <div class="row my-4">
                                    <label for="role" class="col-md-10 col-form-label text-md-right">Industry Option</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" id="role" name="industry_option" required focus>
                                            <option value="Healthcare">Healthcare</option>
                                            <option value="Financial Services">Financial Services</option>
                                            <option value="Healthcare">Healthcare</option>
                                            <option value="Retail">Retail</option>
                                            <option value="Transportation And Mobility">Transportation And Mobility</option>
                                            <option value="Retail">Other</option>
                                            <option value="" disabled selected>Select Industry Option</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-4 col-form-label" for="image">Post Image</label>
                                    <input class="form-control-file" id='image' name='image' type="file">
                                    @error('image')

                                    <strong>{{ $message }}</strong>

                                    @enderror
                                </div>
                                <div class='row pt-3'>
                                    <button type='submit' style='max-width:200px' class="btn btn-primary ">Submit Post</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © SJE 2022</span></div>
                </div>
            </footer>

        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="https://cdn.tiny.cloud/1/syg97z0d9m6kvaoysucirbrtsom46rvw2jqkjkzfs8utt47x/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    
    <script src="assets/js/tiny.js"></script>
    <script src="https://kit.fontawesome.com/faf10a209d.js" crossorigin="anonymous"></script>



<style>
    .py-4 {
        padding-top: 0rem !important;
        padding-bottom: 0rem !important;
    }
</style>


@endsection