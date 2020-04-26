<!DOCTYPE html>
<html>
<head>
	<title>Set Jadwal</title>
	<link rel="stylesheet" type="text/css" href="setjadwal.css">
</head>

<style>
	

	body {
       background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
       background-repeat: no-repeat;
	}


}
label {
    font-family: "Raleway", sans-serif;
    font-size: 11pt;
}
#forgot-pass {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 3px;
    text-align: right;
}
.form {
    align-items: left;
    display: flex;
    flex-direction: column;
}
.form-border {
    background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
    height: 1px;
    width: 100%;
}
.form-content {
    background: #fbfbfb;
    border: none;
    outline: none;
    padding-top: 14px;
}

#signup {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
}
#submit-btn {
    background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 153px;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #24c64f;
}
</style>

<body>
	<br>
	<br>
	<br>
		<h1 align="center"> SET JADWAL KEGIATAN PESERTA DIDIK SMK WIKRAMA</h1>
	<div class="Set Jadwal"></div>
		<div class="setjadwal"></div>


<form method="post">
		<table align="center">
		
		<br>
		<tr>
			<td>
				<label class="Nis">Nis : </label>
			</td>
		</tr>
		<br>
		<br>
		<tr>
			<td>
			<label class="Nama">Nama : </label>
		</td>
		<br>
		<br>

		</tr>
	<form method="post">
		<table align="center">
			<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <Label>Hari :</label>

                <select class="form-control" name="jk">
                    <option value = ""> Senin </option>
                    <option value =""> Selasa</option>
                    <option value="">Rabu</option>
                    <option value="">Kamis</option>
                    <option value="">jumat</option>
                    <option value="">Sabtu</option>
                    <option value="">Minggu</option>

                </select>

            </div>

        </div>
        <br>

			<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <label>Tanggal Kejadian :</label>

                <input type="date" name="tanggal" class="form-control" >

            </div>


		</table>

		<tr>
				<td>
					<strong class="Waktu">Waktu</strong>
				</td>
			</tr>
			<form method = "post">
		<table align="center">
			<tr>
				<td>
					Mulai
				</td>
				<br>
				<td>
				<input type = "time" name = "">
			</td>
			</tr>
			<tr>
				<td>
					Akhir
				</td>
				<br>
				<td>
				<input type = "time" name = "">
			</td>
			</tr>
			<tr>
				<td>
					Aktivitas
				</td>
				<br>
				<td>
				<input type = "text" name = "">
			</td>
			</tr>
			<tr>
				<td>
			
                <Label>Implementasi Mata Pelajaran :</label>

                <select class="form-control" name="jk">
                    <option value = ""> PA-BP </option>
                    <option value =""> PPKn</option>
                    <option value="">PJOK</option>

                </select>
            </Label>
        </td>
    </tr>
       
     
    
		</table>
	</form>

		
	</form>

</div>
</body>
</html>

