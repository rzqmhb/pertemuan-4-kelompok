@extends('layouts.template')
@section('title')
    Devi Andini Febrianti
@stop

@section('content_title')
    Profile
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                        src="{{asset('/')}}img/devi.jpeg"
                        alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">Devi Andini Febrianti</h3>

                    <p class="text-muted text-center">Politeknik Negeri Malang</p>

                    <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>NIM</b> <a class="float-right">2141720189</a>
                    </li>
                    <li class="list-group-item">
                        <b>GitHub</b> <a href="https://github.com/deviandinifebrianti" class="float-right">@deviandinifebrianti</a>
                    </li>
                    <li class="list-group-item">
                        <b>Email</b> <a class="float-right">dv.andinifebrianti@gmail.com</a>
                    </li>
                    <li class="list-group-item">
                        <b>Whatsapp</b> <a class="float-right">+6281936791863</a>
                    </li>
                    </ul>

                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">About Me</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <strong><i class="fas fa-book mr-1"></i> Education</strong>

                    <p class="text-muted">
                    D4 TI / 2G- Politeknik Negeri Malang
                    </p>

                    <hr>

                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                    <p class="text-muted">Kediri, Jawa Timur</p>

                    <hr>

                    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                    <p class="text-muted">
                    <ul>
                    <li> <span class="tag tag-danger">UI Design</span> </li>
                    <li> <span class="tag tag-success">Laravel</span> </li>
                    <li> <span class="tag tag-info">Java</span> </li>
                    <li> <span class="tag tag-warning">PHP</span> </li>
                    <li> <span class="tag tag-primary">MySQL</span> </li>
                    </ul>
                    </p>

                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

            <div class="col-md-8">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                    <h3 class="card-title">Note</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                        </button>
                    </div>
                    </div>
                    <div class="card-body">
                    Tak kenal maka tak sayang, makanya ayo kenalan biar sayang haha
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card">
                    <div class="card-body">
                        <div class="post">
                        <div class="row mb-6">
                            <div class="col-sm-6">
                            <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6">
                                <img class="img-fluid mb-3" src="../../dist/img/photo2.png" alt="Photo">
                                <img class="img-fluid" src="../../dist/img/photo3.jpg" alt="Photo">
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-6">
                                <img class="img-fluid mb-3" src="../../dist/img/photo4.jpg" alt="Photo">
                                <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            </div>
                        <!-- /.col -->
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop