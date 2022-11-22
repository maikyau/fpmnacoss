const form = document.getElementById('Activation');
form.addEventListener("submit", payNow);

function payNow(e) {
  e.preventDefault();

  FlutterwaveCheckout({
      public_key: "FLWPUBK_TEST-40f4894b3ccbf2feef0dd0c2eac7f09b-X",
      tx_ref: "RRR"+Math.floor((Math.random()*1000000000)+1),
      amount: document.getElementById('amount').value,,
      currency: "NGN",
      redirect_url: // specified redirect URL
        "payment_verify.php",
      customer: {
        email: "nacoss@gmail.com",
        phone_number: document.getElementById('phonenumber').value,
        name: document.getElementById('phonenumber').value,
      },
      callback: function (data) {
        console.log(data);
    },
      onclose: function() {
        // close modal
      },
      customizations: {
        title: "Nacoss Payment",
        description: "Nacoss Dually Payment",
        logo: "../src/images/icon.png",
      },
    });
}