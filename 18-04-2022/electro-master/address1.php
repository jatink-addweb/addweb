<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
 .text-font{
font-family: futura-pt,Tahoma,Geneva,Verdana,Arial,sans-serif;
font-weight: 700;
letter-spacing: .156rem;
font-size: 1.125rem;
}
.text-price{
padding: 0 .625rem;
font-family: futura-pt,Tahoma,Geneva,Verdana,Arial,sans-serif;
font-style: normal;
font-size: .75rem;
font-weight: 700;
line-height: .813rem;
letter-spacing: 1.6px;
}
.text-descriptions{
font-family: futura-pt,Tahoma,Geneva,Verdana,Arial,sans-serif;
font-style: normal;
font-size: .75rem;
font-weight: 400;
line-height: 1.125rem;
margin: .313rem 0 .938rem;
padding: 0 .625rem;
}
.button-color{
color: #4e4e4e ;
border-color: #4e4e4e ;
}
.button-order{
font-family: futura-pt,Tahoma,Geneva,Verdana,Arial,sans-serif;
font-style: normal;
font-size: .75rem;
font-weight: 700;
background-color: hsl(90, 40%, 50%);
color: white;
}
    </style>
</head>
<body>
<div class="container my-5 py-5">

<!--Section: Design Block-->
<section>

  <div class="row">
    <div class="col-md-8">
      <div class="card mb-4">


        <div class="card-body">
          <p class="text-uppercase h4 text-font">Delivery Country:</p>
          <div class="row">
            <div class="col-md-1">
              <img src="https://mdbcdn.b-cdn.net/img/Others/extended-example/usa2.webp"
                class="rounded-circle me-2" style="width: 35px;" alt="USA" />
            </div>
            <div class="col-md-8">
              <select class="select">
                <option value="1">United States</option>
                <option value="2">Spain</option>
                <option value="3">Poland</option>
                <option value="4">Italy</option>
                <option value="5">Greece</option>
                <option value="6">Germany</option>
                <option value="7">Croatia</option>
                <option value="8">Sweden</option>
              </select>
            </div>
          </div>




        </div>
      </div>
      <div class="card mb-4 accordion" id="accordionExample">
        <div class="card body accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <div class="accordion-button collapsed text-uppercase text-font h4" type="button"
              data-mdb-toggle="collapse" data-mdb-target="#collapseOne" aria-expanded="false"
              aria-controls="collapseOne">
              Promo/Student Code or Vouchers
            </div>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
            data-mdb-parent="#accordionExample">
            <div class="accordion-body">
              <div class="form-outline d-flex">
                <input type="text" id="form1" class="form-control" />
                <label class="form-label" for="form1">Enter code</label>
              </div>
            </div>
          </div>



        </div>
      </div>

      <div class="card mb-4">
        <div class="card-body">
          <p class="text-uppercase fw-bold mb-3 text-font">Email address</p>
          <div class="row">
            <div class="col-md-4">
              <p>your-email@gmail.com</p>
            </div>
            <div class="col-md-7">
              <button type="button" class="btn btn-outline-dark float-end button-color "
                data-mdb-ripple-color="dark">
                Change
              </button>
            </div>
          </div>


        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4 position-static">
      <div class="card mb-4">
        <div class="card-header py-3">
          <h5 class="mb-0 text-font">1 item <span class="float-end mt-1"
              style="font-size: 13px ;">Edit</span></h5>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp"
                class="rounded-3" style="width: 100px;" alt="Blue Jeans Jacket" />
            </div>
            <div class="col-md-6 ms-3">
              <span class="mb-0 text-price">$35.00</span>
              <p class="mb-0 text-descriptions">Denim jacket </p>
              <span class="text-descriptions fw-bold">Black</span> <span
                class="text-descriptions fw-bold">UK 8</span>
              <p class="text-descriptions mt-0">Qty:<span class="text-descriptions fw-bold">1</span>
              </p>
            </div>
          </div>
          <div class="card-footer mt-4">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0 text-muted">
                Subtotal
                <span>$35.00</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center px-0 fw-bold text-uppercase">
                Total to pay
                <span>$35.00</span>
              </li>
            </ul>
          </div>


        </div>
      </div>
    </div>

    <div class="col-md-8 mb-4">
      <div class="card mb-4">
        <div class="card-header py-3">
          <h5 class="mb-0 text-font text-uppercase">Delivery address</h5>
        </div>
        <div class="card-body">
          <form>

            <div class="row mb-4">
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="form11Example1" class="form-control" />
                  <label class="form-label" for="form11Example1">First name</label>
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="form11Example2" class="form-control" />
                  <label class="form-label" for="form11Example2">Last name</label>
                </div>
              </div>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
              <input type="text" id="form11Example3" class="form-control" />
              <label class="form-label" for="form11Example3">Company name</label>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
              <input type="text" id="form11Example4" class="form-control" />
              <label class="form-label" for="form11Example4">Address</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form11Example5" class="form-control" />
              <label class="form-label" for="form11Example5">Email</label>
            </div>

            <!-- Number input -->
            <div class="form-outline mb-4">
              <input type="number" id="form11Example6" class="form-control" />
              <label class="form-label" for="form11Example6">Phone</label>
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
              <textarea class="form-control" id="form11Example7" rows="4"></textarea>
              <label class="form-label" for="form11Example7">Additional information</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-2">
              <input class="form-check-input me-2" type="checkbox" value="" id="form11Example8" checked />
              <label class="form-check-label" for="form11Example8">
                Create an account?
              </label>
            </div>
          </form>
        </div>

      </div>
      <div class="text-center">
        <button type="button" class="btn button-order col-md-10">Place order</button>
      </div>

    </div>






  </div>

</section>
<!--Section: Design Block-->

</div>
</body>
</html>