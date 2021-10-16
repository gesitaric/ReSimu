@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">不動産投資シミュレータ</div>

                    <div class="card-body">
                        <form action="{{ route('simulation.create') }}" method="GET">
                            @csrf
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary text-white" type="submit">シミュレーション開始</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
