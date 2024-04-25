<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>FHSIS</title>
</head>

<body>
    <div class="bg-white">
        <header>
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="{{route('dashboard')}}" class="-m-1.5 p-1.5">
                        <span class="sr-only">Ugat Ng Kalusugan</span>
                        <img class="h-8 w-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMNzDsH_gMdqn3VFqyjKe7vK69Ie5YovETvE5Albt3mQ&s" alt="">
                    </a>
                </div>
            </nav>
        </header>
        {{$slot}}
</body>

</html>