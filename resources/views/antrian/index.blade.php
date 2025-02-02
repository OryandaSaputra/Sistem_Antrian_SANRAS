@extends('layouts.main')
<link href="../assets/img/logo.png" rel="icon">
<link href="../assets/img/logo.png" rel="apple-touch-icon">
@include('partials.navbar')

@section('content')
    <div style="height: 800px">
        <livewire:antrian.show-antrian>
    </div>
@endsection

@section('script')
    <script>
        window.addEventListener('closeModal', event => {
            $('#createAntrian').modal('hide')
            $('#editAntrian').modal('hide')
            $('#deleteAntrian').modal('hide')
        })
    
    </script>
@endsection

@include('partials.footer')