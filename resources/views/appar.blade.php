<?php if(auth()->user()->sys == 'appartments'){?>
<div class="panel-body">
    <a href="{{url('appart/routes')}}">Appartments</a>
</div><?php }
else echo '<div class="panel-heading">this appartments system
</div>';?>



