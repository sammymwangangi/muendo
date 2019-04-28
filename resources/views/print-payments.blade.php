<!DOCTYPE html>
<html>
<head>
    <title>Farmers List</title>
     <style>
    #layout {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        margin-top: 110px;
        caption-side: top;
    }

    #layout td, #layout th {
        border: 1px solid #ddd;
        padding: 8px;
    }


    #layout tr:hover {background-color: #ddd;}

    #layout th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color:#eceff1;
        color: #222222;
    }
 caption{
font-size: 26px;
font-weight: bold;
color:#222222;
padding: .2em .8em;
}
   /* Create 2 unequal columns that floats next to each other */
}
.column {
    float: left;
    padding: 10px;
    height: 5px; /* Should be removed. Only for demonstration */
}

.left {
  width: 35%;
}

.right {
  width: 65%;
}

/* Clear floats after the columns */
.header:after {
    content: "";
    display: table;
    clear: both;
}
    </style>
</head>
<body>
      <div class="header">
    <div class="column left"><img src="{{ public_path('/images/logo.jpg') }}" alt="LOGO"></div>
    <div class="column right"><h1>MKULIMA DIGITAL</h1>
                              <h4>P.O. BOX 96 NAIROBI</h4>
                              <h4><i>The Best Dairy Management System</i></h4>
                          </div>
              </div>
              <h6>&nbsp;</h6>

<table id="layout">
    <caption>FARMER'S LIST</caption>
     <thead>
        <tr class="">
            <th>#</th>
            <th>PAYMENT No.</th>
            <th>TENANT</th>
            <th>NAME</th>
            <th>PAYMENT PLAN</th>
            <th>AMOUNT</th>
            <th>PAID ON</th>
        </tr>
    </thead>
    <tbody>
           @forelse($subscriptions as $i=> $subscription)
        <tr>
         <td>{{ $i+1 }}</td>
         <td>{{ $subscription->no }}</td>
         <td>{{ $subscription->user->name }}</td>
         <td>{{ $subscription->name }}</td>
         <td>{{ $subscription->stripe_plan }}</td>
         <td>{{ $subscription->plan->cost }}</td>
         <td>{{ $subscription->created_at }}</td>
        </tr>
          @empty
         <p>No data found</p>
         @endforelse
    </tbody>
</table>
</body>
</html>

