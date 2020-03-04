@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="" method="post" id="PaymentForm">
                        @csrf
                        <div class="row">
                            <div class="col-auto">
                                <label for="" class="">How Much You want to pay</label>
                                <input type="number" name="value" min="5" step=".5" class="form-control" value="{{mt_rand(500, 10000) /100}}">
                            </div>
                            <div class="col-auto">
                                <div class="form-group">
                                    <label for="my-select">Text</label>
                                    <select id="my-select" class="custom-select" name="currency">
                                        @foreach ($currencies as $currency )
                                    <option value="{{$currency->iso}}">{{strtoupper($currency->iso)}}</option>
                                        @endforeach
                                        @if
                                        @endif
                                    </select>
                                </div>
                            </div>                             
                            <div class="row-auto mt-3">
                                <div class="col">
                                    <label for=""> Select the desired payment platform</label>
                                    <div class="form-group">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            @foreach ($paymentplatforms as $paymentplatform )
                                            <label for="" class="btn btn-outline-secondary rounded m-2 p-1">
                                            <input type="radio" name="payment_platform" value="{{$paymentplatform->id}}"id="" required>
                                            <img src="{{asset($paymentplatform->image)}}" class="img-thumbnail" alt="">
                                         
                                            </label>


                                           @endforeach
                                          
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class=" text-center mt-3">
                            <button  type="submit" id="PayButton"class="btn btn-primary btn-md">Pay</button>
                          </div>
                    </form>
                </div>
          </div>
        </div>
    </div>
</div>
@endsection
