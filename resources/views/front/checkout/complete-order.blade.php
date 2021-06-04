@extends('front.master')

@section('body')
<div class="men">
	<div class="container">
        @if($message = Session::get('message'))
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-body text-center" style="background-color: lightgray">
                    {{$message}}
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-body" style="border: 1px solid lightgray">
                         <h1>Congratulation..... Your order place successfully. Please wait, we will contact with you soon...</h1>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>
@endsection
