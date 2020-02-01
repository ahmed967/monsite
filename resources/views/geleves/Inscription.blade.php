
@extends('layouts.layout1')
<link rel="stylesheet" href="{{asset('css/form.css')}}">
@section('content')


    <form action="/Inscription" method="POST">
        @csrf

    <table class="content-table">

        <thead>

            <tr>
                <th></th>
                <th></th>
            </tr>

        </thead>

        <tbody>
            
            
            <tr class="active-row">
                <td>
                    <label for="nom">Nom :</label>
                </td>
                
                <td>
                    <input type="text" id="nom" name="nom">
                </td>
            </tr>
            
            <tr class="active-row">
                <td>
                    <label for="prenom">Prénom :</label>
                </td>
                
                <td>
                    <input type="text" id="prenom" name="prenom">
                </td>
            </tr>

            <tr class="active-row">
                <td>
                    <label for="age">Age :</label>
                </td>
                
                <td>
                    <input type="number" id="age" name="age">
                </td>
            </tr>
            
            
            <tr class="active-row">
                <td>
                    <label for="date_naiss">Date de naissance :</label>
                </td>
                
                <td>
                    <input type="text" id="date_naiss" name="date_naiss">
                </td>
            </tr>

            <tr class="active-row">
                <td>
                    <label for="adresse">Adresse :</label>
                </td>
                
                <td>
                    <input type="text" id="adresse" name="adresse">
                </td>
            </tr>

            <tr class="active-row">
                <td>
                    <label for="mail">eMail :</label>
                </td>
                
                <td>
                    <input type="email" id="mail" name="mail">
                </td>
            </tr>
            
            <tr class="active-row">
                <td>
                    <label for="niv">Niveau :</label>
                </td>
                
                <td>
                    <input type="text" id="niv" name="niv">
                </td>
            </tr>
        
        </tbody>
    
    </table>   
 

    <div class="btn">
        <button type="submit">Valider</button>
    </div>

    <div class="btn">
        <button type="reset">Annuler</button>
    </div>
    

    </form>

@endsection