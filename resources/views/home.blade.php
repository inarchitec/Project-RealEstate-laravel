@extends('layouts.mynav')

@section('home-contents')
<div class="slider-area">
    <div class="slider">
      <div id="bg-slider" class="owl-carousel owl-theme">

        <div class="item">
          <img src="assets/img/slide1/slide 2.png" alt="sample image 2" />
        </div>
        <div class="item">
          <img src="assets/img/slide1/slide 3.png" alt="sample image 2" />
        </div>

        <div class="item">
          <img src="assets/img/slide1/slide 5.png" alt="sample image 2" />
        </div>
      </div>
    </div>
    <div class="container slider-content">
      <div class="row">
        <div
          class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
          <h2
            style="
              color: white;
              border: 4px solid #00bb34;
              padding: 25px;
              background-color: transparent;
            ">
            property Searching Just Got So Easy
          </h2>
          <p style="color: #fcfcfc; font-weight: 400">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi
            deserunt deleniti, ullam commodi sit ipsam laboriosam velit
            adipisci quibusdam aliquam teneturo!
          </p>
        </div>
      </div>
    </div>
  </div>

  <div
    class="home-lager-shearch"
    style="
      background-color: rgb(252, 252, 252);
      padding-top: 25px;
      margin-top: -125px;
    ">
    <div class="container">
      <div class="col-md-12 large-search">
        <div class="search-form wow pulse">
          <form action="" class="form-inline">
            <div class="col-md-12">
              <div class="col-md-4">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Key word" />
              </div>
              <div class="col-md-4">
                <select
                  id="lunchBegins"
                  class="selectpicker"
                  data-live-search="true"
                  data-live-search-style="begins"
                  title="Select your sub city">
                  <option>Addis Ketema</option>
                  <option>Akaky Kaliti</option>
                  <option>Arada</option>
                  <option>Bole</option>
                  <option>Gullele</option>
                  <option>Kirkos</option>
                  <option>Kolfe Keranio</option>
                  <option>Lideta</option>
                  <option>Nifas Silk</option>
                  <option>Yeka</option>
                  <option>Lemi kura</option>
                </select>
              </div>
              <div class="col-md-4">
                <select
                  id="lunchBegins"
                  class="selectpicker"
                  data-live-search="true"
                  data-live-search-style="begins"
                  title="Select your city">
                  <option>Addis Ababa</option>
                  <option>Afar</option>
                  <option>Amhara</option>
                  <option>Benishangul-Gumuz</option>
                  <option>Dire Dawa</option>
                  <option>Gambela</option>
                  <option>Oromia</option>
                  <option>Sidama</option>
                  <option>Somali</option>
                  <option>South West Ethiopia Peoples</option>
                  <option>
                    Southern Nations, Nationalities, and Peoples'
                  </option>
                  <option>Tigray</option>
                </select>
              </div>
              <div class="col-md-4" style="padding-top: 20px">
                <select
                  id="basic"
                  class="selectpicker show-tick form-control">
                  <option>Property Type</option>
                  <option>Rent</option>
                  <option>Buy</option>
                </select>
              </div>
            </div>

            <div class="col-md-12">
              <div class="search-row">
                <div class="col-sm-3">
                  <label for="price-range">Price range (ETB):</label>
                  <input
                    type="text"
                    class="span2"
                    value=""
                    data-slider-min="20000"
                    data-slider-max="100000"
                    data-slider-step="5000"
                    data-slider-value="[50000,80000]"
                    id="price-range" /><br />
                  <b class="pull-left color">2000ETB</b>
                  <b class="pull-right color">100000ETB</b>
                </div>
                <!-- End of  -->

                <div class="col-sm-3">
                  <label for="property-geo">Property geo (m2) :</label>
                  <input
                    type="text"
                    class="span3"
                    value=""
                    data-slider-min="40"
                    data-slider-max="1200"
                    data-slider-step="20"
                    data-slider-value="[50,500]"
                    id="property-geo" /><br />
                  <b class="pull-left color">40m</b>
                  <b class="pull-right color">12000m</b>
                </div>
                <!-- End of  -->

                <div class="col-sm-3">
                  <label for="price-range">Min baths :</label>
                  <input
                    type="text"
                    class="span4"
                    value=""
                    data-slider-min="1"
                    data-slider-max="20"
                    data-slider-step="1"
                    data-slider-value="[5,10]"
                    id="min-baths" /><br />
                  <b class="pull-left color">1</b>
                  <b class="pull-right color">20</b>
                </div>
                <!-- End of  -->

                <div class="col-sm-3">
                  <label for="property-geo">Min bed :</label>
                  <input
                    type="text"
                    class="span5"
                    value=""
                    data-slider-min="1"
                    data-slider-max="15"
                    data-slider-step="1"
                    data-slider-value="[5,10]"
                    id="min-bed" /><br />
                  <b class="pull-left color">1</b>
                  <b class="pull-right color">15</b>
                </div>
                <!-- End of  -->
              </div>


                <div class="col-sm-3">
                  <div class="checkbox">
                    <label> <input type="checkbox" /> Family Room(500) </label>
                  </div>
                </div>
                <!-- End of  -->



                <div class="col-sm-3">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" /> Swimming Pool(1190)
                    </label>
                  </div>
                </div>
                <!-- End of  -->

                <div class="col-sm-3">
                  <div class="checkbox">
                    <label> <input type="checkbox" /> 2 Stories(4600) </label>
                  </div>
                </div>
                <!-- End of  -->

                <div class="col-sm-3">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" /> Emergency Exit(200)
                    </label>
                  </div>
                </div>
                <!-- End of  -->

                <div class="col-sm-3">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" /> Laundry Room(10073)
                    </label>
                  </div>
                </div>
                <!-- End of  -->
                <div class="col-sm-3">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" /> Garden(10073)
                    </label>
                  </div>
                </div>
                <!-- End of  -->


                <div class="col-sm-3">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" />  Service Area(1003)
                          </label>
                      </div>
                  </div>
                  <!-- End of  -->
                  <div class="col-sm-3">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" /> T.Kitchen(1003)
                      </label>
                    </div>
                  </div>
                  <!-- End of  -->


              </div>
            </div>
            <div class="center">
              {{-- <input
                onClick="meetme()"
                type="submit"
                value=""
                class="btn btn-default btn-lg-sheach" /> --}}
            </div>
          </form>
          <button onClick="meetme()" class="btn btn-default btn-lg-sheach" ></button>
        </div>
      </div>
    </div>
  </div>

  <!-- property area -->
  <div
    class="content-area recent-property"
    style="background-color: #fcfcfc; padding-bottom: 55px">
    <div class="container">
      <div class="row">
        <div
          class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
          <!-- /.feature title -->
          <h2>New submitted property</h2>
          <p>
            A brief introduction of the new submitted property and its location.
          </p>
        </div>
      </div>

      <div class="row">
        <div class="proerty-th">
          

          @foreach ($new_properties as $item)
          <div class="col-sm-6 col-md-3 p0">
            <div class="box-two proerty-item">
              <div class="item-thumb">
                <a href="/properties/{{$item->id}}"
                  >
                
                {{--   <img src="assets/img/demo/property-1.jpg"
                /> --}}
                <img src="{{$item->Images}}"
                />
              </a>
              </div>
              <div class="item-entry overflow">
                <h5><a href="/properties/{{$item->id}}">{{$item->Title}} </a></h5>
                <div class="dot-hr"></div>
                <span class="pull-left"><b>Area :</b> {{$item->Area}} Msq </span>
                <span class="proerty-price pull-right"> <b>Price :</b> {{$item->Price}} ETB</span>
                <span class="pull-left"><b>Location :</b>  {{$item->Location_city}} </span>
              </div>
            </div>
          </div>
          @endforeach
          <a href="/properties"> 
          <div class="col-sm-6 col-md-3 p0">
            <div class="box-tree more-proerty text-center">
              <div class="item-tree-icon">
                <i class="fa fa-th"></i>
              </div>
           
              <div class="more-entry overflow">
                <h5><a  href="/properties">CAN'T DECIDE ? </a></h5>
                <h5 class="tree-sub-ttl">Show all properties</h5>
              
                <button
                  class="btn border-btn more-black"
                  value="All properties">
                
                 All properties
               
                </button>
             
              </div>
           
            </div>
          </div>
        </a>

        </div>
      </div>
    </div>
  </div>

  <!--Welcome area -->
  <div class="Welcome-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 Welcome-entry col-sm-12">
          <div class="col-md-5 col-md-offset-2 col-sm-6 col-xs-12">
            <div
              class="welcome_text wow fadeInLeft"
              data-wow-delay="0.3s"
              data-wow-offset="100">
              <div class="row">
                <div
                  class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                  <!-- /.feature title -->
                  <h2>Lorem. ESTATE</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5 col-sm-6 col-xs-12">
            <div
              class="welcome_services wow fadeInRight"
              data-wow-delay="0.3s"
              data-wow-offset="100">
              <div class="row">
                <div class="col-xs-6 m-padding">
                  <div class="welcome-estate">
                    <div class="welcome-icon">
                      <i class="pe-7s-home pe-4x"></i>
                    </div>
                    <h3>Any property</h3>
                  </div>
                </div>
                <div class="col-xs-6 m-padding">
                  <div class="welcome-estate">
                    <div class="welcome-icon">
                      <i class="pe-7s-users pe-4x"></i>
                    </div>
                    <h3>More Clients</h3>
                  </div>
                </div>

                <div class="col-xs-12 text-center">
                  <i class="welcome-circle"></i>
                </div>

                <div class="col-xs-6 m-padding">
                  <div class="welcome-estate">
                    <div class="welcome-icon">
                      <i class="pe-7s-notebook pe-4x"></i>
                    </div>
                    <h3>Easy to use</h3>
                  </div>
                </div>
                <div class="col-xs-6 m-padding">
                  <div class="welcome-estate">
                    <div class="welcome-icon">
                      <i class="pe-7s-help2 pe-4x"></i>
                    </div>
                    <h3>Any help</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--TESTIMONIALS -->
  <div
    class="testimonial-area recent-property"
    style="background-color: #fcfcfc; padding-bottom: 15px">
    <div class="container">
      <div class="row">
        <div
          class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
          <!-- /.feature title -->
          <h2>Our Customers Said</h2>
        </div>
      </div>

      <div class="row">
        <div class="row testimonial">
          <div class="col-md-12">
            <div id="testimonial-slider">
              <div class="item">
                <div class="client-text">
                  <p>
                    Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried
                    arcu ultricies !
                  </p>
                  <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                </div>
                <div class="client-face wow fadeInRight" data-wow-delay=".9s">
                  <img src="assets/img/client-face1.png" alt="" />
                </div>
              </div>
              <div class="item">
                <div class="client-text">
                  <p>
                    Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried
                    arcu ultricies !
                  </p>
                  <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                </div>
                <div class="client-face">
                  <img src="assets/img/client-face2.png" alt="" />
                </div>
              </div>
              <div class="item">
                <div class="client-text">
                  <p>
                    Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried
                    arcu ultricies !
                  </p>
                  <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                </div>
                <div class="client-face">
                  <img src="assets/img/client-face1.png" alt="" />
                </div>
              </div>
              <div class="item">
                <div class="client-text">
                  <p>
                    Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried
                    arcu ultricies !
                  </p>
                  <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                </div>
                <div class="client-face">
                  <img src="assets/img/client-face2.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Count area -->
  <div class="count-area">
    <div class="container">
      <div class="row">
        <div
          class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
          <!-- /.feature title -->
          <h2>You can trust Us</h2>
        </div>
      </div>
      <div class="row">
        <div
          class="col-md-12 col-xs-12 percent-blocks m-main"
          data-waypoint-scroll="true">
          <div class="row">
            <div class="col-sm-3 col-xs-6">
              <div class="count-item">
                <div class="count-item-circle">
                  <span class="pe-7s-users"></span>
                </div>
                <div class="chart" data-percent="5000">
                  <h2 class="percent" id="counter">0</h2>
                  <h5>HAPPY CUSTOMER</h5>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-xs-6">
              <div class="count-item">
                <div class="count-item-circle">
                  <span class="pe-7s-home"></span>
                </div>
                <div class="chart" data-percent="2000">
                  <h2 class="percent" id="counter1"></h2>
                  <h5>Properties in stock</h5>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-xs-6">
              <div class="count-item">
                <div class="count-item-circle">
                  <span class="pe-7s-flag"></span>
                </div>
                <div class="chart" data-percent="120">
                  <h2 class="percent" id="counter2">0</h2>
                  <h5>City registered</h5>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-xs-6">
              <div class="count-item">
                <div class="count-item-circle">
                  <span class="pe-7s-graph2"></span>
                </div>
                <div class="chart" data-percent="5000">
                  <h2 class="percent" id="counter3">5000</h2>
                  <h5>DEALER BRANCHES</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- boy-sale area -->
  <div class="boy-sale-area">
    <div class="container">
      <div class="row">
        <a href="properties">
        <div
          class="col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 col-xs-12">
          <div class="asks-first">
            <div class="asks-first-circle">
              <span class="fa fa-search"></span>
            </div>
            <div class="asks-first-info">
              <h2>ARE YOU LOOKING FOR A Property?</h2>
              <p>
                A brief introduction about the purpose of the document.
              </p>
            </div>
            <div class="asks-first-arrow">
              <a href="properties"
                ><span class="fa fa-angle-right"></span
              ></a>
            </div>
          </div>
        </div>
      </a>
       
        <a href="properties">
          <div
          class="col-md-6 col-sm-10 col-sm-offset-1 col-xs-12 col-md-offset-0">
          <div class="asks-first">
            <div class="asks-first-circle">
                  <div style="text-align: center;padding:22%;font-size:2.1rem"> 
                    <strong>ETB</strong></div>
            </div>
            <div class="asks-first-info">
              <h2>DO YOU WANT TO SELL A Property?</h2>
              <p>
                The local neighborhood and community amenities, including nearby schools,
                 parks, and shopping centers.
              </p>
            </div>
            <div class="asks-first-arrow">
              <a href="properties.html"
                ><span class="fa fa-angle-right"></span
              ></a>
            </div>
          </div>
        </div>
        </a>
        <div class="col-xs-12">
          <p class="asks-call">
            QUESTIONS? CALL US :
            <span class="strong"> + 3-123- 424-5700</span>
          </p>
        </div>
      </div>
    </div>
  </div>

  
  <script>
    var HAPPY_CUSTOMER = {{ Js::from($HAPPY_CUSTOMER) }};
  </script>
  <script> 
  var PROPERTIES_IN_STOCK = {{ Js::from($PROPERTIES_IN_STOCK) }};
  </script>
  <script>
  var CITY_REGISTERED = {{ Js::from($CITY_REGISTERED) }};
  </script>
  <script>
  var DEALER_BRANCHES = {{ Js::from($DEALER_BRANCHES) }};
  </script>

<script>
//   $('.span2').slider().on('slide', function(ev){
//       let data = $('.span2').slider().val();
//       let dataval = data.split(",");
//       console.log('min-val'+dataval[0]);
//       console.log('max-val'+dataval[1]);

// });

  function meetme(){
    let dataval = "50000,80000";
    let dataval2 = "50,500";
    let dataval3 = "5,10";
    let dataval4 = "5,15";
  let data = $('.span2').slider().val();
      data == ''?data = dataval:data;
      dataval = data.split(",");

  let data2 = $('.span3').slider().val();
      data2 == ''?data2 = dataval2:data2;
      dataval2 = data2.split(",");

  let data3 = $('.span4').slider().val();
      data3 == ''?data3 = dataval3:data3;
      dataval3 = data3.split(",");

  let data4 = $('.span5').slider().val();
      data4 == ''?data4 = dataval4:data4;
      dataval4 = data4.split(",");

      var searchdata = {
        "price":{
          'price-min':dataval[0],
          'price-max':dataval[1]
        },
        "geo":{
          'geo-min':dataval2[0],
          'geo-max':dataval2[1]
        },
        "bath":{
          'bath-min':dataval3[0],
          'bath-max':dataval3[1]
        },
        "bed":{
          'bed-min':dataval4[0],
          'bed-max':dataval4[1]
        }
        
      }
      console.log(searchdata)
  }
</script>

@endsection
