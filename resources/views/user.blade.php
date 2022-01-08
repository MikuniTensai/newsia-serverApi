{{-- {% set title = 'Dashboard' %}
{% set filename = 'index.html' %} --}}

@extends('layouts.admin')

{{-- {% block styles %} --}}
<link rel="stylesheet" href="{{ URL::asset('../dist/assets/vendors/iconly/bold.css')}}">
{{-- {% endblock %} --}}

@section('content')
<div class="page-heading">
    <h3>User</h3>
</div>
<div>
    <button type="button" class="btn btn-primary">+ Add User</button>
</div><br>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All User</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @foreach ($listUser as $index => $u)
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-auto">
                                                <p class=" mb-0">{{ $index+1 }}</p>
                                            </td>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md">
                                                        <img src="{{ URL::asset('../dist/assets/images/faces/5.jpg')}}">
                                                    </div>
                                                    <p class="font-bold ms-3 mb-0">{{ $u->name }}</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">{{ $u->email }}</p>
                                            </td>
                                            <th>
                                                <button type="button" class="btn btn-info">Update</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                                @endforeach
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
