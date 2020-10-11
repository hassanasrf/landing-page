<!-- BEGIN HEADER HERE -->
<?php include 'partials/header.php'; ?>
<?php
  require("config/dbc.php");
  $buy = 'SELECT ads.*, fullname FROM ads  JOIN member ON member_id = userid WHERE buysell = 1 ORDER BY price ASC LIMIT 10';
  $buy_result = $connection->query($buy);
  $sell = 'SELECT * FROM ads JOIN member ON member_id = userid WHERE buysell = 2 ORDER BY price DESC LIMIT 10';
  $sell_result = $connection->query($sell);

?>
<!-- JQuery code -->

<script>
$(document).ready(function(){
  $("#orange_form_buy").click(function(){
     $("#purchase-bitcoins-online").toggle();
  });
});
</script>
<script>
 $(document).ready(function(){
  $("#orange_form_sell").click(function(){
    $("#sell-bitcoins-online").toggle();
  });
});
</script>
<!-- -->

<!-- END HEADER HERE --> 
<div class="search-form-wrap">

  <ul class="nav nav-tabs search-form-nav" role="tablist">
    <li role="presentation" class="active">
      <a href="#orange_form_buy" id ="orange_form_buy" class="tab-buy" aria-controls="orange_form_buy" role="tab" data-toggle="tab" aria-expanded="true">QUICK BUY</a>
    </li>

    <li role="presentation" class="">
      <a href="#orange_form_sell" id="orange_form_sell" class="tab-sell" aria-controls="orange_form_sell" role="tab" data-toggle="tab" aria-expanded="false">QUICK SELL</a>
    </li>
  </ul>

  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="orange_form_buy">
      <form action="act_buy .php" class="search-form" method="post">
        <div class="search-form-fields">
          <input type="hidden" name="action" value="buy" id="">
          <input type="hidden" name="location_string" value="" id="id_location_string">
          <div id="div_id_amount" class="form-group">
            <div class="controls ">
              <input type="text" name="amount" class="search-form-amount textinput textInput form-control" placeholder="Amount" id="id_amount">
            </div>
          </div>

          <div id="div_id_currency" class="form-group">
            <div class="controls ">
              <select name="currency" class="search-form-currency select form-control" id="id_currency">
                <option value="AED">AED</option>
              </select>
            </div>
          </div>

          <div id="div_id_country_code" class="form-group">
            <div class="controls ">
              <select name="country_code" class="search-form-country-code select form-control" id="search-form-country-code">
                <option value="AL">Albania</option>
              </select>
            </div>
          </div>

          <div id="div_id_online_provider" class="form-group">
            <div class="controls ">
              <select class="form-control" id="id_online_provider" name="online_provider">
                <optgroup label="All payment methods">
                  <option value="ALL_ONLINE">All online offers</option>
                </optgroup>
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="controls ">
              <input type="submit" name="find-offers" value="Search" class="btn btn-primary search-form-button" id="submit-id-find-offers">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="controls ">
            <input type="submit" name="find-offers" value="Search" class="btn btn-primary search-form-button search-form-button-advanced" id="submit-id-find-offers">
          </div>
        </div>
      </form>
    </div>

    <div role="tabpanel" class="tab-pane" id="orange_form_sell">
      <form action="act_sell.php" class="search-form" method="post">
        <input type="hidden" name="csrfmiddlewaretoken" value="XwqLI6Ix8NwDS6jbCpp7sMaFfz0ortPle9gsXmexzZGDDzeekCK3qBSVPbBDK2ud">
        <div class="search-form-fields">
          <input type="hidden" name="action" value="sell" id="id_action">
          <input type="hidden" name="location_string" value="Karachi, Pakistan" id="id_location_string">
          <div id="div_id_amount" class="form-group">
            <div class="controls ">
              <input type="text" name="amount" class="search-form-amount textinput textInput form-control" placeholder="Amount" id="id_amount">
            </div>
          </div>

          <div id="div_id_currency" class="form-group">
            <div class="controls ">
              <select name="currency" class="search-form-currency select form-control" id="id_currency">
                <option value="AED">AED</option>
              </select>
            </div>
          </div>

          <div id="div_id_country_code" class="form-group">
            <div class="controls ">
              <select name="country_code" class="search-form-country-code select form-control" id="search-form-country-code">
                <option value="AS">American Samoa</option>
              </select>
            </div>
          </div>

          <div id="div_id_online_provider" class="form-group">
            <div class="controls ">
              <select class="form-control" id="id_online_provider" name="online_provider">
                <optgroup label="All payment methods">
                  <option value="ALL_ONLINE">All online offers</option>
                </optgroup>
              </select>
            </div>
          </div> 

          <div class="form-group">
            <div class="controls ">
              <input type="submit" name="find-offers" value="Search" class="btn btn-primary search-form-button" id="submit-id-find-offers">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="controls ">
            <input type="submit" name="find-offers" value="Search" class="btn btn-primary search-form-button search-form-button-advanced" id="submit-id-find-offers">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="container">
  <div class="main-h">
    <div id="frontpage-location-listing"><div class="row bitcoinlist">
      <div id="purchase-bitcoins-online" class="col-md-12">
        <h3>Buy bitcoins online in Pakistan</h3>
        <table class="table table-striped table-condensed table-bitcoins ">
          <tbody>


            <tr>
              <th>Seller</th>
              <th title="Payment method">Payment method</th>
              <th class="header-price" title="Current price of this ad">Price / BTC</th>
              <th class="header-limit" title="Trade amount in fiat currency">Limits</th>
              <th></th>
              <th></th>
            </tr>

            <?php
if ($buy_result->num_rows > 0) {
while($row = $buy_result->fetch_assoc()) {
?>

            <tr class="clickable">
              <td class="column-user">
                <a href="#"><?= $row['fullname']?></a>
                <span title="" class="online-status online-status-online" data-original-title="Typically replies within minutes">
                  <i class="fa fa-circle"></i></span>
              </td>
              <td> <a href="#"><?= $row['payment_methods'] ?> </a></td>
              <td class="column-price"><?= $row['price'] ?> PKR</td>
              <td class="column-limit"><?= number_format($row['minamt'], 2).' - '.number_format($row['maxamt'], 2) ?></td>
              <td class="column-button"><a class="btn btn-default megabutton" href="#"> Buy</a></td>
              <td class="column-button"><a class="btn btn-default megabutton" href="contact.php"> Contact</a></td>
            </tr>
<?php }} ?>

                
                    </tbody>
                  </table>

                  <div class="popular-payment-methods pull-right">
                    <ul id="dropdown-/buy-bitcoins-online/" class="popular-methods-dropdown">
                      <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                          Show more…
                          <b class="caret"></b>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="row bitcoinlist">
                <div id="sell-bitcoins-online" class="col-md-12">
                  <h3>Sell bitcoins online in Pakistan    
                  </h3>
                  <table class="table table-striped table-condensed table-bitcoins ">
                    <tbody><tr>
                      <th>
                        Buyer
                      </th>
                      <th title="Payment method">Payment method</th>
                      <th class="header-price" title="Current price of this ad">Price / BTC</th>
                      <th class="header-limit" title="Trade amount in fiat currency">Limits</th>
                      <th></th>
                      <th></th>
                    </tr>
                    <?php
                      if ($sell_result->num_rows > 0) {
                      while($row = $sell_result->fetch_assoc()) {
                      ?>

                                  <tr class="clickable">
                                    <td class="column-user">
                                      <a href="detail.php"><?= $row['fullname']?></a>
                                      <span title="" class="online-status online-status-online" data-original-title="Typically replies within minutes">
                                        <i class="fa fa-circle"></i></span>
                                    </td>
                                    <td> <a href="#"><?= $row['payment_methods'] ?> </a></td>
                                    <td class="column-price"><?= $row['price'] ?> PKR</td>
                                    <td class="column-limit"><?= number_format($row['minamt'], 2).' - '.number_format($row['maxamt'], 2) ?></td>
                                    <td class="column-button"><a class="btn btn-default megabutton" href="#"> Sell</a></td>
                                    <td class="column-button"><a class="btn btn-default megabutton" href="contact.php"> Contact</a></td>
                                  </tr>
                      <?php }} ?>
                  </tbody>
                </table>
                <div class="popular-payment-methods pull-right">
                  <ul id="dropdown-/sell-bitcoins-online/" class="popular-methods-dropdown">
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Show more…
                        <b class="caret"></b>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </h1>
</div>

<!-- BEGIN FOOTER HERE -->
<?php include 'partials/footer.php'; ?>
<!-- END FOOTER HERE --> 