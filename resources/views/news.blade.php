{{-- {% set title = 'Dashboard' %}
{% set filename = 'index.html' %} --}}

@extends('layouts.admin')

{{-- {% block styles %} --}}
<link rel="stylesheet" href="{{ URL::asset('../dist/assets/vendors/iconly/bold.css')}}">
{{-- {% endblock %} --}}

@section('content')
<div class="page-heading">
    <h3>News</h3>
</div>
<div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Add
        News</button>
</div><br>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add News</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label class="mb-2">Title</label>
                    <div class="input-group mb-3">
                        <input type="text" name="title" class="form-control" placeholder="news title"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>

                    <label class="mb-2">Desc</label>
                    <textarea class="ckeditor form-control" name="desc"></textarea><br>

                    <label class="mb-2">Category</label>
                    <div class="input-group mb-3">
                        <select class="form-select" name="category_id" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <label class="mb-2">Image</label>
                    <div class="input-group mb-3">
                        <input type="file" name="image" class="form-control" placeholder="news title"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All News</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @foreach ($listNews as $index => $ln)
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Desc</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-auto">
                                                <p class=" mb-0">{{ $index+1 }}</p>
                                            </td>
                                            <td class="col-3">
                                                <div class="mb-0">
                                                    <p class="font-bold ms-3 mb-0">{{ $ln->title }}</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class="mb-0">{{ $ln->desc }}</p>
                                            </td>
                                            <td class="col-auto">
                                                <p class="mb-0">{{ $ln->image }}</p>
                                            </td>
                                            <th>
                                                <button type="button" class="btn btn-info">Update</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </th>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-5">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="{{ URL::asset('../dist/assets/images/faces/1.jpg')}}" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold">John Duck</h5>
                            <h6 class="text-muted mb-0">@johnducky</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Recent Messages</h4>
                </div>
                <div class="card-content pb-4">
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="{{ URL::asset('../dist/assets/images/faces/4.jpg')}}">
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1">Hank Schrader</h5>
                            <h6 class="text-muted mb-0">@johnducky</h6>
                        </div>
                    </div>
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="{{ URL::asset('../dist/assets/images/faces/5.jpg')}}">
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1">Dean Winchester</h5>
                            <h6 class="text-muted mb-0">@imdean</h6>
                        </div>
                    </div>
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="{{ URL::asset('../dist/assets/images/faces/1.jpg')}}">
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1">John Dodol</h5>
                            <h6 class="text-muted mb-0">@dodoljohn</h6>
                        </div>
                    </div>
                    <div class="px-4">
                        <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Start
                            Conversation</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Visitors Profile</h4>
                </div>
                <div class="card-body">
                    <div id="chart-visitors-profile"></div>
                </div>
            </div>
        </div>
    </section>
</div>
{{-- @section('content') --}}
{{-- {% block js %} --}}
<script src="{{ URL::asset('../dist/assets/vendors/apexcharts/apexcharts.js')}}"></script>
<script src="{{ URL::asset('../dist/assets/js/pages/dashboard.js')}}"></script>
@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    {{ __('You are logged in!') }}
</div>
</div>
</div>
</div>
</div>
@endsection --}}
