<!-- Footer -->
<div class="customizer-footer px-2">
    <p class="fw-bold">Footer Type</p>
    <div class="d-flex">
      <div class="form-check me-1">
        <input type="radio" id="footer-type-sticky" name="footerType" class="form-check-input" />
        <label class="form-check-label" for="footer-type-sticky">Sticky</label>
      </div>
      <div class="form-check me-1">
        <input type="radio" id="footer-type-static" name="footerType" class="form-check-input" checked />
        <label class="form-check-label" for="footer-type-static">Static</label>
      </div>
      <div class="form-check me-1">
        <input type="radio" id="footer-type-hidden" name="footerType" class="form-check-input" />
        <label class="form-check-label" for="footer-type-hidden">Hidden</label>
      </div>
    </div>
  </div>


    </div>
    <!-- End: Customizer-->

    
    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT  &copy; 2021<a class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('admin')}}/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('admin')}}/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="{{asset('admin')}}/app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('admin')}}/app-assets/js/core/app-menu.min.js"></script>
    <script src="{{asset('admin')}}/app-assets/js/core/app.min.js"></script>
    <script src="{{asset('admin')}}/app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('admin')}}/app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
      <script src="{{ asset('admin') }}/js/scripts/pages/dashboard-ecommerce.min.js"></script>
      <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
  <script>
      ClassicEditor
              .create( document.querySelector( '#editor' ) )
              .then( editor => {
                      console.log( editor );
              } )
              .catch( error => {
                      console.error( error );
              } );
  </script>
  
  
  </body>
  <!-- END: Body-->

</html>