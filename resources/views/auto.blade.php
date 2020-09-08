@extends('layouts.app')

@section('content')
<h2>Autocomplete</h2>

<p>Start typing:</p>

<!-- Make sure the form has the autocomplete function switched off: -->
<form autocomplete="off" action="/action_page.php">
  <div class="autocomplete" style="width:500px;">
    <input id="myInput" type="text" name="myCountry" class ="form-control">
  </div>
  <input type="submit" class="btn btn-primary">
</form>

</div>
</div>

@endsection
