@extends('dashboard.layouts.main')
@section('setting')
    active
@endsection
@section('css')

@endsection


@section('heading')
  Setting
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

                                    <form action="{{route('admin.setting.update')}}" id="validationForm" method="post" enctype="multipart/form-data">
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
                                            <label for="exampleFormControlInput1">password</label>
                                            <input type="password"   class="form-control" name="password"  placeholder="******">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Referral commission</label>
                                            <input type="number"  value="{{$setting->commission}}" required   class="form-control" name="commission"  placeholder="commission">
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
