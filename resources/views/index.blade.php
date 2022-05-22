<!doctype html>
<html lang="en">
  <head>
    <title>RazorPay</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container mt-4 col-6 mx-auto pt-3" >

        <div class="text-center">
            
            <img src="https://png.pngitem.com/pimgs/s/13-133041_coffee-shop-sign-coffee-shop-icon-png-transparent.png" class="img-fluid mx-auto" alt="Tea Icon" style="height: 100px">
            <h3>Buy Now!!</h3>
        </div>
       
        <form action="/payment" method="POST"> 
          @csrf
            <div class="mb-3">
              <label for="exampleInputName1" class="form-label">Name</label>
              <input type="name" name="name"
              class="form-control" placeholder="Enter Name"
              >

                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email"
                class="form-control" placeholder="Enter Email"
                >

            
                  <label for="exampleInputContact1" class="form-label">Contact</label>
                  <input type="contact" name="contact"
                  class="form-control" placeholder="Enter Contact No."
                  >
             
              <label for="exampleInputPassword1" class="form-label">Amount (One Coffee = 25 Rs.)</label>
              <input type="number" name="amount" class="form-control"  placeholder="Enter Amount">
            </div>
           
             
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
            <br>
            
          </form>
      </div>

      

     </body>
</html>