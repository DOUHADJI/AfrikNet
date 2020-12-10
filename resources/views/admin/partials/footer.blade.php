<!--end-Footer-part-->




<script src="{{ asset('js/Back_End/excanvas.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.ui.custom.js') }}"></script> 
<script src="{{ asset('js/Back_End/bootstrap.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.flot.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.flot.resize.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.peity.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/fullcalendar.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.dashboard.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.gritter.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.interface.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.chat.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.validate.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.form_validation.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.wizard.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.uniform.js') }}"></script> 
<script src="{{ asset('js/Back_End/select2.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.popover.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.dataTables.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.tables.js') }}"></script> 



<!-- JS charts CDN-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js" integrity="sha512-SuxO9djzjML6b9w9/I07IWnLnQhgyYVSpHZx0JV97kGBfTIsUYlWflyuW4ypnvhBrslz1yJ3R+S14fdCWmSmSA==" crossorigin="anonymous"></script>











<!--

  <script src="{{ asset('js/Back_End/matrix.dashboard.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.charts.js') }}"></script> 
<script src="{{ asset('js/Back_End/select2.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/bootstrap-colorpicker.js') }}"></script> 
<script src="{{ asset('js/Back_End/bootstrap-colorpicker.js') }}"></script> 
<script src="{{ asset('js/Back_End/bootstrap-wysihtml5.js') }}"></script> 
<script src="{{ asset('js/Back_End/bootstrap.js') }}"></script> 
<script src="{{ asset('js/Back_End/bootstrap.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/excanvas.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/fullcalendar.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.dataTables.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.easy-pie-chart.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.flot.crosshair.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.flot.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.flot.pie.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.flot.pie.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.flot.resize.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.flot.stack.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.gritter.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.peity.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.ui.custom.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.uniform.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.validate.js') }}"></script> 
<script src="{{ asset('js/Back_End/jquery.wizard.js') }}"></script> 
<script src="{{ asset('js/Back_End/masked.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.calendar.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.charts.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.chat.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.dashboard.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.form_common.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.form_validation.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.interface.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.login.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.popover.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.tables.js') }}"></script> 
<script src="{{ asset('js/Back_End/matrix.wizard.js') }}"></script> 
<script src="{{ asset('js/Back_End/select2.min.js') }}"></script> 
<script src="{{ asset('js/Back_End/wysihtml5-0.3.0.js') }}"></script> 


-->


<script type="text/javascript">
  $(document).on('click', 'ul,li', function(){
    $(this).addClass('active').siblings().removeClass('active')
  })
</script>


<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
