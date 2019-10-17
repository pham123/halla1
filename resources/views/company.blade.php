@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-md-3">
        <form action="/newcompany" method="post">
                @csrf
                <input type="text" class='form-control' name="company_name" id="">
                <input type="text" class='form-control' name="company_information" id="">
                <button type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection

@section('content2')
    <table class='table'>
        <tr>
            <th>name</th>
            <th>Information</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        @foreach ($companies as $item)
            <tr>
                <td>{{ $item->company_name }}</td>
                <td>{{ $item->company_information }}</td>
                <td><a href="/company/edit/{{ $item->id }}">edit</a></td>
                <td></td>
            </tr>
        @endforeach
    </table>
@endsection
