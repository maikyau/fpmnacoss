const form = document.getElementById('Activation');
form.addEventListener("submit", payNow);

function payNow(e) {
  e.preventDefault();

  FlutterwaveCheckout({
      public_key: "FLWPUBK_TEST-40f4894b3ccbf2feef0dd0c2eac7f09b-X",
      tx_ref: "JH_"+Math.floor((Math.random()*1000000000)+1),
      amount: document.getElementById('fund').value,
      currency: "NGN",
      redirect_url: // specified redirect URL
        "payment_verify.php",
      customer: {
        email: "join2handassociation@gmail.com",
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
        title: "Join Hand Association",
        description: "Activation Payment",
        logo: "../../vendors/images/deskapp-logo.png",
      },
    });
}