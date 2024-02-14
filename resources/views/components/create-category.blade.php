@extends('layouts.app')
@section('content')
    <div class="w-1/3 mt-20 bg-gray-50 border-2 border-gray-500 rounded-2xl p-10 shadow-md mx-auto">
        <h1 class="text-3xl font-medium text-gray-700">Create Category</h1>
        <hr class="mt-2">
        <form>
            <label>
                <p class="text-base text-gray-600 font-medium mt-5">Category name</p>
                <input type="text" class="w-full border-2 border-gray-500 rounded-2xl px-4 py-2 mt-1">
            </label>

            <label>
                <p class="text-base text-gray-600 font-medium mt-5">Category type</p>
                <select class="w-full border-2 border-gray-500 rounded-2xl px-4 py-2 mt-1">
                    <option value="category_type" disabled selected>Select category type</option>
                    <option value="Balance">Balance</option>
                    <option value="Expense">Expense</option>
                </select>
            </label>

            <label>
                <p class="text-base text-gray-600 font-medium mt-5">Category status</p>
                <select class="w-full border-2 border-gray-500 rounded-2xl px-4 py-2 mt-1">
                    <option value="Balance">Active</option>
                    <option value="Expense">Disabled</option>
                </select>
            </label>

            <button type="submit" class="bg-blue-700 hover:bg-indigo-900 text-white px-4 py-2 rounded-2xl mt-5">Add Category</button>

        </form>
    </div>
@endsection
