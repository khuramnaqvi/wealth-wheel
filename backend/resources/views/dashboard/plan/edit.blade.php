@extends('dashboard.layouts.main')
@section('plan')
    active
@endsection
@section('css')

@endsection


@section('heading')
  Edit Plan
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

                                    <form action="{{route('admin.plan.update',['plan'=>$plan->id])}}" id="validationForm" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">VIP</label>
                                            <input type="text" value="{{$plan->vip}}" required class="form-control" name="vip" placeholder="vip">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Limit</label>
                                            <input type="number" min="1" required value="{{$plan->limit}}" class="form-control" name="limit"  placeholder="limit">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Amount</label>
                                            <input type="number" min="1" required value="{{$plan->amount}}" class="form-control" name="amount"  placeholder="amount">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Commission</label>
                                            <input type="number"  required value="{{$plan->commission}}" class="form-control" name="commission"  placeholder="commission">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1"> IMAGE</label>
                                            <input type="file" data-default-file="{{asset('assets/files/'.$plan->image)}}"  class="form-control dropify"  id="exampleFormControlInput1" name="file" >
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
