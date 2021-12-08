@extends('layouts')

@section('content')

@if(Session::has('message')) 
<p><strong> {{ Session::get('message') }}</strong></p>
@endif
<form id="mrp" action="{{ route('hform') }}" method="post" enctype="multipart/form-data">
  @csrf
  <div>
  <label for="fullName">Full Name</label>
  <input type="text" name="fullName">
  </div>

  <div>
  <label for="title">Title</label>
  <input type="text" name="title">
  </div>

  <div>
  <label for="position">Position</label>
  <input type="text" name="position">
  </div>

  <div>
  <label for="institutionEmail">institutional Email Address</label>
  <input type="text" name="institutionEmail">
  </div>

  <div>
  <label for="phone">Phone</label>
  <input type="text" name="phone">
  </div>

  <div>
  <label for="relationship">What is your relationship with the Applicants</label>
  <input type="text" name="relationship">
  </div>

  <div>
  <label for="knownDuration">How long have you known the applicants</label>
  <input type="text" name="knownDuration">
  </div>
  

  <fieldset>
  <legend>How did you hear about us?</legend>
  <div>
    <input type="checkbox" id="instagram" name="source" value="instagram">
    <label for="instagram">Instagram</label>
  </div>
  <div>
    <input type="checkbox" id="facebook" name="source" value="facebook">
    <label for="facebook">Facebook</label>
  </div>
  <div>
    <input type="checkbox" id="search-engine" name="source" value="search-engine">
    <label for="search-engine">Search Engine</label>
  </div>
  <div>
    <input type="checkbox" id="word-of-mouth" name="source" value="word-of-mouth">
    <label for="word-of-mouth">Word of Mouth</label>
  </div>
  <div>
    <input type="checkbox" id="press" name="source" value="press">
    <label for="press">Press</label>
  </div>
  <div>
    <input type="checkbox" id="event" name="source" value="event">
    <label for="event">Event</label>
  </div>
  <div>
    <input type="checkbox" id="billboard" name="source" value="billboard">
    <label for="billboard">Billboard</label>
  </div>
  </fieldset>
  
        
    <input type="submit" name="submitBtn" id='frmSub'onclick="formsub()">
</form>
@endsection
