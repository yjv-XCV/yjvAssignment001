@extends('layouts.master')

@section('style')
<style>
	.white-600{
		background-color: white;
		min-height: 600px;
	}
	.myTextArea{
		padding:100px;
		text-align: left;
	}
</style>
@endsection

@section('content')
 <div class="ui inverted vertical masthead center aligned segment">

    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <a class="active item">Home</a>
        <a class="item">Get Started</a>
        <a class="item">Extra Features</a>
        <a class="item">Pricing</a>
        <div class="right item">
          <a class="ui inverted button">Log in</a>
          <a class="ui inverted button">Sign Up</a>
        </div>
      </div>
    </div>
	
	<div class="white-600">
		<div class="myTextArea">
			<div class="ui checkbox">
			  <input name="a" type="checkbox">
			  <label>Go to homepage</label>
			</div><br><br>
			<div class="ui checkbox">
			  <input name="b" type="checkbox">
			  <label>Checkout Founder Profile</label>
			</div><br><br>
			<div class="ui checkbox">
			  <input name="c" type="checkbox">
			  <label>Contact Joseph</label>
			</div><br><br>
			<div class="ui checkbox">
			  <input name="d" type="checkbox">
			  <label>Buy Our First Timer Package</label>
			</div><br><br>
			<div class="ui checkbox">
			  <input name="e" type="checkbox">
			  <label>Get Promo Code</label>
			</div><br><br>
		</div>
    </div>

  </div>
  @endsection
