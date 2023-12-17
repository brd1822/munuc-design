@extends('layouts.master')
@section('title',"Contact US") 
@section('content')
<div class="section section-padding pt-4 pb-5">
   <div class="container">
      <!-- Contact Map Start -->
      <div class="row learts-mt-10 p-4 pt-0">
         <p>Thank you for your interest in our textiles manufacturing and export services. We are dedicated to providing high-quality products and exceptional customer service. Please feel free to reach out to us using the following contact information.</p>
         <div class="col-lg-6 col-12 p-0">
            <div class="box-details-page" id="contact-details">
               <h5 class="title sub-title-theme">CONTACT US -</h5>
               <!-- <h4 class="title sub-title-theme mt-3 mb-3">Better yet, see us in person!</h4> -->
               <p class="mt-3">
               For inquiries regarding our products, services, distribution, or collaborations, please contact:
               </p>
               <a href="https://wa.me/919457515151" class="btn btn-dark btn-outline-hover-dark whatts-btn">
                  <div class="d-flex align-items-center">
                     <svg viewBox="0 0 496 497" class="whatsapp-color">
                        <defs>
                           <linearGradient id="a" x1="247.32" x2="247.32" y1="446.09" y2="39.9" gradientUnits="userSpaceOnUse">
                              <stop offset="0" stop-color="#20b038"></stop>
                              <stop offset="1" stop-color="#60d66a"></stop>
                           </linearGradient>
                           <linearGradient id="b" x1="247.32" x2="247.32" y1="453.37" y2="32.61" gradientUnits="userSpaceOnUse">
                              <stop offset="0" stop-color="#f9f9f9"></stop>
                              <stop offset="1" stop-color="#fff"></stop>
                           </linearGradient>
                        </defs>
                        <path d="M37.88 453.37l29.59-108A208 208 0 0 1 39.63 241.1c0-115 93.6-208.49 208.56-208.49a208.57 208.57 0 0 1 208.57 208.66c-.05 115-93.62 208.49-208.57 208.49h-.08a208.41 208.41 0 0 1-99.67-25.38zm115.68-66.73l6.34 3.75a173.18 173.18 0 0 0 88.23 24.16h.06c95.55 0 173.31-77.75 173.35-173.3A173.34 173.34 0 0 0 248.26 67.83c-95.62 0-173.38 77.73-173.42 173.28a172.94 172.94 0 0 0 26.5 92.23l4.13 6.55L88 403.84z"></path>
                        <path fill="url(#a)" d="M45.13 446.09l28.57-104.3a200.82 200.82 0 0 1-26.88-100.62c0-111 90.36-201.27 201.34-201.27A201.35 201.35 0 0 1 449.5 241.32c0 111-90.37 201.28-201.33 201.28h-.09a201.31 201.31 0 0 1-96.21-24.49z"></path>
                        <path fill="url(#b)" d="M37.88 453.37l29.59-108A208 208 0 0 1 39.63 241.1c0-115 93.6-208.49 208.56-208.49a208.57 208.57 0 0 1 208.57 208.66c-.05 115-93.62 208.49-208.57 208.49h-.08a208.41 208.41 0 0 1-99.67-25.38zm115.68-66.73l6.34 3.75a173.18 173.18 0 0 0 88.23 24.16h.06c95.55 0 173.31-77.75 173.35-173.3A173.34 173.34 0 0 0 248.26 67.83c-95.62 0-173.38 77.73-173.42 173.28a172.94 172.94 0 0 0 26.5 92.23l4.13 6.55L88 403.84z"></path>
                        <path fill="#fff" d="M196.07 153.94c-3.91-8.68-8-8.85-11.73-9-3-.14-6.51-.13-10-.13a19.15 19.15 0 0 0-13.89 6.52c-4.78 5.22-18.24 17.82-18.24 43.46s18.67 50.42 21.28 53.9 36.05 57.77 89 78.66c44 17.36 53 13.91 62.53 13s30.83-12.61 35.18-24.78 4.34-22.59 3-24.77-4.78-3.48-10-6.08-30.83-15.22-35.61-16.95-8.25-2.61-11.73 2.61-13.45 16.94-16.5 20.42-6.08 3.92-11.29 1.31-22-8.11-41.9-25.86c-15.5-13.82-26-30.87-29-36.09s-.32-8 2.29-10.63c2.34-2.34 5.21-6.09 7.82-9.13s3.47-5.21 5.21-8.69.87-6.52-.44-9.13-11.35-28.34-15.98-38.64z"></path>
                     </svg>
                     Message us on WhatsApp
                  </div>
               </a>
               <h4 class="title sub-title-theme mt-3 mb-2">Munuc Designs</h4>
               <p class="mt-2">
                  Store Address: HEAD OFFICE 8/29 CHIRANJEEV VIHAR OPPOSITE 
                  CHANCELLOR CLUB GHAZIABAD 
                  UTTAR PRADESH 201002, INDIA
               </p>
               <p class="mt-2">
                  Phone Number: <a href="tel:+91 945-751-5151"> +919457515151, +919910017249</a>
               </p>
               <p>Email: director@munucdesigns.com, sales@munucdesigns.com</p>
               <!-- <p class="mt-2">
                  Billing Address: <br />
                  HOF - 8/29, CHIRANJEEV VIHAR, Ghaziabad, Uttar Pradesh - 201002 <br />
                  GST Number - XXXXXXXXXXXXXX <br />
                  IEC Number - XXXXXXXXXXXXXX
               </p> -->
               <h4 class="title sub-title-theme mt-2 mb-2">Working Days</h4>
               <div>
                  <select class="contact-selct">
                     <option>
                        Open today 09:00 am – 08:00 pm
                     </option>
                     <option> Mon 09:00 am – 08:00 pm </option>
                     <option> Tue 09:00 am – 08:00 pm </option>
                     <option> Wed 09:00 am – 08:00 pm </option>
                     <option> Thu 09:00 am – 08:00 pm </option>
                     <option> Fri 09:00 am – 08:00 pm </option>
                     <option> Sat 09:00 am – 08:00 pm </option>
                  </select>
               </div>
               <p class="mt-2">
               We value your feedback and strive to respond to all inquiries promptly. For additional information about our company and offerings, visit our website <a href="{{ route('/') }}">Munuc Designs</a>.
               </p>
               <p><b>Call us today! 📞💸  +919457515151, +919910017249</b></p>
               <button class="btn btn-warning btn-outline-hover-warning mt-3" id="open-form">Connect with us on social media:</button>
               <div class="mt-3">
               <ul class="widget-social">
                  <li class="hintT-top" data-hint="Facebook"> <a href="#" target="_blank"> <svg viewBox="0 0 24 24" fill="currentColor" width="40px" height="40px" data-ux="IconSocial" class="x-el x-el-svg c1-1 c1-2 c1-1g c1-2y c1-2z c1-30 c1-31 c1-32 c1-33 c1-b c1-c c1-d c1-e c1-f c1-g"><path d="M20 12.047C20 7.603 16.418 4 12 4s-8 3.603-8 8.047c0 4.017 2.925 7.346 6.75 7.95v-5.624H8.719v-2.326h2.031v-1.773c0-2.017 1.194-3.13 3.022-3.13.875 0 1.79.157 1.79.157v1.98h-1.008c-.994 0-1.304.62-1.304 1.257v1.51h2.219l-.355 2.325H13.25v5.624c3.825-.604 6.75-3.933 6.75-7.95z"></path></svg> </a></li>
                  <li class="hintT-top" data-hint="Instagram"> <a href="https://www.instagram.com/munucdesigns/?utm_source=qr&igshid=YzU1NGVlODEzOA%3D%3D" target="_blank"> <svg viewBox="0 0 24 24" fill="currentColor" width="40px" height="40px" data-ux="IconSocial" class="x-el x-el-svg c1-1 c1-2 c1-1g c1-2y c1-2z c1-30 c1-31 c1-32 c1-33 c1-b c1-c c1-d c1-e c1-f c1-g"><path d="M14.667 12a2.57 2.57 0 0 0-.782-1.885A2.57 2.57 0 0 0 12 9.333a2.57 2.57 0 0 0-1.885.782A2.57 2.57 0 0 0 9.333 12c0 .736.26 1.365.782 1.885.52.521 1.149.782 1.885.782a2.57 2.57 0 0 0 1.885-.782c.521-.52.782-1.149.782-1.885zm1.437 0c0 1.139-.4 2.108-1.198 2.906-.798.799-1.767 1.198-2.906 1.198-1.139 0-2.108-.4-2.906-1.198-.799-.798-1.198-1.767-1.198-2.906 0-1.139.4-2.108 1.198-2.906.798-.799 1.767-1.198 2.906-1.198 1.139 0 2.108.4 2.906 1.198.799.798 1.198 1.767 1.198 2.906zm1.125-4.27c0 .263-.094.489-.281.676a.923.923 0 0 1-.677.282.923.923 0 0 1-.677-.282.923.923 0 0 1-.281-.677c0-.264.093-.49.28-.677a.923.923 0 0 1 .678-.281c.264 0 .49.094.677.281a.923.923 0 0 1 .281.677zM12 5.437l-.797-.006a56.514 56.514 0 0 0-1.099 0c-.25.004-.585.014-1.005.032-.42.017-.778.052-1.073.104a4.177 4.177 0 0 0-.745.192c-.347.14-.653.34-.916.605-.264.263-.466.569-.605.916-.076.202-.14.45-.192.745a8.255 8.255 0 0 0-.104 1.073c-.018.42-.028.755-.032 1.005-.003.25-.003.616 0 1.1l.006.796-.006.797c-.003.483-.003.849 0 1.099.004.25.014.585.032 1.005.017.42.052.778.104 1.073.052.295.116.543.192.745.14.347.34.653.605.916.263.264.569.466.916.605.202.076.45.14.745.192.295.052.653.087 1.073.104.42.018.755.028 1.005.032.25.003.616.003 1.1 0l.796-.005.797.005c.483.003.849.003 1.099 0 .25-.004.585-.014 1.005-.032.42-.017.778-.052 1.073-.104.295-.052.543-.116.745-.192.347-.14.653-.34.916-.605.264-.263.466-.569.605-.916.076-.202.14-.45.192-.745.052-.295.087-.653.104-1.073.018-.42.028-.755.032-1.005.003-.25.003-.616 0-1.1L18.562 12l.006-.797c.003-.483.003-.849 0-1.099a38.59 38.59 0 0 0-.032-1.005 8.255 8.255 0 0 0-.104-1.073 4.177 4.177 0 0 0-.192-.745 2.703 2.703 0 0 0-.605-.916 2.703 2.703 0 0 0-.916-.605 4.177 4.177 0 0 0-.745-.192 8.255 8.255 0 0 0-1.073-.104c-.42-.018-.755-.028-1.005-.032-.25-.003-.616-.003-1.1 0L12 5.438zM20 12c0 1.59-.017 2.691-.052 3.302-.07 1.445-.5 2.563-1.292 3.354-.791.792-1.91 1.222-3.354 1.292-.611.035-1.712.052-3.302.052s-2.691-.017-3.302-.052c-1.445-.07-2.563-.5-3.354-1.292-.792-.791-1.222-1.91-1.292-3.354C4.017 14.691 4 13.59 4 12s.017-2.691.052-3.302c.07-1.445.5-2.563 1.292-3.354.791-.792 1.91-1.222 3.354-1.292C9.309 4.017 10.41 4 12 4s2.691.017 3.302.052c1.445.07 2.563.5 3.354 1.292.792.791 1.222 1.91 1.292 3.354.035.611.052 1.712.052 3.302z"></path></svg> </a></li>
                  <li class="hintT-top" data-hint="linkedin"> <a href="#" target="_blank"> <svg viewBox="0 0 24 24" fill="currentColor" width="40px" height="40px" data-ux="IconSocial" class="x-el x-el-svg c1-1 c1-2 c1-1g c1-2y c1-2z c1-30 c1-31 c1-32 c1-33 c1-b c1-c c1-d c1-e c1-f c1-g"><path d="M5.181 4h13.634C19.468 4 20 4.518 20 5.153v13.692c0 .638-.532 1.155-1.184 1.155H5.181C4.53 20 4 19.483 4 18.845V5.153c0-.636.53-1.152 1.181-1.152zm3.754 3.574a1.376 1.376 0 00-2.752 0A1.38 1.38 0 007.56 8.95c.758 0 1.375-.618 1.375-1.376zM8.75 9.998H6.372v7.635H8.75V9.999zm1.485 0h.003v7.633h2.371v-3.777c0-.995.19-1.96 1.425-1.96 1.217 0 1.233 1.14 1.233 2.025v3.714h2.372v-4.188c0-2.056-.444-3.637-2.847-3.637-1.159 0-1.933.633-2.25 1.233h-.031V9.999h-2.273v-.002l-.003.002z"></path></svg>  </a></li>
                  <li class="hintT-top" data-hint="pinterest"> <a href="#" target="_blank"> <svg viewBox="0 0 24 24" fill="currentColor" width="40px" height="40px" data-ux="IconSocial" class="x-el x-el-svg c1-1 c1-2 c1-1g c1-2y c1-2z c1-30 c1-31 c1-32 c1-33 c1-b c1-c c1-d c1-e c1-f c1-g"><path d="M12 4a8 8 0 00-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.188c0-1.112.645-1.942 1.448-1.942.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 01.056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.152 4.976-.81 0-1.572-.421-1.833-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1012 4z"></path></svg> </a></li>
                  <li class="hintT-top" data-hint="Twitter"> <a href="#" target="_blank"> <svg viewBox="0 0 24 24" fill="currentColor" width="40px" height="40px" data-ux="IconSocial" class="x-el x-el-svg c1-1 c1-2 c1-1g c1-2y c1-2z c1-30 c1-31 c1-32 c1-33 c1-b c1-c c1-d c1-e c1-f c1-g"><path fill-rule="evenodd" d="M9.026 19.01c6.038 0 9.341-5.007 9.341-9.341 0-.141 0-.282-.006-.423A6.689 6.689 0 0020 7.543a6.654 6.654 0 01-1.889.519 3.303 3.303 0 001.447-1.819 6.53 6.53 0 01-2.087.794A3.277 3.277 0 0015.076 6a3.287 3.287 0 00-3.284 3.285c0 .256.032.505.083.749a9.323 9.323 0 01-6.767-3.432 3.292 3.292 0 001.018 4.386 3.32 3.32 0 01-1.486-.41v.045a3.29 3.29 0 002.632 3.22 3.198 3.198 0 01-.865.115c-.21 0-.416-.019-.614-.057a3.283 3.283 0 003.067 2.28 6.585 6.585 0 01-4.079 1.408A6.32 6.32 0 014 17.544a9.339 9.339 0 005.026 1.466z"></path></svg> </a></li>
               </ul>
               </div>
            </div>
            <div id="contact-form" class="d-none p-2 pt-0">
               <h4 class="title sub-title-theme">Drop us a line!</h4>
               <div class="contact-form mt-4">
                  <form action="assets/php/contact-mail.php" id="contact-form" method="post">
                     <div class="row learts-mb-n30">
                        <div class="col-md-12 col-12 learts-mb-40">
                           <input type="text" placeholder="Your Name *" name="name">
                        </div>
                        <div class="col-md-12 col-12 learts-mb-40">
                           <input type="email" placeholder="Email *" name="email">
                        </div>
                        <div class="col-md-12 col-12 learts-mb-40">
                           <input type="tel" placeholder="Phone No. *" name="phone">
                        </div>
                        <div class="col-12 learts-mb-50">
                           <textarea name="message" rows="5" placeholder="Message here..."></textarea>
                        </div>
                        <div class="col-12 learts-mb-40">
                           <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Sign up for our email list for updates, promotions, and more.</label>
                           </div>
                        </div>
                        <p class="privacy-text mb-4">This site is protected by reCAPTCHA and the Google <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> apply.</p>
                        <div class="col-12 text-center learts-mb-30">
                           <button class="btn btn-warning btn-outline-hover-warning mr-2">Send</button>
                           <button class="btn btn-dark btn-outline-hover-dark" id="open-form-text">Cancel</button>
                        </div>
                     </div>
                  </form>
                  <p class="form-messege"></p>
               </div>
            </div>
         </div>
         <div class="col-md-6 p-0">
            <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56008.72671369034!2d77.37629702177072!3d28.673326865089418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf220ffd79e9d%3A0xeeb9c331037ba6fe!2sChancellor%20Club!5e0!3m2!1sen!2sin!4v1701455930839!5m2!1sen!2sin" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" loading="lazy"></iframe>
         </div>
      </div>
      <!-- Contact Map End -->
   </div>
</div>
@endsection