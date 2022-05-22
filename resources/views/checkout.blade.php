<!doctype html>
<html lang="en">
  <head>
    <title>Paying</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      

      


    
      
    <div class="container text-center">
        <form action="pay" method="POST">
          <button id="rzp-button1" hidden >Pay</button>
          <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
          <script>
          var options = {
              "key": "rzp_test_o1h6ExAiHPBUQw", // 
              "amount": "{{Session::get('amount')}}", 
              "currency": "INR",
              "name": "Indian Coffee House",
              "description": "Thanks for Buying Coffee!!",
              
              "order_id": "{{Session::get('orderId')}}", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
              "handler": function (response){
                document.getElementById('rzp_paymentid').value= response.razorpay_payment_id;
                document.getElementById('rzp_orderid').value= response.razorpay_order_id;
                document.getElementById('rzp_signature').value= response.razorpay_signature;

                document.getElementById('submit-response').click();
                 
              },
              "prefill": {
                  "name": "{{Session::get('name')}}",
                  "email": "{{Session::get('email')}}",
                  "contact": "{{Session::get('contact')}}"
              },
              "notes": {
                  "address": "Razorpay Corporate Office"
              },
              "theme": {
                  "color": "#3399cc"
              }
          };
          var rzp1 = new Razorpay(options);
          window.onload = function()
          {
            document.getElementById('rzp-button1').click();
          };
          rzp1.on('payment.failed', function (response){
                  alert(response.error.code);
                  alert(response.error.description);
                  alert(response.error.source);
                  alert(response.error.step);
                  alert(response.error.reason);
                  alert(response.error.metadata.order_id);
                  alert(response.error.metadata.payment_id);
          });
          document.getElementById('rzp-button1').onclick = function(e){
              rzp1.open();
              e.preventDefault();
          }
          </script>
          <div class="hidden" hidden>
            <input type="text" class="form-control" id="rzp_paymentid" name="rzp_paymentid">
          <input type="text" class="form-control" id="rzp_orderid" name="rzp_orderid">
          <input type="text" class="form-control" id="rzp_signature" name="rzp_signature"> 

          <button type="submit" id="submit-response" >get</button>


          </div>
          

          </form>
        </div>
       
      
   </body>
</html>