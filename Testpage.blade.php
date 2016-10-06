@extends('Layout')


@section('content')




<ul class="list-group">
    <li class="list-group-item">
    {!!Form::open(array('url' => 'foo/bar')) !!}
    {!! Form::label('name1', 'Name') !!}
    {!! Form::text('name', 'Ex.Sommai') !!} </li>
    <br><li class="list-group-item">
    {!! Form::label('email1', 'E-Mail Address') !!}
    {!! Form::text('email', 'example@gmail.com') !!} </li>
    <br><li class="list-group-item">
    {!! Form::label('mobile1', 'Mobile') !!}
    {!! Form::text('mobile', 'Ex.091234567') !!} </li>


    <br><li class="list-group-item">
        {!! Form::label('select', 'Select Phone') !!}
        {{--@foreach($phone as $phones)--}}
            {!! Form::select('phone',$phone->lists('name','id')) !!}</li>
        {{--@endforeach--}}

    <br><li class="list-group-item">
        {!! Form::label('store1', 'Store') !!}
        {!! Form::label('store', ('')) !!}</li>
    <br><li class="list-group-item">
        {!! Form::label('price1', 'Price') !!}
        {!! Form::label('price', ('')) !!}</li>
    <br>
    {!! Form::submit('Reserve!') !!}
    {!! Form::close() !!}

    <h1>{{$phone[0]->name}}</h1>
    <h1>{{$phone[0]->store}}</h1>

    <div class="hidden">
        @foreach($phone as $value)
            <p id="phone_{{$value->id}}" data-store="{{$value->store}}" data-price="{{$value->price}}"></p>
        @endforeach
    </div>

</ul>

@stop
@section('script')
    <script>
        $( "select[name='phone']" ).change(function() {
//          console.log($(this).val());
            var store_change = $("#phone_"+$(this).val()).attr("data-store");
            var price_change = $("#phone_"+$(this).val()).attr("data-price");
//          console.log(store_change,price_change);
            $("label[for='store']").html(store_change);
            $("label[for='price']").html(price_change);
//            alert( "Handler for .change() called." );
        });
    </script>
@stop