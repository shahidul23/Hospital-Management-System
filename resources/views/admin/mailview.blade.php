<!DOCTYPE html>
<html lang="en">
  <head>
  	<base href="/public">

    <style type="text/css">
    	label
    	{
    		display: inline-block;

    		width: 200px;
    	}
    </style>

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.nevbar')
        <!-- partial -->
      <div class="container-fluid page-body-wrapper">

      	<div class="container" align="center" style="padding-top: 100px;">

             @if(session()->has('message'))

         <div class="alert alert-success">
         	<button type="button" class="close" data-dismiss="alert">
         		X
         	</button>
         	{{session()->get('message')}}

         </div>

         @endif

      		<form action="{{url('sendemail',$data->id)}}" method="POST">
      			@csrf
      			<div style="padding: 15px;">
      				<label>Greeting</label>
      				<input type="text" style="color:black" name="greeting" placeholder="write the Greeting" required="">
      			</div>
      			<div style="padding: 15px;">
      				<label>Body</label>
      				<input type="text" style="color:black" name="body" placeholder="write the body"required="">
      			</div>
      			
      			<div style="padding: 15px;">
      				<label>Action Text</label>
      				<input type="text" style="color:black" name="actiontext" placeholder="write the action "required="">
      			</div>
      			<div style="padding: 15px;">
      				<label>Action URL</label>
      				<input type="text" style="color:black" name="actionurl" placeholder="write the action "required="">
      			</div>
      			<div style="padding: 15px;">
      				<label>Mail End</label>
      				<input type="text" style="color:black" name="mailend" placeholder="write the mail end part "required="">
      			</div>
      			
      			<div style="padding: 15px;">
      				<input type="submit" class="btn btn-success">
      			</div>
      		</form>
      	</div>
      </div>  
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
