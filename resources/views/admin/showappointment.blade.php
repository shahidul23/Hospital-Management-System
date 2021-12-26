

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

         <div align="center" style="padding-top: 20px;">
         	<table>
         		<tr style="background-color: #36454F;" align="center">
         			<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Customer Name</th>
         			<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Email</th>
         			<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Phone</th>
         			<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Doctor Name</th>
         			<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Date</th>      			
         			<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Message</th>
         			<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Status</th>
         			<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Approve</th>
         			<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Canche</th>
              <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Send Mail</th>

         		</tr>
                @foreach($data as $appoints)
         		<tr tr style="background-color: #C0C0C0;" align="Center">

         		    <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$appoints->name}}</td>
         		    <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$appoints->email}}</td>
         		    <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$appoints->phone}}</td>
         		    <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$appoints->doctor}}</td>
         		    <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$appoints->date}}</td>
         		    <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$appoints->message}}</td>
         		    <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$appoints->status}}</td>
         		    <td>
         		    	<a class="btn btn-success" href="{{url('approve',$appoints->id)}}">Approve</a>
         		    </td>
         		    <td>
         		    	<a class="btn btn-danger" href="{{url('canceld',$appoints->id)}}">Canceld</a>
         		    </td>
                <td>
                  <a class="btn btn-primary" href="{{url('mailview',$appoints->id)}}">Send Mail</a>
                </td>

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
