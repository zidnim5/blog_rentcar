<footer id="footer">
     <div class="footer-top" style="margin-top:50px;">
       <div class="container">
         <div class="row">
           <div class="col-lg-3 col-md-6 footer-contact">
             <h3>{{config('app.name')}}<span>.</span></h3>
             <p>
               {!! config('app.address') !!}
               <br>
               <strong>Phone:</strong> {{config('app.phone')}}<br />
               <strong>Email:</strong> {{config('app.email')}}<br />
             </p>
           </div>
 
           <div class="col-lg-2 col-md-6 footer-links"></div>
 
           <div class="col-lg-4 col-md-6 footer-newsletter"></div>
 
           <div class="col-lg-3 col-md-6 footer-links">
             {{-- <h4>Our Services</h4>
             <ul>
               <li>
                 <i class="bx bx-chevron-right"></i> <a href="#">Web Design</a>
               </li>
               <li>
                 <i class="bx bx-chevron-right"></i>
                 <a href="#">Web Development</a>
               </li>
               <li>
                 <i class="bx bx-chevron-right"></i>
                 <a href="#">Product Management</a>
               </li>
               <li>
                 <i class="bx bx-chevron-right"></i> <a href="#">Marketing</a>
               </li>
               <li>
                 <i class="bx bx-chevron-right"></i>
                 <a href="#">Graphic Design</a>
               </li>
             </ul> --}}
           </div>
         </div>
       </div>
     </div>
 
     <div class="container d-md-flex py-4">
       <div class="me-md-auto text-center text-md-start">
         <div class="copyright">
           &copy; Copyright <strong><span>PASIRRETNCAR</span></strong
           >. All Rights Reserved
         </div>
         <div class="credits">
           <!-- All the links in the footer should remain intact. -->
           <!-- You can delete the links only if you purchased the pro version. -->
           <!-- Licensing information: https://bootstrapmade.com/license/ -->
           <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
           Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
         </div>
       </div>
       <div class="social-links text-center text-md-end pt-3 pt-md-0">
         <a href="{{config('app.tw')}}" target="_blank" class="twitter"
           ><i class="bx bxl-twitter"></i
         ></a>
         <a href="{{config('app.fb')}}" target="_blank" class="facebook"
           ><i class="bx bxl-facebook"></i
         ></a>
         <a href="{{config('app.insta')}}" target="_blank" class="instagram"
           ><i class="bx bxl-instagram"></i
         ></a>
       </div>
     </div>
 
     <a
       href="'https://api.whatsapp.com/send?phone={{config('app.phone')}}&text=Halo%20admin'"
       class="wa"
       target="_blank"
     >
       <i class="fa fa-whatsapp my-wa"></i>
     </a>
  </footer>