@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a contact</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('contacts.store') }}">
          @csrf
          <div class="form-group">
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>


      &lt;div class="form-group"&gt;
          &lt;label for="last_name"&gt;Last Name:&lt;/label&gt;
          &lt;input type="text" class="form-control" name="last_name"/&gt;
      &lt;/div&gt;

      &lt;div class="form-group"&gt;
          &lt;label for="email"&gt;Email:&lt;/label&gt;
          &lt;input type="text" class="form-control" name="email"/&gt;
      &lt;/div&gt;
      &lt;div class="form-group"&gt;
          &lt;label for="city"&gt;City:&lt;/label&gt;
          &lt;input type="text" class="form-control" name="city"/&gt;
      &lt;/div&gt;
      &lt;div class="form-group"&gt;
          &lt;label for="country"&gt;Country:&lt;/label&gt;
          &lt;input type="text" class="form-control" name="country"/&gt;
      &lt;/div&gt;
      &lt;div class="form-group"&gt;
          &lt;label for="job_title"&gt;Job Title:&lt;/label&gt;
          &lt;input type="text" class="form-control" name="job_title"/&gt;
      &lt;/div&gt;
      &lt;button type="submit" class="btn btn-primary-outline"&gt;Add contact&lt;/button&gt;
  &lt;/form&gt;

  </div>
</div>
</div>
@endsection

