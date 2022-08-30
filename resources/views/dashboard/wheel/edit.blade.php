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

                                    <form action="{{route('update_wheel',['wheel'=>$wheel->id])}}" id="validationForm" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Wheel Number</label>
                                            <input type="text" value="{{$wheel->wheel_number}}" required class="form-control" name="wheel_number" placeholder="Wheel Number">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Wheel Name</label>
                                            <input type="text" value="{{$wheel->wheel_name}}" required class="form-control" name="wheel_name" placeholder="Wheel Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Cog price</label>
                                            <input type="text" value="{{$wheel->cog_price}}" required class="form-control" name="cog_price" placeholder="Cog price">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Image</label>
                                            <input type="file" value="{{$wheel->image}}" required class="form-control" name="image" placeholder="Cog price">
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
