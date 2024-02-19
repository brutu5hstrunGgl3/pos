@extends('layouts.app')

@section('title', 'Product')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New Product</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('product.index') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Product</a></div>
                    <div class="breadcrumb-item">New Product</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('product.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>New Product</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text"
                                    class="form-control @error('name')
                                    is-invalid
                                @enderror"
                                    name="name">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Stock</label>
                                <input type="number"
                                    class="form-control @error('stock')
                                    is-invalid
                                @enderror"
                                    name="stock">
                                @error('stock')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <label class="form-label">Category</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="Category" value="food" class="selectgroup-input"
                                            checked="">
                                        <span class="selectgroup-button">food</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="Category" value="drink" class="selectgroup-input">
                                        <span class="selectgroup-button">Drink</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="Category" value="snack" class="selectgroup-input">
                                        <span class="selectgroup-button">Snack</span>
                                    </label>

                                </div>
                            </div>
                           
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
