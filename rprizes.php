<?php

session_start();
require 'auth.php';
include 'db.php';
$role=$_SESSION['role'];

if($role==='super admin') {
  include 'headeraccount1.php';
}
elseif($role==='accounts') {
    include 'headeraccount.php';
  }
else{
  echo'invalid!';
}


?>

<div class='container mt-5 bg-white text-dark'>

<div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table>
   <form method="post" id="framework_form" enctype="multipart/form-data" action="price.php" >
    <div class="form-group">
     
     
    <tr><td> <label>Choose Cient</label></td>
    <td> <select name="dealers" required/>
        
                            
                                                                <option value="jameskinuthiary@gmail.com" >james kinuthia JENDIE</option>
                                                                        <option value="felixmariga@gmail.com" >FELIX MARIGA SPAKS TECHNICAL</option>
                                                                        <option value="voctor@gmail.com" >VICTOR OTIENO VICOT LIMITED</option>
                                                                        <option value="prutinu@yahoo.com" >PATRICK RUTINU PATROSE CONSTRUCTION EQUIPMENTS</option>
                                                                        <option value="digitalnakuru@gmail.com" >JAMES OTIENO DIGITAL ELECTRICALS</option>
                                                                        <option value="ngumitatu@gmail.com" >ALPHIE MWANGI AURUM STAR</option>
                                                                        <option value="samcloud_61@yahoo.com" >SAMUEL MCLOUD SAMCLOUD</option>
                                                                        <option value="" >  </option>
                                                                        <option value="megastructuresenterprises@gmail.com" >MEGA STRUCTURES ENTERPRISES MEGA STRUCTURES ENTERPRISES</option>
                                                                        <option value="ssonkuss@gmail.com" >SIMEON ONKUNDI SONKUS PRIME SOLUTIONS CO.LTD</option>
                                                                        <option value="bonotiautoelectricals@gmail.com" >BONFAS OYUNGU BONOTI AUTO</option>
                                                                        <option value="willogtechnicalagencies@gmail.com" >WILLIS  GOR WILLOG TECHNICAL AGENCIES</option>
                                                                        <option value="wanguithomas104@yahoo.com" >Thomas Wangui NDARARUA</option>
                                                                        <option value="eagletrack2007@gmail.com" >Peter Mathenge EAGLE TRACK TECHNOLOGIES</option>
                                                                        <option value="chriskagalo@gmail.com" >CHRISTOPHER OOKO LAKE BREEZE AUTO GARAGE</option>
                                                                        <option value="OKOTHKAKA21019@YAHOO.COM" >PETER OKOTH QUINIC VENTURES</option>
                                                                        <option value="soberapatrick8@gmail.com" >PATRICK NYOKWOYO JENDIE AUTO BUNGOMA</option>
                                                                        <option value="machariamoses6@gmail.com" >MOSES MACHARIA MBUGUS</option>
                                                                        <option value="bonface811@gmail.com" >PAUL NGOE WALIA AUTO </option>
                                                                        <option value="goldenautolinks@gmail.com" >DAVID MBUTHIA GOLDEN AUTOLINKS LTD</option>
                                                                        <option value="skstevekaranja@gmail.com" >STEPHEN  KARANJA MODTECH AUTO ACCESSORIES</option>
                                                                        <option value="patrickweslie@yahoo.com" >PATRICK Omolloh valve matics</option>
                                                                        <option value="evanskimaru89@gmail.com" >EVANS  KIMARU KIMSKY</option>
                                                                        <option value="thomasouma1980@gmail.com" >THOMAS OUMA NYAKINYA AUTO</option>
                                                                        <option value="renshish8@gmail.com" >IRINE WANJIRU RENEE TRANSLINK LTD</option>
                                                                        <option value="mwauraissack@gmail.com" >ISAAC NJOROGE JENDIE AUTO MOMBASA</option>
                                                                        <option value="joygichuru983@gmail.com" >JOYCE GICHURU JOY AND DAN LIMITED</option>
                                                                        <option value="nebsam3kenya@gmail.com" >SAMUEL KANINI NEBSAM DIGITAL SOLUTIONS</option>
                                                                        <option value="info@bitrekafrica.com" >LUKE KERICH BITREK FLEET SOLUTIONS</option>
                                                                        <option value="kemto80@yahoo.com" >lynnette lynnette JENDIE</option>
                                                                        <option value="rbstracking@gmail.com" >RODGERS  NYARIKI ROPETO BUSINESS SOLUTIONS</option>
                                                                        <option value="info@technotrack.co.ke" >TECHNO TRACK TECHNO TRACK</option>
                                                                        <option value="bnclogisticsltd@gmail.com" >Desmond kinuthia BNC Logistics Ltd</option>
                                                                        <option value="mosesosebe@gmail.com" >MOSES OSEMBE Smartlifetrack</option>
                                                                        <option value="luwanza@gmail.com" >SAMMY LUI LUWANZA ENTERPRISES</option>
                                                                        <option value="waltermwihia7@gmail.com" >WALTER KAREGA BIRDS EYE AUTO TRACK LIMITED</option>
                                                                        <option value="botieno@gmail.com" >BARRACK OTIENO NORTH RIFT AUTO DIESEL</option>
                                                                        <option value="tetmaauto@gmail.com" >PETER MBUGUA TETMA AUTO ELECTRICALS</option>
                                                                        <option value="kevin.gitau@jendiespeedgovernors.com" >kevin gitau JENDIE</option>
                                                                        <option value="anthony.nderitu9@gmail.com" >ANTHONY NDERITU TOMTECH AUTOCARE</option>
                                                                        <option value="jowanga2016@gmail.com" >JONATHAN WANGA TIFFANYS AGENCIES</option>
                                                                        <option value="karegachege@gmail.com" >PETER KAREGA RAGE DISEL ALD ELECT SUPPLIES</option>
                                                                        <option value="neilsonngr@gmail.com" >NELSON NGURU MT. KENYA SPEED GOVERNOR CENTRE</option>
                                                                        <option value="kibemotors8@gmail.com" >DAVID KIBE KIBE MOTORS</option>
                                                                        <option value="boniface2040@gmail.com" >BONIFACE MAKAU BONIFACE&QUEENS</option>
                                                                        <option value="athanusmwemah@gmail.com" >ATHANUS  MUEMA TRACKONIX LTD</option>
                                                                        <option value="info@jendiespeedgovernors.com" >jendie jendie JENDIE</option>
                                                                        <option value="simsgit@gmail.com" >Simon WAMBUGU JENDIE</option>
                                                                        <option value="alekangu20@gmail.com" >ALEX KAMAU JENDIE LIMURU</option>
                                                                        <option value="josicaautosparesenterprises@outlook.com" >JOSIAH MWANGI JOSICA AUTOSPARES</option>
                                                                        <option value="afrivista@gmail.com" >STEPHAN MUTUKU AFRIVISTA VENTURES LTS</option>
                                                                        <option value="martingachimu@yahoo.com" >MARTIN KAMANGA FIATMART</option>
                                                                        <option value="mwetu@simbacolt.com" >SIMBA COLT MOTORS SIMBA COLT MOTORS</option>
                                                                        <option value="david@eurekaafrica.com" >EUReureka technical BUJULTD</option>
                                                                        <option value="hkamuobe@gmail.com" >HENRY KAMUOBI HENJIK</option>
                                                                        <option value="githukakennedy@gmail.com" >KENNEDY GITHUKA KHANTRACK</option>
                                                                        <option value="spyproventures@gmail.com" >GEORGE GITAU spyproventures</option>
                                                                        <option value="TECHVANSEN@GMAIL.COM" >MICHAEL NGUTHIRU VANSEN TECH LTD</option>
                                                                        <option value="stanleyndunguy4@gmail.com" >STANLEY NGANGA STANTECH CENTER</option>
                                                                        <option value="jmwas54@gmail.com" >JIMNAH MWANGI SUBARU INDUSTRY</option>
                                                                        <option value="shivdieselserv@gmail.com" >Harshit Pindoria SHIV DIESEL SERVICE</option>
                                                                        <option value="theeengineroom.tech@gmail.com" >ANN WANJIRU ENGINE ROOM TECH LTD</option>
                                                                        <option value="s.kamau@digital-telematics.co.ke" >samuel kamau DIGITAL TELEMATICS</option>
                                                                        <option value="info@namsams.co.ke" >SAMSON MBURU NAMSAMS ENTERPRISES</option>
                                                                        <option value="nahashonnugari@gmail.com" >NAHASHON  NUNGARI BENKO</option>
                                                                        <option value="spitfiremotorsltd@gmail.com" >Spitfire MOTORS SPITFIRE MOTORS</option>
                                                                        <option value="faithnkirote2019@gmail.com" >FAITH NKIROTE TRANSPORT AND LIFTING SERVICES LTD</option>
                                                                        <option value="kivati@jendiespeedgovernors.com" >GABRIEL  KIVATI JENDIE</option>
                                                                        <option value="james.maina@jendiespeedgovernors.com" >JAMES  MAINA JENDIE</option>
                                                                        <option value="maureen.njeri@jendiespeedgovernors.com" >maureen njeri JENDIE</option>
                                                                        <option value="allan@jendiespeedgovernors.com" >allan ombima JENDIE</option>
                                                                        <option value="ritzcartrackandtracing@gmail.com" >PETER KAIRONGE RITZ CAR TRACK</option>
                                                                        <option value="gaskings@gmail.com" >SALOME WANGUI GAS KINGS KENYA</option>
                                                                        <option value="sunscapeauoto@live.com" >ERICK KOMBO SUNSCAPE  AUTO LTD</option>
                                                                        <option value="immanetsolution@gmail.com" >SOPHIA NJERI IMMANET SOLUTION LTD</option>
                                                                        <option value="nebsam2kenya@gmail.com" >leah ndirangu NEBSAM DIGITAL SOLUTIONS</option>
                                                                        <option value="nebsamtracking12@gmail.com" >sammy kanini NEBSAM DIGITAL SOLUTIONS</option>
                                                                        <option value="sbatesi@gmail.com" >SALIM BATESI BATESI </option>
                                                                        <option value="mmwangi@gmail.com" >MARTIN MWANGI JENDIE GARISSA</option>
                                                                        <option value="pokwaro@gmail.com" >PATRICK OKWARO PTRICK OKWARO</option>
                                                                        <option value="wahome@gmail.com" >MOSES  WAHOME NAKURU VALLEY</option>
                                                                        <option value="kennedyndwiga1@gmail.com" >KENNEDY NDWIGA BESTRICH TECHNOLOGY</option>
                                                                        <option value="info@teknosav.co.ke" >ABEL KOUNDA TEKNOSAV</option>
                                                                        <option value="steveredmash@gmail.com" >STEPHEN MACHARIA CLEOKIM LTD</option>
                                                                        <option value="kennethmurithi22@gmail.com" >KENNETH MURITHI JENDIE</option>
                                                                        <option value="machariasamuel86@gmail.com" >SAMUEL MACHARIA JENDIE</option>
                                                                        <option value="cwambui514@gmail.com" >CECILIA WAMBUI JENDIE</option>
                                                                        <option value="restercuternyawira20@gmail.com" >restercuter nyawira JENDIE</option>
                                                                        <option value="collinskelly29@gmail.com" >collins kelly JENDIE</option>
                                                                        <option value="kevomwas2020@gmail.com" >KEVIN MWANGI JENDIE</option>
                                                                        <option value="bengngugi@gmail.com" >JEREMIAH MWIHIA JERIMAX AUTOWORKS NAKURU</option>
                                                                        <option value="samuelkarori7@gmail.com" >SAMUEL KARORI ELISAMWA ENTERPRISE </option>
                                                                        <option value="thomasmacharia15@gmail.com" >ALEX MACHARIA NDARARUA</option>
                                                                        <option value="wiliruno87@gmail.com" >william runo JENDIE</option>
                                                                        <option value="ezitngash@gmail.com" >GEORGE KAMAU IZIT AUTO SERVICES</option>
                                                                        <option value="juliusgikanga@gmail.com" >JULIUS GIKANGA JENDIE</option>
                                                                        <option value="Peejaysons24@gmail.com" >LUCY WAMAITHA PEEJAY & SONS CO LTD</option>
                                                                        <option value="baronenterprices11@gmail.com" >PAUL NJAHIA JENDIE</option>
                                                                        <option value="extratechautomotives@gmail.com" >JOHN MAINA EXTRATECH AUTOMOTIVE SOLUTIONS</option>
                                                                        <option value="info@wkssugar.com" >KABRAS SUGAR KABRAS SUGAR</option>
                                                                        <option value="njugunapeter65@gmail.com" >PETER NJUGUNA JOSHPETER</option>
                                                                        <option value="clementkamauwambui@gmail.com" >CLEMENT KAMAU NGARA AUTO</option>
                                                                        <option value="ksyme762@gmail.com" >SIMON KINYUA JENDIE UTAWALA</option>
                                                                        <option value="c.86mwangi@gmail.com" >CHARLES MWANGI JENDIE</option>
                                                                        <option value="lelei@gmail.com" >MICHAEL LELEI LELEI</option>
                                                                        <option value="picadcompany@gmail.com" >caroline karami picad</option>
                                                                        <option value="justerkawiramutua@gmail.com" >JUSTER KAWIRA BEGAMU SUPPLIERS GENERAL</option>
                                                                        <option value="shawnochieng@gmail.com" >RODGERS  ODHIAMBO SHAWN AUTOMOBILE</option>
                                                                        <option value="moseswanjiku70@gmail.com" >MOSES WANJIKU JENDIE</option>
                                                                        <option value="njoshnjosh249@gmail.com" >JOHN MWANGI JENDIE SULTAN</option>
                                                                        <option value="peternganga344@gmail.com" >PETER NGANGA TRESMAYN INVESTMENTS</option>
                                                                        <option value="lestcomm19@gmail.com" >LEAN NDIRANGU LEST COMM</option>
                                                                        <option value="jackm.muriithi@gmail.com" >JACKSON  MURIITHI PREVATECH</option>
                                                                        <option value="lwambui@simbacolt.com" >LOISE WAMBUI SIMBA COLT MOTORS</option>
                                                                        <option value="rwambi@simbacolt.com" >RONALD  WAMBI SIMBA COLT MOTORS</option>
                                                                        <option value="gkihia@simbacolt.com" >GEORGE KIHIA SIMBA COLT MOTORS</option>
                                                                        <option value="joycegakii@simbacolt.com" >JOYCE GAKII SIMBA COLT MOTORS</option>
                                                                        <option value="wlunani@simbacolt.com" >WILLINGSTONE LUNANI SIMBA COLT MOTORS</option>
                                                                        <option value="info@speedtrack.co.ke" >FELIX KOGEI AUTOMOBILE SPEEDTRACK</option>
                                                                        <option value="lnjeri@simbacolt.com" >LEAH NJERI SIMBA COLT MOTORS</option>
                                                                        <option value="simon@jendiespeedgovernors.com" >SIMON WAMBUGU JENDIE</option>
                                                                        <option value="bungomaline@jendiespeedgovernors.com" >JEFF NJOROGE BUNGOMALINE SACCO</option>
                                                                        <option value="jamesn@jendie.co.ke" >JAMES NYOKABI JAMESNYOKABI</option>
                                                                        <option value="techprints76@gmail.com" >DAVID  KARANJA TECH PRINTS</option>
                                                                        <option value="wanjeruabram@gmail.com" >ABRAHAM  MURAGE WANJERU</option>
                                                                        <option value="ongwenrenson@gmail.com" >RENSON  ONGWENI TAMAN</option>
                                                                        <option value="ceeywachira@gmail.com" >Nanceey Nyamathii JENDIE</option>
                                                                        <option value="lydiagnyawira@gmail.com" >LYDIA NYAWIRA JENDIE</option>
                                                                        <option value="chrissywangechik@gmail.com" >CHRISTINE  WANGECHI JENDIE</option>
                                                                        <option value="jane@jendiespeedgovernors.com" >JANE MWANGI JENDIE</option>
                                                                        <option value="waguchu@gmail.com" >WAGUCHU DAVID WAGUCHU</option>
                                                                        <option value="JEMESMWANGI96@GMAIL.COM" >JAMES MWANGI JENDIE</option>
                                                                        <option value="susankanyuira@jendiespeedgovernors.com" >SUSAN KANYUIRA SUZWIN</option>
                                                                        <option value="dunogeto@gmail.com" >DUNCAN OGETO JENDIE</option>
                                                                        <option value="vostygema@gmail.com" >vosty gema JENDIE</option>
                                                                        <option value="mwangirmk@gmail.com" >ROBERT MWANGI ROMWA AUTO DIESEL</option>
                                                                        <option value="danielkavoi2017@gmail.com" >DANIEL KAVOI JENDIE</option>
                                                                        <option value="mwongamathew@gmail.com" >MATHEW MWONGA JENDIE</option>
                                                                        <option value="SAMMSK7@GMAIL.COM" >MUSYOKI NDOLO SALS DELUXE</option>
                                                                        <option value="waititubrian@gmail.com" >WAITITU NGUNJIRI JENDIE</option>
                                                                        <option value="susanstaicy@gmail.com" >SUSAN KANYUIRA JENDIE</option>
                                                                        <option value="miki@lvnkod.com" >Angelmatic IOT Solutions ANGELMATIC</option>
                                                                        <option value="Info@krazy4cars.com" >NIRAJ  SHAH KRAZY FOR CARS LTD</option>
                                                                        <option value="elijagachokos@gmail.com" >ELIJAH GACHOKA JENDIE</option>
                                                                        <option value="skamau@simbacolt.com" >SIMON KAMAU SIMBA COLT MOTORS</option>
                                                                        <option value="anthonynjoroge231@gmail.com" >ANTHONY NJOROGE JENDIE</option>
                                                                        <option value="mutembeiedward931@gmail.com" >EDWARD MUTEMBEI JENDIE</option>
                                                                        <option value="alubimartin00@gmail.com" >MARTIN KAMADI JENDIE</option>
                                                                        <option value="nebraskir@gmail.com" >SAM KIRUTHI JENDIE</option>
                                                                        <option value="kevinkigucia@gmail.com" >KEVIN KANUNU JENDIE</option>
                                                                        <option value="lincomm10@gmail.com" >LIVINGSTONE MAINA JENDIE</option>
                                                                        <option value="albertolweny94@gmail.com" >Albert Olwenya JENDIE</option>
                                                                        <option value="wariaauto@gmail.com" >PAUL NGUGI WARIA AUTO</option>
                                                                        <option value="patricklumumba104@gmail.com" >patrick lumumba PLO</option>
                                                                        <option value="thumbiian97@gmail.com" >Ian Thumbi JENDIE</option>
                                                                        <option value="stellahnyokabi@gmail.com" >STELLAH NJENGA JENDIE</option>
                                                                        <option value="pollymwenda161@gmail.com" >POLLY MWENDA ELIGIBLE</option>
                                                                    </select></td>
                            </tr>
                            <tr>
                                <td><label>Price</label></td>
                                <td><input type="text" name="price" required></td>
                            </tr>
    </div>
    </div>
    <tr>
        <td>
     <input type="submit" class="btn btn-info" name="submit"/>
     </td>
 </tr>
    </div>
   </form>
   </table>
   <br />
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 $('#framework').multiselect({
  nonSelectedText: 'Select serial',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
 
 
  });

</script>



</div>