<div class="container head-2">
  <ul class="list-group">
    <li class="set-active-tab {{ session('active_tab') == 'Dashboard' ? 'li-active' : '' }}" id="Dashboard">
      <a href="{{ route('agent.dashboard') }}">Dashboard</a>
    </li>
    <li class="set-active-tab dropdown {{ session('active_tab') == 'TaxiVaxi_Agents' ? 'li-active' : '' }}" id="TaxiVaxi_Agents">
      <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TaxiVaxi Agents
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
        <li>
         
        </li>
        <li>
          
        </li>
      </ul>
    </li>
    <li class="set-active-tab dropdown {{ session('active_tab') == 'addclients' ? 'li-active' : '' }}" id="addclients">
      <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TaxiVaxi Clients
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
        <li>
         
        </li>
        <li>
          
        </li>
      </ul>
    </li>
    <li class="set-active-tab dropdown {{ session('active_tab') == 'addTaxiBookings' ? 'li-active' : '' }}" id="addTaxiBookings">
      <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Taxi Bookings
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
        <li>
         <!--  -->
        </li>

      </ul>
    </li>
   
  </ul>
</div>