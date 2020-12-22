@if ($errors->any())
    <div class="col col-xs-12 alert alert-danger">
    	 <button type="button" class="close" data-dismiss="alert">×</button>
    		Check the following errors :(
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif