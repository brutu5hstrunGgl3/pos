@extends('layouts.app')

@section('title', 'New User')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Users</a></div>
                    <div class="breadcrumb-item">New User</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('product.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>New User</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text"
                                    class="form-control @error('name')
                                    is-invalid
                                @enderror"
                                    name="name" value="{{ $product->name }}">
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
                                    name="stock" value="{{ $product->stock }}">
                                @error('stock')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            <div class="form-group">
                                <label class="form-label">Category</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="category" value="food" class="selectgroup-input"
                                          @if ($product->category == 'food') checked @endif>
                                        <span class="selectgroup-button">Food</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="category" value="drink" class="selectgroup-input"
                                        @if ($product->category == 'drink') checked @endif>
                                        <span class="selectgroup-button">Drink</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="category" value="snack" class="selectgroup-input"
                                        @if ($product->category == 'snack') checked @endif>
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
