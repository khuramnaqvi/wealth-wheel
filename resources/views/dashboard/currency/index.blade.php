@extends('dashboard.layouts.main')
@section('currency')
    active
@endsection
@section('css')


@endsection

@section('heading')
    Currency List
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
                                <a class=" ml-auto" href="{{route('admin.currency.create')}}"> <button class="btn btn-primary"><i class="fa fa-plus"></i> Create</button></a>
                            </div>

                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table class="table table-striped dataex-html5-selectors">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>QR-Image</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $count=1; @endphp
                                            @foreach($currencies as $currency)
                                                <tr>
                                                    <td>{{$count++}}</td>
                                                    <td><img class="showtd_image" src="{{asset('assets/files/'.$currency->image)}}" alt=""></td>
                                                    <td>{{$currency->name}}</td>
                                                    <td>{{$currency->address}}</td>

                                                    <td>

                                                        <a href="{{route('admin.currency.edit',['currency'=>$currency->id])}}">
                                                            <i style="color: cornflowerblue;font-size: 20px" class="fa fa-edit p-2"></i>
                                                        </a>

                                                        <a class="delete" url="{{route('admin.currency.delete',['currency'=>$currency->id])}}">
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
