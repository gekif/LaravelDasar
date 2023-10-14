<form class="form" method="post" action="" role="form">
    {{ csrf_field() }}

    <div class="form-group">
        <p>Nama: <input type="text" name="name"></p>
        <p>Email: <input type="text" name="email"></p>
        <p>Occupation: <input type="text" name="occupation"></p>
    </div>

    <div class="form-group">
        <button type="submit" name="comment" class="btn btn-primary">Simpan Data Konsumen</button>
    </div>
</form>
