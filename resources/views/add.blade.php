@extends('layouts.main')

@section('title', 'Add')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light" style="border-radius: 15px;">
                    <div class="card-body bg-light">
                        <div class="container">
                            <form id="contact-form" role="form" style="align-items: center" >
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_name">Nome da Obra</label> <input id="form_name" type="text" name="name" class="form-control" required="required"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_lastname">Autor</label> <input id="form_lastname" type="text" name="surname" class="form-control" required="required"> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_need">Situação</label> <select id="form_need" name="need" class="form-control" required="required">
                                                </select> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_need">Gênero</label> <select id="form_need" name="need" class="form-control" required="required">
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group"> <label for="form_message">Descrição</label> <textarea id="form_message" name="message" class="form-control" rows="4" required="required"></textarea> </div>
                                        </div>
                                        <div class="col-md-12"> <input type="submit" class="btn btn-success pt-2" style="margin-top: 20px" value="Cadastrar"> </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- /.8 -->
            </div> <!-- /.row-->
        </div>
    </div>

@endsection
