@extends('layouts/products')

@section('content')
<script>
	$(document).ready(function(){
	  $("div.question").click(function(){
	    $(this).next("div.answer").toggle().css({"opacity": "1"});
	  });
	});

</script>
<div class="container">
	<div class="row" style="margin: 0; padding:0; width: 100%;">

		<h1 class="display-4"><?=$title?></h1>
		<!-- 1 -->
		<div class="question col-lg-12" >
			Q: What is your return policy?
		</div>
		<div class="answer col-lg-12" >
			A: We allow returns of all items within 30 days of your order date. Just send us an email with your order number and we will send you a return label.
		</div>

		<!-- 2 -->
		<div class=" question col-lg-12" >
			Q: How can I get membership of incredibles?
		</div>
		<div class="answer col-lg-12" >
			A. Hopefully your not trying to see where your friend , boy friend or girl friend is at the moment and you want to locate a lost or stolen phone. Follow the steps in the sticky above.
		</div>

		<!-- 3 -->
		<div class=" question col-lg-12" >
			Q: What is the avaegrage discount of being a member with incredibles?
		</div>
		<div class="answer col-lg-12" >
			A. Hopefully your not trying to see where your friend , boy friend or girl friend is at the moment and you want to locate a lost or stolen phone. Follow the steps in the sticky above.
		</div>

		<!-- 4 -->
		<div class=" question col-lg-12" >
			Q: How do I find my phone by it's sim card?
		</div>
		<div class="answer col-lg-12" >
			A. All of these questions can be helped by visiting the sticky post at the top of the forum section on cell phones and smartphones.
		</div>

		<!-- 5 -->
		<div class=" question col-lg-12" >
			Q: Can I track a cell phone?
		</div>
		<div class="answer col-lg-12" >
			A. Hopefully your not trying to see where your friend , boy friend or girl friend is at the moment and you want to locate a lost or stolen phone. Follow the steps in the sticky above.
		</div>

		<!-- 6 -->
		<div class=" question col-lg-12" >
			Q: Can I find a cell phone by location maps?
		</div>
		<div class="answer col-lg-12" >
			A. Some cell phones and smart phones have some GPS capability and you can see where you are when you enable the GPS on your phone. As far as tracking goes there is one web site that offers a way to find your lost phone.
		</div>
		
    </div>
</div>

@stop()