<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nuevo pedido</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<p>Se ha realizado un nuevo pedido!</p>
	<p>Estos son los datos del cliente que realizó el pedido:</p>
	<ul>
		<li>
			<strong>Nombre:</strong>
			{{ $user->name }}
		</li>
		<li>
			<strong>Correo Electrónico:</strong>
			{{ $user->email }}
		</li>
		<li>
			<strong>Fecha del pedido:</strong>
			{{ $cart->order_date }}
		</li>
	</ul>
	<hr>
	<hr>
	<h3>Detalle del pedido</h3>
	<hr>
	<ul>
		@foreach ($cart->details as $detail)
		<li>
			{{ $detail->product->name }} x{{ $detail->quantity }}
			($ {{ $detail->quantity * $detail->product->price}})
		</li>
		@endforeach
	</ul>
	<p>
		<strong>Importe a pagar: </strong> {{ $cart->total }}
	</p>
	<p>
		<a href="{{ url('/admin/order/'.$cart->id) }}">Haz click aquí</a>
		para ver más información sobre este pedido
	</p>
</body>
</html>