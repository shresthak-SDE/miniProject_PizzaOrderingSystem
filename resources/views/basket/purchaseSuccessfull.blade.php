@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Payment</div>
                <div class="panel-body">
					<p>Order Id = {{ $order->id }} <br> User Id = {{$order->user_id}} <br> Amount =  {{Cart::total(),Cart::destroy()}} <br> successfuly Ordered !</p>
				</div>
				 @if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
			</div>
        </div>
    </div>
</div>
@endsection

