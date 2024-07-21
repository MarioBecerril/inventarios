@extends('adminlte::page')

@section('title', 'Inventarios')

@section('content_header')
    <h3>Inventarios</h3>
@stop

@section('content')
    <div class="row">
        <!-- Online Store Visitors -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Online Store Visitors</h3>
                    <div class="card-tools">
                        <span class="badge badge-success">12.5% Since last week</span>
                    </div>
                </div>
                <div class="card-body">
                    <p class="font-weight-bold text-lg">820</p>
                    <p>Visitors Over Time</p>
                    <div class="chart">
                        <!-- Insert your chart here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sales -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sales</h3>
                    <div class="card-tools">
                        <span class="badge badge-success">33.1% Since last month</span>
                    </div>
                </div>
                <div class="card-body">
                    <p class="font-weight-bold text-lg">$18,230.00</p>
                    <p>Sales Over Time</p>
                    <div class="chart">
                        <!-- Insert your chart here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Products -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Products</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Sales</th>
                                <th>More</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Some Product</td>
                                <td>$13 USD</td>
                                <td>12,000 Sold</td>
                                <td><a href="#">Details</a></td>
                            </tr>
                            <tr>
                                <td>Another Product</td>
                                <td>$29 USD</td>
                                <td>123,234 Sold</td>
                                <td><a href="#">Details</a></td>
                            </tr>
                            <tr>
                                <td>Amazing Product</td>
                                <td>$1,230 USD</td>
                                <td>198 Sold</td>
                                <td><a href="#">Details</a></td>
                            </tr>
                            <tr>
                                <td>Perfect Item</td>
                                <td>$199 USD</td>
                                <td>87 Sold</td>
                                <td><a href="#">Details</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Online Store Overview -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Online Store Overview</h3>
                </div>
                <div class="card-body">
                    <p>Conversion Rate: 12%</p>
                    <p>Sales Rate: 0.8%</p>
                    <p>Registration Rate: -1%</p>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop