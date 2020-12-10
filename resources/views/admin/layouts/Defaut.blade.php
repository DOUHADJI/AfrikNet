

@yield('head')




<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 


@include('admin.partials.topHeaderMenu')

@include('admin.partials.sidebarMenu')


<!--main-container-part-->
<div id="content">

        @yield('contentHead')

        @yield('contentBody')
    
</div>
</div>
</div>



<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

@yield('footer')




</body>
</html>
