@extends('backend.master');
@section('content');

<h1>Demand Report</h1>

<form action="{{route('demand.report.search')}}" method="post">
    @csrf
<div class="row">
    <div class="col-md-4">
        <label for="">From date:</label>
        <input name="from_date" type="date" class="form-control">

    </div>
    <div class="col-md-4">
        <label for="">To date:</label>
        <input name="to_date" type="date" class="form-control">
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-success">Report</button>
    </div>
</div>

</form>
<div id="demandReport">

<h1>Demand Reports- {{date('Y-m-d')}}</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Product ID</th>
            <th scope="col">Quantity</th>
            <th scope="col">Product Type</th>
            
            <th scope="col">Demand Date</th>

        </tr>
        </thead>
        <tbody>
        @if(isset($demands))
        @foreach($demands as $key=>$demand)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$demand->product_id}}</td>
            <td>{{$demand->quantity}}</td>
            <td>{{$demand->product_type}}</td>
            
            <td>{{$demand->date}}</td>

        </tr>
        @endforeach
        @endif
        </tbody>
    </table>
</div>
<button onclick="printDiv('demandReport')" class="btn btn-success">Print</button>


<script>
    function printDiv(divId){
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>


@endsection