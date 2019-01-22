<div class="row">
    <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
    <?php if (1 == auth()->user()->isAdmin) {
    ?>
    <div class="panel-body">
    <a href="{{url('admin/routes')}}">Admin</a>
        <br>
        <a href="{{url('appart/routes')}}">Appartments</a>

<br>
        <a href="{{url('hosp/routes')}}">Hospitals</a>

    </div><?php
} else {
        echo '<div class="panel-heading">Normal User</div>';
    }?>
    </div>
    </div>
    </div>
    </div>
