@extends('layouts.mynav')

@section('properties-contents')
      
  <div class="properties-area recent-property" style="background-color: #fff">
    <div class="container">
      <div class="row">
        <div class="col-md-3 p0 padding-top-40">
          <div class="blog-asside-right pr0">
            <div
              class="panel panel-default sidebar-menu wow fadeInRight animated">
              <div class="panel-heading">
                <h3 class="panel-title">Smart search</h3>
              </div>
              <div class="panel-body search-widget">
                <form  class="form-inline">
                  <fieldset>
                    <div class="row">
                      <div class="col-xs-12">
                        <input
                          type="search"
                          name="search"
                          class="form-control"
                          placeholder="Key word" 
                          value="{{ request('search') }}"
                          />
                      </div>
                    </div>
                  </fieldset>

                  <fieldset>
                    <div class="row">
                      <div class="col-xs-6">
                        <label for="select-city">Select City</label>
                        <select
                          id="lunchBegins"
                          class="selectpicker"
                          data-live-search="true"
                          name="Location_city"
                          data-live-search-style="begins"
                          title="Select City">
                          @foreach ($properties as $item)
                          <option value="{{$item->Location_city}}" {{ $request->Location_city === $item->Location_city ? 'selected' : '' }}>{{$item->Location_city}}</option>
                          @endforeach
                         
                           
                        </select>
                      </div>
                      <div class="col-xs-6">
                        <label for="Status">Select Status</label>
                        <select
                          id="basic"
                          name="Status"
                          class="selectpicker show-tick form-control">
                          @foreach ($properties as $item)
                          <option value="{{$item->Status}}" {{ $request->Status === $item->Status ? 'selected' : '' }}>{{$item->Status}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </fieldset>

                  <fieldset class="padding-5">
                    <div class="row">
                      <div class="col-xs-6">
                        <label for="price-range">Price range (ETB):</label>
                        <input
                            type="text"
                            class="span2"
                            value=""
                            data-slider-min="2000000"
                            data-slider-max="40000000"
                            data-slider-step="100000"
                            data-slider-value="[2000000,10000000]"
                            id="price-range" /><br />
                          <b class="pull-left color">2,000,000</b>
                          <b class="pull-right color">40,000,000</b>
                      </div>
                      <div class="col-xs-6">
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
                    </div>
                  </fieldset>

                  <fieldset class="padding-5">
                    <div class="row">
                      <div class="col-xs-6">
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

                      <div class="col-xs-6">
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
                    </div>
                  </fieldset>

                  <fieldset class="padding-5">
                    <div class="row">
                      <div class="col-xs-6">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" checked /> Fire
                            Place</label
                          >
                        </div>
                      </div>

                      <div class="col-xs-6">
                        <div class="checkbox">
                          <label> <input type="checkbox" /> Dual Sinks</label>
                        </div>
                      </div>
                    </div>
                  </fieldset>

                  <fieldset class="padding-5">
                    <div class="row">
                      <div class="col-xs-6">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" checked /> Swimming
                            Pool</label
                          >
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" checked /> 2 Stories
                          </label>
                        </div>
                      </div>
                    </div>
                  </fieldset>

                  <fieldset class="padding-5">
                    <div class="row">
                      <div class="col-xs-6">
                        <div class="checkbox">
                          <label
                            ><input type="checkbox" /> Laundry Room
                          </label>
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" /> Emergency Exit</label
                          >
                        </div>
                      </div>
                    </div>
                  </fieldset>

                  <fieldset class="padding-5">
                    <div class="row">
                      <div class="col-xs-6">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" checked /> Jog Path
                          </label>
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" /> 26' Ceilings
                          </label>
                        </div>
                      </div>
                    </div>
                  </fieldset>

                  <fieldset class="padding-5">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" /> Hurricane Shutters
                          </label>
                        </div>
                      </div>
                    </div>
                  </fieldset>

                  
                </form>
                <fieldset>
                  <button onClick="meetme()" class="btn btn-default btn-lg-sheach" >Search</button>
                </fieldset>
              </div>
            </div>

            <div
              class="panel panel-default sidebar-menu wow fadeInRight animated">
              <div class="panel-heading">
                <h3 class="panel-title">Recommended</h3>
              </div>
              <div class="panel-body recent-property-widget">
                <ul>
                  <li>
                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                      <a href="single.html"
                        ><img src="{{asset('assets/img/demo/small-property-2.jpg')}}"
                      /></a>
                      <span class="property-seeker">
                        <b class="b-1">A</b>
                        <b class="b-2">S</b>
                      </span>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                      <h6><a href="single.html">Super nice villa </a></h6>
                      <span class="property-price">3000000$</span>
                    </div>
                  </li>
                  <li>
                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                      <a href="single.html"
                        ><img src="{{asset('assets/img/demo/small-property-1.jpg')}}"
                      /></a>
                      <span class="property-seeker">
                        <b class="b-1">A</b>
                        <b class="b-2">S</b>
                      </span>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                      <h6><a href="single.html">Super nice villa </a></h6>
                      <span class="property-price">3000000$</span>
                    </div>
                  </li>
                  <li>
                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                      <a href="single.html"
                        ><img src="{{asset('assets/img/demo/small-property-3.jpg')}}"
                      /></a>
                      <span class="property-seeker">
                        <b class="b-1">A</b>
                        <b class="b-2">S</b>
                      </span>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                      <h6><a href="single.html">Super nice villa </a></h6>
                      <span class="property-price">3000000$</span>
                    </div>
                  </li>

                  <li>
                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                      <a href="single.html"
                        ><img src="{{asset('assets/img/demo/small-property-2.jpg')}}"
                      /></a>
                      <span class="property-seeker">
                        <b class="b-1">A</b>
                        <b class="b-2">S</b>
                      </span>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                      <h6><a href="single.html">Super nice villa </a></h6>
                      <span class="property-price">3000000$</span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-9 pr0 padding-top-40 properties-page">
          <div class="col-md-12 clear">
            <div class="col-xs-10 page-subheader sorting pl0">
            {{--              <select>--}}
              <div class="items-per-page">
                <label for="items_per_page"><b></b>Sort By Price : </label>
                <div class="sel">
                  <select id="items_per_page" name="Price"  style="padding:4px ">
                   {{--  <option value="{{$item->Status}}" {{ $request->Status === $item->Status ? 'selected' : '' }}>{{$item->Status}}</option> --}}

                    <option  value="desc" {{ $request->Price === 'desc' ? 'selected' : '' }} >high to low </option>
                    <option  value="asc" {{ $request->Price === 'asc'   ? 'selected' : '' }} > low to high </option>
                     
                  </select>
                </div>
                <!--/ .sel-->
              </div>
              <div class="items-per-page" style="margin-left: 50px">
                <label for="items_per_page"><b></b>Sort By Date : </label>
                <div class="sel">
                  <select id="items_per_page" name="per_page" style="padding:4px ">
                    <option selected="selected" value="3">newest</option>
                    <option value="6"> oldest </option>
                    
                    
                  </select>
                </div>
                <!--/ .sel-->
              </div>
              <!--/ .items-per-page-->
            </div>

            <div class="col-xs-2 layout-switcher">
              <a class="layout-list" href="javascript:void(0);">
                <i class="fa fa-th-list"></i>
              </a>
              <a class="layout-grid active" href="javascript:void(0);">
                <i class="fa fa-th"></i>
              </a>
            </div>
            <!--/ .layout-switcher-->
          </div>

          <div class="col-md-12 clear">
            <div id="list-type" class="proerty-th">
              <div id="search_results">
                @foreach ($properties as $property)
                <div class="col-sm-6 col-md-4 p0">
                  <div class="box-two proerty-item">
                    <div class="item-thumb">
                      <a href="/properties/{{$property->id}}"
                        ><img src="{{$property->Images}}"
                      /></a>
                    </div>
                    {{-- "route("properties.show",$property->id)" --}}
                    <div class="item-entry overflow">
                      <h5><a href="/properties/{{$property->id}}"> {{$property->Title}} </a></h5>
                      <div class="dot-hr"></div>
                      <span class="pull-left"><b> Area :</b> {{$property->Area}} Msq </span>
                      <span class="proerty-price pull-right"> {{$property->Price}} ETB</span>
                      <p style="display: none">
                        Suspendisse ultricies Suspendisse ultricies Nulla quis
                        dapibus nisl. Suspendisse ultricies commodo arcu nec
                        pretium ...
                      </p>
                      <div class="property-icon">
                        <img src="{{asset('assets/img/icon/bed.png')}}" /> ({{$property->Bedroom}})
                        <img src="{{asset('assets/img/icon/shawer.png')}}" /> ({{$property->Bathroom}})
                        <img src="{{asset('assets/img/icon/cars.png')}}" /> ({{$property->Parking}})
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
 
            </div>
          </div>

          <div class="col-md-12">
            <div class="pull-right">
              <div class="pagination">
                <ul>
                  <li><a href="#">Prev</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">Next</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
<script>
  function meetme(){
    let dataval = "50000,800000";
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


    $.ajax(
      {
        url: "{{route('prop.search')}}",
        // dataType: 'json', // type of response data
        // timeout: 500, 
        data: searchdata,
        success: function(result){
          // console.log(result);
          $("#search_results").html(result);
        },
        error: function (jqXhr, textStatus, errorMessage) { // error callback 
          // $('p').append('Error: ' + errorMessage);
          alert("fail");
        }
      });
  }


</script>
@endsection