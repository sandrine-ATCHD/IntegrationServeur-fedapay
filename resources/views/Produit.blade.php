<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit à acheter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        .product {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            width: 100%;
            text-align: center;
        }

        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product h1 {
            font-size: 2em;
            color: #333;
        }

        .product p.description {
            color: #777;
            margin: 15px 0;
        }

        .product p.price {
            font-size: 1.5em;
            font-weight: bold;
            color: #e74c3c;
            margin: 20px 0;
        }

        .btn-add-to-cart {
            background-color: #2ecc71;
            color: white;
            border: none;
            padding: 15px 25px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-add-to-cart:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>
    <div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error )
           <li>
            {{$error}}
           </li>
        @endforeach
)</ul>
    </div>
    @endif
        <div class="product">
            <img src="https://via.placeholder.com/400" alt="Produit">
            <h1>Nom du Produit</h1>
            <p class="description">Voici une description simple de l'article. Ce produit est parfait pour vous!</p>
            <p class="price">15000 FCFA</p>
            <button id="payment_btn" class="btn-add-to-cart"> <a href="{{ route('payment') }}">Lancer le paiement</a>
            </button>
        </div>
    </div>
</body>
</html>
