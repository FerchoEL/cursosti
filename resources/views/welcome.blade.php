<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/home/people-2557399_1920.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6  lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2" >
                <h1 class="text-white font-bold text-4xl">Domina la tecnología web con Coders Free</h1>
                <p class="text-white text-lg mt-2">En Coders Free encontrarás cursos, manuales y artículos que te ayudarán a convertirte en un profesional del desarrollador web</p>
                <!-- This is an example component -->
                <div class="pt-2 relative mx-auto text-gray-600">
                    <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                    type="search" name="search" placeholder="Search">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded absolute right-0 top-0 mt-2 ">
                        Buscar
                    </button>
                </div>


            </div>
        </div>
    </section>
    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">Contenido</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/japan-1805865_640.jpg')}}" alt="" >
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y proyectos</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe modi veritatis quod itaque rerum aliquid, quas, dolorum sequi, magni inventore quasi. </p>
              
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/fife-6135609_640.jpg')}}" alt="" >
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Manual Laravel</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe modi veritatis quod itaque rerum aliquid, quas, dolorum sequi, magni inventore quasi. </p>
              
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/waterfall-5365926_640.jpg')}}" alt="" >
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Blog</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe modi veritatis quod itaque rerum aliquid, quas, dolorum sequi, magni inventore quasi. </p>
              
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/sea-6328687_640.jpg')}}" alt="" >
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Desarrollo web</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe modi veritatis quod itaque rerum aliquid, quas, dolorum sequi, magni inventore quasi. </p>
              
            </article>
        </div>

    </section>
    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">¿No sabes que curso llevar?</h1>
        <p class="text-center text-white">Dirígete al catálogo de cursos y filtralos por categoría o nivel</p>
        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Catálogo de cursos
            </a>
        </div>
    </section>
    <section class="mt-24">
        <h1 class="text-center text-gray-600 text-3xl">ULTIMOS CURSOS</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Trabajo duro para seguir subiendo cursos</p>
        <div class="max-w-7xl mx-auto px-4 sm:px-6  lg:px-8 grid grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
                <article class="bg-white shadow-lg rounded overflow-hidden">                    
                    <img class="h-36 w-full object-cover " src="{{Storage::url($course->image->url)}}" alt="">
                    <div class="px-6 py-4">
                       <h1 class="text-xl text-gray-700 mb-2 leading-6">{{Str::limit($course->title,40)}}</h1> 
                       
                    </div>
                </article>
            @endforeach
        </div>
    </section>

</x-app-layout>