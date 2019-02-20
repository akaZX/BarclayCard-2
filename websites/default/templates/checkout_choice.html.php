<div class="ml-3">
	<h1>Total :£0</h1>
	<div class="mt-5">
		<h2>Select payment option</h2>
	</div>
</div>
<div class="ml-3 row">

    <!--just an example-->
    <div class="float-right" id="paypal-button-container"></div>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
    // Render the PayPal button
    paypal.Button.render({
    // Set your environment
    env: 'sandbox', // sandbox | production

    // Specify the style of the button
    style: {
      layout: 'vertical',  // horizontal | vertical
      size:   'medium',    // medium | large | responsive
      shape:  'rect',      // pill | rect
      color:  'gold'       // gold | blue | silver | white | black
    },

    // Specify allowed and disallowed funding sources
    //
    // Options:
    // - paypal.FUNDING.CARD
    // - paypal.FUNDING.CREDIT
    // - paypal.FUNDING.ELV
    funding: {
      allowed: [
        paypal.FUNDING.CARD,
        paypal.FUNDING.CREDIT
      ],
      disallowed: []
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // PayPal Client IDs - replace with your own
    // Create a PayPal app: https://developer.paypal.com/developer/applications/create
    client: {
      sandbox: 'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
      production: '<insert production client id>'
    },

    payment: function (data, actions) {
      return actions.payment.create({
        payment: {
          transactions: [
            {
              amount: {
                total: '{@total_price}',
                currency: 'GBP'
              }
            }
          ]
        }
      });
    },

    onAuthorize: function (data, actions) {
      return actions.payment.execute()
        .then(function () {
          window.alert('Payment Complete!');
        });
    }
    }, '#paypal-button-container');
    </script>
  </div>
