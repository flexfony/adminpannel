 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <script src="css/bootstrap-5.0.0-beta3-dist/js/bootstrap.min.js"></script>
    <script src="css/bootstrap-5.0.0-beta3-dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- <script>
      $(document).ready(function() {
      $("#sidebar").mCustomScrollbar({
      theme: "minimal"
      });
      
      if( $('.sidebarCollapse').on('click', function() ){
      $('#sidebar, #content').toggleClass('active');
      $('.collapse.in').toggleClass('in');
      $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      $('.fa-angle-left').toggleClass('fa-angle-right');
      });
      });
    
    </script> -->


    <script>
    $(document).ready(function() {
    $("#sidebar").mCustomScrollbar({
    theme: "minimal"
    });
    
    $('.sidebarCollapse').on('click', function() {
    $('#sidebar, #content').toggleClass('active');
    $('.collapse.in').toggleClass('in');
    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    $('.fa-angle-left').toggleClass('fa-angle-right');
    });
    });
  
  </script>
   <script>
    $(document).ready(function() {
    $("#sidebar").mCustomScrollbar({
    theme: "minimal"
    });
    
    $('#sidebarCollapse').on('click', function() {
    $('#sidebar, #content').toggleClass('semiactive');
    $('.collapse.in').toggleClass('in');
    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    $('.fa-angle-left').toggleClass('fa-angle-right');
    $('.txt-item').toggleClass('d-none');
    $('.tresize').toggleClass('resize');
    $('.dico').toggleClass('dicos');
    $('.nav-item').toggleClass('mx-auto');
    });
    });
    
  </script>

  <!-- tooltip -->
  <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
  </script>
  
  </body>
</html>