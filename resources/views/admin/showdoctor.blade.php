
<!DOCTYPE html>
<html lang="en">
  <head>
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
      	<div align="Center" style="padding-top: 20px;">
      		<table>
         		<tr style="background-color: #36454F;" align="Center">
         			<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Doctors Name</th>
         			<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Phone</th>
         			<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Specilaty</th>
         			<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Room Nubers</th>      			
         			<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Doctors Image</th>
         			<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Delete</th>
         			<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Update</th>
         			
         		</tr>
         		@foreach($data as $doctor)
                <tr tr style="background-color: #C0C0C0;" align="Center">
                	<td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$doctor->name}}</td>
                	<td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$doctor->phone}}</td>
                	<td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$doctor->speciality}}</td>
                	<td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$doctor->room}}</td>
                	<td><img height="100" width="100" src="doctorname/{{$doctor->image}}"></td>
                	<td><a onclick="return confirm('are you sure to delete this')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                	<td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
                </tr>
                @endforeach
         	</table>
      	</div>
      </div> 
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>