@extends('theme2')

@section('content')



<br>
          <br>
          <br>
          <br>
          <br>

          <section id="mybookings" style="background-image: url(assets/img/intro-carousel/mybook.jpg)">
          <br>
          <br>
          <header class="section-header">

          <h3>My Bookings</h3>
         
        </header>
    <div class="container-xl">
    <div class="table-responsive">
       
            <table class="table  table-hover" >
                <thead>
                    <tr>
                        <th>Booking Id</th>
                        <th>Category</th>
                        <th>Worker</th>
                        <th>       </th>
                        <th>Location</th>
                        <th>Booking Date</th>	
                        <th>Booking Time</th>										
                        <th>Payment</th>
                        
                    </tr>
                </thead>
                <tbody>
                   <tr>
                        <td>@foreach($book as $book)
                    <tr>
                   
                        <td>{{$book->id}}</td> 
                        <td>{{$book->category->Category}}</td>
                        <td><img width="100" height="100" class="avatar" src="{{ URL::asset('assets/worker_img/'.$book->worker->Filepath) }}"></td> 
                        <td>{{$book->worker->Fname}}</td> 
                        <td>{{$book->location->Location}}</td>
                        <td>{{$book->date}}</td> 
                        <td>{{$book->time}}</td>
                        <td>{{$book->category->Payment}}</td>

                                                
                      
                        </tr> @endforeach
                  
                 
                </tbody>
            </table>
            
    </div>        
</div>     

</section>
    
@endsection
    