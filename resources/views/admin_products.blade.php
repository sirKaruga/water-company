@extends('page_layout')

@section('content_place')
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title">Recent Purchases</p>
          <div class="table-responsive">
            <table id="recent-purchases-listing" class="table">
              <thead>
                <tr>
                    <th>Name</th>
                    <th>Status report</th>
                    <th>Office</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>Gross amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>Jeremy Ortega</td>
                    <td>Levelled up</td>
                    <td>Catalinaborough</td>
                    <td>$790</td>
                    <td>06 Jan 2018</td>
                    <td>$2274253</td>
                </tr>
                <tr>
                    <td>Alvin Fisher</td>
                    <td>Ui design completed</td>
                    <td>East Mayra</td>
                    <td>$23230</td>
                    <td>18 Jul 2018</td>
                    <td>$83127</td>
                </tr>


              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
