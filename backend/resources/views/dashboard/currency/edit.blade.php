@extends('dashboard.layouts.main')
@section('currency')
    active
@endsection
@section('css')

@endsection


@section('heading')
  Edit Currency
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

                                    <form action="{{route('admin.currency.update',['currency'=>$currency->id])}}" id="validationForm" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Name</label>
                                            <input type="text" value="{{$currency->name}}" required class="form-control" name="name" placeholder="name">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Address</label>
                                            <input type="text" required value="{{$currency->address}}" class="form-control" name="address"  placeholder="address">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">QR IMAGE</label>
                                            <input type="file" data-default-file="{{asset('assets/files/'.$currency->image)}}"  class="form-control dropify"  id="exampleFormControlInput1" name="file" >
                                        </div>




                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-success">save</button>
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
