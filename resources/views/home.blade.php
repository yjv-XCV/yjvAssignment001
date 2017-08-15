@extends('layouts.master')

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

    <div class="ui text container">
      <h1 class="ui inverted header">
        GYTD&trade;
      </h1>
      <h2>Get your things done. It is fast, fun, and fantastic</h2>
      <div class="ui huge primary button" id="next">Get Started <i class="right arrow icon"></i></div>
    </div>

  </div>

  <div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="eight wide column">
          <h3 class="ui header">Our founder - Joseph Chew</h3>
          <p>He is an expert in time management. He found that many people cannot manage their time properly. Here comes in the idea of GYTD&trade;, he aimed to help all people who suffers from procastination to overcome bad time management with his unique time management style.</p>
          <h3 class="ui header">Scientific proven method!</h3>
          <p>We had get over thousand of volunteer to test out his way of managing his time. More than 98% of them really improve their time management skills, and with GYTD&trade;, they really get their things done smoothly! Now they have their life improved, how about you?</p>
        </div>
        <div class="six wide right floated column">
          <img src="imgs/index.jpeg" class="ui large bordered rounded image">
        </div>
      </div>
      <div class="row">
        <div class="center aligned column">
          <a class="ui huge button">Checkout Their Testimony</a>
        </div>
      </div>
    </div>
  </div>


  <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
          <h3>"24 hours is more than enough now"</h3>
          <p>After using GYTD&trade;, you will never complain 24 hours is not enough</p>
        </div>
        <div class="column">
          <h3>"Time is more flexible now!"</h3>
          <p>
            <b>Joseph</b> Founder of GYTD&trade;
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="ui vertical stripe segment">
    <div class="ui text container">
      <h3 class="ui header">Breaking The Chain, Grab Your Time</h3>
      <p>If you are still find you are lack of time, it's because you haven't try GYTD&trade;</p>
      <a class="ui large button">Read More</a>
      <h4 class="ui horizontal header divider">
        <a href="#">Extra Service</a>
      </h4>
      <h3 class="ui header">One to one guidance</h3>
      <p>We know, virtual assistance on your time management may be not satisfy for you. We do provide face to face personal training on time management skill. Of course, it is not free of charge. However, we have a lot of promotions that help you to get the service with the lowest price!</p>
      <a class="ui large button">I'm Still Quite Interested</a>
    </div>
  </div>
@endsection

@section('script')
<script>
	$('#next').on('click', function(){
		location.href = "/show";
	});
</script>
@endsection