@extends('layouts.app')

@section('content')
    <div class="panel-body">
        @if($company)
            <h2>{{ $company->name }}</h2>
            <p>{{ $company->description }}</p>

            <h3>Branches</h3>
            @if($branches->count() > 0)
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($branches as $branch)
                        <tr>
                            <td>
                                <img src="{{ asset($branch->image) }}" alt="{{ $branch->name }}" style="width:100px; height:auto;">
                            </td>
                            <td>
                                <strong>{{ $branch->name }}</strong><br>
                                Address: {{ $branch->address }}<br>
                                Phone: {{ $branch->phone }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p>No branches available for this company.</p>
            @endif
        @else
            <p>No company available.</p>
        @endif
    </div>
@endsection
