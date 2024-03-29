{{-- First sweet alert popup for request validation --}}

@if (!empty($errors->all()))
    @php
        $errorMessages = '';
        foreach ($errors->all() as $error) {
            $errorMessages .= $error . '<br>';
        }
    @endphp
    <script>
        Swal.fire({
            title: '{{ session('success') ? 'Success' : 'Error' }}!',
            icon: '{{ session('success') ? 'success' : 'error' }}',
            confirmButtonText: 'Ok',
            html: "{!! $errorMessages !!}",
        });
    </script>
@endif

{{-- Sweet alert popup for controller logic --}}
@if (session()->has('message'))
    <script>
        Swal.fire({
            title: '{{ session('success') ? 'Success' : 'Error' }}!',
            icon: '{{ session('success') ? 'success' : 'error' }}',
            confirmButtonText: 'Ok',
            html: '{{ session('message') }}'
        })
    </script>
@endif
