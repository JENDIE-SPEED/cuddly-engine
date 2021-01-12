<?php
include'header.php';
?>

<div class='container mr-5 mt-5 bg-white text-dark'>

<form id="lpo" action="" method="post" enctype="multipart/form-data">
			<label>Transaction Information</label>
			<hr>
			<div class="form-row">
				<div class="form-group col-md-3">
				  <label for="inputState">Transaction Type</label>
				  <select id="inputState" name="transtype" class="form-control" required>
					<option value="paybill">Pay Bill</option>
					<option value="cheque">Bank Cheque</option>
					<option value="lpo">LPO</option>
					<option value="lpo">Virtual LPO/Cheque</option>
				  </select>
				</div>
				<div class="form-group col-md-3">
				  <label for="inputCity">Transaction ID / Cheque Number / LPO Number</label>
				  <input type="text" name="transid" class="form-control" id="inputCity" required>
				</div>
				<div class="form-group col-md-3">
				  <label for="inputCity">Transaction Time</label>
				  <input type="datetime-local" name="transtime" class="form-control" id="inputCity" required>
				</div>
				<div class="form-group col-md-3">
				  <label for="inputCity">Transaction Amount</label>
				  <input type="text" name="transamount" class="form-control" id="inputCity" required>
				</div>
			  </div>
			  <br>
			  <label>Customer Information</label>
			<hr>
			  <div class="form-row">
				<div class="form-group col-md-3">
				  <label for="inputCity">First Name</label>
				  <input type="text" name="fname" class="form-control" id="inputCity" required>
				</div>
				<div class="form-group col-md-3">
				  <label for="inputCity">Middle Name</label>
				  <input type="text" name="mname" class="form-control" id="inputCity" required>
				</div>
				<div class="form-group col-md-3">
				  <label for="inputCity">Last Name</label>
				  <input type="text" name="lname" class="form-control" id="inputCity" required>
				</div>
				<div class="form-group col-md-3">
				  <label for="inputCity">Upload File</label>
				  <input type="file" name="image" class="form-control" data-toggle="tooltip" title="Scan of LPO, Cheque or a screenshot of Mpesa message" id="inputCity" required>
				</div>
			  </div>
			  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</form>
			
			<div class="clearfix">
			<a id="search1" class="float-right btn btn-primary" onclick="showVehicle()"><i class="fa fa-search"></i></a>
			<input type="text" name="search" id="search" class="form-control form-control col-sm-4 float-right" placeholder="Search Vehicle" value="" data-toggle="tooltip" title="Hit Enter Keyboard Key to Search" required>
			
			</div>
			<br>
			<table id="lipampesa" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>ID</th>
                <th>Trans Type</th>
                <th>Trans ID</th>
				<th>Trans Time</th>
                <th>Trans Amount</th>
				<th>Customer</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
		                                    
									<tr id="datarow">
										<td>7</td>
										<td>Pay Bill</td>
										<td>NB75P9LJIX</td>
										<td>20190207203459</td>
										<td>6000.00</td>
										<td>STEPHEN </td>
										<td>2020-07-01 08:35:46</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>11</td>
										<td>lpo</td>
										<td>Whitesky</td>
										<td>2020-09-15T15:10</td>
										<td>84000</td>
										<td>Whitesky investments Whitesky investments</td>
										<td>2020-09-15 12:13:18</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>12</td>
										<td>paid</td>
										<td></td>
										<td></td>
										<td></td>
										<td> </td>
										<td>2020-09-16 07:59:38</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>13</td>
										<td>Customer Merchant Payment</td>
										<td>OIF9KH9YTF</td>
										<td>20200915180134</td>
										<td>10.00</td>
										<td>JAMES KINUTHIA</td>
										<td>2020-09-16 15:53:49</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>14</td>
										<td>Customer Merchant Payment</td>
										<td>OIG7KXAJ5F</td>
										<td>20200916082458</td>
										<td>11.00</td>
										<td>JAMES KINUTHIA</td>
										<td>2020-09-16 15:53:49</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>15</td>
										<td>Customer Merchant Payment</td>
										<td>OIG1KXGMAZ</td>
										<td>20200916083022</td>
										<td>1.00</td>
										<td>JAMES KINUTHIA</td>
										<td>2020-09-16 15:53:49</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>16</td>
										<td>Customer Merchant Payment</td>
										<td>OIG4KXPK2E</td>
										<td>20200916083807</td>
										<td>6000.00</td>
										<td>DAMARIS GITHUA</td>
										<td>2020-09-16 15:53:49</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>17</td>
										<td>Customer Merchant Payment</td>
										<td>OIG3L2RTSV</td>
										<td>20200916105937</td>
										<td>1.00</td>
										<td>JAMES KINUTHIA</td>
										<td>2020-09-16 15:53:49</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>18</td>
										<td>Customer Merchant Payment</td>
										<td>OIG2L2TJUG</td>
										<td>20200916110046</td>
										<td>3.00</td>
										<td>JAMES KINUTHIA</td>
										<td>2020-09-16 15:53:49</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>19</td>
										<td>Customer Merchant Payment</td>
										<td>OIG6L31PT2</td>
										<td>20200916110641</td>
										<td>10.00</td>
										<td>JAMES KINUTHIA</td>
										<td>2020-09-16 15:53:49</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>20</td>
										<td>Customer Merchant Payment</td>
										<td>OIG9LH68HF</td>
										<td>20200916170734</td>
										<td>5509.00</td>
										<td>SARAH NYAMACHE</td>
										<td>2020-09-16 15:53:49</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>21</td>
										<td>Customer Merchant Payment</td>
										<td>OIG5LMZMFF</td>
										<td>20200916185804</td>
										<td>7.00</td>
										<td>JAMES KINUTHIA</td>
										<td>2020-09-16 15:58:07</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>22</td>
										<td>Customer Merchant Payment</td>
										<td>OIH0M94L8G</td>
										<td>20200917124856</td>
										<td>13500.00</td>
										<td>PETER CHEGE</td>
										<td>2020-09-17 09:48:59</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>23</td>
										<td>Customer Merchant Payment</td>
										<td>OIH5MGYIHN</td>
										<td>20200917160956</td>
										<td>6840.00</td>
										<td>SHAH MINESH</td>
										<td>2020-09-17 13:09:59</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>24</td>
										<td>lpo</td>
										<td>ttyt</td>
										<td>2020-09-18T15:29</td>
										<td>4500</td>
										<td>whitesky limited</td>
										<td>2020-09-18 12:31:32</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>25</td>
										<td>Customer Merchant Payment</td>
										<td>OII3NKT5BP</td>
										<td>20200918163330</td>
										<td>13000.00</td>
										<td>JAMES KAMUNDIA</td>
										<td>2020-09-18 13:33:35</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>26</td>
										<td>Customer Merchant Payment</td>
										<td>OIN6SQ56D8</td>
										<td>20200923151933</td>
										<td>9000.00</td>
										<td>LOISE WAMBUI</td>
										<td>2020-09-24 13:35:01</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>27</td>
										<td>Customer Merchant Payment</td>
										<td>OIO3TVDT7J</td>
										<td>20200924163204</td>
										<td>4500.00</td>
										<td>KENNETH </td>
										<td>2020-09-24 13:35:01</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>28</td>
										<td>lpo</td>
										<td>OIF9KH9YTQ</td>
										<td>2020-09-25T10:29</td>
										<td>4500</td>
										<td>NAROK  SACCO</td>
										<td>2020-09-25 06:30:36</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>29</td>
										<td>lpo</td>
										<td>OIG7KXAJ5Z</td>
										<td>2020-09-25T16:07</td>
										<td>4500</td>
										<td>DAN LUMINOUS</td>
										<td>2020-09-25 13:07:45</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>30</td>
										<td>Customer Merchant Payment</td>
										<td>OIP7UOJCKR</td>
										<td>20200925122249</td>
										<td>1600.00</td>
										<td>KENNETH </td>
										<td>2020-09-26 09:13:02</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>31</td>
										<td>Customer Merchant Payment</td>
										<td>OIQ0VRP05W</td>
										<td>20200926115328</td>
										<td>4500.00</td>
										<td>Peter Kairong'e</td>
										<td>2020-09-26 09:13:02</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>32</td>
										<td>Customer Merchant Payment</td>
										<td>OIS2XTBK4K</td>
										<td>20200928095415</td>
										<td>4000.00</td>
										<td>FRANCIS MWANDA</td>
										<td>2020-09-28 10:12:04</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>33</td>
										<td>Customer Merchant Payment</td>
										<td>OIS5Y0UEH5</td>
										<td>20200928130714</td>
										<td>3500.00</td>
										<td>hezbon oduor</td>
										<td>2020-09-28 10:12:04</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>34</td>
										<td>Customer Merchant Payment</td>
										<td>OIS9Y1N69B</td>
										<td>20200928132730</td>
										<td>3500.00</td>
										<td>hezbon oduor</td>
										<td>2020-09-28 10:39:36</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>35</td>
										<td>Customer Merchant Payment</td>
										<td>OIT4YWRUY2</td>
										<td>20200929090946</td>
										<td>6000.00</td>
										<td>MAVJI KHETANI</td>
										<td>2020-09-29 06:18:32</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>36</td>
										<td>Customer Merchant Payment</td>
										<td>OIT9YXKPVB</td>
										<td>20200929093141</td>
										<td>5000.00</td>
										<td>JOHN MAINGI</td>
										<td>2020-09-29 06:40:31</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>37</td>
										<td>Customer Merchant Payment</td>
										<td>OIT3Z8OINP</td>
										<td>20200929141244</td>
										<td>6000.00</td>
										<td>DHIREN PATEL</td>
										<td>2020-09-29 11:12:54</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>38</td>
										<td>Customer Merchant Payment</td>
										<td>OIU812NB88</td>
										<td>20200930094133</td>
										<td>6000.00</td>
										<td>LUCAS KAMANDE</td>
										<td>2020-09-30 06:41:39</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>39</td>
										<td>Customer Merchant Payment</td>
										<td>OIU317LB9T</td>
										<td>20200930114935</td>
										<td>4500.00</td>
										<td>PETER CHEGE</td>
										<td>2020-09-30 08:49:50</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>40</td>
										<td>Customer Merchant Payment</td>
										<td>OJ1926ZN4T</td>
										<td>20201001083755</td>
										<td>4000.00</td>
										<td>PIUS </td>
										<td>2020-10-01 05:37:59</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>41</td>
										<td>lpo</td>
										<td>simb10022019</td>
										<td>2020-10-02T17:46</td>
										<td>4500</td>
										<td>simba crrp</td>
										<td>2020-10-02 14:47:09</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>42</td>
										<td>lpo</td>
										<td>simb10022020</td>
										<td>2020-10-02T17:48</td>
										<td>9000</td>
										<td>Simba Simba</td>
										<td>2020-10-02 14:49:19</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>43</td>
										<td>Customer Merchant Payment</td>
										<td>OJ314QI6PH</td>
										<td>20201003105052</td>
										<td>15000.00</td>
										<td>DAMARIS GITHUA</td>
										<td>2020-10-03 07:51:07</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>44</td>
										<td>Customer Merchant Payment</td>
										<td>OJ384VLM5U</td>
										<td>20201003124651</td>
										<td>4000.00</td>
										<td>OTIENO </td>
										<td>2020-10-03 09:47:03</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>45</td>
										<td>Customer Merchant Payment</td>
										<td>OJ374VP6FB</td>
										<td>20201003124906</td>
										<td>4000.00</td>
										<td>KENNETH </td>
										<td>2020-10-03 09:49:18</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>46</td>
										<td>Customer Merchant Payment</td>
										<td>OJ586ZB6FU</td>
										<td>20201005104719</td>
										<td>4000.00</td>
										<td>KENNETH </td>
										<td>2020-10-05 07:47:33</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>47</td>
										<td>Customer Merchant Payment</td>
										<td>OJ506ZEX7U</td>
										<td>20201005104948</td>
										<td>3500.00</td>
										<td>hezbon oduor</td>
										<td>2020-10-05 07:50:03</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>48</td>
										<td>Customer Merchant Payment</td>
										<td>OJ5471U74A</td>
										<td>20201005114844</td>
										<td>3500.00</td>
										<td>hezbon oduor</td>
										<td>2020-10-05 08:48:54</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>49</td>
										<td>lpo</td>
										<td>O1IF9KH9YTQ</td>
										<td>2020-10-05T13:30</td>
										<td>9000</td>
										<td>WILSON  muchangi</td>
										<td>2020-10-05 10:31:05</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>50</td>
										<td>lpo</td>
										<td>0O1IF9KH9YTQ</td>
										<td>2020-10-05T13:30</td>
										<td>9000</td>
										<td>WILSON  muchangi</td>
										<td>2020-10-05 10:45:41</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>51</td>
										<td>Customer Merchant Payment</td>
										<td>OJ5477HDOQ</td>
										<td>20201005140549</td>
										<td>3000.00</td>
										<td>GRACE KAMUOBE</td>
										<td>2020-10-05 11:05:52</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>52</td>
										<td>lpo</td>
										<td>simbakcn428b</td>
										<td>2020-10-05T14:39</td>
										<td>4500</td>
										<td>simba motors</td>
										<td>2020-10-05 11:40:16</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>53</td>
										<td>Customer Merchant Payment</td>
										<td>OJ507AI2KS</td>
										<td>20201005151846</td>
										<td>4000.00</td>
										<td>SAMUEL </td>
										<td>2020-10-05 12:18:59</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>54</td>
										<td>lpo</td>
										<td>simbakcn042b</td>
										<td>2020-10-05T15:25</td>
										<td>4500</td>
										<td>simba motors</td>
										<td>2020-10-05 12:26:08</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>55</td>
										<td>lpo</td>
										<td>simbkcn483b1</td>
										<td>2020-10-05T15:38</td>
										<td>4500</td>
										<td>simba motors</td>
										<td>2020-10-05 12:38:48</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>56</td>
										<td>Customer Merchant Payment</td>
										<td>OJ557CT7RD</td>
										<td>20201005161122</td>
										<td>4000.00</td>
										<td>PETER NJUGUNA</td>
										<td>2020-10-05 13:11:35</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>57</td>
										<td>cheque</td>
										<td>037744</td>
										<td>2020-10-05</td>
										<td>13440</td>
										<td>Glacier Limited</td>
										<td>2020-10-05 13:39:16</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>58</td>
										<td>lpo</td>
										<td>771</td>
										<td>05-10-2020</td>
										<td>45600</td>
										<td>EUREKA SERVICES</td>
										<td>2020-10-05 14:18:35</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>59</td>
										<td>Customer Merchant Payment</td>
										<td>OJ587LETXO</td>
										<td>20201005185100</td>
										<td>4000.00</td>
										<td>PIUS </td>
										<td>2020-10-05 15:51:06</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>60</td>
										<td>Customer Merchant Payment</td>
										<td>OJ6180TOBT</td>
										<td>20201006082302</td>
										<td>5000.00</td>
										<td>JOSEPH WAINAINA</td>
										<td>2020-10-06 05:23:16</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>61</td>
										<td>Customer Merchant Payment</td>
										<td>OJ6083Q34G</td>
										<td>20201006093900</td>
										<td>6000.00</td>
										<td>DAMARIS GITHUA</td>
										<td>2020-10-06 06:39:09</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>62</td>
										<td>lpo</td>
										<td>SUSTAINABLE</td>
										<td>2020-10-06T09:59</td>
										<td>6720</td>
										<td>sustainable limited</td>
										<td>2020-10-06 07:07:37</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>63</td>
										<td>lpo</td>
										<td>J6083Q34G</td>
										<td>2020-10-06T14:56</td>
										<td>4500</td>
										<td>MARGARET TUITOEK</td>
										<td>2020-10-06 11:57:16</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>64</td>
										<td>Customer Merchant Payment</td>
										<td>OJ688LICJU</td>
										<td>20201006164138</td>
										<td>3500.00</td>
										<td>JOHN OGORO</td>
										<td>2020-10-06 13:41:53</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>65</td>
										<td>lpo</td>
										<td>O1IF9KHkck911t</td>
										<td>2020-10-07T09:16</td>
										<td>4500</td>
										<td>DAVID  KAGUORA</td>
										<td>2020-10-07 06:16:33</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>66</td>
										<td>Customer Merchant Payment</td>
										<td>OJ7299RF98</td>
										<td>20201007092301</td>
										<td>5000.00</td>
										<td>JOSEPH KIMANI</td>
										<td>2020-10-07 06:23:14</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>67</td>
										<td>Customer Merchant Payment</td>
										<td>OJ739D0IFD</td>
										<td>20201007104352</td>
										<td>6000.00</td>
										<td>PETER MBURU MURATHE</td>
										<td>2020-10-07 07:44:08</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>68</td>
										<td>Customer Merchant Payment</td>
										<td>OJ759DK3Q9</td>
										<td>20201007105648</td>
										<td>3500.00</td>
										<td>MARTIN KAMANGA</td>
										<td>2020-10-07 07:56:54</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>69</td>
										<td>lpo</td>
										<td>SIMBAKCS523A</td>
										<td>2020-10-07T15:01</td>
										<td>4500</td>
										<td>simba motors</td>
										<td>2020-10-07 12:02:02</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>70</td>
										<td>Customer Merchant Payment</td>
										<td>OJ87AL3ULR</td>
										<td>20201008114356</td>
										<td>3500.00</td>
										<td>WYCLIFFE NJAMAH</td>
										<td>2020-10-08 08:44:05</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>71</td>
										<td>Customer Merchant Payment</td>
										<td>OJ81ANTHAR</td>
										<td>20201008125017</td>
										<td>4000.00</td>
										<td>Harshit Pindoria</td>
										<td>2020-10-08 09:50:28</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>72</td>
										<td>Customer Merchant Payment</td>
										<td>OJ88ARPRT0</td>
										<td>20201008142513</td>
										<td>4000.00</td>
										<td>CHRISTOPHER AGALO</td>
										<td>2020-10-08 11:25:25</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>73</td>
										<td>Customer Merchant Payment</td>
										<td>OJ86AS36O0</td>
										<td>20201008143413</td>
										<td>7000.00</td>
										<td>ONYANGO </td>
										<td>2020-10-08 11:34:26</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>74</td>
										<td>Customer Merchant Payment</td>
										<td>OJ87ATBCEB</td>
										<td>20201008150345</td>
										<td>4000.00</td>
										<td>KENNETH </td>
										<td>2020-10-08 12:04:00</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>75</td>
										<td>Customer Merchant Payment</td>
										<td>OJ88AWGYKQ</td>
										<td>20201008161622</td>
										<td>4000.00</td>
										<td>OTIENO </td>
										<td>2020-10-08 13:16:39</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>76</td>
										<td>Customer Merchant Payment</td>
										<td>OJ98BJYHE8</td>
										<td>20201009082447</td>
										<td>3500.00</td>
										<td>WYCLIFFE NJAMAH</td>
										<td>2020-10-09 05:25:01</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>77</td>
										<td>lpo</td>
										<td>16100000011 </td>
										<td>2020-10-09T09:36</td>
										<td>4500</td>
										<td>simba motors</td>
										<td>2020-10-09 06:37:21</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>78</td>
										<td>Customer Merchant Payment</td>
										<td>OJ93BOBOL7</td>
										<td>20201009101910</td>
										<td>49000.00</td>
										<td>MARTIN KAMANGA</td>
										<td>2020-10-09 07:19:16</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>79</td>
										<td>Customer Merchant Payment</td>
										<td>OJ92BPQF96</td>
										<td>20201009105238</td>
										<td>6840.00</td>
										<td>JANE WAIRUA</td>
										<td>2020-10-09 07:52:50</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>80</td>
										<td>Customer Merchant Payment</td>
										<td>OJ93BPR5J1</td>
										<td>20201009105302</td>
										<td>3500.00</td>
										<td>BONIFACE MAKAU</td>
										<td>2020-10-09 07:53:05</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>81</td>
										<td>Customer Merchant Payment</td>
										<td>OJ96BQLXY6</td>
										<td>20201009111317</td>
										<td>4000.00</td>
										<td>BONFAS OYUNGU</td>
										<td>2020-10-09 08:13:23</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>82</td>
										<td>Customer Merchant Payment</td>
										<td>OJ91BQRSX1</td>
										<td>20201009111714</td>
										<td>3500.00</td>
										<td>WYCLIFFE NJAMAH</td>
										<td>2020-10-09 08:17:24</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>83</td>
										<td>Customer Merchant Payment</td>
										<td>OJ99BRMMQL</td>
										<td>20201009113736</td>
										<td>4000.00</td>
										<td>OTIENO </td>
										<td>2020-10-09 08:37:41</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>84</td>
										<td>Customer Merchant Payment</td>
										<td>OJ92BW8DXA</td>
										<td>20201009132847</td>
										<td>3500.00</td>
										<td>WYCLIFFE NJAMAH</td>
										<td>2020-10-09 10:28:57</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>85</td>
										<td>cheque</td>
										<td>008203</td>
										<td>09-10-2020</td>
										<td>13440</td>
										<td>Hope Limited</td>
										<td>2020-10-09 10:39:31</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>86</td>
										<td>Customer Merchant Payment</td>
										<td>OJ97C7EDUV</td>
										<td>20201009173619</td>
										<td>3000.00</td>
										<td>GRACE KAMUOBE</td>
										<td>2020-10-09 14:36:32</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>87</td>
										<td>Customer Merchant Payment</td>
										<td>OJB6DWH2EI</td>
										<td>20201011091603</td>
										<td>3000.00</td>
										<td>ABEL BARAZA</td>
										<td>2020-10-11 06:16:16</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>88</td>
										<td>Customer Merchant Payment</td>
										<td>OJC7F2LS3N</td>
										<td>20201012110149</td>
										<td>3500.00</td>
										<td>PIUS </td>
										<td>2020-10-12 08:02:01</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>89</td>
										<td>Customer Merchant Payment</td>
										<td>OJC4F6S2EO</td>
										<td>20201012124507</td>
										<td>100.00</td>
										<td>SIMON WAMBUGU</td>
										<td>2020-10-12 09:45:17</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>90</td>
										<td>Customer Merchant Payment</td>
										<td>OJC8F7EDD6</td>
										<td>20201012130020</td>
										<td>200.00</td>
										<td>SIMON WAMBUGU</td>
										<td>2020-10-12 10:00:34</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>91</td>
										<td>paybill</td>
										<td>grace</td>
										<td>2020-10-12T13:12</td>
										<td>5000</td>
										<td>grace grace</td>
										<td>2020-10-12 10:13:09</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>92</td>
										<td>paybill</td>
										<td>samuel</td>
										<td>2020-10-12T14:13</td>
										<td>6000</td>
										<td>samuel samuel</td>
										<td>2020-10-12 11:14:02</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>93</td>
										<td>paybill</td>
										<td>ken</td>
										<td>2020-10-12T15:20</td>
										<td>5000</td>
										<td>ken ken</td>
										<td>2020-10-12 12:20:59</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>94</td>
										<td>lpo</td>
										<td>OIF9KH9YKAP599K</td>
										<td>2020-10-12T15:25</td>
										<td>4500</td>
										<td>KAP 599K KAP 599K</td>
										<td>2020-10-12 12:25:32</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>95</td>
										<td>Customer Merchant Payment</td>
										<td>OJC8FEEO0Q</td>
										<td>20201012154719</td>
										<td>6000.00</td>
										<td>JANE MURAYA</td>
										<td>2020-10-12 12:47:28</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>96</td>
										<td>Customer Merchant Payment</td>
										<td>OJC1FF32TR</td>
										<td>20201012160248</td>
										<td>3500.00</td>
										<td>Rodgers </td>
										<td>2020-10-12 13:03:01</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>97</td>
										<td>Customer Merchant Payment</td>
										<td>OJC4FFYB1I</td>
										<td>20201012162229</td>
										<td>4000.00</td>
										<td>OTIENO </td>
										<td>2020-10-12 13:22:34</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>98</td>
										<td>lpo</td>
										<td>MPA-4648-2020</td>
										<td>12-10-2020</td>
										<td>176850</td>
										<td>SIMBA LIMITED</td>
										<td>2020-10-12 14:14:46</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>99</td>
										<td>Organization To Organization Transfer</td>
										<td>OJD8G74I7G</td>
										<td>20201013104036</td>
										<td>13680.00</td>
										<td>POPOTE </td>
										<td>2020-10-13 07:40:39</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>100</td>
										<td>Customer Merchant Payment</td>
										<td>OJD2G8Y8RY</td>
										<td>20201013112658</td>
										<td>6000.00</td>
										<td>JOHN </td>
										<td>2020-10-13 08:27:01</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>101</td>
										<td>Customer Merchant Payment</td>
										<td>OJD7GIVD0J</td>
										<td>20201013153626</td>
										<td>4000.00</td>
										<td>COLLINS OJWANG</td>
										<td>2020-10-13 12:36:40</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>102</td>
										<td>Customer Merchant Payment</td>
										<td>OJD5GIWMLL</td>
										<td>20201013153717</td>
										<td>3000.00</td>
										<td>JOSPHINE MBOCHU</td>
										<td>2020-10-13 12:37:25</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>103</td>
										<td>Customer Merchant Payment</td>
										<td>OJD3GUQGJB</td>
										<td>20201013192311</td>
										<td>4000.00</td>
										<td>PETER NJUGUNA</td>
										<td>2020-10-13 16:23:16</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>104</td>
										<td>lpo</td>
										<td>OJD5GIWMLL1</td>
										<td>2020-10-14T09:11</td>
										<td>4500</td>
										<td>VISH  ENTERPRISE</td>
										<td>2020-10-14 06:12:08</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>105</td>
										<td>Customer Merchant Payment</td>
										<td>OJE5HGMTBZ</td>
										<td>20201014123839</td>
										<td>6000.00</td>
										<td>SARAPHINA </td>
										<td>2020-10-14 09:38:49</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>106</td>
										<td>Customer Merchant Payment</td>
										<td>OJE8HKZN58</td>
										<td>20201014143201</td>
										<td>6000.00</td>
										<td>JOSEPH KAMAU MWAURA</td>
										<td>2020-10-14 11:32:08</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>107</td>
										<td>Customer Merchant Payment</td>
										<td>OJE2HPD6M4</td>
										<td>20201014162307</td>
										<td>6000.00</td>
										<td>EDINAH NYAGWAYA</td>
										<td>2020-10-14 13:23:11</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>108</td>
										<td>Customer Merchant Payment</td>
										<td>OJE0HQBW6I</td>
										<td>20201014164530</td>
										<td>6000.00</td>
										<td>DAMARIS GITHUA</td>
										<td>2020-10-14 13:45:44</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									                                    
									<tr id="datarow">
										<td>109</td>
										<td>Customer Merchant Payment</td>
										<td>OJF2IBJQS0</td>
										<td>20201015085446</td>
										<td>8000.00</td>
										<td>STANLEY RUNO</td>
										<td>2020-10-15 05:54:57</td>
										<td class="btn btn-danger">Delete</td>
									</tr>
									            
			</tbody>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>Trans Type</th>
                <th>Trans ID</th>
				<th>Trans Time</th>
                <th>Trans Amount</th>
				<th>Customer</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
                
   <br />
  </div>
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
  window.location.href = 'lpos.php?q='+str;
}
  
  $(document).ready(function() {
    $('#lipampesa').DataTable();
} );

</script>



</div>