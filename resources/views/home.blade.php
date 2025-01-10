@extends('layouts.app')

@section('content')
    <div class="panel-body">
        @if($company)
            <h2>{{ $company->name }}</h2>
            <p>{{ $company->description }}</p>
            <h3>Branches</h3>
            @if($branches->count() > 0)
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($branches as $branch)
                            <tr onclick="showMap('{{ urlencode($branch->address) }}')" style="cursor: pointer;">
                                <td>
                                    <img src="{{ asset($branch->image) }}" alt="Branch Photo" style="height: 100px;">
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
                </div>
                @include('common.modal')
            @else
                <p>No branches available for this company.</p>
            @endif
        @else
            <p>No company available.</p>
        @endif
    </div>
@endsection