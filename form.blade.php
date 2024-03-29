@extends('layouts')

@section('content')

@if(Session::has('message')) 
<p><strong> {{ Session::get('message') }}</strong></p>
@endif

<h1><strong>Mentoring for Research Programme (MRP)</strong></h1>
<h4>Reference Form </h4>

<p>
Thank you for your interest in providing a reference for one of the applicants for the 2022 cohort of the Mentoring for Research Programme. Given the remote nature of the programme, we place significant reliance on the recommendation of academic professors who have had academic/research experience with the applicant to help us with information about the student. The connection of the students selected for the programme to global researchers also makes the recommendation crucial to help us in selecting only students who have the capacity and the right level of exposure to relate internationally with professional ethics. Therefore, your recommendation of this applicant will play a significant role in our evaluation and we kindly request you to please provide the reference in sincerity and to the best of your knowledge and experience with the student. 

If the student is selected, we will also keep you informed on his progress, performance and practice on the programme. 

We sincerely appreciate your honest contribution toward ensuring the quality of the programme. Thank you. For inquiries or technical difficulties, you may please reach us via email: mrp@isnad-africa.org </p>

<p>Sincerely, </p>
<p>Akinleye Folorunsho </p>
<p>Lead, MRP </p>



<form action="{{ route('hreference')}}" method="post">
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

  <p>please, select as appropriate </p>
  <h4> Academic Attributes</h4>

  <fieldset>
  <legend>Commitment to academic excellence</legend>
  <div>
    <input type="radio" name="Aexcellence" value="excellence">
    <label for="excellent">Excellence</label>
  </div>

  <div>
    <input type="radio" name="Aexcellence" value="Very Good">
    <label for="vgood">Very Good</label>
  </div>
  
  <div>
    <input type="radio" name="Aexcellence"  value="Good">
    <label for="good">Good</label>
  </div>
  
  <div>
    <input type="radio" name="Aexcellence" value="Fair">
    <label for="fair">Fair</label>
  </div>

  <div>
    <input type="radio" name="Aexcellence" value="poor">
    <label for="poor">Poor</label>
  </div>

  </fieldset>

  <fieldset>
  <legend>Motivation for Research</legend>
  <div>
    <input type="radio" name="rMotivation" value="excellence">
    <label for="excellent">Excellence</label>
  </div>

  <div>
    <input type="radio" name="rMotivation" value="Very Good">
    <label for="vgood">Very Good</label>
  </div>
  
  <div>
    <input type="radio" name="rMotivation" value="Good">
    <label for="good">Good</label>
  </div>
  
  <div>
    <input type="radio" name="rMotivation" value="Fair">
    <label for="fair">Fair</label>
  </div>

  <div>
    <input type="radio" name="rMotivation" value="poor">
    <label for="poor">Poor</label>
  </div>

  </fieldset>

  <fieldset>
  <legend>Availability for Research Work</legend>
  <div>
    <input type="radio" name="availability" value="excellence">
    <label for="excellent">Excellence</label>
  </div>

  <input type="radio" name="availability" value="Very Good">
    <label for="vgood">Very Good</label>
  </div>
  
  <div>
    <input type="radio" name="availability" value="Good">
    <label for="good">Good</label>
  </div>
  
  <div>
    <input type="radio" name="availability" value="Fair">
    <label for="fair">Fair</label>
  </div>

  <div>
    <input type="radio" name="availability" value="poor">
    <label for="poor">Poor</label>
  </div>

  </fieldset>

  <fieldset>
  <legend>Competence in research topic</legend>
  <div>
    <input type="radio" name="competence" value="excellence">
    <label for="excellent">Excellence</label>
  </div>

  <div>
    <input type="radio" name="competence"  value="Very Good">
    <label for="vgood">Very Good</label>
  </div>
  
  <div>
    <input type="radio" name="competence" value="Good">
    <label for="good">Good</label>
  </div>
  
  <div>
    <input type="radio" name="competence" value="Fair">
    <label for="fair">Fair</label>
  </div>

  <div>
    <input type="radio" name="competence" value="poor">
    <label for="poor">Poor</label>
  </div>

  </fieldset>

  <fieldset>
  <legend>Capacity for Independent research</legend>
  <div>
    <input type="radio" name="capacity" value="excellence">
    <label for="excellent">Excellence</label>
  </div>

  <div>
    <input type="radio" name="capacity" value="Very Good">
    <label for="vgood">Very Good</label>
  </div>
  
  <div>
    <input type="radio" name="capacity" value="Good">
    <label for="good">Good</label>
  </div>
  
  <div>
    <input type="radio" name="capacity" value="Fair">
    <label for="fair">Fair</label>
  </div>

  <div>
    <input type="radio" name="capacity" value="poor">
    <label for="poor">Poor</label>
  </div>

  </fieldset>

  <fieldset>
  <legend>Reliability</legend>
  <div>
    <input type="radio" name="reliability" value="excellence">
    <label for="excellent">Excellence</label>
  </div>

  <div>
    <input type="radio" name="reliability"  value="Very Good">
    <label for="vgood">Very Good</label>
  </div>
  
  <div>
    <input type="radio" name="reliability"  value="Good">
    <label for="good">Good</label>
  </div>
  
  <div>
    <input type="radio" name="reliability"  value="Fair">
    <label for="fair">Fair</label>
  </div>

  <div>
    <input type="radio" name="reliability" value="poor">
    <label for="poor">Poor</label>
  </div>

  </fieldset>

 <fieldset>
  <legend>Integrity</legend>
  <div>
    <input type="radio"  name="integrity" value="excellence">
    <label for="excellent">Excellence</label>
  </div>

  <div>
    <input type="radio" name="integrity" value="Very Good">
    <label for="vgood">Very Good</label>
  </div>
  
  <div>
    <input type="radio" name="integrity" value="Good">
    <label for="good">Good</label>
  </div>
  
  <div>
    <input type="radio" name="integrity" value="Fair">
    <label for="fair">Fair</label>
  </div>

  <div>
    <input type="radio" name="integrity" value="poor">
    <label for="poor">Poor</label>
  </div>

  </fieldset>

   <fieldset>
  <legend>Potential in a research or academia career</legend>
  <div>
    <input type="radio" name="potential" value="excellence">
    <label for="excellent">Excellence</label>
  </div>

  <div>
    <input type="radio" name="potential" value="Very Good">
    <label for="vgood">Very Good</label>
  </div>
  
  <div>
    <input type="radio" name="potential" value="Good">
    <label for="good">Good</label>
  </div>
  
  <div>
    <input type="radio" name="potential" value="Fair">
    <label for="fair">Fair</label>
  </div>

  <div>
    <input type="radio" name="potential" value="poor">
    <label for="poor">Poor</label>
  </div>

  </fieldset>
  
        

  <h4> Character and Communication Attributes</h4>

  <fieldset>
  <legend>Level of maturity</legend>
  <div>
    <input type="radio" name="maturity" value="excellence">
    <label for="excellent">Excellence</label>
  </div>

  <div>
    <input type="radio" name="maturity" value="Very Good">
    <label for="vgood">Very Good</label>
  </div>
  
  <div>
    <input type="radio" name="maturity" value="Good">
    <label for="good">Good</label>
  </div>
  
  <div>
    <input type="radio" name="maturity" value="Fair">
    <label for="fair">Fair</label>
  </div>

  <div>
    <input type="radio" name="maturity" value="poor">
    <label for="poor">Poor</label>
  </div>

  </fieldset>

  <fieldset>
  <legend>Open-mindedness</legend>
  <div>
    <input type="radio"  name="openMind" value="excellence">
    <label for="excellent">Excellence</label>
  </div>

  <div>
    <input type="radio" name="openMind" value="Very Good">
    <label for="vgood">Very Good</label>
  </div>
  
  <div>
    <input type="radio" name="openMind" value="Good">
    <label for="good">Good</label>
  </div>
  
  <div>
    <input type="radio" name="openMind" value="Fair">
    <label for="fair">Fair</label>
  </div>

  <div>
    <input type="radio" name="openMind" value="poor">
    <label for="poor">Poor</label>
  </div>

  </fieldset>

  <fieldset>
  <legend>Email-writing</legend>
  <div>
    <input type="radio" name="EmailWriting" value="excellence">
    <label for="excellent">Excellence</label>
  </div>

  <div>
    <input type="radio" name="EmailWriting" value="Very Good">
    <label for="vgood">Very Good</label>
  </div>
  
  <div>
    <input type="radio" name="EmailWriting" value="Good">
    <label for="good">Good</label>
  </div>
  
  <div>
    <input type="radio" name="EmailWriting" value="Fair">
    <label for="fair">Fair</label>
  </div>

  <div>
    <input type="radio" name="EmailWriting" value="poor">
    <label for="poor">Poor</label>
  </div>

  </fieldset>

  <fieldset>
  <legend>Resourcefulness</legend>
  <div>
    <input type="radio" name="resourcesfullness" value="excellence">
    <label for="excellent">Excellence</label>
  </div>

  <div>
    <input type="radio" name="resourcesfullness" value="Very Good">
    <label for="vgood">Very Good</label>
  </div>
  
  <div>
    <input type="radio" name="resourcesfullness" value="Good">
    <label for="good">Good</label>
  </div>
  
  <div>
    <input type="radio" name="resourcesfullness" value="Fair">
    <label for="fair">Fair</label>
  </div>

  <div>
    <input type="radio" name="resourcesfullness" value="poor">
    <label for="poor">Poor</label>
  </div>

  </fieldset>

  
  <h4>Others</h4>

  <fieldset>
  <legend>Would you recommend this applicant for admission into our mentoring for research programme?s</legend>
  <div>
    <input type="radio" name="recommend" value="yes">
    <label for="yes">Yes</label>
  </div>

  <div>
    <input type="radio" name="recommend" value="No">
    <label for="no">No</label>
  </div>

  <div>
    <input type="radio" name="recommend" value="Maybe">
    <label for="maybe">Maybe</label>
  </div>

  </fieldset>


  <fieldset>
  <legend>Are you open to being involved in the communication with the mentor towards the research topic of the applicant?    </legend>
  <div>
    <input type="radio" name="involve" value="yes">
    <label for="yes">Yes</label>
  </div>

  <div>
    <input type="radio" name="involve"  value="No">
    <label for="no">No</label>
  </div>

  <div>
    <input type="radio" name="involve" value="Maybe">
    <label for="maybe">Maybe</label>
  </div>
  </fieldset>

  
  <fieldset>
  <legend> Are you interested in co-authoring journal applicants relating to the applicant’s research topic with the mentor? </legend>
  <div>
    <input type="radio" name="coAuthor" value="yes">
    <label for="yes">Yes</label>
  </div>

  <div>
    <input type="radio" name="coAuthor" value="No">
    <label for="no">No</label>
  </div>

  <div>
    <input type="radio" name="coAuthor" value="Maybe">
    <label for="maybe">Maybe</label>
  </div>
  </fieldset>

  <div>
  <label>In a summary (less than 300 characters), please elaborate on your assessment of the applicant and provide any additional information regarding the applicant which is not apparent in the academic transcripts. You may provide relevant comments that provide a complete picture of the applicant’s abilities and potential towards a successful relationship with the mentor, and also his motivation towards the completion of his current degree programme:</label>
  <textarea name="txt" ></textarea>
  </div>

    <input type="submit" value="Submit Reference" >
</form>
@endsection
