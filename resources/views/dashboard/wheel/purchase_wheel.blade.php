@extends('dashboard.layouts.main')
@section('purchase_wheels')
    active
@endsection
@section('css')



@endsection

@section('heading')
Purchase Cog List
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
                            <!-- <div class="card-header">
                                 <a class=" ml-auto" href=""> <button class="btn btn-primary"><i class="fa fa-plus"></i> Create</button></a>
                            </div> -->

                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table class="table table-striped dataex-html5-selectors">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Wheel Name</th>
                                                <th>Purchased By</th>
                                                <th>Cog Price</th>
                                                <th>Date</th>
                                                <th>Payout Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $count=1; @endphp
                                            @foreach($wheels as $wheel)
                                                <tr>
                                                    <td>{{$count++}}</td>
                                                    <td>{{$wheel->purchase_wheel->wheel_name}}</td>
                                                    <td>{{$wheel->user->name}}</td>
                                                    <td>{{$wheel->purchase_wheel->cog_price}}</td>
                                                    
                                                    <td>{{date($wheel->created_at->format('Y-m-d'))}}</td>
                                                    @if($wheel->cog_percnt == 'not given')
                                                    <td>Pending</td>

                                                    @elseif($wheel->cog_percnt == 'given')
                                                    <td>Paid</td>
                                                    @else
                                                    <td>Returned</td>
                                                    @endif
                                                    

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
