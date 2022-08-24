@extends('dashboard.layouts.main')
@section('user')
    active
@endsection
@section('css')

@endsection


@section('heading')
  Edit User
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

                                    <form action="{{route('admin.user.update',['user'=>$user->id])}}" id="validationForm" method="post">
                                        @csrf

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Name</label>
                                            <input type="text" value="{{$user->name}}" required class="form-control" name="name" placeholder="name">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">user name</label>
                                            <input type="text" required value="{{$user->username}}" class="form-control" name="username"  placeholder="username">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">phone</label>
                                            <input type="text" required value="{{$user->phone}}" class="form-control" name="phone"  placeholder="phone">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Password</label>
                                            <input type="password"  class="form-control" id="exampleFormControlInput1" name="password" placeholder="********">
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
