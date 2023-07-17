@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Acc. Type : {{Auth::user()->account_type}}, {{ __('Current Balance') }} = {{Auth::user()->balance}}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-sm text-center">
                            <tr>
                                <th>#SL</th>
                                <th>Trnx. Type</th>
                                <th>Amount</th>
                                <th>Fee</th>
                                <th>Date</th>
                            </tr>
                            @foreach($transactions as $transaction)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$transaction->transaction_type}}</td>
                                    <td>{{number_format($transaction->amount, 2)}}</td>
                                    <td>{{$transaction->fee == null ? '' : $transaction->fee.'%'}}</td>
                                    <td>{{date('d M Y', strtotime($transaction->created_at))}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
