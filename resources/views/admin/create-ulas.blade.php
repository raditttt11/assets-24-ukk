@dump($buku, $ulas, $user)

@foreach ($buku as $item)

<img src="{{ asset('/storage/storage/image/'. $item->gambar) }}" alt="{{ $item->judul }}">
@endforeach
