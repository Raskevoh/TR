@extends('partials.layouts')

@section('content')
@section('title','Siloam College - Application Form')
<link rel="stylesheet" href="{{ asset('assets/main.css') }}">

<div class="container my-5 d-flex justify-content-center">
    <div class="card shadow-lg p-4" style="max-width: 600px; width: 100%;">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <h3 class="mb-4 text-center">Course Application Form</h3>

        <form action="{{ route('academic.application.store') }}" method="POST" enctype="multipart/form-data" autocomplete="on">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Full Names</label>
                <input type="text" id="name" name="name" class="form-control" autocomplete="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" autocomplete="email" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input id="phone" name="phone" type="tel" class="form-control" autocomplete="tel" required>
            </div>

            <div class="mb-3">
                <label for="course" class="form-label">Select Course</label>
                <select id="course" name="course" class="form-select" required autocomplete="off">
                    <option value="">-- Select Course --</option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_scan" class="form-label">Upload ID</label>
                <input type="file" id="id_scan" name="id_scan" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="academic_certificates" class="form-label">Academic Certificates</label>
                <input type="file" id="academic_certificates" name="academic_certificates" class="form-control" required>
            </div>

            <button class="btn btn-success w-100 mt-4" type="submit">Submit Application</button>
        </form>

    </div>
</div>
@endsection
