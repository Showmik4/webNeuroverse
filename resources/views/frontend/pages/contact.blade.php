@extends('frontend.layouts.main')
@section('title')
{{ 'Home' }}
@endsection
@section('header.css')
<style>

</style>
@endsection
@section('main.content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center"
      style="background-image: url('{{ url('/'. $setting->contact_page_bg_image ) }}');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Contact</h2>
            <p>{!!@$setting->contact_page_text !!}</p>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Contact</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div>
        <iframe style="border:0; width: 100%; height: 340px;"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.0696672427434!2d90.41167357586305!3d23.780533378649874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c76475c51381%3A0xd0d8a3c3f6e7638!2sNeuron33%20Ltd.!5e0!3m2!1sen!2sbd!4v1717621275678!5m2!1sen!2sbd"
          frameborder="0" allowfullscreen></iframe>
      </div><!-- End Google Maps -->



      <div class="row gy-4 mt-4">

        <div class="col-lg-4">

          <div class="info-item d-flex">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h4>Location:</h4>
              <p>{{@$setting->address }}</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h4>Email:</h4>
              <p>{{@$setting->email }}</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex">
            <i class="bi bi-phone flex-shrink-0"></i>
            <div>
              <h4>Call:</h4>
              <p>{{@$setting->phone }}</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="col-lg-8">
          <form action="{{ route('store_contact') }}" method="POST" role="form">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            {{-- <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div> --}}
            <div class="text-center"><button type="submit" class="btn btn-primary">Send Message</button></div>
          </form>
        </div><!-- End Contact Form -->
      </div>
    </div>
  </section><!-- End Contact Section -->
</main><!-- End #main -->
@endsection
@section('footer.js')
@endsection