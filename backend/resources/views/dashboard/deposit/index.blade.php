@extends('dashboard.layouts.main')
@section('deposit')
    active
@endsection
@section('css')



@endsection


@section('heading')
    Deposit List
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

                                    <div class="table-responsive">
                                        <table class="table table-striped dataex-html5-selectors">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>user name</th>
                                                <th>Currency</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>TID</th>
                                                <th>Payment Image</th>
                                                <th>Created AT</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $count=1; @endphp
                                            @foreach($deposits as $deposit)
                                                <tr>
                                                    <td>{{$count++}}</td>
                                                    <td>{{$deposit->user->username}}</td>
                                                    <td>{{$deposit->currency->name}}</td>
                                                    <td>{{$deposit->amount}}</td>
                                                    <td><span
                                                            class="{{$deposit->status()}}">{{$deposit->status}} </span>
                                                    </td>
                                                    <td>{{$deposit->tid}}</td>
                                                    <td><a download=""
                                                           href="{{asset('assets/files/'.$deposit->image)}}">Click here
                                                            to download</a></td>
                                                    <td>{{date($deposit->created_at->format('Y-m-d'))}}</td>
                                                    <td>
                                                        @if($deposit->status=='pending')

                                                            <a href="{{route('admin.approve.deposit',['deposit'=>$deposit->id])}}">
                                                                <button class="btn btn-primary">Approve</button>
                                                            </a>
                                                        @else
                                                            <button class="btn btn-success">Approved</button>

                                                        @endif

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
