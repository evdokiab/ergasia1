<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="author" content="Evdokia Bartzi">
  <meta name="description" content="Τουριστικός οδηγός Ρόδου">
  <meta name="keywords" content="Ρόδος,παλιά πόλη Ρόδου">
  <meta htt-equiv="refresh" content="35">
  <link  rel="stylesheet" type="text/css" href="style.css"/>
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script type="text/javascript" src="main.js"></script>
  <title>Τουριστικός οδηγός Ρόδου</title>
  <style>
    #BigForm {
      border-style: solid;
      border-color: #045367;
      border-width: 2px;
      width: 325px;
      background-color: #d5e7e8;
      margin-top: -260px;
    }
  </style>
</head>
<body>
  <header>
    <img  style="width: 150px; height: 60px;" src="http://mediacofss.com/wp-content/uploads/2012/05/LOGO-RODOS_NEW1.jpg" alt="logo">
    <!-- satrt menu -->
    <ul  id="menu">
      <li><a href="index1a.html">Αρχική</a></li>
      <li><a href="index2i.html">Ιστορία</a></li>
      <li class="sightseeings"><a href="javascript:void(0)">Αξιοθέατα</a>
        <ul>
          <li><a href="index2m.html">Μουσεία</a></li>
        </ul>
      </li>
      <li><a href="index2j.php">Ξενοδοχεία</a></li>
      <li><a href="index2p.html">Πολιτισμός</a></li>
      <li><a href="index2e.html">Εστιατόρια</a></li>
      <li><a href="index2d.html">Διασκέδαση</a></li>
      <li><a href="index2dm.html">Μεταφορές-Συγκοινωνίες</a></li>
    </ul>
    <!-- menu end -->
  </header>
  <content>
    <div class="boxes">
      <img style="width: 370px; margin-left: 400px;" src="http://exp.cdn-hotels.com/hotels/3000000/2630000/2621300/2621275/2621275_47_z.jpg">
      <h3 style="margin-left: 823px; position: relative; top: -249px;">Mitsis Grand Hotel</h3>
      <p  style="width: 438px; margin-left: 824px; margin-top: -256px;height: 171px;">
        ο ξενοδοχείο Mitsis Grand Hotel στο νησί της Ρόδου είναι ένα εξαιρετικό πεντάστερο, πολυτελές ξενοδοχείο που βρίσκεται στην πόλη της Ρόδου και δίπλα στη θάλασσα. Πλήρως ανακαινισμένο και με όλες τις σύγχρονες ανέσεις θα απολαύσετες τις διακοπές σας, ενώ θα βρίσκεστε πολύ κοντά σε όλα τα αξιοθέατα της πόλης και του νησιού της Ρόδου. Το συγκρότημα του Grand Hotel έχει θέα στη θάλασσα και το χαλαρωτικό μπλε του Αιγαίου.
      </p>
    </div>
    <div id="FormsHotel">
      <form id="BigForm">
        <legend>HOTEL</legend>
        <fieldset>
          <legend>choose hotel:</legend>
          <input type="radio" value="MGH" name="GRAND_HOTELS" id="MGH">Mitsis Grand Hotel</br>
          <input type="radio" value="SES" name="GRAND_HOTELS" id="SES">Semiramis City Hotel<br/>
          <input type="radio" value="BWH" name="GRAND_HOTELS" id="BWH">Best Western Hotel Plaza<br/>
        </fieldset>
        <label for="rooms">Δωμάτια:</label>
        <select id="rooms" name="Δωμάτια">
          <option value="-">-</option>
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
        </select>
        <label for="roοmsType">Τύπος Δωματίων</label>
        <select id="roomsType" name="Τύπος Δωματίων">
          <option value="-">-</option>
          <option value="Μονόκλινο">Μονόκλινο</option>
          <option value="Δίκλινο">Δίκλινο</option>
          <option value="Τρίκλινο">Τρίκλινο</option>
          <option value="superior">superior</option>
          <option value=" Junior Suite">Junior Suite</option>
          <option value="suite">suite</option>
        </select>
        <label for="adults">Ενήλικες</label>
        <select id="adults" name="Ενήλικες">
          <option value="-">-</option>
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
        </select>
        <label for="kids">Παιδιά</label>
        <select id="kids" name="Παιδιά">
          <option value="0">0</option>
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
        </select>
        <TABLE BORDER=3 CELLSPACING=3 CELLPADDING=3>
          <TR>
          <TD COLSPAN="7" ALIGN=center><B>December 2001</B></TD>
          </TR>
          <TR>
          <TD COLSPAN="7" ALIGN=center><I>Another year comes to an end</I></TD>
          </TR>
          <TR>
          <TD ALIGN=center>Sun</TD>
          <TD ALIGN=center>Mon</TD>
          <TD ALIGN=center>Tue</TD>
          <TD ALIGN=center>Wed</TD>
          <TD ALIGN=center>Thu</TD>
          <TD ALIGN=center>Fri</TD>
          <TD ALIGN=center>Sat</TD>
          </TR>
          <TR>
          <TD ALIGN=center></TD>
          <TD ALIGN=center></TD>
          <TD ALIGN=center></TD>
          <TD ALIGN=center></TD>
          <TD ALIGN=center></TD>
          <TD ALIGN=center></TD>
          <TD ALIGN=center>1</TD>
          </TR>
          <TR>
          <TD ALIGN=center>2</TD>
          <TD ALIGN=center>3</TD>
          <TD ALIGN=center>4</TD>
          <TD ALIGN=center>5</TD>
          <TD ALIGN=center>6</TD>
          <TD ALIGN=center>7</TD>
          <TD ALIGN=center>8</TD>
          </TR>
          <TR>
          <TD ALIGN=center>9</TD>
          <TD ALIGN=center>10</TD>
          <TD ALIGN=center>11</TD>
          <TD ALIGN=center>12</TD>
          <TD ALIGN=center>13</TD>
          <TD ALIGN=center>14</TD>
          <TD ALIGN=center>15</TD>
          </TR>
          <TR>
          <TD ALIGN=center>16</TD>
          <TD ALIGN=center>17</TD>
          <TD ALIGN=center>18</TD>
          <TD ALIGN=center>19</TD>
          <TD ALIGN=center>20</TD>
          <TD ALIGN=center>21</TD>
          <TD ALIGN=center>22</TD>
          </TR>
          <TR>
          <TD ALIGN=center>23</TD>
          <TD ALIGN=center>24</TD>
          <TD ALIGN=center>25</TD>
          <TD ALIGN=center>26</TD>
          <TD ALIGN=center>27</TD>
          <TD ALIGN=center>28</TD>
          <TD ALIGN=center>29</TD>
          </TR>
          <TR>
          <TD ALIGN=center>30</TD>
          <TD ALIGN=center>31</TD>
          <TD ALIGN=center></TD>
          <TD ALIGN=center></TD>
          <TD ALIGN=center></TD>
          <TD ALIGN=center></TD>
          <TD ALIGN=center></TD>

          </TR>
          </TABLE>
        <form id="acountsData">
          <h4>Στοιχεία λογαριασμού</h4>
          <h5>Δυνατότητα πληρωμής</h5>
          <h5>Τύπος κάρτας</h5>
            <input style="position: relative; top: 27px; margin-left: 12PX;" type="radio" value="mastercard" name="type-card"></br>
            <label for="card_MC">
              <img style="margin-left: 34px;" src="http://www.luxeonstar.com/assets/templates/default/images/mastercard.png" alt="mastercard-icon">
            </label>
            <input style="margin-left: 24px; position: relative; top: -8px;" type="radio" value="visa" name="type-card"></br>
            <label for="visa">
              <img style="margin-left: 129px; position: relative; top: -30px;" src="http://varietyz.com/images/visa-icon.jpg" alt="visa-icon">
            </label><br/>
            <label for="card-number">Αριθμός κάρτας</label>
            <br/>
            <input type="text" id="card-number"><br/>
            <label for="code">Κωδικός CVC2/CVV2</label>
            <br/>
            <input type="text" id="code"><br/>
            <label for="username">Όνομα καρτούχου:</label>
            <br/>
            <input type="text" id="username">
            <br/>
            <label for="cardExpiry">Λήξη κάρτας</label>
            <select>
              <option value="-">-</option>
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
            </select>
          </form>
          <input type="button" onclick="resetFunction()" value="ΑΚΥΡΩΣΗ">
          <input type="button" value="ΚΡΑΤΗΣΗ">
      </form>
    </div>
  </content>
  <footer>
      <p>Created by Evdokia</p>
      <p>Contact information:<a href="mailto:eydokiampartzi@gmail.com">eydokiampartzi@gmail.com</a></p>
    </footer>
</body>
</html>
