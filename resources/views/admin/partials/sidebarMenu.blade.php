

<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
      <li class="active"><a href="/dashboard"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
      <li> <a href="charts.html"><i class="icon icon-signal"></i> <span>Abonments &amp; forfaits</span></a> </li>
      <li> <a href="widgets.html"><i class="icon icon-inbox"></i> <span>Service de support</span></a> </li>
      <li> <a href="/clients"><i class="icon icon-inbox"></i> <span>Gestion des clients</span></a> </li>
      <li> <a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
      <li> <a href="widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>
      <li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
      <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>
      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
        <ul>
          <li><a href="form-common.html">Basic Form</a></li>
          <li><a href="form-validation.html">Form with Validation</a></li>
          <li><a href="form-wizard.html">Form with Wizard</a></li>
        </ul>
      </li>
      <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
      <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
      <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
        <ul>
          <li><a href="index2.html">Dashboard2</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="calendar.html">Calendar</a></li>
          <li><a href="invoice.html">Invoice</a></li>
          <li><a href="chat.html">Chat option</a></li>
        </ul>
      </li>
  
                <div class="container-fluid" style="padding: 8px">
                      <form method="POST" action="#">
                        @csrf
                      <a title="" href="#" ">
                      
                        <i class="icon icon-share-alt"></i>    
                        <span class="text">Logout</span>
                      </a>
                    </form>
                </div>

    </ul>
  </div>

  
<script type="text/javascript">
  $(document).on('click', 'ul,li', function(){
    $(this).addClass('active').siblings().removeClass('active')
  })
</script>
  <!--sidebar-menu-->