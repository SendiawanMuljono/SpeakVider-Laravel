@extends('layout')

@section('yieldPlace')


<!--Section: Block Content-->
<section class="mb-5">

  <div class="d-flex justify-content-between">
    <div class="col-md-4 mb-4 mb-md-0">

      <div class="mdb-lightbox align-middle">

        <div class="row product-gallery mx-1">

          <div class="col-12 mb-0">
            <figure class="view overlay rounded z-depth-1 main-img">
                <img src="{{ asset('assets/speakers/'.$speaker->photo) }}"
                  class="img-fluid z-depth-1">
            </figure>
          </div>
        </div>
      </div>

    </div>
    <div class="col-md-8">

      <h3>{{ $speaker->name }}</h3>
      <p class="mb-2 text-muted text-uppercase small">CO-FOUNDER OF CANTIKMU.COM</p>
      <p><span class="mr-1"><strong>About</strong></span></p>
      <p class="pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit
        error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio,
        officia quis dolore quos sapiente tempore alias.</p>
      <div class="table-responsive">
        <table class="table table-sm table-borderless mb-0">
          <tbody>
            <tr>
              <th class="pl-0 w-25" scope="row"><strong>Email</strong></th>
              <td>{{ $speaker->email }}</td>
            </tr>
            <tr>
              <th class="pl-0 w-25" scope="row"><strong>Phone Number</strong></th>
              <td>{{ $speaker->phoneNumber }}</td>
            </tr>
            <tr>
              <th class="pl-0 w-25" scope="row"><strong>Skill</strong></th>
              <td>{{ $speaker->skill }}</td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>
</section>

<div>
  <h5 class="text-center mb-n1"><strong>Speaker's Schedule in the Week</strong></h5>

  <div class="d-flex justify-content-around" id="jadwal">

    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
             <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav" id="daychoose">
                    @if ($day == 'Monday')
                      <a class="nav-link active" id = "day"  href="#">Monday</a>    
                    @else
                      <a class="nav-link" id = "day"  href="/speakerdetail/{{ $speaker->id }}/Monday">Monday</a>  
                    @endif

                    @if ($day == 'Tuesday')
                      <a class="nav-link active" id = "day"  href="#">Tuesday</a>   
                    @else
                      <a class="nav-link" id = "day"  href="/speakerdetail/{{ $speaker->id }}/Tuesday">Tuesday</a>  
                    @endif

                    @if ($day == 'Wednesday')
                      <a class="nav-link active" id = "day"  href="#">Wednesday</a>   
                    @else
                      <a class="nav-link" id = "day"  href="/speakerdetail/{{ $speaker->id }}/Wednesday">Wednesday</a>  
                    @endif

                    @if ($day == 'Thursday')
                      <a class="nav-link active" id = "day"  href="#">Thursday</a>   
                    @else
                      <a class="nav-link" id = "day"  href="/speakerdetail/{{ $speaker->id }}/Thursday">Thursday</a>  
                    @endif

                    @if ($day == 'Friday')
                      <a class="nav-link active" id = "day"  href="#">Friday</a>   
                    @else
                      <a class="nav-link" id = "day"  href="/speakerdetail/{{ $speaker->id }}/Friday">Friday</a>  
                    @endif

                    @if ($day == 'Saturday')
                      <a class="nav-link active" id = "day"  href="#">Saturday</a>   
                    @else
                      <a class="nav-link" id = "day"  href="/speakerdetail/{{ $speaker->id }}/Saturday">Saturday</a>  
                    @endif

                    @if ($day == 'Sunday')
                      <a class="nav-link active" id = "day"  href="#">Sunday</a>   
                    @else
                      <a class="nav-link" id = "day"  href="/speakerdetail/{{ $speaker->id }}/Sunday">Sunday</a>  
                    @endif
                </div>

             </div>
        </div>
    </nav>
  </div>
</div>

<div class="mt-3">

    <div class="container overflow-hidden">
      <div class="d-flex justify-content-center">


        @if (count($schedule) == 0)
          <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Schedule not Available</h5>
                <p class="card-text">{{$speaker->name}} don't have available Schedule on {{$day}}</p>
            </div>
          </div>
        @else
          @foreach ($schedule as $schedule)
            <div class="card ml-2 mr-2 text-center">
              <div class="card-header font-weight-bold">
                Schedule {{$loop->index + 1}}
              </div>
              <div class="card-body">
                
                <table class="table-borderless card-text text-left">
                  <tbody>
                      <tr>
                          <td>Start Time</td>
                          <td>: <span class="font-weight-bold">{{ $schedule->startTime}}</span></td>
                      </tr>
                      <tr>
                          <td>End Time</td>
                          <td>: <span class="font-weight-bold">{{$schedule->endTime}}</span></td>
                      </tr>
                      <tr>
                          <td>Price</td>
                          <td>: <span class="font-weight-bold">Rp. {{number_format($schedule->price, 0,'.','.') }}</span></td>
                      </tr>
                  </tbody>
                </table>

                <div class="mt-3">
        
                  <form action="/schedules/updatestatus/{{$schedule->id}}" method="POST">
                    @csrf
                    @method('put')
                      <button class="btn btn-lg btn-success font-weight-bold" type="submit">Book Now</button>
                  </form>    
                </div>
              </div>
            </div>
          @endforeach
        @endif

      </div>
    </div>

</div>

@endsection
