@extends('layouts.base')

@section('content')

        <div class="container text-center my-5 border-secondary rounded-3" style="height: 500px; width : 800px; background-color :yellow;" >
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-6 text-left p-3">
                            <div class="font-weight-bold">NOM DE LA COMPAGNIE</div>
                            <div><img src="#" alt="logo">LOGO</div>
                        </div>
                        <div class="col-6 text-right p-3">
                            <div class="font-weight-bold my-2 p-1">Prix: 5000<sup>F</sup></div>
                            <img src="{{ asset('storage/bus-image.jpg') }}" height="50px" width="100px" alt="logo">
                        </div>
                    </div>
                </div>
                <div class="text-center my-5 p-3">
                    <div class="text-left ml-5 my-2">
                        <u>TICKET</u> :
                        Numéro DU TICKET
                    </div>
                    <table class="m-auto">
                        <tr>
                            <td class="font-weight-bold">AGENCE : </td>
                            <td><u>Lomé</u></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">¨NUMERO DE TELEPHONE : </td>
                            <td><u>91139398</u></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">NUMERO DU CLIENT : </td>
                            <td><u>90124535</u></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">LIGNE : </td>
                            <td rowspan="3" ><u>LOME-KARA</u></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold"></td>
                            <td colspan="3"><u></u></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-center my-5">
            <a href="{{ route('telecharger_ticket') }}" class="button">Télécharger</a>
        </div>

@endsection
