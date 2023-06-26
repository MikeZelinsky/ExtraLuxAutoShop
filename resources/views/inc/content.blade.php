@section('content')
    <article>
        <div class="container">
            <div class="row">
                @foreach($cars as $car)

                    <div class="col-md-4">
                        <p>{{ $car->brand }}</p>
                        <a href="{{route('ViewCar', ['id' => $car->id])}}"><img src="{{$car->file}}" width="90%"/></a>
                    </div>
                @endforeach
            </div>
        </div>


    </article>
@show
