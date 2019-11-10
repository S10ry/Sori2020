@extends('layouts.app')

@section('content')
<div class="section-container no-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row" style="margin: 100px 100px;">
                    <div class="col-md-6">
                        <form action="" class="reveal-content contact-form">
                            <div class="form-group">
                                <input type="name" class="form-control" id="name" placeholder="Nom">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" placeholder="Votre message..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
                        </form>
                    </div>

                    <div class="col-md-5 col-md-offset-1">
                        <h3>Siège</h3>
                        <div>
                            <p>contact@soridembele.fr<br>06 30 08 68 14</p>
                        </div>
                        <div>
                            <h3>Communiqués</h3>
                        </div>
                        <div>
                            <p>Vous pouvez contacter notre service de presse par e-mail à : contact@soridembele.fr</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection