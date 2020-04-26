<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
	 <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <style>

  	#card-content {
      padding: 12px 44px;
}
#card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
}
.underline-title {
      background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 89px;
}

	body {
       background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
       background-repeat: no-repeat;
	}

  	#card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 455px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
		}

a {
    text-decoration: none;
}
label {
    font-family: "Raleway", sans-serif;
    font-size: 11pt;

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
</head>
<body>
<br>
    <h1 align="center"> MONITORING KEGIATAN PESERTA DIDIK SMK WIKRAMA BOGOR</h1>
    <br>

	<div id="card">
		<div id="card-content">
 		<div id="card-title">
   		<h2>Masukan Data</h2>
    	<div class="underline-title"></div>
  		</div>
		<form method="post" class="form"> 
		
	<label for="user-nis" style="padding-top:13px">&nbsp;NIS</label>
  	<input
   		id="user-nis"
   		class="form-content"
   		type="email"
   		name="email"
   		autocomplete="on"
   		required />
  	<div class="form-border"></div>

<label for="user-nis" style="padding-top:13px">&nbsp;Nama</label>
  	<input
   		id="user-nis"
   		class="form-content"
   		type="email"
   		name="email"
   		autocomplete="on"
   		required />
  	<div class="form-border"></div>

<label for="user-nis" style="padding-top:13px">&nbsp;Rombel</label>
  	<input
   		id="user-nis"
   		class="form-content"
   		type="email"
   		name="email"
   		autocomplete="on"
   		required />
  	<div class="form-border"></div>

<label for="user-nis" style="padding-top:13px">&nbsp;Rayon</label>
  	<input
   		id="user-nis"
   		class="form-content"
   		type="email"
   		name="email"
   		autocomplete="on"
   		required />
  	<div class="form-border"></div>

<input id="submit-btn" type="submit" name="submit" value="SIMPAN" />
	</form>
	</div>
	</div>



</body>
</html>
</body>
</html>