@extends('layouts.main')

@section('content')
<section class="ftco-section ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                
            </div>
        </div>
        <div class="row justify-content-center">
        <h2 class="heading-section">Create New Project</h2>
            <div class="col-lg-10 col-md-12">
                <div class="wrapper">
                    <div class="row justify-content-center">
                        <form method="POST" id="contactForm" name="contactForm" class="contactForm" action="{{route('projects.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Project name">
                                    </div>
                                </div>
                               
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Create Project" class="btn btn-primary">
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
       </div>
    </div>
</section>

@endsection

