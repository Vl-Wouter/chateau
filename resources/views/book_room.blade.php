@extends('layout')

@section('title', 'Landon Hotel App')

@section('content')
  <div class="row">
    <div class="medium-12 large-12 columns">
      <h4>Klanten/Boeking</h4>
      <div class="medium-2  columns">Boeking voor:</div>
      <div class="medium-2  columns"><b>Mr. Herr Seele</b></div>
      <form action="" method="post">
        <input type="hidden" name="_token" value="qbuQgVOYJ0tkLX6OPq5gYGJXqPG0Pke7VfuRXF53">
        <div class="medium-1  columns">Van:</div>
        <div class="medium-2  columns"><input name="dateFrom" value="" type="text" class="datepicker" /></div>
        <div class="medium-1  columns">Tot:</div>
        <div class="medium-2  columns"><input name="dateTo" value="" type="text" class="datepicker" /></div>
        <div class="medium-2  columns"><input class="button" type="submit" value="ZOEK" /></div>
      </form>

      <table class="stack">
        <thead>
          <tr>
            <th width="200">Kamer</th>
            <th width="200">Beschikbaarheid</th>
            <th width="200">Actie</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>101</td>
            <td>
              <div class="callout success">
                <h7>Beschikbaar</h7>
              </div>
            </td>
            <td>
            </td>
          </tr>
          <tr>
            <td>102</td>
            <td>
              <div class="callout success">
                <h7>Beschikbaar</h7>
              </div>
            </td>
            <td>
            </td>
          </tr>
          <tr>
            <td>201</td>
            <td>
              <div class="callout success">
                <h7>Beschikbaar</h7>
              </div>
            </td>
            <td>
            </td>
          </tr>
          <tr>
            <td>202</td>
            <td>
              <div class="callout success">
                <h7>Beschikbaar</h7>
              </div>
            </td>
            <td>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection