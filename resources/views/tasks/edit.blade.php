<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
</head>
<body>
@extends('layouts.app')

@section('title', 'Edit Task')
@section('content')
<div class="container mx-auto px-4 py-8">
  <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
    <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
      <h2 class="text-xl font-semibold text-gray-800">Edit Task</h2>
    </div>
    
    <form action="{{ route('tasks.update', $task) }}" method="POST" class="p-6">
      @csrf
      @method('PUT')
      
      <div class="mb-4">
        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        @error('title')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>
      
      <div class="mb-4">
        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
        <textarea name="description" id="description" rows="2" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description', $task->description) }}</textarea>
        @error('description')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>
      
      <div class="mb-6">
        <label for="long_description" class="block text-sm font-medium text-gray-700 mb-1">Long Description</label>
        <textarea name="long_description" id="long_description" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('long_description', $task->long_description) }}</textarea>
        @error('long_description')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>
      
      <div class="flex items-center justify-end space-x-4">
        <a href="{{ route('tasks.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-200">Cancel</a>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-200">Update Task</button>
      </div>
    </form>
  </div>
</div>
@endsection
</body>
</html>