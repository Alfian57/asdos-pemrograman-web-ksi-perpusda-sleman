<x-layout>
    <h1>Ini adalah buku</h1>

    @if ($bukuTersedia)
        @foreach ($bukuList as $buku)
            <h1>{{ $buku }}</h1>
        @endforeach
    @else
        <h1>Buku Tidak Tersedia</h1>
    @endif
</x-layout>

