@extends('dashboard.layouts.main')
@section('user')
    active
@endsection
@section('css')



@endsection


@section('heading')
    Users List
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
                                <a class=" ml-auto" href="{{route('admin.user.create')}}"> <button class="btn btn-primary"><i class="fa fa-plus"></i> Create</button></a>
                            </div>

                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table class="table table-striped dataex-html5-selectors">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>user name</th>
                                                <th>phone</th>
                                                <th>Joining Date</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $count=1; @endphp
                                            @foreach($users as $user)
                                                <tr>
                                                    <td>{{$count++}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->username}}</td>
                                                    <td>{{$user->phone}}</td>
                                                    <td>{{date($user->created_at->format('Y-m-d'))}}</td>
                                                    <td>

                                                        <a href="{{route('admin.user.edit',['user'=>$user->id])}}">
                                                            <i style="color: cornflowerblue;font-size: 20px" class="fa fa-edit p-2"></i>
                                                        </a>

                                                        <a class="delete" url="{{route('admin.user.delete',['user'=>$user->id])}}">
                                                            <i style="color: red;font-size: 20px" class="fa fa-trash p-2"></i>
                                                        </a>


                                                    </td>

                                                </tr>

                                            @endforeach


                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection
