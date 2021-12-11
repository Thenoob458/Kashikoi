@extends('layouts.main')

@section('title', 'Sign in')

@section('content')
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px; background-color: #1A987D;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Cadastrar conta</h3>
                            <form>
                                <div class="row">
                                    <div class="mb-4  align-items-center">
                                        <div class="form-outline w-100">
                                            <input
                                                type="text"
                                                class="form-control form-control-lg"
                                            />
                                            <label class="form-label">Email</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-4 pb-2">
                                        <div class="form-outline">
                                            <input class="form-control form-control-lg"/>
                                            <label class="form-label">Nome de usuário</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="mb-4 pb-2">
                                        <div class="form-outline">
                                            <input class="form-control form-control-lg"/>
                                            <label class="form-label">Senha</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-4 pb-2">
                                        <div class="form-outline">
                                            <input class="form-control form-control-lg"/>
                                            <label class="form-label">Repitir senha</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 pt-2">
                                    <input class="btn btn-info btn-md" type="submit" value="Cadastrar" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
