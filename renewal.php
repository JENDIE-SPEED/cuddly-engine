<?php

session_start();
require 'auth.php';
include 'db.php';
$role=$_SESSION['role'];
if ($role==='dealers') {
  # code...
include 'dealerheader.php';
}
elseif ($role==='user'){
  # code...
  include 'userheader.php';
}
else {
  include 'header.php';
};


?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<div class='container mt-5 bg-white text-dark'>


			
       
			<form>
			
			<input type="text" name="mpesa" id="mpesa" class="mt-2 " placeholder="Enter Mpesa Code" required>
			<br>
			<div class="clearfix">
			<a id="search1" class="float-right btn btn-primary" onclick="showVehicle()"><i class="fa fa-search"></i></a>
			<input type="text" name="search" id="search" class="form-control form-control col-sm-4 float-right" placeholder="Search Vehicle" value="" data-toggle="tooltip" title="Hit Enter Keyboard Key to Search" required>
			
			</div>
			
			</form>
			
			<table id="lipampesa" class="table table-striped table-bordered table-sm" style="width:100%">
            <thead>
            <tr>
                <th>ID</th>
                <th>Serial Number</th>
                <th>Registration Number</th>
				<th>Certificate Number</th>
                <th>Dealer</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
		                                    
									<tr id="datarow">
										<td>8</td>
										<td>16100000120</td>
										<td>J127024</td>
										<td>JDN-A-0008</td>
										<td>JENDIE</td>
										<td>2019-09-16</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>9</td>
										<td>16100000103</td>
										<td>E743635</td>
										<td>JDN-A-0009</td>
										<td>JENDIE</td>
										<td>2019-09-16</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>10</td>
										<td>16100000059</td>
										<td>F4743644</td>
										<td>JDN-A-0010</td>
										<td>JENDIE</td>
										<td>2019-09-16</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>36</td>
										<td>16100000129</td>
										<td>KBH 872S</td>
										<td>JDN-A-0036</td>
										<td>SONKUS PRIME SOLUTIONS CO.LTD</td>
										<td>2019-09-19</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>39</td>
										<td>16100000189</td>
										<td>KCW 790C</td>
										<td>JDN-A-0039</td>
										<td>ROPETO BUSINESS SOLUTIONS</td>
										<td>2019-09-19</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>47</td>
										<td>16100000026</td>
										<td>KBL 419R</td>
										<td>JDN-A-0047</td>
										<td>JENDIE</td>
										<td>2019-09-25</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>48</td>
										<td>16100000028</td>
										<td>KAU 550M</td>
										<td>JDN-A-0048</td>
										<td>JENDIE</td>
										<td>2019-09-25</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>53</td>
										<td>16100000077</td>
										<td>KAG954F</td>
										<td>JDN-A-0053</td>
										<td>JENDIE</td>
										<td>2019-09-26</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>54</td>
										<td>16100000006</td>
										<td>KCA 681Z</td>
										<td>JDN-A-0054</td>
										<td>JENDIE</td>
										<td>2019-09-26</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>63</td>
										<td>16100000126</td>
										<td>KCV 992S</td>
										<td>JDN-A-0063</td>
										<td>DIGITAL ELECTRICALS</td>
										<td>2019-09-28</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>65</td>
										<td>16100000014</td>
										<td>KBK 726R</td>
										<td>JDN-A-0065</td>
										<td>ROPETO BUSINESS SOLUTIONS</td>
										<td>2019-09-30</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>66</td>
										<td>16100000031</td>
										<td>KAU 061Z</td>
										<td>JDN-A-0066</td>
										<td>ROPETO BUSINESS SOLUTIONS</td>
										<td>2019-09-30</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>67</td>
										<td>16100000032</td>
										<td>KBJ 624k</td>
										<td>JDN-A-0067</td>
										<td>ROPETO BUSINESS SOLUTIONS</td>
										<td>2019-09-30</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>68</td>
										<td>16100000078</td>
										<td>KBL 307V</td>
										<td>JDN-A-0068</td>
										<td>ROPETO BUSINESS SOLUTIONS</td>
										<td>2019-09-30</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>69</td>
										<td>16100000080</td>
										<td>KBA 960Z</td>
										<td>JDN-A-0069</td>
										<td>ROPETO BUSINESS SOLUTIONS</td>
										<td>2019-09-30</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>70</td>
										<td>16100000122</td>
										<td>KBJ 379A</td>
										<td>JDN-A-0070</td>
										<td>ROPETO BUSINESS SOLUTIONS</td>
										<td>2019-09-30</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>72</td>
										<td>16100000004</td>
										<td>KAP 630E</td>
										<td>JDN-A-0072</td>
										<td>JENDIE</td>
										<td>2019-10-01</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>77</td>
										<td>16100000185</td>
										<td>KAS 975K</td>
										<td>JDN-A-0077</td>
										<td>MT. KENYA SPEED GOVERNOR CENTRE</td>
										<td>2020-10-02</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>87</td>
										<td>16100000067</td>
										<td>to be deleted</td>
										<td>JDN-A-0087</td>
										<td>JENDIE</td>
										<td>2019-10-02</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>92</td>
										<td>16100000055</td>
										<td>KCH 580B</td>
										<td>JDN-A-0092</td>
										<td>JENDIE</td>
										<td>2019-10-02</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>94</td>
										<td>16100000036</td>
										<td>KAU 149D</td>
										<td>JDN-A-0094</td>
										<td>JENDIE</td>
										<td>2019-10-02</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>100</td>
										<td>16100000118</td>
										<td>KBN 741H</td>
										<td>JDN-A-0100</td>
										<td>MT. KENYA SPEED GOVERNOR CENTRE</td>
										<td>2019-10-02</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>101</td>
										<td>16100000176</td>
										<td>KCV 040T</td>
										<td>JDN-A-0101</td>
										<td>BONIFACE&QUEENS</td>
										<td>2019-10-02</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>102</td>
										<td>16100000012</td>
										<td>KBK 884V</td>
										<td>JDN-A-0102</td>
										<td>JENDIE</td>
										<td>2019-10-02</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>103</td>
										<td>16100000046</td>
										<td>KBN984Q</td>
										<td>JDN-A-0103</td>
										<td>JENDIE</td>
										<td>2019-10-02</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>104</td>
										<td>16100000013</td>
										<td>KAP441C</td>
										<td>JDN-A-0104</td>
										<td>JENDIE</td>
										<td>2019-10-02</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>127</td>
										<td>16100000081</td>
										<td>KBZ 223Z</td>
										<td>JDN-A-0127</td>
										<td>JENDIE</td>
										<td>2019-10-02</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>128</td>
										<td>16100000040</td>
										<td>KCC 896S</td>
										<td>JDN-A-0128</td>
										<td>BONIFACE&QUEENS</td>
										<td>2019-10-02</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>132</td>
										<td>16100000074</td>
										<td>KAJ 673X</td>
										<td>JDN-A-0132</td>
										<td>Smartlifetrack</td>
										<td>2019-10-03</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>134</td>
										<td>16100000171</td>
										<td>KCB 511N</td>
										<td>JDN-A-0134</td>
										<td>ROPETO BUSINESS SOLUTIONS</td>
										<td>2019-10-03</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>135</td>
										<td>16100000117</td>
										<td>KCK 263X</td>
										<td>JDN-A-0135</td>
										<td>MT. KENYA SPEED GOVERNOR CENTRE</td>
										<td>2019-10-03</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>136</td>
										<td>16100000017</td>
										<td>KBN 851K</td>
										<td>JDN-A-0136</td>
										<td>MT. KENYA SPEED GOVERNOR CENTRE</td>
										<td>2019-10-03</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>143</td>
										<td>16100000002</td>
										<td>KBY 989D</td>
										<td>JDN-A-0143</td>
										<td>MT. KENYA SPEED GOVERNOR CENTRE</td>
										<td>2019-10-03</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>144</td>
										<td>13820320894</td>
										<td>KCH 319T</td>
										<td>JDN-A-0144</td>
										<td>BONIFACE&QUEENS</td>
										<td>2019-10-03</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>147</td>
										<td>13820320888</td>
										<td>KBZ525T</td>
										<td>JDN-A-0147</td>
										<td>BONIFACE&QUEENS</td>
										<td>2019-10-03</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>155</td>
										<td>16100000005</td>
										<td>KBP 334V</td>
										<td>JDN-A-0155</td>
										<td>FIATMART</td>
										<td>2019-10-03</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>156</td>
										<td>161000000096</td>
										<td>KCS 978L</td>
										<td>JDN-A-0156</td>
										<td>JENDIE</td>
										<td>2019-10-03</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>162</td>
										<td>16100000056</td>
										<td>KCG638W</td>
										<td>JDN-A-0162</td>
										<td>JENDIE AUTO BUNGOMA</td>
										<td>2019-10-04</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>165</td>
										<td>16100000168</td>
										<td>KBD 851W</td>
										<td>JDN-A-0165</td>
										<td>MT. KENYA SPEED GOVERNOR CENTRE</td>
										<td>2019-10-04</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>166</td>
										<td>16100000105</td>
										<td>KAZ 135B</td>
										<td>JDN-A-0166</td>
										<td>ROPETO BUSINESS SOLUTIONS</td>
										<td>2019-10-04</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>181</td>
										<td>26100000069</td>
										<td>KCJ 423F</td>
										<td>JDN-A-0181</td>
										<td>FIATMART</td>
										<td>2019-10-04</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>187</td>
										<td>16100000038</td>
										<td>KBA297T</td>
										<td>JDN-A-0187</td>
										<td>TETMA AUTO ELECTRICALS</td>
										<td>2019-10-04</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>188</td>
										<td>16100000087</td>
										<td>KCG675T</td>
										<td>JDN-A-0188</td>
										<td>Smartlifetrack</td>
										<td>2019-10-04</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>191</td>
										<td>13820320889</td>
										<td>KCG 474P</td>
										<td>JDN-A-0191</td>
										<td>MT. KENYA SPEED GOVERNOR CENTRE</td>
										<td>2019-10-05</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>193</td>
										<td>16100000581</td>
										<td>KAV 351T</td>
										<td>JDN-A-0193</td>
										<td>JENDIE</td>
										<td>2019-10-05</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>194</td>
										<td>16100000685</td>
										<td>KAZ388C</td>
										<td>JDN-A-0194</td>
										<td>JENDIE</td>
										<td>2019-10-05</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>197</td>
										<td>16100000169</td>
										<td>KYX 351</td>
										<td>JDN-A-0197</td>
										<td>MT. KENYA SPEED GOVERNOR CENTRE</td>
										<td>2019-10-05</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>198</td>
										<td>16100000073</td>
										<td>KAY091B</td>
										<td>JDN-A-0198</td>
										<td>JENDIE AUTO BUNGOMA</td>
										<td>2019-10-05</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>203</td>
										<td>16100000166</td>
										<td>KAM 307G</td>
										<td>JDN-A-0203</td>
										<td>WILLOG TECHNICAL AGENCIES</td>
										<td>2019-10-07</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>205</td>
										<td>16100000162</td>
										<td>KCT 940J</td>
										<td>JDN-A-0205</td>
										<td>JENDIE</td>
										<td>2019-10-07</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>219</td>
										<td>16100000231</td>
										<td>S402M-0030690</td>
										<td>JDN-A-0219</td>
										<td>SONKUS PRIME SOLUTIONS CO.LTD</td>
										<td>2019-10-07</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>226</td>
										<td>16100000225</td>
										<td>KAX 755J</td>
										<td>JDN-A-0226</td>
										<td>DIGITAL ELECTRICALS</td>
										<td>2019-10-07</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>227</td>
										<td>16100000689</td>
										<td>KCE 992Q</td>
										<td>JDN-A-0227</td>
										<td>MT. KENYA SPEED GOVERNOR CENTRE</td>
										<td>2020-12-07</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>229</td>
										<td>16100000267</td>
										<td>KCC 048A</td>
										<td>JDN-A-0229</td>
										<td>SONKUS PRIME SOLUTIONS CO.LTD</td>
										<td>2019-10-07</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>232</td>
										<td>16100000045</td>
										<td>KCJ245A</td>
										<td>JDN-A-0232</td>
										<td>JENDIE</td>
										<td>2019-10-07</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>239</td>
										<td>16100000205</td>
										<td>KBH 345N</td>
										<td>JDN-A-0239</td>
										<td>MT. KENYA SPEED GOVERNOR CENTRE</td>
										<td>2019-10-08</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>240</td>
										<td>16100000072</td>
										<td>KCV 287W</td>
										<td>JDN-A-0240</td>
										<td>FIATMART</td>
										<td>2019-10-08</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>248</td>
										<td>16100000015</td>
										<td>KBY417D</td>
										<td>JDN-A-0248</td>
										<td>TIFFANYS AGENCIES</td>
										<td>2019-10-08</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>255</td>
										<td>16100000619</td>
										<td>KCN 169G</td>
										<td>JDN-A-0255</td>
										<td>ROPETO BUSINESS SOLUTIONS</td>
										<td>2019-10-08</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>256</td>
										<td>16100000589</td>
										<td>KCS 027H</td>
										<td>JDN-A-0256</td>
										<td>ROPETO BUSINESS SOLUTIONS</td>
										<td>2019-10-08</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>257</td>
										<td>16100000621</td>
										<td>KCS 030H</td>
										<td>JDN-A-0257</td>
										<td>ROPETO BUSINESS SOLUTIONS</td>
										<td>2019-10-08</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>259</td>
										<td>16100000203</td>
										<td>KBN 488A</td>
										<td>JDN-A-0259</td>
										<td>BONIFACE&QUEENS</td>
										<td>2019-10-08</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>268</td>
										<td>16100000236</td>
										<td>KCR 793X</td>
										<td>JDN-A-0268</td>
										<td>FIATMART</td>
										<td>2019-10-08</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>270</td>
										<td>16100000062</td>
										<td>KAP 241Z</td>
										<td>JDN-A-0270</td>
										<td>SIMBA COLT MOTORS</td>
										<td>2019-10-08</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>271</td>
										<td>16100000234</td>
										<td>KCP 066F</td>
										<td>JDN-A-0271</td>
										<td>JENDIE</td>
										<td>2019-10-08</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>272</td>
										<td>16100000692</td>
										<td>KAQ586R</td>
										<td>JDN-A-0272</td>
										<td>BONIFACE&QUEENS</td>
										<td>2019-10-09</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>278</td>
										<td>16100000698</td>
										<td>H142819</td>
										<td>JDN-A-0278</td>
										<td>JENDIE</td>
										<td>2019-10-09</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>289</td>
										<td>16100000679</td>
										<td>KAS908W</td>
										<td>JDN-A-0289</td>
										<td>TIFFANYS AGENCIES</td>
										<td>2019-10-10</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>321</td>
										<td>16100000662</td>
										<td>KBH 282R</td>
										<td>JDN-A-0321</td>
										<td>JENDIE</td>
										<td>2019-10-11</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>324</td>
										<td>16100000237</td>
										<td>KAW 955T</td>
										<td>JDN-A-0324</td>
										<td>JENDIE</td>
										<td>2019-10-11</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>326</td>
										<td>16100000595</td>
										<td>KAT 455Q</td>
										<td>JDN-A-0326</td>
										<td>JENDIE</td>
										<td>2019-10-11</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>338</td>
										<td>16100000880</td>
										<td>KBL275A</td>
										<td>JDN-A-0338</td>
										<td>JENDIE</td>
										<td>2019-10-11</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>340</td>
										<td>16100000547</td>
										<td>KCB 562S</td>
										<td>JDN-A-0340</td>
										<td>JENDIE</td>
										<td>2019-10-11</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>362</td>
										<td>16100000262</td>
										<td>LZZ5CLSB1JN442609</td>
										<td>JDN-A-0362</td>
										<td>JENDIE</td>
										<td>2019-10-11</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>363</td>
										<td>16100000866</td>
										<td>KBS 831 E</td>
										<td>JDN-A-0363</td>
										<td>JENDIE</td>
										<td>2019-10-11</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>368</td>
										<td>15100000070</td>
										<td>KCA 733E</td>
										<td>JDN-A-0368</td>
										<td>JENDIE</td>
										<td>2020-10-12</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>369</td>
										<td>16100000347</td>
										<td>KBX 748D</td>
										<td>JDN-A-0369</td>
										<td>ROPETO BUSINESS SOLUTIONS</td>
										<td>2019-10-12</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>370</td>
										<td>16100000216</td>
										<td>KCE 110G</td>
										<td>JDN-A-0370</td>
										<td>ROPETO BUSINESS SOLUTIONS</td>
										<td>2019-10-12</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>372</td>
										<td>16100000577</td>
										<td>KAZ  778E</td>
										<td>JDN-A-0372</td>
										<td>PATROSE CONSTRUCTION EQUIPMENTS</td>
										<td>2019-10-12</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>374</td>
										<td>16100000326</td>
										<td>KBZ 504V</td>
										<td>JDN-A-0374</td>
										<td>JENDIE</td>
										<td>2019-10-13</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>378</td>
										<td>16100000217</td>
										<td>KZU 600</td>
										<td>JDN-A-21280</td>
										<td>JENDIE</td>
										<td>2020-08-31</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>381</td>
										<td>16100000741</td>
										<td>KAS 906T</td>
										<td>JDN-A-0381</td>
										<td>HENJIK</td>
										<td>2019-10-14</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>385</td>
										<td>16100000369</td>
										<td>KBV 341G</td>
										<td>JDN-A-0385</td>
										<td>FIATMART</td>
										<td>2019-10-14</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>386</td>
										<td>16100000436</td>
										<td>KAQ 509X</td>
										<td>JDN-A-0386</td>
										<td>Smartlifetrack</td>
										<td>2019-10-14</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>393</td>
										<td>16100000286</td>
										<td>KCL489N</td>
										<td>JDN-A-0393</td>
										<td>JENDIE AUTO BUNGOMA</td>
										<td>2019-10-14</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>404</td>
										<td>16100000779</td>
										<td>KBA 090W</td>
										<td>JDN-A-0404</td>
										<td>JENDIE</td>
										<td>2019-10-14</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>405</td>
										<td>16100000372</td>
										<td>KBX 518B</td>
										<td>JDN-A-0405</td>
										<td>JENDIE</td>
										<td>2019-10-14</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>407</td>
										<td>16100000264</td>
										<td>KBB 228H</td>
										<td>JDN-A-0407</td>
										<td>JENDIE</td>
										<td>2019-10-14</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>410</td>
										<td>16100000847</td>
										<td>KCA 702U</td>
										<td>JDN-A-0410</td>
										<td>SHIV DIESEL SERVICE</td>
										<td>2019-10-14</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>412</td>
										<td>16100000252</td>
										<td>KCA 732E</td>
										<td>JDN-A-0412</td>
										<td>HENJIK</td>
										<td>2019-10-15</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>414</td>
										<td>16100000862</td>
										<td>KBB 078T</td>
										<td>JDN-A-0414</td>
										<td>MT. KENYA SPEED GOVERNOR CENTRE</td>
										<td>2019-10-15</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>416</td>
										<td>16100000048</td>
										<td>KCE 820M</td>
										<td>JDN-A-0416</td>
										<td>ROPETO BUSINESS SOLUTIONS</td>
										<td>2019-10-15</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>419</td>
										<td>16100000358</td>
										<td>KCA 515D</td>
										<td>JDN-A-0419</td>
										<td>JENDIE</td>
										<td>2019-10-15</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>420</td>
										<td>15100000086</td>
										<td>KCK 612J</td>
										<td>JDN-A-0420</td>
										<td>ROPETO BUSINESS SOLUTIONS</td>
										<td>2019-10-15</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>421</td>
										<td>16100000607</td>
										<td>KCS 123A</td>
										<td>JDN-A-0421</td>
										<td>ROPETO BUSINESS SOLUTIONS</td>
										<td>2019-10-15</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>431</td>
										<td>16100000643</td>
										<td>KBN  359A</td>
										<td>JDN-A-0431</td>
										<td>MT. KENYA SPEED GOVERNOR CENTRE</td>
										<td>2019-10-15</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>436</td>
										<td>16100000791</td>
										<td>KBK455D</td>
										<td>JDN-A-0436</td>
										<td>SIMBA COLT MOTORS</td>
										<td>2019-10-15</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>438</td>
										<td>16100000620</td>
										<td>KCN829L</td>
										<td>JDN-A-0438</td>
										<td>SIMBA COLT MOTORS</td>
										<td>2019-10-15</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>444</td>
										<td>16100000823</td>
										<td>KCJ 389A</td>
										<td>JDN-A-0444</td>
										<td>HENJIK</td>
										<td>2019-10-15</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>453</td>
										<td>16100000771</td>
										<td>KBK 551J</td>
										<td>JDN-A-0453</td>
										<td>HENJIK</td>
										<td>2019-10-16</td>
										<td class="btn btn-primary">Click to Renew</td>
									</tr>
									            
			</tbody>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>Serial Number</th>
                <th>RegistrationNumber</th>
				<th>Certificate Number</th>
                <th>Dealer</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
                
   <br />
  </div>
  <script>
  $(window).on('load', function () {
    $('#loading').hide();
  });
</script>
 </body>
</html>



<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script>
function showVehicle(str) {
  if (str=="") {
    //document.getElementById("txtHint").innerHTML="";
    return;
  }
  //alert("Hello");
  var input = document.getElementById("search");

	// Execute a function when the user releases a key on the keyboard
	input.addEventListener("keyup", function(event) {
	  // Number 13 is the "Enter" key on the keyboard
	  if (event.keyCode === 13) {
		window.location.href = 'batch.php?q='+str;	
  }
});
  
}

function showVehicle() {
  var str = document.getElementById("search").value;
  if (str=="") {
    return;
  }
  window.location.href = 'batch.php?q='+str;
}

$(document).ready(function(){
 $('#framework').multiselect({
  nonSelectedText: 'Select Reg',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
 
 
  });
$(document).ready(function(){
 $('#framework1').multiselect({
  nonSelectedText: 'Select Client',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
 
 
  });
  
  $(document).ready(function() {
    $('#lipampesa').DataTable();
} );

function addRowHandlers() {
  var table = document.getElementById("lipampesa");
  var rows = table.getElementsByTagName("tr");
  for (i = 0; i < rows.length; i++) {
    var currentRow = table.rows[i];
	
	//console.log(currentRow);
    var createClickHandler = function(row) {
      return function() {
        var cell = row.getElementsByTagName("td")[1];
        var serial = cell.innerHTML;
		var cell = row.getElementsByTagName("td")[2];
        var reg = cell.innerHTML;
		var cell = row.getElementsByTagName("td")[3];
        var cert = cell.innerHTML;
		
		var mpesacode = document.getElementById("mpesa").value;
		if(mpesacode == ""){
			alert("Enter Mpesa Code");
			return false;
		}
		//window.location.href = "batch-install.php?framework="+serial+"&mpesa="+mpesacode;
		if (confirm("Confirm you want to renew "+reg)) {
		$(window).on('load', function () {
			$('#loading').show();
		  });
		$.ajax({
            type: "POST",
            url: "batch-install.php",
            //dataType: "json",
            data: {framework:serial, mpesa:mpesacode},
            success : function(data){
				alert(data);
				if(data == "success"){
					//var index = table.row( this ).index();
					//alert(index);
					//document.getElementById("datarow").deleteRow(index);
					window.open("reprint.php?id="+cert);
					
				}
				//alert(data);
            }
        });
		}else{
			return false;
		}
      };
    };
    currentRow.onclick = createClickHandler(currentRow);
  }
}
window.onload = addRowHandlers();

</script>


</div>