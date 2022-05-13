<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenue sur le Portail Entreprise !') }}
        </h2>
    </x-slot>

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 bg-white border-b border-gray-200">--}}
{{--                    You're logged in!--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
        <!--Card 1-->
        <div class="rounded overflow-hidden shadow-lg">
            <div class="font-bold text-xl">Compléter mon formulaire</div>
            <br>
            <img class="w-screen" src="https://contrats.espl-campus.fr/wp-content/uploads/2020/10/entreprise.png" alt="Mountain">


        </div>
        <br>

        <!--Card 2-->
        <div class="rounded overflow-hidden shadow-lg">
            <div class="font-bold text-xl ">Consulter / Modifier mes informations</div>
            <br>
            <img class="w-screen" src="https://contrats.espl-campus.fr/wp-content/uploads/2021/07/index-1024x123.jpg" alt="River">
{{--            <div class="px-6 py-4">--}}


{{--            </div>--}}

        </div>
        <br>

        <!--Card 3-->
        <div class="rounded overflow-hidden shadow-lg">
            <div class="font-bold text-xl">Mes alternants</div>
            <br>
            <img class="w-screen" src="https://contrats.espl-campus.fr/wp-content/uploads/2021/05/Information-alternant-1024x123.jpg" alt="Forest">


        </div>

        <br>

        <!--Card 4-->
        <div class="rounded overflow-hidden shadow-md">
            <div class="font-bold text-xl">Ajouter un alternant</div>
            <br>
            <img class="w-full" src="https://contrats.espl-campus.fr/wp-content/uploads/2021/02/Generique_inscription-1024x123.png" alt="Forest">



            </div>
        <br>

        </div>
    </div>
    </div>

</x-app-layout>
