@extends('layouts.master')
@section('content')

<li class="nav-item">
          <a class="nav-link" href="{{ route('first') }}">First blog</a>
    </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('second') }}">second blog </a>
        </li>
@endsection