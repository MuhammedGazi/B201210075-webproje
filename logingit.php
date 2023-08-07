<?php
   ob_start();
   session_start();
?>

<!DOCTYPE html>
<html lang="tr">
<kafa>
    <meta karakter kümesi="UTF-8">
    <title>Giriş</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" bütünlük="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonim" >
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
</head>
<vücut>
   
<nav class = "navbar navbar-karanlık bg-karanlık navbar-genişlet-lg metin-beyaz sabit üst">
        <div sınıfı = "kapsayıcı py-1">
            <a href="index.html" class = "navbar-brand">MGC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-MGC" aria-controls="navbar-MGC">
                <span class = "navbar-toggler-icon"></span>
            </düğme>
            <div class="daralt navbar-collapse" id="navbar-MGC">
                <ul class = "navbar-nav ml-auto">
                    <li class = "nav-item px-2">
                        <a href ="index.html" class ="nav-link" target="_self">Hakkımda</a>
                    </li>
                    <li class = "nav-item px-2">
                        <a href ="takimim.html" class ="nav-link">Mirasımız</a>
                    </li>
                    <li class = "nav-item açılan px-2">
                      <a class="nav-link dropdown-toggle" href="sehrim.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                        Şehrim
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="sehrim.html">Adıyaman</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="nemrutdaği.html">Nemrut Dağı</a>
                        <a class="dropdown-item" href="ulucami.html">Ulu Cami</a>
                        <a class="dropdown-item" href="cenderekoprusu.html">Cendere Köprüsü</a>
                        <a class="dropdown-item" href="perreantikkenti.html">Perre Antik Kenti</a>
                      </div>                      
                    </li>
                    <li class = "nav-item px-2">
                        <a href ="özgecmis.html" class ="nav-link">ÖzGeçmişim</a>
                    </li>
                    <li class = "nav-item px-2">
                      <a href ="ilgialanlarım.html" class ="nav-link">İlgi Alanlarım</a>
                  </li>
                    <li class = "nav-item pl-2">
                        <a href ="iletisim.html" class ="nav-link">İletişim</a>
                    </li>
                    <li class = "nav-item pl-2">
                        <a href ="login.html" class ="nav-link">Giriş</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
     
      <div class = "container form-signin">       
         <?php
            $mesaj = '';
            
            if (isset($_POST['giriş']) && !empty($_POST['kullanıcı adı'])
               && !empty($_POST['şifre'])) {
				
               if ($_POST['kullanıcı adı'] == 'B201210075@sakarya.edu.tr' &&
                  $_POST['şifre'] == '123456') {
                  $_SESSION['geçerli'] = doğru;
                  $_SESSION['zaman aşımı'] = süre();
                  $_SESSION['kullanıcı adı'] = 'eğitim noktası';
                  
                  başlık('Yenile: 0; URL = çıkış.php');             
               }başka {
                  $msg = 'Kullanıcı adı veya şifre yanlış. Tekrar giriş yapınız.';
               }
            }
         ?>
      </div>
      
        <div class="container-fluid">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="login">
        <h1>GİRİŞ</h1><br>
        <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
        <label for="kullaniciAdi">Kullanıcı Adı</label><br>
        <input type="email" name="username" id="username"gerekli otomatik odaklama><br><br>
        <label for="sifre">Parola</label><br>
         <input type="password" name="password" id="password" ><br><br>
         <button id="giris" type="submit" name="login" >GİRİŞ</button>
        </form>

        </div>


</body>
</html>