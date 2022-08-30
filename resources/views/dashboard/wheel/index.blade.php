@extends('dashboard.layouts.main')
@section('wheels')
    active
@endsection
@section('css')



@endsection


@section('heading')
    Wheels List
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
                                 <a class=" ml-auto" href=""> <button class="btn btn-primary"><i class="fa fa-plus"></i> Create</button></a>
                            </div>

                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table class="table table-striped dataex-html5-selectors">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Wheel Name</th>
                                                <th>Wheel Number</th>
                                                <th>Cog Price</th>
                                                <th>Image</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $count=1; @endphp
                                            @foreach($wheels as $wheel)
                                                <tr>
                                                    <td>{{$count++}}</td>
                                                    <td>{{$wheel->wheel_name}}</td>
                                                    <td>{{$wheel->wheel_number}}</td>
                                                    <td>{{$wheel->cog_price}}</td>
                                                    <td> <img width="100" height="100" src="{{ asset('images/' .$wheel->image) }}" alt="" class="img-fluid"></td>
                                                    <td>{{date($wheel->created_at->format('Y-m-d'))}}</td>
                                                    <td>

                                                        <a href="{{route('edit_wheel',['wheel'=>$wheel->id])}}">
                                                            <i style="color: cornflowerblue;font-size: 20px" class="fa fa-edit p-2"></i>
                                                        </a>

                                                        <a class="delete" url="{{url('delete_wheel/'.$wheel->id)}}">
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
