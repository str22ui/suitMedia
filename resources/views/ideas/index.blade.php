<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 items-center justify-center">
        @foreach ($ideas as $idea)
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="{{ $idea['small_image'] }}" alt="Image" class="w-full h-40 object-cover object-center">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">{{ $idea['title'] }}</h3>
                    <p class="text-gray-600">{{ $idea['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
