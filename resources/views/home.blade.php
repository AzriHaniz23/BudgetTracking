@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <button id="getStartedButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Let's get started
            </button>
        </div>
    </div>

    <script>
        // Add a click event listener to the button
        document.getElementById('getStartedButton').addEventListener('click', () => {
            // Perform any necessary actions when the button is clicked
            // For example, you can redirect to a new page or trigger some function
            // You can modify the code within this event listener according to your requirements
        });
    </script>
@endsection
