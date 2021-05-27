@extends('theme2')

@section('content')

<br>
          <br>
          <br>
          <br>
          <br>

          <section id="mybookings" style="background-image: url(assets/img/intro-carousel/whitewall.jpg)">
          <br>
          <br>
          <header class="section-header">

          <h3>My Bookings</h3>
         
        </header>
    <div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
         
            <div class="table-filter">
                <div class="row">
                    <div class="col-sm-3">
                        
                    </div>
                    <div class="col-sm-9">
                        
                        </div>
                        
                       
                       
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover" style="background-image: url(assets/img/intro-carousel/whitewall2.jpg)">
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
                        <td><img width="150" height="100" class="avatar" src="{{ URL::asset('assets/worker_img/'.$book->worker->Filepath) }}"></td> 
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
    