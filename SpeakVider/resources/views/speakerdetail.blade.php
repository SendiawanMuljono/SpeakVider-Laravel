@extends('layout')

@section('yieldPlace')


<!--Section: Block Content-->
<section class="mb-5">

  <div class="row">
    <div class="col-md-6 mb-4 mb-md-0">

      <div id="mdb-lightbox-ui"></div>

      <div class="mdb-lightbox">

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
    <div class="col-md-6">

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
<div class="d-flex justify-content-around" id="jadwal">

    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
             <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav" id="daychoose">
                    <a class="nav-link" id = "day"  href="/speakerdetail/{{ $speaker->id }}/Monday">Monday</a>
                    <a class="nav-link" id = "day"  href="/speakerdetail/{{ $speaker->id }}/Tuesday">Tuesday</a>
                    <a class="nav-link" id = "day"  href="/speakerdetail/{{ $speaker->id }}/Wednesday">Wednesday</a>
                    <a class="nav-link" id = "day"  href="/speakerdetail/{{ $speaker->id }}/Thursday">Thursday</a>
                    <a class="nav-link" id = "day"  href="/speakerdetail/{{ $speaker->id }}/Friday">Friday</a>
                    <a class="nav-link" id = "day"  href="/speakerdetail/{{ $speaker->id }}/Saturday">Saturday</a>
                    <a class="nav-link" id = "day"  href="/speakerdetail/{{ $speaker->id }}/Sunday">Sunday</a>
                </div>

             </div>
        </div>
    </nav>
</div>

<div class="mt-3">

    <div class="container overflow-hidden">
      <div class="row gy-5">
        @foreach ($schedule as $schedule)
          <div class="col-3">
            <div class="p-3 border border-dark bg-light">
              <div>Start time : {{ $schedule->startTime }}</div>
              <div>End time : {{ $schedule->endTime }}</div>
              <div>Price : Rp. {{ $schedule->price }}</div>
              <div class="mt-5">
                <a href="/booknow">
                    <button class="rounded-pill btn-lg bg-success border-0 font-weight-bold text-white" style="margin-left: 20%">Book Now</button>
                </a>
            </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

</div>

@endsection
