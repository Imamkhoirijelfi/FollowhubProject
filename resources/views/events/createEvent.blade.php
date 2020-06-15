<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
<form method="POST" action="{{route('events.store')}}" enctype="multipart/form-data">
    @csrf
    <p>Nama Event :
        <input name="eventName" type="text" id="eventName" size="70" maxlength="70" />
    </p>
    <p>Tanggal & Waktu :
        <input name="dateTime" type="datetime-local" id="dateTime" size="70" maxlength="70" />
    </p>
    <p>Lokasi :
        <input name="location" type="text" id="location" size="70" maxlength="70" />
    </p>
    <p>Harga Tiket :
        <input name="hargaTiket" type="text" id="hargaTiket" size="70" maxlength="70" />
    </p>
    <p>Deskripsi Event :
        <input name="description" type="text" id="description" size="500" maxlength="500" />
    </p>
    <p>
        File Gambar :
        <input name="poster" type="file" id="poster" size="30" />
    </p>
    <p>
        <input type="submit" name="btnSimpan" id="btnSimpan" value="Simpan" />
    </p>
</form>
</body>
</html>
