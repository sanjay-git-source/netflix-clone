@extends('layouts.master')

@section('content')

<div class="container my-5">
    <h2 class="text-center mb-4">Contact Us</h2>
    @if(session('status'))
<div class="alert alert-success">{{session('status')}}</div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg p-4 rounded">
                <form action="{{route('contactSubmitted')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" >
                   @error('name')
                   <div style="color:red;">{{$message}}</div>
                   @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" >
                        @error('email')
                   <div style="color:red;">{{$message}}</div>
                   @enderror
                    </div>

                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject" >
                        @error('subject')
                   <div style="color:red;">{{$message}}</div>
                   @enderror
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Type your message..." ></textarea>
                        @error('message')
                   <div style="color:red;">{{$message}}</div>
                   @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-danger px-4">Send Message</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
