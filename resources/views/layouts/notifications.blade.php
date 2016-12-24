<div class="dropdown">
    <a id="dLabel" role="button" data-toggle="dropdown" data-target="#">
        <li><i class="fa  fa-bullhorn"></i>Notifications </li><span class="{{ $class }}"></span>
    </a>

    <ul class="dropdown-menu notifications" role="menu" aria-labelledby="dLabel">

        <div class="notification-heading"><h4 class="menu-title">Notifications</h4><h4 class="menu-title pull-right">View all<i class="glyphicon glyphicon-circle-arrow-right"></i></h4>
        </div>
        <li class="divider"></li>
        <div class="notifications-wrapper">
            @if (count($notifications) > 0)
            @foreach ($notifications as $notification)
                <a class="content notification-block" href="#">
                    <div class="notification-item">
                        <h4 class="item-title">{{ $notification->notification_type }}<span data-toggle="tooltip" title="Mark as read" class="notification_circle"></span></h4>
                        <p class="item-info">{{ $notification->message }}</p>
                    </div>
                </a>
            @endforeach
                @else
                <a class="content notification-block" href="#">
                    <div class="notification-item">
                        <h4 class="item-title">No Notifications</h4>
                    </div>
                </a>
                @endif
        </div>

        <li class="divider"></li>
        <div class="notification-footer"><h4 class="menu-title">View all<i class="glyphicon glyphicon-circle-arrow-right"></i></h4></div>
    </ul>

</div>
