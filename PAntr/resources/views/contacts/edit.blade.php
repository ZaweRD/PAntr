@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a contact</h1>

    @if ($errors-&gt;any())
    &lt;div class="alert alert-danger"&gt;
        &lt;ul&gt;
            @foreach ($errors-&gt;all() as $error)
            &lt;li&gt;{{ $error }}&lt;/li&gt;
            @endforeach
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;br /&gt;
    @endif
    &lt;form method="post" action="{{ route('contacts.update', $contact-&gt;id) }}"&gt;
        @method('PATCH')
        @csrf
        &lt;div class="form-group"&gt;

            &lt;label for="first_name"&gt;First Name:&lt;/label&gt;
            &lt;input type="text" class="form-control" name="first_name" value={{ $contact-&gt;first_name }} /&gt;
        &lt;/div&gt;

        &lt;div class="form-group"&gt;
            &lt;label for="last_name"&gt;Last Name:&lt;/label&gt;
            &lt;input type="text" class="form-control" name="last_name" value={{ $contact-&gt;last_name }} /&gt;
        &lt;/div&gt;

        &lt;div class="form-group"&gt;
            &lt;label for="email"&gt;Email:&lt;/label&gt;
            &lt;input type="text" class="form-control" name="email" value={{ $contact-&gt;email }} /&gt;
        &lt;/div&gt;
        &lt;div class="form-group"&gt;
            &lt;label for="city"&gt;City:&lt;/label&gt;
            &lt;input type="text" class="form-control" name="city" value={{ $contact-&gt;city }} /&gt;
        &lt;/div&gt;
        &lt;div class="form-group"&gt;
            &lt;label for="country"&gt;Country:&lt;/label&gt;
            &lt;input type="text" class="form-control" name="country" value={{ $contact-&gt;country }} /&gt;
        &lt;/div&gt;
        &lt;div class="form-group"&gt;
            &lt;label for="job_title"&gt;Job Title:&lt;/label&gt;
            &lt;input type="text" class="form-control" name="job_title" value={{ $contact-&gt;job_title }} /&gt;
        &lt;/div&gt;
        &lt;button type="submit" class="btn btn-primary"&gt;Update&lt;/button&gt;
    &lt;/form&gt;
&lt;/div&gt;
