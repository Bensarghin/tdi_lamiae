@include('layoutAdmin.header')

    @yield('content')

</div>
</div>
  </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
       <!-- plugins:js -->
       <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
       <script src="{{asset('assets/vendors/js/bootstrap.min.js')}}"></script>
     
     
     
       <!-- endinject -->
     
     
       <!-- End plugin js for this page -->
       <!-- inject:js -->
       <script src="{{asset('assets/js/off-canvas.js')}}"></script>
       <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
       <script src="{{asset('assets/js/template.js')}}"></script>
       <script src="{{asset('assets/js/settings.js')}}"></script>
       <!-- endinject -->
       <!-- Custom js for this page-->
       <script src="{{asset('assets/js/dashboard.js')}}"></script>
       <!-- End custom js for this page-->
     </body>
     </html>
