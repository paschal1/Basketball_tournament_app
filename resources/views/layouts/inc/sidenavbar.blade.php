<!--**********************************
            Sidebar start
        ***********************************-->
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{url('team_create')}}">Team Registration</a></li>
                    <li><a href="{{url('players_view')}}">Players Profiles</a></li>
                </ul>
            </li>
            <li class="nav-label">Schedule & Standings</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-app-store"></i><span class="nav-text">Tournament Schedule</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('create')}}">Create Schedule</a></li>
                    <li><a href="{{ url('view')}}">View Schedules</a></li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Standings</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('standings.create')}}">Create Standings</a></li>
                            <li><a href="{{ route('standings.index')}}">View Standings</a></li>
                        </ul>
                    </li>

                </ul>
            </li>

            <li class="nav-label">Games & Results</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-world-2"></i><span class="nav-text">Games</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{route('games.create') }}">Create New Games</a></li>
                    <li><a href="{{route('games.index') }}">View Games</a></li>

                    <li><a href="{{route('tournaments.create') }}">Create New Tournament</a></li>
                    <li><a href="{{route('tournaments.index') }}">View Tournament</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-world-2"></i><span class="nav-text">Live Scores</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{route('livescores.create') }}">Add LiveScore</a></li>
                    <li><a href="{{route('livescores.index') }}">View LiveScore</a></li>


                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-plug"></i><span class="nav-text">Bracket Display</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{route('brackets.create') }}">Create Bracket Display</a></li>
                    <li><a href="{{route('brackets.index') }}">View</a></li>

                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-plug"></i><span class="nav-text">Video Highlilights</span></a>
                <ul aria-expanded="false">
                    <li><a href="./uc-select2.html">Select 2</a></li>
                    <li><a href="./uc-nestable.html">Nestedable</a></li>
                    <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                    <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                    <li><a href="./uc-toastr.html">Toastr</a></li>
                    <li><a href="./map-jqvmap.html">Jqv Map</a></li>
                </ul>
            </li>
            <li><a href="widget-basic.html" aria-expanded="false"><i class="icon icon-globe-2"></i><span class="nav-text">Game Results</span></a></li>
            <li class="nav-label">Teams</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-form"></i><span class="nav-text">Team Profiles</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{url('team_create')}}">Create New Team</a></li>
                    <li><a href="{{url('team_view')}}">View Teams</a></li>

                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-form"></i><span class="nav-text">Player Profiles</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{url('player_create')}}">Add Player</a></li>
                    <li><a href="{{url('player_view')}}">View Players</a></li>

                </ul>
            </li>
            <li class="nav-label">Tickets & Fans</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-layout-25"></i><span class="nav-text">Ticket Sales</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{route('tickets.create') }}">Create New Ticket</a></li>
                    <li><a href="{{route('tickets.index') }}">View Tickets</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-layout-25"></i><span class="nav-text">Fan Engagement</span></a>
                <ul aria-expanded="false">
                    <li><a href="#">Create New</a></li>
                    <li><a href="#">View </a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-layout-25"></i><span class="nav-text">News and Updates</span></a>
                <ul aria-expanded="false">
                    <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                    <li><a href="table-datatable-basic.html">Datatable</a></li>
                </ul>
            </li>

            <li class="nav-label">Extra</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-single-copy-06"></i><span class="nav-text">Pages</span></a>
                <ul aria-expanded="false">
                    <li><a href="./page-register.html">Register User</a></li>
                    <li><a href="{{route('seats.index') }}">View Seats</a></li>
                    <li><a href="{{route('seats.create') }}">Add Seats</a></li>
                    <li><a href="{{route('referees.index') }}">View Referees</a></li>
                    <li><a href="{{route('referees.create') }}">Add Referees</a></li>
                    <li><a href="{{route('venues.index') }}">View Venue</a></li>
                    <li><a href="{{route('venues.create') }}">Add Venue</a></li>
                    <li><a href="./page-login.html">Social Media Links</a></li>

                    <li><a href="./page-lock-screen.html">Lock Screen</a></li>
                </ul>
            </li>
        </ul>
    </div>


</div>
<!--**********************************
            Sidebar end
        ***********************************-->
