<?php if ('appartments' == auth()->user()->sys) {
    ?>
<div class="panel-body">
    <a href="{{url('appartments/routes')}}">Appartments</a>
</div><?php
} else {
        echo '<div class="panel-heading">this appartments system
</div>';
    }?>



