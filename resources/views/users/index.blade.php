@extends('layouts.app')
@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    @foreach($users as $user)
                    <tr class="bg-white">
                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                            {{ $user->name }}
                        </td>
                    </tr>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
