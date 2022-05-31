@extends('website.layouts.app')

@section('content')

@include('website.layouts.nav')


<section data-bs-version="5.1" class="features15 cid-t7114AuAGp" id="features16-16">


    <div class="container">
        <div class="container mt-0">
            <div class="row">


            <div class="col-md-6 col-sm-12">
                <h3> <b>  CONTACT US</b> </h3>
                <p style="font-weight: bolder;color:gray">  Welcome to our Website. We are glad to have you around.</p>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h4><b> <span class="ion-ios-call"></span> Phone </b></h4>
                        <br>
                        <h6>(+95) 09-403077739</h6>
                        <h6>(+95) 09-251016448</h6>
                        <h6>(+95) 09-5194698</h6>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h4><b>  <span class="ion-ios-mail"></span> Email </b></h4>
                        <br>
                        <h6> bcis@kbtc.edu.mm </h6>
                        <h6> info@kbtc.edu.mm </h6>
                        <h6> mail@kbtc.edu.mm </h6>
                    </div>



                </div>
                <br> <br>
                <div class="row">

                    <div class="col-md-12">
                        <h4><b>  <span class="ion-ios-home"></span> Address </b></h4>
                        <h6> Campus (1) No9/689 East Dagon Shwepadar Street</h6>
                        <h6> Campus (2) Waggi Yeik Thar St, Yangon 11041</h6>
                    </div>
                </div>
                <hr>




            </div>
             <div class="col-md-6 col-sm-12">

                <form action="" method="post" enctype="multipart/form" class="card card-body bg-light">
                    @csrf
                    <h3> <b>  Contact Form</b> </h3>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Message</label>
                        <textarea  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address"></textarea>

                      </div>

                    <button type="submit" class="btn btn-primary">Send</button>
                  </form>
             </div>
            </div>
            <div class="row mt-3">
                <iframe class="mb-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.7816435086047!2d96.20156361436634!3d16.886692821497853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193fbf369bd69%3A0x14d8bc571b3c87b4!2sApex%20Myanmar%20Web%20Service!5e0!3m2!1sen!2smm!4v1653549899597!5m2!1sen!2smm" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>



@include('website.layouts.footer')
@endsection
