@extends('layouts')

@section('content')

@if(Session::has('message')) 
<p> {{ Session::get('message') }}</p>
@endif
<form id="mrp" action="{{ route('hform') }}" method="post" enctype="multipart/form-data">
  @csrf
    <div>
      <div class="page" id="one">
        <div style="color:red;">
          
          <p>
            <strong>Application Requirements</strong>
          </p>
          <p>Please carefully review the application requirements listed below</p>
          <p>Applicants should be</p>
          <ol>
            <li>a registered postgraduate student in a University in an African country</li>
            <li>be commencing or at the early stage of his/her research in 2022 (PhD students can appliy if they still have up to one year to the end of their research)</li>
            <li>have outstanding academic/professional records</li>
            <li>have a research concept on sustainable energy, environment or climate change in any discipline</li>
          </ol>
        </div>
        <h3>Personal Information</h3>
        <div>
          <label for="firstName">First Name</label>
          <input type="text" name="fname" value="{{ old('fname',$pageOne->fname) }}"/>

          @error('fname')
                <span class="invalid-feedback" role="alert">
                    <strong>This Field Is required</strong>
                </span>
            @enderror
        </div>
        <div>
          <label for="middleName">Middle Name</label>
          <input type="text" name="mname" value="{{ old('mname',$pageOne->mname) }}"/>

          @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>This Field Is required</strong>
                </span>
          @enderror
        </div>

        <div>
          <label for="lastName">Last Name</label>
          <input type="text" name="lname" value="{{ old('lname',$pageOne->lname) }}"/>
          @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>This Field Is required</strong>
                </span>
          @enderror
        </div>
      
        <div>
          <label for="gender">Sex</label>
          <select name="gender">
            <option value="male" {{ $pageOne->gender == 'male' ? 'selected':''}}>Male</option>
            <option value="female" {{ $pageOne->gender == 'female' ? 'selected':''}}>Female</option>
          </select>
        </div>

        <div>
          <label for="email">Primary Email Address</label>
          <input type="email" name="email" value="{{ old('email',$pageOne->email) }}">

          @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>This Field Is required</strong>
                </span>
          @enderror
        </div>
        
        <div>
          <label for="email2">Alternative Email Address</label>
          <input type="email" name="email2" value="{{ old('email2',$pageOne->email2) }}">
          
          @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>This Field Is required</strong>
                </span>
          @enderror
        </div>
        
        <div>
          <label for="permanentAddress">Permanent Address</label>
          <input type="text" name="paddress" value="{{ old('paddress',$pageOne->paddress) }}">
          
          @error('paddress')
                <span class="invalid-feedback" role="alert">
                    <strong>This Field Is required</strong>
                </span>
          @enderror
          
        </div>
        
        <div>
          <label for="city">City</label>
          <input type="text" name="userCity" value="{{ old('userCity',$pageOne->userCity) }}">
          
          @error('userCity')
                <span class="invalid-feedback" role="alert">
                    <strong>This Field Is required</strong>
                </span>
          @enderror
        </div>

        <div>
          <label for="state">State/Province</label>
          <input type="text" name="userState" value="{{ old('userState',$pageOne->userState) }}">
        
          @error('userState')
                <span class="invalid-feedback" role="alert">
                    <strong>This Field Is required</strong>
                </span>
          @enderror
        </div>

        <div>
          <label for="country">Country</label>
          <input type="text" name="userCountry" value="{{ old('userCountry',$pageOne->userCountry) }}">
          
          @error('userCountry')
                <span class="invalid-feedback" role="alert">
                    <strong>This Field Is required</strong>
                </span>
          @enderror
        </div>
        
        <div>
          <label for="nationality">Nationality</label>
          <input type="text" name="userNationality" value="{{ old('userNationality',$pageOne->userNationality) }}">
          
          @error('userNationality')
                <span class="invalid-feedback" role="alert">
                    <strong>This Field Is required</strong>
                </span>
          @enderror
        </div>

        <div>
          <label for="DOB">Date Of Birth</label>
          <input type="text" name="dob" value="{{ old('dob',$pageOne->dob) }}">
          
          @error('dob')
                <span class="invalid-feedback" role="alert">
                    <strong>This Field Is required</strong>
                </span>
          @enderror
        </div>
        
        <div>
          <label for="phone">Telephone Contact</label>
          <input type="tel" name="userContact" value="{{ old('userContact',$pageOne->userContact) }}">
          
          @error('userContact')
                <span class="invalid-feedback" role="alert">
                    <strong>This Field Is required</strong>
                </span>
          @enderror
        </div>

        <div>

          <label for="phone2">Whatsapp Contact</label>
          <input type="tel" name="userWhatsapp" value="{{ old('userWhatsapp',$pageOne->userWhatsapp) }}">
          
          @error('userWhatsapp')
                <span class="invalid-feedback" role="alert">
                    <strong>This Field Is required</strong>
                </span>
          @enderror
        </div>
      </div>
      
      <div class="page" id="two">
        <h3>Section 2: Current Research Programme</h3>
        <div>
          <label for="studentLevel">Level Of Study</label>
          <select  name="studentLevel">
            <option value="Masters" {{ $pageTwo->studentLevel == 'Masters' ? 'selected':''}} >Masters</option>
            <option value="Doctorate" {{ $pageTwo->studentLevel == 'Doctorate' ? 'selected':''}}>Doctorate</option>
          </select>
        </div>
        <div>
          <label for="department">Department</label>
          <input type="text" name="studentDepartment" value="{{old('studentDepartment',$pageTwo->studentDepartment)}}">
        </div>
        <div>
          <label for="university">University</label>
          <input type="text" name="studentUniversity" value="{{old('studentUniversity',$pageTwo->studentUniversity)}}">
        </div>
        <div>
          <label for="city">City</label>
          <input type="text" name="studentUniversityCity" value="{{old('studentUniversityCity',$pageTwo->studentUniversityCity)}}">
        </div>
        <div>
          <label for="SchoolCountry">Country</label>
          <input type="text" name="studentUniversityCountry" value="{{old('studentUniversityCountry',$pageTwo->studentUniversityCountry)}}">
        </div>
        <div>
          <label for="researchField">Research Field</label>
          <select name="studentResearchField">
            <option value="Engineering" {{ $pageTwo->studentResearchField == 'Engineering' ? 'selected':''}}>Engineering</option>
            <option value="Social Science" {{ $pageTwo->studentResearchField == 'Social Science' ? 'selected':''}}>Social Science</option>
            <option value="Physical Science" {{ $pageTwo->studentResearchField == 'Physical Science' ? 'selected':''}}>Physical Science</option>
            <option value="Other" {{ $pageTwo->studentResearchField == 'Other' ? 'selected':''}}>Other</option>
          </select>
        </div>
        <div>
          <label for="StudentResearchArea">Research Area</label>
          <select name="StudentResearchArea">
            <option value="Renewable Energy" {{ $pageTwo->StudentResearchArea == 'Renewable Energy' ? 'selected':''}}>Renewable Energy</option>
            <option value="Energy Efficiency" {{ $pageTwo->StudentResearchArea == 'Energy Efficiency' ? 'selected':''}}>Energy Efficiency</option>
            <option value="Environmental Policy" {{ $pageTwo->StudentResearchArea == 'Environmental Policy' ? 'selected':''}}>Environmental Policy</option>
            <option value="Climate Change Mitigation" {{ $pageTwo->StudentResearchArea == 'Climate Change Mitigation' ? 'selected':''}}>Climate Change Mitigation</option>
            <option value="Other" {{ $pageTwo->StudentResearchArea == 'Other' ? 'selected':''}}>Other</option>
          </select>
        </div>
        <div>
          <label for="StudentResearchAreaOther">If Other, kindly state your Specific Research Area</label>
          <input type="text" name="StudentResearchAreaOther" value="{{old('StudentResearchAreaOther',$pageTwo->StudentResearchAreaOther)}}">
        </div>
        <div>
          <label for="haveResearchTopic">Do you have Topic approved by your department board or supervisor</label>
          <select name="haveResearchTopic">
            <option value="Yes" {{ $pageTwo->haveResearchTopic == 'Yes' ? 'selected':''}}>Yes</option>
            <option value="No" {{ $pageTwo->haveResearchTopic == 'No' ? 'selected':''}}>No</option>
          </select>
        </div>
        <div>
          <label for="researchTopic">Research Topic</label>
          <input type="text" name="researchTopic" value="{{old('researchTopic',$pageTwo->researchTopic)}}">
        </div>
        <div>
          <label for="programmeStartingDate">Starting date of programme</label>
          <input type="text" name="programmeStartingDate" value="{{old('programmeStartingDate',$pageTwo->programmeStartingDate)}}">
        </div>
        <div>
          <label for="programmeFinalDate">Expected final thesis submission date</label>
          <input type="text" name="programmeFinalDate" value="{{old('programmeFinalDate',$pageTwo->programmeFinalDate)}}">
        </div>
        <div>
          <label for="studentGradutionDate">Expected Graduation Date</label>
          <input type="text" name="studentGradutionDate" value="{{old('studentGradutionDate',$pageTwo->studentGradutionDate)}}">
        </div>
        <div>
          <label for="begunResearchText">if the research has begun already please provide brief of the level of work (50 words max.)</label>
          <textarea name="begunResearchText">
            {{$pageTwo->begunResearchText}}
          </textarea>
        </div>
        <div>
          <label name="requirePublication">Does Your research programme require the publication of at least journal article from your research</label>
          <select  name="requirePublication">
            <option value="Yes, publication of journal article is compulsory" {{ $pageTwo->requirePublication == 'Yes, publication of journal article is compulsory' ? 'selected':''}}>Yes, publication of journal article is compulsory</option>
            <option value="No, journal publication is not compulsory but I am interested in publishing my research in a journal article" {{ $pageTwo->requirePublication == 'No, journal publication is not compulsory but I am interested in publishing my research in a journal article' ? 'selected':''}}>No, journal publication is not compulsory but I am interested in publishing my research in a journal article /</option>
            <option value="No, journal publication is not required and I am indifferent about publishing" {{ $pageTwo->requirePublication == 'No, journal publication is not required and I am indifferent about publishing' ? 'selected':''}}>No, journal publication is not required and I am indifferent about publishing</option>
            <option value="No, publication of research is not required and I am not interested in publishing my research in a journal article " {{ $pageTwo->requirePublication == 'No, publication of research is not required and I am not interested in publishing my research in a journal article ' ? 'selected':''}}>No, publication of research is not required and I am not interested in publishing my research in a journal article</option>
          </select>
        </div>
      </div>
      <div class="page" id="three">
        <h3>Section 3: Research Supervisor Information</h3>
        <p style="color: red;">Note that the contact(s) provided must be your research supervisor(s) on the research programme for which you are applying for the mentoring programme. Please not that providing your supervisor's contact information means you give consent for us to contact him/her. Your supervisor(s) may be required to provide a recommendation letter in support of your application.</p>
        <h4>Primary Supervisor</h4>
        <div>
          <label for="MainSupervisorTitle">
          </label>
          <select name="MainSupervisorTitle">
            <option value="Professor" {{ $pageThree->MainSupervisorTitle == 'Professor' ? 'selected':''}}>Professor</option>
            <option value="Dr" {{ $pageThree->MainSupervisorTitle == 'Dr' ? 'selected':''}}>Dr</option>
            <option value="None" {{ $pageThree->MainSupervisorTitle == 'None' ? 'selected':''}}>None</option>
          </select>
        </div>
        <div>
          <label for="mainSupervisorFirstName">First Name</label>
          <input type="text" name="mainSupervisorFirstName" value="{{old('mainSupervisorFirstName',$pageThree->mainSupervisorFirstName)}}"/>
        </div>
        <div>
          <label for="mainSupervisorLastName">Last Name</label>
          <input type="text" name="mainSupervisorLastName" value="{{old('mainSupervisorLastName',$pageThree->mainSupervisorLastName)}}"/>
        </div>
        <div>
          <label for="mainSupervisorUniversityName">Name Of University</label>
          <input type="text" name="mainSupervisorUniversityName" value="{{old('mainSupervisorUniversityName',$pageThree->mainSupervisorUniversityName)}}"/>
        </div>
        <div>
          <label for="mainSupervisorUniversityAddress">University Address</label>
          <input type="text" name="mainSupervisorUniversityAddress"  value="{{old('mainSupervisorUniversityAddress',$pageThree->mainSupervisorUniversityAddress)}}"/>
        </div>
        <div>
          <label for="mainSupervisorUniversityEmail">Supervisor Institutional Email Address</label>
          <input type="text" name="mainSupervisorUniversityEmail" value="{{old('mainSupervisorUniversityEmail',$pageThree->mainSupervisorUniversityEmail)}}"/>
        </div>
        <div>
          <label for="mainSupervisorAffliation">Is your supervisor affliated with (based in) a non-African university or organization?</label>
          <select  name="mainSupervisorAffliation">
            <option value="Yes" {{ $pageThree->mainSupervisorAffliation == 'Yes' ? 'selected':''}}>Yes</option>
            <option value="No" {{ $pageThree->mainSupervisorAffliation == 'No' ? 'selected':''}}>No</option>
          </select>
        </div>
        <div>
          <label for="mainSupervisorAffliationCountry">Supervisor Affliation and country</label>
          <input type="text" name="mainSupervisorAffliationCountry" value="{{old('mainSupervisorAffliationCountry',$pageThree->mainSupervisorAffliationCountry)}}"/>
        </div>
        <label for="haveCoSupervizsor">Do you have a Co-supervisor for your research</label>
        <select name="haveCoSupervizsor">
          <option value="Yes" {{ $pageThree->haveCoSupervizsor == 'Yes' ? 'selected':''}}>Yes</option>
          <option value="No" {{ $pageThree->haveCoSupervizsor == 'No' ? 'selected':''}}>No</option>
        </select>
        <h4>Co-supervisor (if any)</h4>
        <div>
          <label for="coSupervisorTitle">
          </label>
          <select name="coSupervisorTitle">
            <option value="Professor" {{ $pageThree->coSupervisorTitle == 'Professor' ? 'selected':''}}>Professor</option>
            <option value="Dr" {{ $pageThree->coSupervisorTitle == 'Dr' ? 'selected':''}}>Dr</option>
            <option value="None" {{ $pageThree->coSupervisorTitle == 'None' ? 'selected':''}}>None</option>
          </select>
        </div>
        <div>
          <label for="coSupervisorFirstName">First Name</label>
          <input type="text" name="coSupervisorFirstName" value="{{old('coSupervisorFirstName',$pageThree->coSupervisorFirstName)}}"/>
        </div>
        <div>
          <label for="coSupervisorLastName">Last Name</label>
          <input type="text" name="coSupervisorLastName" value="{{old('coSupervisorLastName',$pageThree->coSupervisorLastName)}}"/>
        </div>
        <div>
          <label for="coSupervisorUniversityName">Name Of University</label>
          <input type="text" name="coSupervisorUniversityName" value="{{old('coSupervisorUniversityName',$pageThree->coSupervisorUniversityName)}}"/>
        </div>
        <div>
          <label for="coSupervisorUniversityAddress">University Address</label>
          <input type="text" name="coSupervisorUniversityAddress" value="{{old('coSupervisorUniversityAddress',$pageThree->coSupervisorUniversityAddress)}}"/>
        </div>
        <div>
          <label for="coSupervisorUniversityEmail">Supervisor Institutional Email Address</label>
          <input type="text" name="coSupervisorUniversityEmail" value="{{old('coSupervisorUniversityEmail',$pageThree->coSupervisorUniversityEmail)}}" />
        </div>
        <div>
          <label for="coSupervisorAfflaition">Is your supervisor affliated with (based in) a non-African university or organization?</label>
          <select name="coSupervisorAfflaition">
            <option value="Yes" {{ $pageThree->coSupervisorAfflaition == 'Yes' ? 'selected':''}}>Yes</option>
            <option value="No" {{ $pageThree->coSupervisorAfflaition == 'No' ? 'selected':''}}>No</option>
          </select>
        </div>
        <div>
          <label for="coSupervisorAfflaitionCountry">Supervisor Affliation country</label>
          <input type="text" name="coSupervisorAfflaitionCountry" value="{{old('coSupervisorAfflaitionCountry',$pageThree->coSupervisorAfflaitionCountry)}}">
        </div>
      </div>
      <div class="page" id="four">
        <h3>Section 4: Academics and Research</h3>
        <h4>Academic History</h4>
        <p style="color: red;">Please provide details of all post-secondary education starting from the current one.</p>
        <div>
          <label for="pastInstitutionName">Name Of Institution</label>
          <input type="text" name="pastInstitutionName" value="{{old('pastInstitutionName',$pageFour->pastInstitutionName)}}">
        </div>
        <div>
          <label for="pastInstitutionCity">City</label>
          <input type="text" name="pastInstitutionCity" value="{{old('pastInstitutionCity',$pageFour->pastInstitutionCity)}}">
        </div>
        <div>
          <label for="pastInstitutionCountry">Country</label>
          <input type="text" name="pastInstitutionCountry" value="{{old('pastInstitutionCountry',$pageFour->pastInstitutionCountry)}}">
        </div>
        <div>
          <label for="pastInstitutionStartDate">Start Date</label>
          <input type="text" name="pastInstitutionStartDate" value="{{old('pastInstitutionStartDate',$pageFour->pastInstitutionStartDate)}}">
        </div>
        <div>
          <label for="pastInstitutionEndDate">End Date</label>
          <input type="text" name="pastInstitutionEndDate" value="{{old('pastInstitutionEndDate',$pageFour->pastInstitutionEndDate)}}">
        </div>
        <div>
          <label for="cpga">Cumulative Grade Point
            <em>For countries or institutions where Cumulative GPA is not applicable, please state your grade using the applicable grading system</em>
          </label>
          <input type="text" name="cpga" value="{{old('cpga',$pageFour->cpga)}}">
        </div>
        <div>
          <label for="degree">Degree Received/Expected</label>
          <input type="text" name="degree" placeholder="(e.g B.sc. Philosophy)" value="{{old('degree',$pageFour->degree)}}">
        </div>
        <h4>Research and Development</h4>
        <div>
          <label for="researchType">Type</label>
          <select  name="researchType">
            <option value="Published in peer-reviewed journal" {{ $pageFour->researchType == 'Published in peer-reviewed journal' ? 'selected':''}}>Published in peer-reviewed journal</option>
            <option value="Accepted in peer-reviewed journal" {{ $pageFour->researchType == 'Accepted in peer-reviewed journal' ? 'selected':''}}>Accepted in peer-reviewed journal/</option>
            <option value="Oral presentation" {{ $pageFour->researchType == 'Oral presentation' ? 'selected':''}}>Oral presentation</option>
            <option value="Poster presentation" {{ $pageFour->researchType == 'Poster presentation' ? 'selected':''}}>Poster presentation</option>
            <option value="Article under preparation" {{ $pageFour->researchType == 'Article under preparation' ? 'selected':''}}>Article under preparation</option>
          </select>
        </div>
        <div>
          <label for="researchTitle">Title</label>
          <input type="text" name="researchTitle" value="{{old('researchTitle',$pageFour->researchTitle)}}">
        </div>
        <div>
          <label for="journalName">Name of Journal/Conference</label>
          <input type="text" name="journalName" value="{{old('journalName',$pageFour->journalName)}}">
        </div>
        <div>
          <label for="journalLink">Link</label>
          <input type="text" name="journalLink" value="{{old('journalLink',$pageFour->journalLink)}}">
        </div>
        <div>
          <label for="researchContributions">In less than 50 words, indicate your contributions to the research work</label>
          <textarea type="text" name="researchContributions">
          {{$pageFour->researchContributions}}
          </textarea>
        </div>
        <h4>Prizes and Awards</h4>
        <p>Indicate prizes, scholarship or other recognition awards you have received in the past.</p>
        <div>
          <label for="awardName">Name of Award</label>
          <input type="text" name="awardName" value="{{old('awardName',$pageFour->awardName)}}">
        </div>
        <div>
          <label for="awardCity">City</label>
          <input type="text" name="awardCity" value="{{old('awardCity',$pageFour->awardCity)}}">
        </div>
        <div>
          <label for="awardCountry">Country</label>
          <input type="text" name="awardCountry" value="{{old('awardCountry',$pageFour->awardCountry)}}">
        </div>
        <div>
          <label for="awardAmount">Amount</label>
          <input type="text" name="awardAmount" value="{{old('awardAmount',$pageFour->awardAmount)}}">
        </div>
        <div>
          <label for="awardCoverage">Coverage</label>
          <select  name="awardCoverage">
            <option value="Departmental" {{ $pageFour->awardCoverage == 'Departmental' ? 'selected':''}}>Departmental</option>
            <option value="Institution" {{ $pageFour->awardCoverage == 'Institution' ? 'selected':''}}>Institution</option>
            <option value="Local" {{ $pageFour->awardCoverage == 'Local' ? 'selected':''}}>Local</option>
            <option value="Regional"  {{ $pageFour->awardCoverage == 'Regional' ? 'selected':''}}>Regional</option>
            <option value="International"  {{ $pageFour->awardCoverage == 'International' ? 'selected':''}}>International</option>
          </select>
        </div>
        <div>
          <label for="awardDurationFrom">Duration: From</label>
          <input type="text" name="awardDurationFrom" value="{{old('awardDurationFrom',$pageFour->awardDurationFrom)}}">
        </div>
        <div>
          <label for="awardDurationTo">Duration: To</label>
          <input type="text" name="awardDurationTo" value="{{old('awardDurationTo',$pageFour->awardDurationTo)}}">
        </div>
      </div>
      <div class="page" id="five">
        <h3>Section 5: Mentors' Nomination</h3>
        <ol>
          <li>please read through the prifles and area of research interest of mentors in the Mentos'Community on isnad-africa's website</li>
          <li>nominate, in order of preference, three mentors based on the alignment of your research interests and their experience.</li>
          <li>please note that you may be assigned a mentor other than the three you have selected in your application</li>
          <li>kindly note that mentors are continuously being added to the Mentors’ Community, therefore, if you do not find a mentor whose interest align with your research concept at the time of application, mark the section as "Not Applicable"</li>
        </ol>
        <div>
          <label for="firstMentor">First Mentor</label>
          <input type="text" name="firstMentor" value="{{old('firstMentor',$otherPage->firstMentor)}}">
        </div>
        <div>
          <label for="secondMentor">Second Mentor</label>
          <input type="text" name="secondMentor" value="{{old('secondMentor',$otherPage->secondMentor)}}">
        </div>
        <div>
          <label for="thirdMentor">Third Mentor</label>
          <input type="text" name="thirdMentor" value="{{old('thirdMentor',$otherPage->thirdMentor)}}">
        </div>
      </div>
      <div class="page" id="six">
        <h3>Section 6: Others</h3>
        <br>
        <h4>6a: Employment</h4>
        <div>
          <label for="employmentType" >Employment Type</label>
          <select name="employmentType">
            <option value="Full Time" {{ $otherPage->employmentType == 'Full Time' ? 'selected':''}}>Full Time</option>
            <option value="Part Time" {{ $otherPage->employmentType == 'Part Time' ? 'selected':''}}>Part Time</option>
            <option value="Not Employed" {{ $otherPage->employmentType == 'Not Employed' ? 'selected':''}}>Not Employed</option>
          </select>
        </div>
        <div>
          <label for="researchHours">How many hours do you spend on research Weekly</label>
          <select id="researchHours" name="researchHours">
            <option value="Less than 10" {{ $otherPage->researchHours == 'Less than 10' ? 'selected':''}}>Less than 10</option>
            <option value="10-30 hours" {{ $otherPage->researchHours == '10-30 hours' ? 'selected':''}}>10-30 hours</option>
            <option value="More than 30 hours" {{ $otherPage->researchHours == 'More than 30 hours' ? 'selected':''}}>More than 30 hours</option>
          </select>
        </div>
        <h4>Social Media</h4>
        <p>Are you active on social media? Please add the links to your profile below</p>
        <div>
          <label for="linkedin">Linkedin:</label>
          <input type="text" name="linkedin" value="{{old('linkedin',$otherPage->linkedin)}}">
        </div>
        <div>
          <label for="Facebook">Facebook:</label>
          <input type="text" name="Facebook" value="{{old('Facebook',$otherPage->Facebook)}}">
        </div>
        <div>
          <label for="Twitter">Twitter:</label>
          <input type="text" name="Twitter" value="{{old('Twitter',$otherPage->Twitter)}}">
        </div>
        <div>
          <label for="Whatsapp">Whatsapp Number:</label>
          <input type="text" name="Whatsapp" value="{{old('Whatsapp',$otherPage->Whatsapp)}}">
        </div>
        <h4>Additional Questions</h4>
        <div>
          <label for="hearAboutUs">How did you hear about us:</label>
          <select name="hearAboutUs">
            <option value="Facebook" {{ $otherPage->hearAboutUs == 'Facebook' ? 'selected':''}}>Facebook</option>
            <option value="Twitter" {{ $otherPage->hearAboutUs == 'Twitter' ? 'selected':''}}>Twitter</option>
            <option value="Newsletter" {{ $otherPage->hearAboutUs == 'Newsletter' ? 'selected':''}}>Newsletter</option>
            <option value="Linkedin" {{ $otherPage->hearAboutUs == 'Linkedin' ? 'selected':''}}>Linkedin</option>
            <option value="Others" {{ $otherPage->hearAboutUs == 'Others' ? 'selected':''}}>Others</option>
          </select>
        </div>
        <div>
          <label for="anyOtherInfo">Do you have any other any information to share with us about your candidacy that we should consider in your selection process?(50 words max).
            <textarea name="anyOtherInfo" value="{{old('anyOtherInfo',$otherPage->anyOtherInfo)}}">
            {{$otherPage->anyOtherInfo}}
            </textarea>
        </div>
      </div>
      <div class="page" id="seven">
        <h3>Section 7: Upload Documents</h3>
        <div>
          <label for="profilePicture">Upload profile picture</label>
          <input type="file" name="profilePicture" >
        </div>
        <div>
          <label for="motivationStatement">Motivation Statement</label>
          <input type="file" name="motivationStatement">
        </div>
        <div>
          <label for="researchConcepts">Upload Research Concept Note</label>
          <input type="file" name="researchConcepts">
        </div>
      </div>
      <div class="page" id="eight">
        <label>By typing my full name here
          <input type="text" name="signature">,i certify that the information provided is true and complete to the best of my knowledge. if i am accepted, i accepted that any false or misleading information in my application or interview may lead to expulsion from the program</label>
      </div>
    </div>
    <input type="submit" name="submitBtn" id='frmSub'onclick="formsub()">
</form>
@endsection