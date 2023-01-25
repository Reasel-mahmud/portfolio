@extends('frontEnd.master')

@section('content')


    <!-- About -->

    <section id="about" class="section">
        <div class="container">
          <h2 data-aos="fade-up">Just trust me.</h2>
          <section class="mt-4">
             <div class="row">

               <div class="col-md-6 col-lg-5 mb-5 mb-md-0" data-aos="fade-up">
                @foreach ($subSkills as $subSkill )
                <p>{{$subSkill->skill_description}}</p>
                <div class="experience d-flex align-items-center">
                  <div class="experience-number text-parallax">{{$subSkill->skill_exp}}</div><div class="text-dark mt-3 ml-4">Years<br> of experience</div>
                </div>
                @endforeach
               </div>
               <div class="col-md-5 offset-lg-2" data-aos="fade-in" data-aos-delay="50">
                @forelse ($skills as $skill )
                <h6 class="mt-0">{{$skill->skill_name}}</h6>
                <div class="progress mb-5">
                  <div class="progress-bar" role="progressbar" data-aos="width" style="width: 50%" aria-valuenow="{{$skill->skill_percenteg}}" aria-valuemin="0" aria-valuemax="{{$skill->skill_percenteg}}">
                  </div>
                </div>
                @empty
                    <samp class="text-danger">No Skill</samp>
                @endforelse
               </div>

             </div>

           </section>
         </div>
       </section>

       <section class="section bg-dark">
        <div class="container">

           <div class="container">
            <div class="row">
                @foreach ($services as $service )

                <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-in">
                 <i class=" text-white fa {{$service->service_icone}} fa-5x"></i>
                  <h6 class="text-white">{{$service->service_name}}</h6>
                  <p>{{$service->service_descripsion}}</p>
                </div>
                @endforeach

              </div>
           </div>

         </div>
       </section>

        <!-- Experience -->
        <section id="experience" class="section pb-0">
         <div class="container">
           <div class="row align-items-end">
             <div class="col-md-6" data-aos="fade-up"><h2 class="mb-3 mb-md-0">Experience</h2></div>
             <div class="col-md-5 offset-md-1 text-md-right"><h6 class="my-0 text-gray"><a href="https://drive.google.com/file/d/1LVLnf7XR5SP_ULa_UaaXCoNXwQqRTn1u/view?usp=share_link">Download my cv</a></h6></div>
           </div>
           <div class="mt-5 pt-5">
            @foreach ($experinces as $experince )
            <div class="row-experience row justify-content-between" data-aos="fade-up">
                <div class="col-md-4">
                  <div class="h6 my-0 text-gray">{{$experince->date}}</div>
                  <h5 class="mt-2 text-primary text-uppercase">{{$experince->compony_name}}</h5>
                </div>
                <div class="col-md-4">
                  <h5 class="mb-3 mt-0 text-uppercase">{{$experince->postion}}</h5>
                </div>
                <div class="col-md-4">
                  <p>{{$experince->description}}</p>
                </div>
              </div>
            @endforeach

           </div>
         </div>
       </section>

       @foreach ($projects as $project )
       <!-- Projects -->
       <section id="projects" class="section">
        <div class="container">
           <div class="row align-items-end">
             <div class="col-md-6" data-aos="fade-up"><h2 class="mb-3 mb-md-0">Featured projects</h2></div>
             <div class="col-md-5 offset-md-1 text-md-right"><h6 class="my-0 text-gray"><a href="#">View all projects</a></h6></div>
           </div>
           <div class="mt-5 pt-5" data-aos="fade-in">
             <div class="carousel-project owl-carousel">
              <div class="project-item">


                 <a href="#project1" class="popup-with-zoom-anim">
                   <figure class="position-relative">
                     <img alt="" class="w-100" src="{{asset($project->image)}}">
                     <figcaption class="text-white">
                       <h3 class="mb-2 text-white">{{$project->project_name}}</h3>
                       <p>{{$project->project_title}}</p>
                     </figcaption>
                   </figure>
                 </a>
              </div>

            </div>
           </div>
         </div>
       </section>

       <!-- Project Modal Dialog 1 -->
       <div id="project1" class="container mfp-hide zoom-anim-dialog">
         <h2 class="mt-0">{{$project->clients}}</h2>
         <div class="mt-5 pt-2 text-dark">
           <div class="row">
             <div class="mb-5 col-md-6 col-lg-3">
               <h6 class="my-0">Clients:</h6>
               <span>{{$project->completion}}</span>
             </div>
             <div class="mb-5 col-md-6 col-lg-3">
               <h6 class="my-0">Completion:</h6>
               <span>{{$project->project_type}}</span>
             </div>
             <div class="mb-5 col-md-6 col-lg-3">
               <h6 class="my-0">Project Type:</h6>
               <span>{{$project->project_name}}</span>
             </div>
             <div class="mb-5 col-md-6 col-lg-3">
               <h6 class="my-0">Authors</h6>
               <span>{{$project->author}}</span>
             </div>
           </div>
           <div class="row">
             <div class="col-md-6 col-lg-3">
               <h6 class="my-0">Budget:</h6>
               <span>{{$project->budget}}</span>
             </div>
           </div>
         </div>
         <img alt="" class="mt-5 pt-2 w-100" src="{{asset($project->image)}}">
       </div>
       @endforeach
       <!-- Project Modal Dialog 2 -->


       <!-- Testimonials -->
       <section id="Contact" class="Contact section">
         <div class="container">

            <div class="row">
                <div class="col-sm-6">
                    <div class="col-md-7" data-aos="fade-up"><h2 class="mb-3 mb-md-0">Send Message</h2></div>
                    <form action="{{route('contact.post')}}" method="POST">
                        @csrf
                         <div class="form-group">
                           <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                         <div class="form-group">
                           <input type="email" name="email"  class="form-control" placeholder="Email">
                         </div>
                         <div class="form-group">
                          <textarea rows="3" name="message"  class="form-control" placeholder="Message"></textarea>
                         </div>
                         <div class="form-group mb-0 text-right">
                           <button type="submit" class="btn btn-info">Submit</button>
                         </div>
                    </form>
                   </div>
                   <div class="col-sm">
                  </div>
                  <div class="col-sm-5">
                    <div class="col-md-6" data-aos="fade-up"><h3 class="mb-3 mb-md-0">Contact Me</h3></div>
                    <div class="mt-3">
                    <h5>Email: tanimul183@gmail.com</h5>
                    <h6>Phone No: 01729512572</h6>
                    <h6>Address: Dhaka-1205</h6>
                    </div>
                    </div>

                  </div>


          </div>
       </section>

        <!-- News -->
       {{-- <section id="news" class="section bg-light">
        <div class="container">
           <div class="row align-items-end">
             <div class="col-md-6" data-aos="fade-up"><h2 class="mb-3 mb-md-0">Latest news</h2></div>
             <div class="col-md-5 offset-md-1 text-md-right"><h6 class="text-gray my-0"><a href="#">View all news</a></h6></div>
           </div>
           <div class="mt-5 pt-5">
             <div class="row-news row">
               <div class="col-news col-md-6 col-lg-4" data-aos="fade-in" data-aos-delay="0">
                 <figure class="position-relative">
                   <div class="position-relative">
                     <a href=""><img alt="" class="w-100 d-block" src="{{asset('frontEndAsset')}}/asset/img/news/640x520-1.jpg"></a>
                     <mark class="date">12.03.2020</mark>
                   </div>
                   <figcaption><h5><a href="">How to work from home</a></h5>On the other hand, we denounce with righteous...
                   </figcaption>
                 </figure>
               </div>
               <div class="col-news col-md-6 col-lg-4" data-aos="fade-in" data-aos-delay="100">
                 <figure class="position-relative">
                   <div class="position-relative">
                     <a href=""><img alt="" class="w-100 d-block" src="{{asset('frontEndAsset')}}/asset/img/news/640x520-2.jpg"></a>
                     <mark class="date">12.03.2020</mark>
                   </div>
                   <figcaption><h5><a href="">Welcome to my page!</a></h5>
                   There are many variations of passages of Lorem Ipsum  the...
                   </figcaption>
                 </figure>
               </div>
               <div class="col-news col-md-6 col-lg-4" data-aos="fade-in" data-aos-delay="200">
                 <figure class="position-relative">
                   <div class="position-relative">
                     <a href=""><img alt="" class="w-100 d-block" src="{{asset('frontEndAsset')}}/asset/img/news/640x520-3.jpg"></a>
                     <mark class="date">12.03.2020</mark>
                   </div>
                   <figcaption><h5><a href="">Business</a></h5>On the other hand, we denounce with righteous...
                   </figcaption>
                 </figure>
               </div>
            </div>
           </div>
         </div>
       </section> --}}

       <!-- Partners -->
       {{-- <section class="section-sm">
          <div class="container">
            <div class="row-partners row">
              <div class="col-partner col-md-6 col-lg-3" data-aos="fade-in">
                 <img alt="" src="{{asset('frontEndAsset')}}/asset/img/partners/1.png">
              </div>
               <div class="col-partner col-md-6 col-lg-3" data-aos="fade-in" data-aos-delay="50">
                 <img alt="" src="{{asset('frontEndAsset')}}/asset/img/partners/2.png">
              </div>
               <div class="col-partner col-md-6 col-lg-3" data-aos="fade-in" data-aos-delay="150" >
                 <img alt="" src="{{asset('frontEndAsset')}}/asset/img/partners/3.png">
              </div>
              <div class="col-partner col-md-6 col-lg-3" data-aos="fade-in" data-aos-delay="200">
                 <img alt="" src="{{asset('frontEndAsset')}}/asset/img/partners/4.png">
              </div>
            </div>
          </div>
       </section> --}}
@endsection


