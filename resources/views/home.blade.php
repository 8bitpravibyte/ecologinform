@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-header">Профил</div>
                <div class="card-body">
                    <div class="row pb-5">
                        <div class="col-6">
                            <div class="row mb-3">
                                <div class="col-4">
                                    <img src="/images/logo.png" class="img-fluid" alt="">
                                </div>
                                <div class="col-8 my-auto">
                                    <h3>{{Auth::user()->name}}</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    Ниво: 1
                                </div>
                                <div class="col-6 text-right">
                                    125/500
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body card-into-card">
                                    Отбелязани обекти
                                    <h3>0</h3>
                                </div>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body card-into-card">
                                    Отбелязани обекти
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <div class="row activity">
                        <div class="col-12">
                            <a href="#" class="active">Активност</a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="#">Трофей</a>
                        </div>
                    </div>
                    Няма намерена активност
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
