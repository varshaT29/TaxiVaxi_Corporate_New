<div class="container head-2">
  <ul class="list-group">
    <li class="set-active-tab {{ session('active_tab') == 'Dashboard' ? 'li-active' : '' }}" id="Dashboard">
      <a href="{{ route('agent.dashboard') }}">Dashboard</a>
    </li>
<<<<<<< HEAD
    
=======

>>>>>>> e7c6be825e9fe5449f49f6885374a9f26878b683
        <li class="set-active-tab dropdown {{ session('active_tab') == 'TaxiVaxi_Agents' ? 'li-active' : '' }}" id="TaxiVaxi_Agents">
      <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Operator
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
        <li>
          <a href="{{ route('Operator.create-operator')  }}">Add Operator</a>
        </li>
        <li>
          <a href="{{ route('Operator.operator') }}">View/Edit Operator</a>
        </li>
        <li>
          <a href="{{ route('Operator.create-rateform') }}">Add Rates</a>
        </li>
        <li>
          <a href="{{ route('Operator.show-rateform') }}">View Operator Rates</a>
        </li>
      </ul>
    </li>
<<<<<<< HEAD
    
=======

>>>>>>> e7c6be825e9fe5449f49f6885374a9f26878b683
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
        <li>
          <a href="{{ route('Agent.create-TaxiVaxiclients_CompanyRate') }}">Add Company Rate</a>
        </li>
        <li>
          <a href="{{ route('Agent.TaxiVaxiclients_CompanyRate') }}">View Company Rate</a>
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
        <li>
          <a href="{{ route('Agent.active-unassigned-TaxiBookings') }}">Active Bookings - Unassigned</a>
        </li>
      </ul>
    </li>
  </ul>
</div>
