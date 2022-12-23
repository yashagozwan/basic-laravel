@extends('layouts.main_book')

@section('book-content')
    @php
        $id = (string) $book['id'];
    @endphp
    <div class="container">
        <div>
            <div class="mb-3">{!! DNS2D::getBarcodeHTML($id, 'QRCODE') !!}</div>
            <div class="mb-3">{!! DNS1D::getBarcodeHTML('4445645656', 'PHARMA') !!}</div>
            <div class="mb-3">{!! DNS1D::getBarcodeHTML('4445645656', 'PHARMA2T') !!}</div>
            <div class="mb-3">{!! DNS1D::getBarcodeHTML('4445645656', 'CODABAR') !!}</div>
            <div class="mb-3">{!! DNS1D::getBarcodeHTML('4445645656', 'KIX') !!}</div>
            <div class="mb-3">{!! DNS1D::getBarcodeHTML('4445645656', 'RMS4CC') !!}</div>
            <div class="mb-3">{!! DNS1D::getBarcodeHTML('4445645656', 'UPCA') !!}</div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">

                <h5 class="card-title" onclick="showAlert('{{ $book['title'] }}')">{{ $book['title'] }}</h5>
                <p class="card-text" id="author">{{ $book['author'] }}</p>
            </div>
        </div>
        <a href="/books">Back</a>
    </div>
    <script>
        function showAlert(message) {
            alert(message);
            $('#author').text(message);
        }
    </script>
@endsection
