@extends('admin.main.layout')

@section('content')
<style>
    .action-icons {
        display: block;
        gap: 10px; /* Adjust the gap between the icons as needed */
    }
</style>
<div class="app-card app-card-stats-table h-100 shadow-sm">
    <div class="app-card-header p-3">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <h4 class="app-card-title">{{ $offer ? 'Edit Offer' : 'Create Offer' }}</h4>
                @if (Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
            </div>
        </div>
    </div>

    <div class="app-card-body p-3 p-lg-4">
        <div class="table-responsive">
            <form action="{{ $offer ? route('offer.update', $offer->id) : route('offer.store') }}" method="POST">
                @csrf
                @if($offer)
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="discount">Discount Text</label>
                    <input type="text" class="form-control" id="discount" name="discount" value="{{ old('discount', $offer->discount ?? '') }}" required>
                </div>
                <div class="form-group">
                    <label for="text">Discount Description</label>
                    <input type="text" class="form-control" id="text" name="text" value="{{ old('text', $offer->text ?? '') }}" required>
                </div>
                <div class="form-group">
                    <label for="number">Mobile Number </label>
                    <input type="number" class="form-control" id="number" name="number" value="{{ old('number', $offer->number ?? '') }}" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Save</button>
            </form>
        </div><!--//table-responsive-->
    </div><!--//app-card-body-->
</div>
@endsection
