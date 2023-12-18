<?php
include('../include/dbconfig.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<link rel="icon" href="../img/logo-2.png" type="image/icon type">
<link rel="stylesheet" href="../css/style.css">
<style>
   /* For mobile phones: */
   @media only screen and (max-width:500px) {
    .hide-navi{
        display: none;
      }
   }
  </style>
<script>
  $(document).ready(function() {
  setTimeout(function() {
    $('#container').addClass('loaded');
    // Once the container has finished, the scroll appears
    if ($('#container').hasClass('loaded')) {
      // It is so that once the container is gone, the entire preloader section is deleted
      $('#preloader').delay(500).queue(function() {
        $(this).remove();
      });}
  }, 3000);});

</script>

</head>
<body>
  	<!-- Preloader -->
		<div id="preloader">
			<div id="container" class="container-preloader">
				<div class="animation-preloader">
					<div class="spinner"></div>
					<div class="txt-loading">
						<span preloader-text="L" class="characters">L</span>
						
						<span preloader-text="O" class="characters">O</span>
						
						<span preloader-text="A" class="characters">A</span>
						
						<span preloader-text="D" class="characters">D</span>
						
						<span preloader-text="I" class="characters">I</span>
						
						<span preloader-text="N" class="characters">N</span>
						
						<span preloader-text="G" class="characters">G</span>
						
					</div>
				</div>	
				<div class="loader-section section-left"></div>
				<div class="loader-section section-right"></div>
			</div>
		</div>	
<div class="home">
  <div class="col-topbar nav-mobile hide-desktop">
    <div class="topnav">
      <a href="previousRequest.php<?php echo"?id=".$id."";?>" class="topAction-mobile">
        <span class="back-btn"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#fff" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path><path fill="#fff" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path></g></svg></span> 
      </a>
      <a href="#news" class="topAction-mobile">
     <span class="topDetails">Camp Request</span> 
      </a>
    </div>

  </div>
<div class="sidebar" id="mySidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="sidebar-col-top">
    <img src="../img/logo.png">
  </div>
  <?php
  include('sidebar.php')
  ?>
</div>

<div class="content">
  <section >
    <div class="col-topbar show-tab hide-navi">
      <div class="topnav">
        <a href="#news" class="show-tab topAction" style="margin-top: -5px;">
          <span class="back-btn"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#000000" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path><path fill="#000000" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path></g></svg></span> 
        </a>
        <a href="#news" class="show-tab topAction" style="margin-top: -10px;">
       <span class="topDetails">Camp Request</span> 
        </a>
      </div>

    </div>
    
  </section>

  <!--section body -->
  <section>
    <div class="col-body ">
      <div class="col-table">
        <div class="container container-form">
        <form id="regForm" action="../include/requestCamp.php<?php echo "?id=".$id."";?>" method="POST">
              <div class="column one">
                <h4>Camp Info:</h4>
                  <div class="field username">
                      <label for="Username_">Camp Name</label>
                      <input type="text" name="sname" id="Username_"  required>
                  </div>
                  <div class="field password">
                      <label for="Password_">Starting On</label>
                      <input type="date" id="startDate" name="startDate" min="" required>
  <script>
    // Get the current date
    var currentDate = new Date();

    // Format the date as "YYYY-MM-DD" (required format for the date input)
    var formattedCurrentDate = currentDate.toISOString().split('T')[0];

    // Set the min attribute of the date input to the current date
    document.getElementById('startDate').min = formattedCurrentDate;
  </script>
                  </div>
                  <div class="field email">
                      <label for="Email_">Ending On</label>
                      <input type="date" id="birthdate" name="dob" max="" required>
                      <script>
    // Get the current date
    var currentDate = new Date();

    // Format the date as "YYYY-MM-DD" (required format for the date input)
    var formattedCurrentDate = currentDate.toISOString().split('T')[0];

    // Set the min attribute of the date input to the current date
    document.getElementById('endDate').min = formattedCurrentDate;
  </script>
                  </div>
                  <div class="field email">
                  <label>Expected TurnUp</label><br>
                      <select name="turnUp" id="select" required>
      <option value='01 - 10'>01 - 10</option>
     <option value='11 - 25'>11 - 25</option>
     <option value='26 - 50'>26 - 50</option>
     <option value='51 - 100'>51 - 100</option>
     <option value='101 - 250'>101 - 250</option>
     <option value='251 - 500'>251 - 500</option>
     <option value='501 - 750'>501 - 750</option>
     <option value='751 - 1000'>751 - 1000</option>
     <option value='More Than 1000'>More Than 1000</option>
     <option value='Not Sure'>Not Sure</option>
         </select>
                  </div>
                  <div class="field email">
                  <label>Offers</label> <br>
                  <select name="offers" id="select" required>
      <option value='Tent and Chairs'>Tent and Chairs</option>
      <option value='Public Address System'>Public Address System</option>
      <option value='Staff Facilitation'>Staff Facilitation</option>
      <option value='Donor Refreshment'>Donor Refreshment</option>
      <option value='Donor Award'>Donor Award</option>
      </select>
                  </div>
                  <h4>Contact Info:</h4>
                  <div class="field username">
                      <label for="Username_">Contact Person</label>
                      <input type="text" name="fullname" id="Username_"  required>
                  </div>
                  <div class="field phone">
                    <label for="Phone_">phone</label>
                    <div class="phone-con">
                      <div class="phone-code" >
                         <select name="phoneCode" id="select" required style="background-color: transparent;margin-top: 0px;">
                         <option data-countryCode="UG" value="+256">+256</option>
            <option data-countryCode="DZ" value="+213">+213</option>
<option data-countryCode="AD" value="+376">+376</option>
<option data-countryCode="AO" value="+244">+244</option>
<option data-countryCode="AI" value="+1264">+1264</option>
<option data-countryCode="AG" value="+1268">+1268</option>
<option data-countryCode="AR" value="+54">+54</option>
<option data-countryCode="AM" value="+374">+374</option>
<option data-countryCode="AW" value="+297">+297</option>
<option data-countryCode="AU" value="+61">+61</option>
<option data-countryCode="AT" value="+43">+43</option>
<option data-countryCode="AZ" value="+994">+994</option>
<option data-countryCode="BS" value="+1242">+1242</option>
<option data-countryCode="BH" value="+973">+973</option>
<option data-countryCode="BD" value="+880">+880</option>
<option data-countryCode="BB" value="+1246">+1246</option>
<option data-countryCode="BY" value="+375">+375</option>
<option data-countryCode="BE" value="+32">+32</option>
<option data-countryCode="BZ" value="+501">+501</option>
<option data-countryCode="BJ" value="+229">+229</option>
<option data-countryCode="BM" value="+1441">+1441</option>
<option data-countryCode="BT" value="+975">+975</option>
<option data-countryCode="BO" value="+591">+591</option>
<option data-countryCode="BA" value="+387">+387</option>
<option data-countryCode="BW" value="+267">+267</option>
<option data-countryCode="BR" value="+55">+55</option>
<option data-countryCode="BN" value="+673">+673</option>
<option data-countryCode="BG" value="+359">+359</option>
<option data-countryCode="BF" value="+226">+226</option>
<option data-countryCode="BI" value="+257">+257</option>
<option data-countryCode="KH" value="+855">+855</option>
<option data-countryCode="CM" value="+237">+237</option>
<option data-countryCode="CA" value="+1">+1</option>
<option data-countryCode="CV" value="+238">+238</option>
<option data-countryCode="KY" value="+1345">+1345</option>
<option data-countryCode="CF" value="+236">+236</option>
<option data-countryCode="CL" value="+56">+56</option>
<option data-countryCode="CN" value="+86">+86</option>
<option data-countryCode="CO" value="+57">+57</option>
<option data-countryCode="KM" value="+269">+269</option>
<option data-countryCode="CG" value="+242">+242</option>
<option data-countryCode="CK" value="+682">+682</option>
<option data-countryCode="CR" value="+506">+506</option>
<option data-countryCode="HR" value="+385">+385</option>
<option data-countryCode="CU" value="+53">+53</option>
<option data-countryCode="CY" value="+90392">+90392</option>
<option data-countryCode="CY" value="+357">+357</option>
<option data-countryCode="CZ" value="+42">+42</option>
<option data-countryCode="DK" value="+45">+45</option>
<option data-countryCode="DJ" value="+253">+253</option>
<option data-countryCode="DM" value="+1809">+1809</option>
<option data-countryCode="EC" value="+593">+593</option>
<option data-countryCode="EG" value="+20">+20</option>
<option data-countryCode="SV" value="+503">+503</option>
<option data-countryCode="GQ" value="+240">+240</option>
<option data-countryCode="ER" value="+291">+291</option>
<option data-countryCode="EE" value="+372">+372</option>
<option data-countryCode="ET" value="+251">+251</option>
<option data-countryCode="FK" value="+500">+500</option>
<option data-countryCode="FO" value="+298">+298</option>
<option data-countryCode="FJ" value="+679">+679</option>
<option data-countryCode="FI" value="+358">+358</option>
<option data-countryCode="FR" value="+33">+33</option>
<option data-countryCode="GF" value="+594">+594</option>
<option data-countryCode="PF" value="+689">+689</option>
<option data-countryCode="GA" value="+241">+241</option>
<option data-countryCode="GM" value="+220">+220</option>
<option data-countryCode="GE" value="+7880">+7880</option>
<option data-countryCode="DE" value="+49">+49</option>
<option data-countryCode="GH" value="+233">+233</option>
<option data-countryCode="GI" value="+350">+350</option>
<option data-countryCode="GR" value="+30">+30</option>
<option data-countryCode="GL" value="+299">+299</option>
<option data-countryCode="GD" value="+1473">+1473</option>
<option data-countryCode="GP" value="+590">+590</option>
<option data-countryCode="GU" value="+671">+671</option>
<option data-countryCode="GT" value="+502">+502</option>
<option data-countryCode="GN" value="+224">+224</option>
<option data-countryCode="GW" value="+245">+245</option>
<option data-countryCode="GY" value="+592">+592</option>
<option data-countryCode="HT" value="+509">+509</option>
<option data-countryCode="HN" value="+504">+504</option>
<option data-countryCode="HK" value="+852">+852</option>
<option data-countryCode="HU" value="+36">+36</option>
<option data-countryCode="IS" value="+354">+354</option>
<option data-countryCode="IN" value="+91">+91</option>
<option data-countryCode="ID" value="+62">+62</option>
<option data-countryCode="IR" value="+98">+98</option>
<option data-countryCode="IQ" value="+964">+964</option>
<option data-countryCode="IE" value="+353">+353</option>
<option data-countryCode="IL" value="+972">+972</option>
<option data-countryCode="IT" value="+39">+39</option>
<option data-countryCode="JM" value="+1876">+1876</option>
<option data-countryCode="JP" value="+81">+81</option>
<option data-countryCode="JO" value="+962">+962</option>
<option data-countryCode="KZ" value="+7">+7</option>
<option data-countryCode="KE" value="+254">+254</option>
<option data-countryCode="KI" value="+686">+686</option>
<option data-countryCode="KP" value="+850">+850</option>
<option data-countryCode="KR" value="+82">+82</option>
<option data-countryCode="KW" value="+965">+965</option>
<option data-countryCode="KG" value="+996">+996</option>
<option data-countryCode="LA" value="+856">+856</option>
<option data-countryCode="LV" value="+371">+371</option>
<option data-countryCode="LB" value="+961">+961</option>
<option data-countryCode="LS" value="+266">+266</option>
<option data-countryCode="LR" value="+231">+231</option>
<option data-countryCode="LY" value="+218">+218</option>
<option data-countryCode="LI" value="+417">+417</option>
<option data-countryCode="LT" value="+370">+370</option>
<option data-countryCode="LU" value="+352">+352</option>
<option data-countryCode="MO" value="+853">+853</option>
<option data-countryCode="MK" value="+389">+389</option>
<option data-countryCode="MG" value="+261">+261</option>
<option data-countryCode="MW" value="+265">+265</option>
<option data-countryCode="MY" value="+60">+60</option>
<option data-countryCode="MV" value="+960">+960</option>
<option data-countryCode="ML" value="+223">+223</option>
<option data-countryCode="MT" value="+356">+356</option>
<option data-countryCode="MH" value="+692">+692</option>
<option data-countryCode="MQ" value="+596">+596</option>
<option data-countryCode="MR" value="+222">+222</option>
<option data-countryCode="YT" value="+269">+269</option>
<option data-countryCode="MX" value="+52">+52</option>
<option data-countryCode="FM" value="+691">+691</option>
<option data-countryCode="MD" value="+373">+373</option>
<option data-countryCode="MC" value="+377">+377</option>
<option data-countryCode="MN" value="+976">+976</option>
<option data-countryCode="MS" value="+1664">+1664</option>
<option data-countryCode="MA" value="+212">+212</option>
<option data-countryCode="MZ" value="+258">+258</option>
<option data-countryCode="MN" value="+95">+95</option>
<option data-countryCode="NA" value="+264">+264</option>
<option data-countryCode="NR" value="+674">+674</option>
<option data-countryCode="NP" value="+977">+977</option>
<option data-countryCode="NL" value="+31">+31</option>
<option data-countryCode="NC" value="+687">+687</option>
<option data-countryCode="NZ" value="+64">+64</option>
<option data-countryCode="NI" value="+505">+505</option>
<option data-countryCode="NE" value="+227">+227</option>
<option data-countryCode="NG" value="+234">+234</option>
<option data-countryCode="NU" value="+683">+683</option>
<option data-countryCode="NF" value="+672">+672</option>
<option data-countryCode="NP" value="+670">+670</option>
<option data-countryCode="NO" value="+47">+47</option>
<option data-countryCode="OM" value="+968">+968</option>
<option data-countryCode="PW" value="+680">+680</option>
<option data-countryCode="PA" value="+507">+507</option>
<option data-countryCode="PG" value="+675">+675</option>
<option data-countryCode="PY" value="+595">+595</option>
<option data-countryCode="PE" value="+51">+51</option>
<option data-countryCode="PH" value="+63">+63</option>
<option data-countryCode="PL" value="+48">+48</option>
<option data-countryCode="PT" value="+351">+351</option>
<option data-countryCode="PR" value="+1787">+1787</option>
<option data-countryCode="QA" value="+974">+974</option>
<option data-countryCode="RE" value="+262">+262</option>
<option data-countryCode="RO" value="+40">+40</option>
<option data-countryCode="RU" value="+7">+7</option>
<option data-countryCode="RW" value="+250">+250</option>
<option data-countryCode="SM" value="+378">+378</option>
<option data-countryCode="ST" value="+239">+239</option>
<option data-countryCode="SA" value="+966">+966</option>
<option data-countryCode="SN" value="+221">+221</option>
<option data-countryCode="CS" value="+381">+381</option>
<option data-countryCode="SC" value="+248">+248</option>
<option data-countryCode="SL" value="+232">+232</option>
<option data-countryCode="SG" value="+65">+65</option>
<option data-countryCode="SK" value="+421">+421</option>
<option data-countryCode="SI" value="+386">+386</option>
<option data-countryCode="SB" value="+677">+677</option>
<option data-countryCode="SO" value="+252">+252</option>
<option data-countryCode="ZA" value="+27">+27</option>
<option data-countryCode="ES" value="+34">+34</option>
<option data-countryCode="LK" value="+94">+94</option>
<option data-countryCode="SH" value="+290">+290</option>
<option data-countryCode="KN" value="+1869">+1869</option>
<option data-countryCode="SC" value="+1758">+1758</option>
<option data-countryCode="SD" value="+249">+249</option>
<option data-countryCode="SR" value="+597">+597</option>
<option data-countryCode="SZ" value="+268">+268</option>
<option data-countryCode="SE" value="+46">+46</option>
<option data-countryCode="CH" value="+41">+41</option>
<option data-countryCode="SI" value="+963">+963</option>
<option data-countryCode="TW" value="+886">+886</option>
<option data-countryCode="TJ" value="+7">+7</option>
<option data-countryCode="TH" value="+66">+66</option>
<option data-countryCode="TG" value="+228">+228</option>
<option data-countryCode="TO" value="+676">+676</option>
<option data-countryCode="TT" value="+1868">+1868</option>
<option data-countryCode="TN" value="+216">+216</option>
<option data-countryCode="TR" value="+90">+90</option>
<option data-countryCode="TM" value="+7">+7</option>
<option data-countryCode="TM" value="+993">+993</option>
<option data-countryCode="TC" value="+1649">+1649</option>
<option data-countryCode="TV" value="+688">+688</option>
<option data-countryCode="GB" value="+44">+44</option>
<option data-countryCode="UA" value="+380">+380</option>
<option data-countryCode="AE" value="+971">+971</option>
<option data-countryCode="UY" value="+598">+598</option>
<option data-countryCode="US" value="+1">+1</option>
<option data-countryCode="UZ" value="+7">+7</option>
<option data-countryCode="VU" value="+678">+678</option>
<option data-countryCode="VA" value="+379">+379</option>
<option data-countryCode="VE" value="+58">+58</option>
<option data-countryCode="VN" value="+84">+84</option>
<option data-countryCode="VG" value="+1284">+1284</option>
<option data-countryCode="VI" value="+1340">+1340</option>
<option data-countryCode="WF" value="+681">+681</option>
<option data-countryCode="YE" value="+969">+969</option>
<option data-countryCode="YE" value="+967">+967</option>
<option data-countryCode="ZM" value="+260">+260</option>
<option data-countryCode="ZW" value="+263">+263</option>
                          </select>
                      </div>
                      <div class="phone-number">
                         <input type="tel" placeholder="7000000000" name="phone" required  style="background-color: transparent;margin-top: 0px;">
                      </div>
                   </div>
                </div>
                  <div class="field email">
                      <label for="Email_">Email</label>
                      <input type="email" name="email" id="Email_" required>
                  </div>
              </div>
              <div class="column two">
                <h4>Address Info:</h4>
                  <div class="field phone">
                      <label for="Phone_">Country</label>
                      <select name="country" id="select" required>
                        <option value='Uganda'>Uganda</option>
                      </select>
                  </div>
                  <div class="field Brief">
                      <label for="Brief_">Region</label>
                      <select id="stateSelect" name="region" size="1" onchange="makeSubmenu(this.value)" required>
                        <option value="central">Central</option>
                        <option value="eastern">Eastern</option>
                        <option value="northern">Northern</option>
                        <option value="western">Western</option>
                    </select>
                  </div>
                  <div class="field Brief">
                      <label for="Brief_">District</label>
                      <select id="citySelect"name="district" size="1" required>
                        <option></option>
                        </select>
                  </div>
                  <div class="field Brief">
                      <label for="Brief_">Village or TC</label>
                      <input type="text" name="plotNo" id="Email_">
                  </div>
                  <h4>Description:</h4>
                  <div class="col-textarea" style="margin-top:10px">
             <label >More Description</label>
              <textarea name="remark" style="height:260px" ></textarea>
             </div>
              </div>
             
              <div class="form-btn-column">
                <input type="reset" value="Reset" class="reset">
                <input type="submit" value="Submit" class="register">
              </div>
              
             
              
          </form>
      </div>

      </div>


    </div>

  </section>
  
</div>
</div>
 <!--FABS-->
 <div class="fabs">
  <a href="index.php<?php echo"?id=".$id."";?>">
<div class="plus">
  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M22 22L2 22" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M2 11L6.06296 7.74968M22 11L13.8741 4.49931C12.7784 3.62279 11.2216 3.62279 10.1259 4.49931L9.34398 5.12486" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M15.5 5.5V3.5C15.5 3.22386 15.7239 3 16 3H18.5C18.7761 3 19 3.22386 19 3.5V8.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M4 22V9.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M20 9.5V13.5M20 22V17.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M15 22V17C15 15.5858 15 14.8787 14.5607 14.4393C14.1213 14 13.4142 14 12 14C10.5858 14 9.87868 14 9.43934 14.4393M9 22V17" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14 9.5C14 10.6046 13.1046 11.5 12 11.5C10.8954 11.5 10 10.6046 10 9.5C10 8.39543 10.8954 7.5 12 7.5C13.1046 7.5 14 8.39543 14 9.5Z" stroke="#fff" stroke-width="1.5"></path> </g></svg>
</div>
</a>
</div>
<!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.7.0.js'></script>
<!-- Data Table JS -->
<script src='https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js'></script>
<script src='https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js'></script>
<script src="../js/popUp-profile.js"></script>
<script src="../js/cities.js"></script>
<script src="../js/popUp-notification.js"></script>
<script src="../js/popUp-profilePhone.js"></script>
<script src="../js/autoSlides.js"></script>
<script src="../js/sidebar.js"></script>
<script src="../js/sortingTable.js"></script>
<script src="../js/shareApp.js"></script>
<?php
  // Close the database connection
mysqli_close($conn);
  ?>
</body>
</html>