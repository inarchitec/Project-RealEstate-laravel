@extends('layouts.mynav')

@section('submitproperty-contents')

<div class="page-head">
    <div class="container">
      <div class="row">
        <div class="page-head-content">
          <h1 class="page-title">Submit new property</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- End page header -->

  <!-- property area -->
  <div class="content-area submit-property" style="background-color: #fcfcfc">
    &nbsp;
    <div class="container">
      <div class="clearfix">
        <div class="wizard-container">
          <div class="wizard-card ct-wizard-green" id="wizardProperty">
            <form action="" method="">
              <div class="wizard-header">
                <h3>
                  <b>Submit</b> YOUR PROPERTY <br />
                  <small
                    >Lorem ipsum dolor sit amet, consectetur
                    adipisicing.</small
                  >
                </h3>
              </div>

              <ul>
                <li>
                  <a href="step1" data-toggle="tab">Step 1 </a>
                </li>
                <li><a href="step2" data-toggle="tab">Step 2 </a></li>
                <li><a href="step3" data-toggle="tab">Step 3 </a></li>
                <li><a href="step4" data-toggle="tab">Finished </a></li>
              </ul>

              <div class="tab-content">
                <div class="{{-- tab-pane --}}" id="step1">
                  <div class="row p-b-15">
                    <h4 class="info-text">
                      Let's start with the basic information (with validation)
                    </h4>
                    <div class="col-sm-4 col-sm-offset-1">
                      <div class="picture-container">
                        <div class="picture">
                          <img
                            src="assets/img/default-property.jpg"
                            class="picture-src"
                            id="wizardPicturePreview"
                            title="" />
                          <input type="file" id="wizard-picture" />
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Property name <small>(required)</small></label>
                        <input
                          name="propertyname"
                          type="text"
                          class="form-control"
                          placeholder="Super villa ..." />
                      </div>

                      <div class="form-group">
                        <label
                          >Property price <small>(required)</small></label
                        >
                        <input
                          name="propertyprice"
                          type="text"
                          class="form-control"
                          placeholder="3330000" />
                      </div>
                      <div class="form-group">
                        <label
                          >Telephone
                          <small
                            >(empty if you wanna use default phone
                            number)</small
                          ></label
                        >
                        <input
                          name="phone"
                          type="text"
                          class="form-control"
                          placeholder="+1 473 843 7436" />
                      </div>
                    </div>
                  </div>
                </div>
                <!--  End step 1 -->

                <div class="tab-pane" id="step2">
                  <h4 class="info-text">
                    How much your Property is Beautiful ?
                  </h4>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Property Description :</label>
                          <textarea
                            name="discrition"
                            class="form-control"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Property State :</label>
                          <select
                            id="lunchBegins"
                            class="selectpicker"
                            data-live-search="true"
                            data-live-search-style="begins"
                            title="Select your city">
                            <option>Seoul</option>
                            <option>Paris</option>
                            <option>Casablanca</option>
                            <option>Tokyo</option>
                            <option>Marraekch</option>
                            <option>kyoto , shibua</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Property City :</label>
                          <select
                            id="lunchBegins"
                            class="selectpicker"
                            data-live-search="true"
                            data-live-search-style="begins"
                            title="Select your city">
                            <option>New york, CA</option>
                            <option>Paris</option>
                            <option>Casablanca</option>
                            <option>Tokyo</option>
                            <option>Marraekch</option>
                            <option>kyoto , shibua</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Property Statue :</label>
                          <select
                            id="basic"
                            class="selectpicker show-tick form-control">
                            <option>-Status-</option>
                            <option>Rent</option>
                            <option>Boy</option>
                            <option>used</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Property Statue :</label>
                          <select
                            id="basic"
                            class="selectpicker show-tick form-control">
                            <option>-Status-</option>
                            <option>Rent</option>
                            <option>Boy</option>
                            <option>used</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 padding-top-15">
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="property-geo">Min bed :</label>
                          <input
                            type="text"
                            class="span2"
                            value=""
                            data-slider-min="0"
                            data-slider-max="600"
                            data-slider-step="5"
                            data-slider-value="[250,450]"
                            id="min-bed" /><br />
                          <b class="pull-left color">1</b>
                          <b class="pull-right color">120</b>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="price-range">Min baths :</label>
                          <input
                            type="text"
                            class="span2"
                            value=""
                            data-slider-min="0"
                            data-slider-max="600"
                            data-slider-step="5"
                            data-slider-value="[250,450]"
                            id="min-baths" /><br />
                          <b class="pull-left color">1</b>
                          <b class="pull-right color">120</b>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="property-geo"
                            >Property geo (m2) :</label
                          >
                          <input
                            type="text"
                            class="span2"
                            value=""
                            data-slider-min="0"
                            data-slider-max="600"
                            data-slider-step="5"
                            data-slider-value="[50,450]"
                            id="property-geo" /><br />
                          <b class="pull-left color">40m</b>
                          <b class="pull-right color">12000m</b>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 padding-top-15">
                      <div class="col-sm-3">
                        <div class="form-group">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" /> Swimming Pool
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" /> 2 Stories
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" /> Emergency Exit
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" /> Fire Place
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 padding-bottom-15">
                      <div class="col-sm-3">
                        <div class="form-group">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" /> Laundry Room
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" /> Jog Path
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" /> Ceilings
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" /> Dual Sinks
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br />
                  </div>
                </div>
                <!-- End step 2 -->

                <div class="tab-pane" id="step3">
                  <h4 class="info-text">Give us somme images and videos ?</h4>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="property-images">Chose Images :</label>
                        <input
                          class="form-control"
                          type="file"
                          id="property-images" />
                        <p class="help-block">
                          Select multipel images for your property .
                        </p>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="property-video">Property video :</label>
                        <input
                          class="form-control"
                          value=""
                          placeholder="http://www.youtube.com, http://vimeo.com"
                          name="property_video"
                          type="text" />
                      </div>

                      <div class="form-group">
                        <input
                          class="form-control"
                          value=""
                          placeholder="http://www.youtube.com, http://vimeo.com"
                          name="property_video"
                          type="text" />
                      </div>

                      <div class="form-group">
                        <input
                          class="form-control"
                          value=""
                          placeholder="http://www.youtube.com, http://vimeo.com"
                          name="property_video"
                          type="text" />
                      </div>
                    </div>
                  </div>
                </div>
                <!--  End step 3 -->

                <div class="tab-pane" id="step4">
                  <h4 class="info-text">Finished and submit</h4>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="">
                        <p>
                          <label><strong>Terms and Conditions</strong></label>
                          By accessing or using GARO ESTATE services, such as
                          posting your property advertisement with your
                          personal information on our website you agree to the
                          collection, use and disclosure of your personal
                          information in the legal proper manner
                        </p>

                        <div class="checkbox">
                          <label>
                            <input type="checkbox" />
                            <strong>Accept termes and conditions.</strong>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--  End step 4 -->
              </div>

              <div class="wizard-footer">
                <div class="pull-right">
                  <input
                    type="button"
                    class="btn btn-next btn-primary"
                    name="next"
                    value="Next" />
                  <input
                    type="button"
                    class="btn btn-finish btn-primary"
                    name="finish"
                    value="Finish" />
                </div>

                <div class="pull-left">
                  <input
                    type="button"
                    class="btn btn-previous btn-default"
                    name="previous"
                    value="Previous" />
                </div>
                <div class="clearfix"></div>
              </div>
            </form>
          </div>
          <!-- End submit form -->
        </div>
      </div>
    </div>
  </div>

@endsection