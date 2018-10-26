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
          <a href="{{ route('Agent.create-agents')  }}">Add Agent</a>
        </li>
        <li>
          <a href="{{ route('Agent.agents') }}">View/Edit Agents</a>
        </li>
      </ul>
    </li>
    <li class="set-active-tab dropdown {{ session('active_tab') == 'addclients' ? 'li-active' : '' }}" id="addclients">
      <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TaxiVaxi Clients
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
        <li>
          <a href="{{ route('Agent.create-TaxiVaxiclients')  }}">Add TaxiVaxi Client</a>
        </li>
        <li>
          <a href="{{ route('Agent.TaxiVaxiclients') }}">View/Edit TaxiVaxi Clients</a>
        </li>
      </ul>
    </li>
    <li class="set-active-tab dropdown {{ session('active_tab') == 'addTaxiBookings' ? 'li-active' : '' }}" id="addTaxiBookings">
      <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Taxi Bookings
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
        <li>
          <a href="{{ route('Agent.create-TaxiBookings')  }}">Add Taxi Bookings</a>
        </li>
        <li>
          <a href="{{ route('Agent.TaxiBookings') }}">View/Edit Today's Taxi Bookings</a>
        </li>
      </ul>
    </li>
  </ul>
</div>
