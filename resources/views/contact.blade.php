@extends('layouts.apps')
@section('title', 'Products')

@section('content')

@if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

@if ($errors->has('error'))
  <div class="alert alert-danger">
    {{ $errors->first('error') }}
  </div>
@endif

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
    </ul>
  </div>
@endif



<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <h1 class="display-3 text-white animated slideInRight">Contact</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb animated slideInRight mb-0">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/contact">Contact</a></li>
      </ol>
    </nav>
  </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5 justify-content-center mb-5">
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="bg-light text-center h-100 p-5">
          <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px">
            <i class="fa fa-phone-alt fa-2x text-primary"></i>
          </div>
          <h4 class="mb-3">Phone Number</h4>
          <p class="mb-2">{{ $phoneContent->content ?? 'Phone number not available' }}</p>
          <a class="btn btn-primary px-4" href="tel:+0123456789">Call Now <i class="fa fa-arrow-right ms-2"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="bg-light text-center h-100 p-5">
          <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px">
            <i class="fa fa-envelope-open fa-2x text-primary"></i>
          </div>
          <h4 class="mb-3">Email Address</h4>
          <p class="mb-2">{{ $emailContent->content ?? 'Email not available' }}</p>
          <a class="btn btn-primary px-4" href="mailto:info@example.com">Email Now <i
              class="fa fa-arrow-right ms-2"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="bg-light text-center h-100 p-5">
          <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px">
            <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
          </div>
          <h4 class="mb-3">Office Address</h4>
          <p class="mb-2">{{ $officeContent->content ?? 'Office not available' }}</p>
          <a class="btn btn-primary px-4" href="https://goo.gl/maps/FsznshxgnULBGgkN9" target="blank">Direction <i
              class="fa fa-arrow-right ms-2"></i></a>
        </div>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">

        <iframe class="w-100" src="<?= $mapEmbedUrl ?>" frameborder="0" style="min-height: 450px; border: 0"
          allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0">
        </iframe>


      </div>
    </div>
    <div class="row g-5">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <p class="fw-medium text-uppercase text-primary mb-2">Contact Us</p>
        <h1 class="display-5 mb-4">
          If You Have Any Queries, Please Feel Free To Contact Us
        </h1>

        <div class="row g-4">
          <div class="col-6">
            <div class="d-flex">
              <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                <i class="fa fa-phone-alt text-white"></i>
              </div>
              <div class="ms-3">
                <h6>Phone Number</h6>
                <span>{{ $phoneContent->content ?? 'Phone number not available' }}</span>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="d-flex">
              <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                <i class="fa fa-envelope text-white"></i>
              </div>
              <div class="ms-3">
                <h6>Email Address</h6>
                <span>{{ $emailContent->content ?? 'Email not available' }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        <form action="{{ route('send.message') }}" method="POST">
          @csrf
          <div class="row g-3">
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required />
                <label for="name">Your Name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required />
                <label for="email">Your Email</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required />
                <label for="subject">Subject</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <textarea class="form-control" name="message" placeholder="Leave a message here" id="message"
                  style="height: 150px" required></textarea>
                <label for="message">Message</label>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary py-3 px-5" type="submit">
                Send Message
              </button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
<!-- Contact End -->
@endsection