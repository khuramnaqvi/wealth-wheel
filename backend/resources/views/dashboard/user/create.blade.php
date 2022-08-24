@extends('dashboard.layouts.main')
@section('user')
    active
@endsection
@section('css')

@endsection


@section('heading')
  Create User
@endsection

@section('title')
    MLM
@endsection

@section('content')

    <main>
        <div class="content-body">


            <section id="column-selectors">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            </div>

                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <form action="{{route('admin.user.save')}}" id="validationForm" method="post">
                                        @csrf

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Name</label>
                                            <input type="text" value="{{old('name')}}" required class="form-control" name="name" placeholder="name">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">user name</label>
                                            <input type="text" required value="{{old('username')}}" class="form-control" name="username"  placeholder="username">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Phone number</label>
                                            <input type="text" required value="{{old('phone')}}" class="form-control" name="phone"  placeholder="phone">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Password</label>
                                            <input type="password" required class="form-control" id="exampleFormControlInput1" name="password" placeholder="********">
                                        </div>


                                        <div class="form-group text-center">
                                            <button class="btn btn-success">save</button>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection
