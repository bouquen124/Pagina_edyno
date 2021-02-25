@extends('ux.root')


@section('content')


     <!-- FEATURES SECTION START
                ============================================= -->
                <div class="our-features grey-background">
                    <div class="container">

                        <div class="heading-block wow fadeIn">
                            <br>
                            <h2>{{ $cliente->nombre }}</h2>
                            
                            <a href="  {{ route('cliente.edit',['id'=>$cliente->id, 'idd'=>$cliente->id, 'type'=>'Cliente', 'back'=>Request::path() ]) }} " >
                                <h4 class="tagline">
                                    Editar

                                </h4>
                            </a>
                            
                        </div>

                        <div class="row">
                            
                            
                            <div class="features">

                                <div class="feature-item custom-food col-md-4 wow fadeInUp">
                                        
                                    @if ($cliente->FotoCliente)
                                        <img src="{{ $cliente->FotoCliente->url }}"  style="width:240px;height:240px;border-radius:130px;border:7px solid #B2E6EC;">
                                    @else
                                        <img src="{{asset('img/user-icon.png')}}" style="width:240px;height:240px;border-radius:130px;border:7px solid #B2E6EC;">
                                    @endif

                                </div>

                                <div class="feature-desc">
                        
                                        <h4>{{ $cliente->direcion }} </h4>    
                                        <h4>{{ $cliente->correo }} </h4>    
                                        <h4>{{ $cliente->telefono }} </h4>
                                        
                                        <div style="float: left; width: 100%;"> 
                                            <p>{{ $cliente->descripcion }} </p>
                                            
                                            {!! Form::open(['route' => ['cliente.destroy', $cliente->id], 'method' => 'delete']) !!}
                                            {!! Form::button('Eliminar', ['type' => 'submit', 'onclick' => "return confirm('Seguro que quiere borrar este Cliente?')"]) !!}
                                            {!! Form::close() !!}  
                                        </div>            
                                        
                                </div>
                                

                            </div>
                              
                            

                        </div>
                    </div>
                </div>
                <!-- FEATURES SECTION END -->
    
@endsection