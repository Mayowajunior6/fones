@extends('layouts/products')

@section('content')

<div class="container">
	<div class="row" style="margin-top:20px; padding:0; width: 100%;">
		<div class="col-lg-9">
			<!-- @if ($errors->any())
    		<div class="alert alert-danger">
        		<ul>
           			 @foreach ($errors->all() as $error)
                		<li>{{ $error }}</li>
           			 @endforeach
        		</ul>
    		</div>
			@endif -->
			<form method="post" action="{{route('contact.store')}}" class="form_contact">
				<!-- Name -->
				<div class="form-group">
					@csrf
				    <label class="border-left" for="name">Name</label>
				    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter name" value="{{ old('name') }}"/>  
				</div>

				<!-- Email -->
				<div class="form-group">
				    <label class="border-left"  for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" name="email" 
				     value="{{ old('email') }}" placeholder="Enter email">
				    
				</div>

				<!-- Message -->
			    <div class="form-group">
				    <label class="border-left" for="message">Message</label>
				    <textarea  name="message" rows="4" cols="6" class="form-control" id="message" placeholder="Enter message">{{ old('message') }}</textarea>
				    
				    
				</div>
				<button type="submit" class="btn btn-lg btn-block">Submit</button>
			</form>
		</div>
		<div class="col-lg-3">
			<h4 class="display-5 question"><?=$title ?></h4>
			<p class="font-weight-bold">Visit Our Office</p>
			<span class="font-weight-normal">198 Main Ave <br />
				Winnipeg, Manitoba CA 334445
			</span>
			<span class="font-italic">incredibles@winnipeg.ca</span>
			<span class="font-italic">Mobile: 000-000-0000.</span>
		</div>
   </div>
</div>

@stop()