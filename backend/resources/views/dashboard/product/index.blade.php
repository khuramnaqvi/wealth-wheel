@extends('dashboard.layouts.main')
@section('product')
    active
@endsection
@section('css')


@endsection

@section('heading')
    Product List
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
                                <a class=" ml-auto" href="{{route('admin.product.create')}}"> <button class="btn btn-primary"><i class="fa fa-plus"></i> Create</button></a>
                            </div>

                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table class="table table-striped dataex-html5-selectors">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Product ID</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $count=1; @endphp
                                            @foreach($products as $product)
                                                <tr>
                                                    <td>{{$count++}}</td>
                                                    <td><img class="showtd_image" src="{{asset('assets/files/'.$product->image)}}" alt=""></td>
                                                    <td>{{$product->name}}</td>
                                                    <td>{{$product->product_id}}</td>

                                                    <td>

                                                        <a href="{{route('admin.product.edit',['product'=>$product->id])}}">
                                                            <i style="color: cornflowerblue;font-size: 20px" class="fa fa-edit p-2"></i>
                                                        </a>

                                                        <a class="delete" url="{{route('admin.product.delete',['product'=>$product->id])}}">
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
