@extends('dashboard.layouts.main')
@section('Product')
    active
@endsection
@section('css')

@endsection


@section('heading')
  Product Currency
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

                                    <form action="{{route('admin.product.save')}}" id="validationForm" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Name</label>
                                            <input type="text" value="{{old('name')}}" required class="form-control" name="name" placeholder="name">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Product ID</label>
                                            <input type="text" required value="{{old('limit')}}" class="form-control" name="product_id"  placeholder="product_id">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleFormControlInput1"> IMAGE</label>
                                            <input type="file" required class="form-control dropify"  id="exampleFormControlInput1" name="file" >
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
