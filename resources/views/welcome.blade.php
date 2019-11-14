@extends("layouts.app")

@section('content')


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>
    <body>
            <div class="word ">
                    <div class="container">
                    <h3 class="text-center">QUALITY ASSURANCE</h3>
                    <P class="text-center">OUR CUSTOMERS DESERVE THE BEST</P>                   
                  <a><button class="button" style="vertical-align:middle"> <span>Get Started</span></button></a>
                    </div>
                </div>
             
             <div class="container-fluid opacity myopa">
                  <div class="jumbotron jumbotron-fluid bcl" >    
                <div class="bd-example vh">
                        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="images/pic5.png"  class="d-block w-100" alt="...">
                              <div class="carousel-caption d-none d-block">
                              </div>
                            </div>
                            <div class="carousel-item">
                              <img src="images/pic1.jpg" class="d-block w-100" alt="...">
                              <div class="carousel-caption d-none d-block">
                              </div>
                            </div>
                            <div class="carousel-item">
                              <img src="images/pic6.jpg" class="d-block w-100" alt="...">
                              <div class="carousel-caption d-none d-block">
                              </div>
                            </div>
                          </div>
                          {{-- <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a> --}}
                        </div>
                      </div>
                         </div>
                </div>
                
               
               <section  data-spy="scroll" id="about">
                   <div class="container">
                       <div class="section-heading scrollpoint-smooth sp-effects3 active animated fadeInDown text-md-center">
                        <h3 class="center">ABOUT THE COMPANY</h3>
                        <p class="centerlarge">Key features of our company</p>
                        <div class="row-padding center" style="margin-top:64px">                      
                           <hr>
                           <div class="row">
                       <div class="col-md-3 col-sm-3 col-xs-12">
                           <div class="about-item scrollpoint sp-effect active animated fadeInRight">
                            <i class="fa fa-desktop margin-bottom jumbo center"></i>
                            <p class="large">We make it easy</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                            <a href="" data-toggle="modal" data-target="#exampleModalScrollable-modal">
                                <div class="btn-more">
                                    Learn more 
                                    <i class="right-arrow"></i>
                                </div>
                            </a>
                        </p>
                        <div class="modal fade" id="exampleModalScrollable-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable-modal" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                       <img  class="BackOpacityLayer" class="image round-large" src="images/pic9.jpg" alt="Buildings" width="100%" height="300" >
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                       </div>
                      </div>
                      
                       <div class="col-md-3 col-sm-3 col-xs-12">
                           <div class="about-item scrollpoint sp-effect active animated fadeInRight">
                            <i class="fa fa-heart margin-bottom jumbo"></i>
                            <p class="large">Fair and transparent</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                                    <a href=""  data-toggle="modal" data-target="#exampleModalScrollable-modal">
                                            <div class="btn-more">
                                                Learn more 
                                                <i class="right-arrow"></i>
                                            </div>
                                        </a>
                            </p>
                            <div class="modal fade" id="exampleModalScrollable-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable-modal" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                           <img  class="BackOpacityLayer" class="image round-large" src="images/pic9.jpg" alt="Buildings" width="100%" height="300" >
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                       </div>
                       </div>
                       
                       <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="about-item scrollpoint sp-effect active animated fadeInRight">
                         <i class="fa fa-diamond margin-bottom jumbo"></i>
                         <p class="large">Happiness guaranteed</p>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                                <a href=""  data-toggle="modal" data-target="#exampleModalScrollable-modal">
                                        <div class="btn-more">
                                            Learn more 
                                            <i class="right-arrow"></i>
                                        </div>
                                    </a>
                                </p> 
                                <div class="modal fade" id="exampleModalScrollable-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable-modal" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                               <img  class="BackOpacityLayer" class="image round-large" src="images/pic9.jpg" alt="Buildings" width="100%" height="300" >
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                    </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <div class="about-item scrollpoint sp-effect active animated fadeInRight">
                       <i class="fa fa-cog margin-bottom jumbo"></i>
                       <p class="large">we make it easy</p>
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                            <a href="" data-toggle="modal" data-target="#exampleModalScrollable-modal">
                                    <div class="btn-more">
                                        Learn more 
                                        <i class="right-arrow"></i>
                                    </div>
                                </a>
                            </p> 
                            <div class="modal fade" id="exampleModalScrollable-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable-modal" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                           <img  class="BackOpacityLayer" class="image round-large" src="images/pic9.jpg" alt="Buildings" width="100%" height="300" >
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                  </div>
                  </div>
                           </div>
                       </div>
                   </div>
               </section>
               <div class="container-fluid know" style="padding:120px 16px">
                <div class="row">
                  <div class="col m6">
                    <h3>We know design.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.
                        <a href=""  data-toggle="modal" data-target="#exampleModalScrollable-modal">
                                <div class="btn-more">
                                    Learn more 
                                    <i class="right-arrow"></i>
                                </div>
                            </a>
                        </p>
                    <p><a href="#work" class="know black"><i class="fa fa-th"> </i> View Our Works</a></p>
                  </div>
                  <div class="col m6 ">
                   <img  class="BackOpacityLayer" class="image round-large" src="images/pic8.jpg" alt="Buildings" width="700" height="300" >
                  </div>
                </div>
              </div>

             

              <!--Section: Contact v.2-->
              <div class="container">
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-9 mb-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-6">
                        <div class="form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-6">
                        <div class="form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                
                <div class="row">
                    <div class="col-12">
                        <div class="form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-12">

                        <div class="form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fa fa-map-marker-alt fa-2x"></i>
                    <p>Ogudu, Nigeria</p>
                </li>

                <li><i class="fa fa-phone mt-4 fa-2x"></i>
                    <p>+ 090 234 567 89</p>
                </li>

                <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                    <p>contact@fixup.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
              </div>
<!--Section: Contact v.2-->

          <!-- Footer -->
<footer class="container-fluid  center opacity">  
    <a href="#home" class="btn light-grey"><i class="fa fa-arrow-up margin-right"></i>To the top</a>
    <div class="center foot-icon">
      <i class="fa fa-facebook-official hover-opacity p-5"></i>
      <i class="fa fa-instagram hover-opacity p-5"></i>
      <i class="fa fa-snapchat hover-opacity p-5"></i>
      <i class="fa fa-pinterest-p hover-opacity p-5"></i>
      <i class="fa fa-twitter hover-opacity p-5"></i>
      <i class="fa fa-linkedin hover-opacity p-5"></i>
   </div>
  </footer>









    </body>
</html>

