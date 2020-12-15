@extends('foods._indexlayout')
{{-- @extends('foods.foodlist') --}}

@section('featured')

<div class="allcontain">
	<div class="feturedsection">
		<h1 class="text-center"><span class="bdots">&bullet;</span>F E A T U R E S<span class="carstxt">C A R S</span>&bullet;</h1>
	</div>
	<div class="feturedimage">
		<div class="row firstrow">
			@foreach( $foods as $food )
			<div class="col-lg-6 costumcol colborder1">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
						<img src="{{ asset('storage/' . json_decode($food->pic,true)[0])}}" alt="porsche" class="img-fluid">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							{{-- {{$product->title}} --}}
							<h1>{{$food->title}}</h1>
							<p>{{$food->desc}}</p>
							<p>{{$food->cgy_id}}</p>
							<p>{{$food->location}}</p>
			 				<h2>Price &euro;{{$food->price}}</h2>
			 				<button id="btnRM">READ MORE</button>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@stop
