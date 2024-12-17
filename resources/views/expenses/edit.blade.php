@extends('layouts.app')

@section('content')
    <div class="block block-rounded m-4">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Edit Expense
            </h3>
        </div>
        <div class="block-content block-content-full">
            <form action="{{ route('expenses.update', $expense->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control"
                        value="{{ old('name', $expense->name) }}" required>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control" required>
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category }}"
                                {{ old('category', $expense->category) == $category ? 'selected' : '' }}>{{ $category }}
                            </option>
                        @endforeach
                    </select>
                    @error('category')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="amount">Amount</label>
                    <input type="number" name="amount" id="amount" class="form-control" step="0.01"
                        value="{{ old('amount', $expense->amount) }}" required>
                    @error('amount')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" class="form-control"
                        value="{{ old('date', $expense->date->format('Y-m-d')) }}" required>
                    @error('date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary btn-sm">Update Expense</button>
                    <a href="{{ route('expenses.index') }}" class="btn btn-secondary btn-sm">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
