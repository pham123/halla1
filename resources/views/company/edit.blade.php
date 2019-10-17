@extends('layouts.app')

@section('content')
    <form action="" method="post">
    @csrf
    <input type="hidden" name="" id="companyId" value="{{$company->id}}">
    <p>Name</p>
    <input type="text" name="company_name" id="name" class="formcontrol" value="{{$company->company_name}}">

    <p>Information</p>
    <input type="text" name="company_information" id="info" class="formcontrol" value="{{$company->company_information}}">
    <button type="submit">submit</button>

    </form>
@endsection

@section('js')
    <script>
        $(function () {
            $("input").on("change", function(e) {
            
            var company_name = $('#name').val();
            var company_information = $('#info').val();
            var id = $('#companyId').val();

            $.ajax({
                    type: "POST",
                    url: "/company/edit/"+id,
                    cache: false,
                    data: {
                        "company_name": company_name, 
                        "company_information":company_information,
                        "_token": "{{ csrf_token() }}",
                    }
                    }).done(function( result ) {
                        console.log(result);
                    });

            });
            });
    </script>
@endsection