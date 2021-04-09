<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Mon super formulaire</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="./assets/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
    <!-- Dashboard Core -->
    <link href="./assets/css/dashboard.css" rel="stylesheet" />
    <script src="./assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="./assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="./assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="./assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="./assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="./assets/plugins/input-mask/plugin.js"></script>
  </head>
  <body>
    <div class="page bg-indigo">
      <h3 class="dt text-light container">Mon site internet</h3>
      <div class="container">
        <form class="card" method="POST">
          <div class="card-body">
            <h3 class="dt text-dark">Mon superbe formulaire</h3>
            <div class="row">
              <div class="col-sm-6 col-md-6">
                <div class="form-group">
                  <label class="form-label">Nom</label>
                  <?php if(isset($_POST['submit']) && empty($_POST['nom'])){?>
                    <input type="text" class="form-control is-invalid" placeholder="Nom" name="nom">
                  <div class="invalid-feedback">Veuillez renseigner votre nom</div><?php } else {?>
                    <input type="text" class="form-control" placeholder="Nom" name="nom"> <?php }?>            
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-group">
                  <label class="form-label">Prenom</label>
                  <?php if(isset($_POST['submit']) && empty($_POST['prenom'])){?>
                    <input type="text" class="form-control is-invalid" placeholder="Prenom" name="prenom">
                    <div class="invalid-feedback">Veuillez renseigner votre prénom</div>
                  <?php } else {?>
                    <input type="text" class="form-control" placeholder="Prenom" name="prenom"> 
                  <?php }?>            
                </div>
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label class="form-label">Email</label>
                <?php if(isset($_POST['submit']) && empty($_POST['email'])){?>
                  <div class="input-group">
                    <span class="input-group-prepend" id="basic-addon1">
                      <span class="input-group-text">@</span>
                    </span>
                    <input type="text" class="form-control is-invalid" placeholder="Email" name ="email" aria-label="Email" aria-describedby="basic-addon1">
                    <div class="invalid-feedback">Veuillez renseigner votre email</div>
                  </div>
                <?php } else {?>
                  <div class="input-group">
                    <span class="input-group-prepend" id="basic-addon1">
                      <span class="input-group-text">@</span>
                    </span>
                    <input type="text" class="form-control" placeholder="Email" name ="email" aria-label="Email" aria-describedby="basic-addon1">
                  </div>
                <?php }?> 
              </div>
              <div class="form-group col-sm-6 col-md-6">
                <label class="form-label">Date de naissance</label>
                <div class="row gutters-xs">
                  <div class="col-5">
                      <select name="mois" class="form-control custom-select">
                      <option value="">Mois</option>
                      <option value="1" selected="selected">Janvier</option>
                      <option value="2">Février</option>
                      <option value="3">Mars</option>
                      <option value="4">Avril</option>
                      <option value="5">Mai</option>
                      <option value="6">Juin</option>
                      <option value="7">Juillet</option>
                      <option value="8">Aout</option>
                      <option value="9">Septembre</option>
                      <option value="10">Octobre</option>
                      <option value="11">Novembre</option>
                      <option value="12">Décembre</option>
                    </select>
                  </div>
                  <div class="col-3">
                    <select name="jour" class="form-control custom-select">
                      <option value="">Jour</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option selected="selected" value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                    </select>
                  </div>
                  <div class="col-4">
                    <select name="annee" class="form-control custom-select">
                      <option value="">Année</option>
                      <option value="2014">2014</option>
                      <option value="2013">2013</option>
                      <option value="2012">2012</option>
                      <option value="2011">2011</option>
                      <option value="2010">2010</option>
                      <option value="2009">2009</option>
                      <option value="2008">2008</option>
                      <option value="2007">2007</option>
                      <option value="2006">2006</option>
                      <option value="2005">2005</option>
                      <option value="2004">2004</option>
                      <option value="2003">2003</option>
                      <option value="2002">2002</option>
                      <option value="2001">2001</option>
                      <option value="2000">2000</option>
                      <option value="1999">1999</option>
                      <option value="1998">1998</option>
                      <option value="1997">1997</option>
                      <option value="1996">1996</option>
                      <option value="1995">1995</option>
                      <option value="1994">1994</option>
                      <option value="1993">1993</option>
                      <option value="1992">1992</option>
                      <option value="1991">1991</option>
                      <option value="1990">1990</option>
                      <option selected="selected" value="1989">1989</option>
                      <option value="1988">1988</option>
                      <option value="1987">1987</option>
                      <option value="1986">1986</option>
                      <option value="1985">1985</option>
                      <option value="1984">1984</option>
                      <option value="1983">1983</option>
                      <option value="1982">1982</option>
                      <option value="1981">1981</option>
                      <option value="1980">1980</option>
                      <option value="1979">1979</option>
                      <option value="1978">1978</option>
                      <option value="1977">1977</option>
                      <option value="1976">1976</option>
                      <option value="1975">1975</option>
                      <option value="1974">1974</option>
                      <option value="1973">1973</option>
                      <option value="1972">1972</option>
                      <option value="1971">1971</option>
                      <option value="1970">1970</option>
                      <option value="1969">1969</option>
                      <option value="1968">1968</option>
                      <option value="1967">1967</option>
                      <option value="1966">1966</option>
                      <option value="1965">1965</option>
                      <option value="1964">1964</option>
                      <option value="1963">1963</option>
                      <option value="1962">1962</option>
                      <option value="1961">1961</option>
                      <option value="1960">1960</option>
                      <option value="1959">1959</option>
                      <option value="1958">1958</option>
                      <option value="1957">1957</option>
                      <option value="1956">1956</option>
                      <option value="1955">1955</option>
                      <option value="1954">1954</option>
                      <option value="1953">1953</option>
                      <option value="1952">1952</option>
                      <option value="1951">1951</option>
                      <option value="1950">1950</option>
                      <option value="1949">1949</option>
                      <option value="1948">1948</option>
                      <option value="1947">1947</option>
                      <option value="1946">1946</option>
                      <option value="1945">1945</option>
                      <option value="1944">1944</option>
                      <option value="1943">1943</option>
                      <option value="1942">1942</option>
                      <option value="1941">1941</option>
                      <option value="1940">1940</option>
                      <option value="1939">1939</option>
                      <option value="1938">1938</option>
                      <option value="1937">1937</option>
                      <option value="1936">1936</option>
                      <option value="1935">1935</option>
                      <option value="1934">1934</option>
                      <option value="1933">1933</option>
                      <option value="1932">1932</option>
                      <option value="1931">1931</option>
                      <option value="1930">1930</option>
                      <option value="1929">1929</option>
                      <option value="1928">1928</option>
                      <option value="1927">1927</option>
                      <option value="1926">1926</option>
                      <option value="1925">1925</option>
                      <option value="1924">1924</option>
                      <option value="1923">1923</option>
                      <option value="1922">1922</option>
                      <option value="1921">1921</option>
                      <option value="1920">1920</option>
                      <option value="1919">1919</option>
                      <option value="1918">1918</option>
                      <option value="1917">1917</option>
                      <option value="1916">1916</option>
                      <option value="1915">1915</option>
                      <option value="1914">1914</option>
                      <option value="1913">1913</option>
                      <option value="1912">1912</option>
                      <option value="1911">1911</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-group">
                  <label class="form-label">Adresse</label>
                  <?php if(isset($_POST['submit']) && empty($_POST['adresse'])){?>
                    <input type="text" class="form-control is-invalid" placeholder="Adresse" name="adresse">
                    <div class="invalid-feedback">Veuillez renseigner votre adresse complète</div>
                  <?php } else { ?>
                    <input type="text" class="form-control" placeholder="Adresse" name="adresse">
                  <?php }?>        
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-group">
                  <label class="form-label">Ville</label>
                  <?php if(isset($_POST['submit']) && empty($_POST['ville'])){?>
                    <input type="text" class="form-control is-invalid" placeholder="Ville" name="ville">
                    <div class="invalid-feedback">Veuillez renseigner votre ville</div>
                  <?php } else { ?>
                    <input type="text" class="form-control" placeholder="Ville" name="ville">
                  <?php }?>        
                </div>
              </div>
              <div class="col-sm-6 col-md-2">
                <div class="form-group">
                  <label class="form-label">Code postal</label>
                  <?php if(isset($_POST['submit']) && empty($_POST['postal'])){?>
                    <input type="text" class="form-control is-invalid" placeholder="Code postal" name="postal">
                    <div class="invalid-feedback">Veuillez renseigner votre code postal</div>
                  <?php } else if(isset($_POST['submit']) && !is_numeric($_POST['postal'])) {?>
                    <input type="text" class="form-control is-invalid" placeholder="Code postal" name="postal">
                    <div class="invalid-feedback">Veuillez renseigner un code postal valide</div>
                  <?php } else { ?>
                    <input type="text" class="form-control" placeholder="Code postal" name="postal">
                  <?php }?>        
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="form-group">
                  <label class="form-label">Pays</label>
                  <?php if(isset($_POST['submit']) && empty($_POST['pays'])){?>
                    <input type="text" class="form-control is-invalid" placeholder="Pays" name="pays">
                    <div class="invalid-feedback">Veuillez renseigner votre pays</div>
                  <?php } else { ?>
                    <input type="text" class="form-control" placeholder="Pays" name="pays">
                  <?php }?>        
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="form-group">
                  <label class="form-label">Téléphone</label>
                  <?php if(isset($_POST['submit']) && empty($_POST['tel'])){?>
                    <input type="text" class="form-control is-invalid" placeholder="Téléphone" name="tel">
                    <div class="invalid-feedback">Veuillez renseigner votre numéro de téléphone</div>
                  <?php } else if(isset($_POST['submit']) && isset($_POST['tel']) && !is_numeric($_POST['tel']) || strlen($_POST['tel']) > 11) {?>
                    <input type="text" class="form-control is-invalid" placeholder="Téléphone" name="tel">
                    <div class="invalid-feedback">Veuillez renseigner un numéro valide (ex: 0X XX XX XX XX)</div>
                  <?php } else { ?>
                    <input type="text" class="form-control" placeholder="Téléphone" name="tel">
                  <?php }?> 
                </div>
              </div>
              <div class="form-group col-sm-6 col-md-3">
                <label class="form-label">Civilité</label>
                <div class="custom-controls-stacked">
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" name="example-inline-radios" value="option1" checked>
                    <span class="custom-control-label">Madame</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" name="example-inline-radios" value="option2">
                    <span class="custom-control-label">Monsieur</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" name="submit" class="btn btn-indigo">Envoyer</button>
        </form>
      </div>
    </div>
  </body>
</html>