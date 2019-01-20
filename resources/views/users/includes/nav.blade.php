  <!-- /nav-->
  <div class="w3_agileits_top_nav">
    <ul id="gn-menu" class="gn-menu-main">
               <!-- /nav_agile_w3l -->
        <li class="gn-trigger">
            <a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
            <nav class="gn-menu-wrapper">
                <div class="gn-scroller scrollbar1">
                    <ul class="gn-menu agile_menu_drop">
                        <li><a href="/dashboard"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
                    
                    
                     <!--   <li><a href="#"><i class="fa fa-list" aria-hidden="true"></i>Post <i class="fa fa-angle-down" aria-hidden="true"> </i></a> 
                                 <ul class="gn-submenu">
                                <li class="mini_list_agile"><a href="/post"><i class="fa fa-caret-right" aria-hidden="true"></i> Create</a></li>
                                <li class="mini_list_w3"><a href="/manage-post"> <i class="fa fa-caret-right" aria-hidden="true"></i> Manage</a></li>
                                
                            </ul>
                        </li>-->
                        <li><a href="#"><i class="fa fa-list" aria-hidden="true"></i>Ads <i class="fa fa-angle-down" aria-hidden="true"> </i></a> 
                            <ul class="gn-submenu">
                           <li class="mini_list_agile"><a href="/ad"><i class="fa fa-caret-right" aria-hidden="true"></i> Create</a></li>
                           <li class="mini_list_w3"><a href="/manage-ad"> <i class="fa fa-caret-right" aria-hidden="true"></i> Manage</a></li>
                           
                       </ul>
                   </li>

                        <li><a href="/banner"> <i class="fa fa-line-chart" aria-hidden="true"></i> Banner</a></li>

                        <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                             <i class="fa fa-power-off" aria-hidden="true"></i>  Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                    </ul>
                </div><!-- /gn-scroller -->
            </nav>
        </li>
        <!-- //nav_agile_w3l -->
        <li class="second logo"><h1><a href="/"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Richmedz</a></h1></li>
            <li class="second admin-pic">
               <ul class="top_dp_agile">         
                </ul>
        </li>
    </ul>
    <!-- //nav -->
</div>