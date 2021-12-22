<!DOCTYPE html>
<html>
<body>
    <p><?=session()->get('username');?></p>
    <a href="/Login/logout" class="btn btn-primary">Keluar</a>
</body>
</html>