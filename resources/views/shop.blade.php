<!DOCTYPE html>
<html>

<head>
@include('tools.function')
</head>
<style>
  h4{
    border: 2px solid white;
    background: #fff9;
    color:black;
    padding-right: 5px;
    padding-left: 5px;
    border: 1px solid black;
  }
  .detail-box{
    background: #fff7;
  }
  .detail-box p{
    color:black;
    font-weight: bold;
  }
  .detail-box .original-price {
  color: black; /* Set the color of the original price */
  text-decoration: line-through; /* Add strikethrough for the original price */
}

/* Apply styles to the discounted price */
.detail-box .discounted-price {
  color: red; /* Set the color of the discounted price */
  font-weight: bold; /* Make the discounted price bold */
}
</style>

<body>

  <!-- header section strats -->
    @include('tools.header')

  <!-- end header section -->

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Item
        </h2>
      </div>
    </div>
    <div class="container ">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="/images/Items/Batteries.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
              Batteries
              </h4>
              <p>
                Rs. 4000.00
              </p>
              <a>
                Avilable
                <!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i> -->

              </a>
            </div>
          </div>
        </div>
        

        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="/images/Items/Break Pads.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
              Break Pads
              </h4>
              <p>
                Rs. 1000.00
              </p>
              <a>
                Avilable
                <!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i> -->

              </a>
            </div>
          </div>
        </div>

        

        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="/images/Items/connector.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
              Spark Plug
              </h4>
              <p>
                Rs. 500.00
              </p>
              <a style="color:gray" class="out-stock">
                Out Of Stock
                <!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i> -->

              </a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="/images/Items/Engine Parts.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
              Engine Parts
              </h4>
              <p>
                up to Rs. 200000.00
              </p>
              <a>
                Avilable
                <!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i> -->

              </a>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="/images/Items/Filters.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
              Filters
              </h4>
              <p>
                300.00
              </p>
              <a>
                Avilable
                <!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i> -->

              </a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="/images/Items/Headlamps.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
              Headlamps
              </h4>
              <p>
                up to Rs. 10000.00
              </p>
              <a>
                Avilable
                <!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i> -->

              </a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="/images/Items/Oils.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
              Oils
              </h4>
              <p>
                1000.00
              </p>
              <a>
                Avilable
                <!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i> -->

              </a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="/images/Items/Radiators.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
              Radiators
              </h4>
              <p>
                30000.00
              </p>
              <a>
                Avilable
                <!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i> -->

              </a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="/images/Items/Shok Absorber.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
              Shok Absorber
              </h4>
              <p>
                30000.00
              </p>
              <a style="color:gray"  class="out-stock">
                Out Of Stock
                <!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i> -->

              </a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="/images/Items/Spirals.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
              Spirals
              </h4>
              <p>
                2000.00
              </p>
              <a>
                Avilable
                <!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i> -->

              </a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="/images/Items/Tires.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
              Spirals
              </h4>
              <p>
                15000.00
              </p>
              <a>
                Avilable
                <!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i> -->

              </a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="/images/Items/Car washer.png" alt="">
            </div>
            <div class="detail-box">
              <h4 style="">
              Car washer
              </h4>
              <p class="original-price">
                Rs. 34000.00
              </p>
              <p class="discounted-price">
                Rs. 28999.00 <!-- Example discounted price -->
              </p>
              <a>
                Avilable
                <!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i> -->

              </a>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="/images/Items/Wipers.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
              Wipers
              </h4>
              <p>
                1500.00
              </p>
              <a>
                Avilable
                <!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i> -->

              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- info section -->

  
  <!-- end info section -->

  <!-- footer section -->
    @include('tools.footer')
  <!-- footer section -->



</body>

</html>
