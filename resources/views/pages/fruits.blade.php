
@extends('home')



@section('content')
<div class="flex justify-center py-10">
    Il y a {{$lgPanier}} fruits dans le panier.
    Contenu du panier:
    <?php foreach($panier as $value){
       echo "$value ";
   }?>
</div>
@endsection


