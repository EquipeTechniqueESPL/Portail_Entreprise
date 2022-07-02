<?php

require __DIR__ . '../../../../vendor/autoload.php';

//$client = new GuzzleHttp\Client();
//
//$header = [
//    "User-Agent"  => "PostmanRuntime/7.29.0",
//    "Accept" => "*/*",
//    "Accept-Encoding" => "gzip, deflate, br",
//    "Connection" =>     "keep-alive",
//
//    "X-Client-Secret" => "gFfaVCWmJ4AiwLqpdtnaiTL8ZhDMJz2S"
//];
//
//$response = $client->request("GET","https://data.siren-api.fr/v3/etablissements/44344472400027", $header);
//
//var_dump($response->getHeader("X-Client-Secret"));

?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Veuillez remplir les informations ci-dessous.') }}
        </h2>
    </x-slot>



    <div class="p-20 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">


        <div class="md:flex md:justify-center mb-6">
        <form class="w-full max-w-lg">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Nom de l'entreprise
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text">
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        SIRET
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="SIRET" type="text" maxlength="14">
                    <script type="text/JavaScript">
                        let SiretValue = document.getElementById('SIRET');
                        function useValue()
                        {
                            let value = SiretValue.value;
                            alert(value);
                        }
                        SiretValue.onchange = useValue;
                        SiretValue.onblur = useValue;

                        let myHeaders = new Headers();
                        myHeaders.append('X-Client-Secret','gFfaVCWmJ4AiwLqpdtnaiTL8ZhDMJz2S');
                        let myInit = {
                            method: 'GET',
                            headers: myHeaders,
                            mode: 'cors',
                            cache: 'default'
                        };

                        let request = new XMLHttpRequest()
                        request.open('GET','https://data.siren-api.fr/v3/etablissements/'+SiretValue,true)
                        request.setRequestHeader('X-Client-Secret','gFfaVCWmJ4AiwLqpdtnaiTL8ZhDMJz2S')
                        request.onload = function ()
                        {
                            let data = JSON.parse(this.response)
                            if (request.status >= 200 && request.status < 400)
                            {
                                document.getElementById('adresse').value = data.numero_voie + '' + data.type_voie + '' + data.libelle_voie;
                            }
                            else {
                                let errorMsg = document.createElement('msg')
                                errorMsg.textContent = "Erreur ... Vérifiez votre numéro de SIRET."
                                SiretValue.appendChild(errorMsg)
                            }
                        }
                        request.send()
                    </script>
                    <p class="text-red-500 text-xs italic">Merci de noter les 14 chiffres de votre numéro de SIRET</p>
                </div>


                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        OPCO
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text">
                </div>


                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        Adresse
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="adresse" type="text">
                </div>


                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                        Code Postal
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" maxlength="5">
                </div>

                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Ville
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text">
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0 ">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                        Dirigeant
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text">
                </div>

                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0 ">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                        Contact entreprise
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text">
                </div>

                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0 ">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                        Contact RH
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text">
                </div>
            </div>




            </div>
            <div class="flex space-x-2 justify-center">
                <button type="submit" class="inline-block px-6 py-3 bg-blue-600 text-black font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Envoyer</button>
            </div>

        </form>
        </div>
    </div>








</x-app-layout>

