@extends('layouts/mynav')

@section('content')
<div class="container">

    <form action="{{route('category.store')}}" method="POST">
        @csrf
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="validationDefault01">First name</label>
            <input type="text" name="fname" class="form-control" id="validationDefault01" placeholder="First name" value="Mark" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationDefault02">Last name</label>
            <input type="text"  name="lname" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationDefaultUsername">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend2">@</span>
              </div>
              <input type="text" name="username" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationDefaultUsername">Photo</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend2">@</span>
              </div>
              <input type="file" name="picture" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
            </div>
          </div>

        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationDefault03">City</label>
            <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationDefault04">State</label>
            <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationDefault05">Zip</label>
            <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
              Agree to terms and conditions
            </label>
          </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
      </form>

</div>
@endsection