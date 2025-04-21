@extends('layouts.app')
@section('title')Admin @endsection

@section('page-title')

<h1 class="text-center">Administration Account Access</h1>

@endsection


@section('content')
<h2 class="text-center"><i class="fa-solid fa-user-tie"></i> </h2>
<h3 class="text-center">Welcome to the Admin Dashboard</h3>
<p>This dashboard provides a centralized view of your system’s key metrics, user activity, 
    and management tools. From here, you can monitor performance, manage content and users,
     review reports, and make data-driven decisions to keep everything running smoothly. 
     Use the sidebar to navigate through different sections and stay in control of your platform.
</p>

<!--CERAMICS SUMMARY-->
<div class="container ">
    <div class="row">
        <div class="col-4 border mx-auto">
            <table class="table caption-top m-0" >
                <caption class="text-center">Ceramics Table Summary</caption>
                <thead  class="table-dark">
                  <tr>
                    <th scope="col" >Type</th>
                    <th scope="col" >Count</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td  >Published</td>
                    <td  class="text-center">{{$valid_ceramics}}</td>
                  </tr>
                  <tr>
                    <td  >Unpublished Artifacts</td>
                    <td  class="text-center">{{$unvalid_ceramics}}</td>
                  </tr>
                  <tr class="table-light">
                    <td  >Total Artifacts</td>
                    <td  class="text-center">{{$allceramics}}</td>
                  </tr>
            
                </tbody>
              </table>
        </div>
    </div>
</div>
<!--END OF CERAMICS SUMMARY-->

@endsection