<form action="{{route('dashboard.email')}}" method="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="id" value="{{$admin->id}}">
    <div class="col-md-3">
        <label for="email" style=" margin-top: 5px">e-mail нотификаций:</label>
    </div>
    <div class="col-md-6 pull-right">
        <input type="text" required style="width: 100%; margin-top: 10px" name="email" value="{{$admin->email}}">
    </div>
    <div class="col-md-6 pull-right">
        <input type="submit" value="Сменить">
    </div>
</form>